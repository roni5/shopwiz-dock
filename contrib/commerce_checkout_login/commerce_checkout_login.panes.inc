<?php

/**
 * @file Contains all callbacks for Commerce checkout login's checkout panes.
 */

/**
 * Account pane form callback.
 */
function commerce_checkout_login_account_form($form, &$form_state, $checkout_pane, $order) {
  if ($form_state['account']->uid > 0) {
    // The user is logged in, display account information.
    module_load_include('inc', 'commerce_order', 'includes/commerce_order.checkout_pane');
    $form['account_info']['#markup'] = commerce_order_account_pane_review($form, $form_state, $checkout_pane, $order);
  }
  else {

    $replacements = array(
      '%login' => t('Login & checkout'),
      '%register' => t('Register & checkout'),
      '%guest' => t('Checkout as guest')
    );
    $form['help']['#type'] = 'item';

    if (variable_get('user_register', 0) && variable_get('commerce_checkout_login_allow_anonymous_checkout', TRUE)) {
      // All forms of checkout are allowed.
      $form['help']['#markup'] = t('If you have an existing account you can login by entering your login information in the form on the left and clicking the %login button. You can also create a new account by filling the form on the right and clicking the %register button or you can choose to skip account creation and checkout as a guest by clicking the %guest button at the bottom of the form.', $replacements);
    }
    elseif (variable_get('user_register', 0)) {
      // Only login and register are allowed, guest checkout is disallowed.
      $form['help']['#markup'] = t('If you have an existing account you can login by entering your login information in the form on the left and clicking the %login button or you can create a new account by filling the form on the right and clicking the %register button.', $replacements);
    }
    elseif (variable_get('commerce_checkout_login_allow_anonymous_checkout', TRUE)) {
      // Only guest checkout and login are allowed, registration is disallowed.
      $form['help']['#markup'] = t('If you have an existing account you can login by entering your login information in the form on the left and clicking the %login button or you can checkout as a guest by clicking the %guest button at the bottom of the form.', $replacements);
    }
    else {
      // Only login is allowed, users are not allowed to perform guest checkout
      // or create a new account themselves.
      $form['help']['#markup'] = t('Please login to start the checkout process.', $replacements);
    }

    $form['select']['#type'] = 'container';

    $form['select']['login'] = array(
      '#type' => 'fieldset',
      '#title' => t('Login'),
    );

    $form['select']['login']['mail'] = array(
      '#type' => 'textfield',
      '#title' => t('E-mail address'),
      '#size' => 25,
      '#required' => TRUE,
    );

    $form['select']['login']['password'] = array(
      '#type' => 'password',
      '#title' => t('Password'),
      '#size' => 25,
      '#required' => TRUE,
    );

    $form['select']['login']['request_password'] = array(
      '#type' => 'item',
      '#markup' => l(t('Request new password'), '/user/password', array('query' => array('destination' => drupal_get_path_alias()))),
    );

    $form['select']['login']['continue'] = array(
      '#type' => 'submit',
      '#name' => 'login',
      '#value' => t('Login & checkout'),
      '#validate' => array('commerce_checkout_form_validate'),
      '#limit_validation_errors' => array(
        array(
          'account_form',
          'select',
          'login'
        )
      ),
      '#submit' => array('commerce_checkout_form_submit'),
    );

    // Only allow the user to register an account if they are allowed to do so.
    if (variable_get('user_register', 0)) {
      drupal_add_css(drupal_get_path('module', 'commerce_checkout_login') . '/css/commerce_checkout_login.admin.css');
      $form['select']['register'] = array(
        '#type' => 'fieldset',
        '#title' => t('Register account'),
      );

      $form['select']['register']['username'] = array(
        '#type' => 'textfield',
        '#title' => t('Username'),
        '#size' => 25,
        '#required' => TRUE,
        '#default_value' => isset($order->data['commerce_checkout_login_register']['username']) ? $order->data['commerce_checkout_login_register']['username'] : '',
        '#maxlength' => USERNAME_MAX_LENGTH,
        '#description' => t('Spaces are allowed; punctuation is not allowed except for periods, hyphens, apostrophes, and underscores.'),
      );

      $form['select']['register']['mail'] = array(
        '#type' => 'textfield',
        '#title' => t('E-mail address'),
        '#default_value' => isset($order->data['commerce_checkout_login_register']['mail']) ? $order->data['commerce_checkout_login_register']['mail'] : '',
        '#size' => 25,
        '#description' => t('A valid e-mail address. All e-mails from the system will be sent to this address. The e-mail address is not made public and will only be used if you wish to receive a new password or wish to receive certain news or notifications by e-mail.'),
        '#required' => TRUE,
      );

      if (variable_get('commerce_order_account_pane_mail_double_entry', FALSE)) {
        $form['select']['register']['mail_confirm'] = array(
          '#type' => 'textfield',
          '#title' => t('Confirm e-mail address'),
          '#default_value' => isset($order->data['commerce_checkout_login_register']['mail']) ? $order->data['commerce_checkout_login_register']['mail'] : '',
          '#size' => 25,
          '#description' => t('Provide your e-mail address in both fields.'),
          '#required' => TRUE,
        );
      }

      $form['select']['register']['continue'] = array(
        '#type' => 'submit',
        '#name' => 'register',
        '#value' => t('Register & checkout'),
        '#validate' => array('commerce_checkout_form_validate'),
        '#limit_validation_errors' => array(
          array(
            'account_form',
            'select',
            'register'
          )
        ),
        '#submit' => array('commerce_checkout_form_submit'),
      );
    }

  }

  return $form;
}

/**
 * Account pane validation handler.
 */
function  commerce_checkout_login_account_form_validate($form, &$form_state, $checkout_pane, $order) {
  switch ($form_state['triggering_element']['#name']) {
    case 'login':
      // The login form was submitted.
      $mail = trim($form_state['values']['account_form']['select']['login']['mail']);
      if ($error = user_validate_mail($mail)) {
        // An invalid e-mail address was entered.
        form_set_error('account_form][select][login][mail', $error);
      }
      elseif ($account = user_load_by_mail($mail)) {
        // A user can be loaded using the supplied email address. validate it.
        return ccl_validate_existing_account($form, $form_state, $account);
      }
      elseif (!empty($form_state['values']['account_form']['select']['login']['password'])) {
        // Only check non-existing e-mail addresses if a password was entered to
        // prevent information disclosure.
        form_set_error('account_form][select][login][mail', t('Sorry, unrecognized e-mail address or password. <a href="@password">Have you forgotten your password?</a>', array('@password' => url('user/password', array('query' => array('name' => $mail))))));
      }
      break;

    case 'register':
      // The register form was submitted, but we won't even consider validating
      // the form it if no e-mail address was set.
      if (isset($form_state['values']['account_form']['select']['register']['mail'])) {
        $mail = trim($form_state['values']['account_form']['select']['register']['mail']);
        if ($error = user_validate_mail($mail)) {
          form_set_error('account_form][select][register][mail', $error);
        }
        elseif (isset($form_state['values']['account_form']['select']['register']['mail_confirm'])
        && $form_state['values']['account_form']['select']['register']['mail_confirm'] !== $mail) {
          form_set_error('account_form][select][register][mail', t('The specified e-mail addresses do not match.'));
        }
        elseif (!empty($form_state['values']['account_form']['select']['register']['username'])
          && $account = user_load_by_mail($mail)) {
          // Only validate the e-mail address if a username was supplied to
          // prevent information disclosure.
          form_set_error('account_form][select][register][mail', t('The e-mail address %email is already registered. <a href="@password">Have you forgotten your password?</a>', array('%email' => $mail, '@password' => url('user/password'))));
        }
        elseif ($account = user_load_by_name($form_state['values']['account_form']['select']['register']['username'])) {
          form_set_error('account_form][select][register][username', t('The name %name is already taken.', array('%name' => $form_state['values']['account_form']['select']['register']['username'])));
        }
        else{
          return TRUE;
        }
      }
      break;

    case 'guest':
      // Guest checkout does not need any validation.
      return TRUE;
  }

  return FALSE;
}

/**
 * Account pane submit handler.
 */
function commerce_checkout_login_account_form_submit($form, &$form_state, $checkout_pane, $order) {
  // commerce_checkout_login_uid gets set during ccl_validate_existing_account() if
  // the account was validated successfully.
  if (!empty($form_state['commerce_checkout_login_uid'])) {
    ccl_login_convert_order($form_state['commerce_checkout_login_uid'], $order);
    unset($form_state['commerce_checkout_login_uid']);
  }
  elseif (!empty($form_state['values']['account_form']['select']['register']['username'])
    && !empty($form_state['values']['account_form']['select']['register']['mail'])
  ) {
    $order->data['commerce_checkout_login_register'] = $form_state['values']['account_form']['select']['register'];
  }
}

/**
 * Account pane settings form callback.
 */
function commerce_checkout_login_account_settings_form($checkout_pane) {
  $form = array();

  $form['commerce_checkout_login_allow_anonymous_checkout'] = array(
    '#type' => 'checkbox',
    '#title' => t('Allow anonymous checkout'),
    '#description' => t('Checking this box allows anonymous users to checkout without creating a new account. Be sure to also disable the account creation rule defined by commerce.'),
    '#default_value' => variable_get('commerce_checkout_login_allow_anonymous_checkout', TRUE),
  );

  $form['commerce_order_account_pane_mail_double_entry'] = array(
    '#type' => 'checkbox',
    '#title' => t('Require double entry of email address.'),
    '#description' => t('Forces anonymous users to enter their email address in two consecutive fields, which must have identical values.') . '<br>' . t('This field uses the same setting as the account pane provided by Commerce Order'),
    '#default_value' => variable_get('commerce_order_account_pane_mail_double_entry', FALSE),
  );

  return $form;
}
