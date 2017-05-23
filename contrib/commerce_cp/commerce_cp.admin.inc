<?php

/**
 * @file
 * Administrative callbacks for the Checkout module.
 */

/**
 * Build the configuration form for a cart pane.
 */
function commerce_cp_settings_form($form, &$form_state, $cart_pane) {
  $form = array();

  $panes = module_invoke_all('commerce_cp_info');

  // check if form settings callback is exists for current cart pane
  if (isset($panes[$cart_pane]) && 
      isset($panes[$cart_pane]['settings form']) &&
      function_exists($panes[$cart_pane]['settings form'])) {
    $form += $panes[$cart_pane]['settings form']();
  }

  return system_settings_form($form);
}

/**
 * Build the cart form builder, adding in data for the cart pages and
 *   the appropriate fields to enable tabledrag on the cart panes.
 */
function commerce_cp_builder_form($form, &$form_state) {
  // Load an array of all available cart pages.  
  $cart_pages['cart'] = array('page_id' => 'cart', 'title' => t('Cart'));
  // Add a "disabled" pseudo-page.
  $cart_pages['disabled'] = array('page_id' => 'disabled', 'title' => t('Disabled'));

  $form['cart_pages'] = array(
    '#type' => 'value',
    '#value' => $cart_pages,
  );

  $cart_pages_options = array();
  // Create arrays for cart panes in each of the pages.
  foreach (array_keys($cart_pages) as $page_id) {
    $form['page'][$page_id]['panes'] = array('#tree' => TRUE);
    // Build the options list for selecting the pane's cart page.
    $cart_pages_options[$page_id] = $cart_pages[$page_id]['title'];
  }

  $cart_panes_weight = variable_get('commerce_cp_panes_weight', array());

  $weight = 10;
  // setup page and weight attributes for custom panes
  $panes = module_invoke_all('commerce_cp_info');  
  foreach ($panes as $pane_id => $pane) {
    $panes[$pane_id]['page'] = isset($cart_panes_weight[$pane_id]) ? 'cart' : 'disabled';
    $panes[$pane_id]['weight'] = isset($cart_panes_weight[$pane_id]) ? $cart_panes_weight[$pane_id] : $weight;
    $weight++;
  }  
  uasort($panes, 'drupal_sort_weight');  
  
  foreach ($panes as $pane_id => $cart_pane) {
    // Determine a cart pane's current cart page.
    $page_id = $cart_pane['page'];
    // If the page no longer exists, place the pane on the first page.
    if (empty($cart_pages[$page_id])) {
      reset($cart_pages);
      $page_id = key($cart_pages);
    }

    $pane_name = check_plain($cart_pane['name']);
    if (isset($cart_pane['warning message']) && !empty($cart_pane['warning message'])) {
      $pane_name .= ' <small>' . $cart_pane['warning message'] . '</small>';
    }
    
    // Add the pane's name to the form array.
    $form['page'][$page_id]['panes'][$pane_id]['name'] = array(
      '#markup' => $pane_name,
    );
    // Add the select field for the pane's cart page.
    $form['page'][$page_id]['panes'][$pane_id]['page'] = array(
      '#type' => 'select',
      '#options' => $cart_pages_options,
      '#default_value' => $cart_pane['page'],
      '#attributes' => array('class' => array('cart-pane-page cart-pane-page-'. $cart_pane['page'])),
    );
    // Add the select field for the pane's weight.
    $form['page'][$page_id]['panes'][$pane_id]['weight'] = array(
      '#type' => 'weight',
      '#delta' => 20,
      '#default_value' => $cart_pane['weight'],
      '#attributes' => array('class' => array('cart-pane-weight cart-pane-weight-'. $cart_pane['page'])),
    );

    // , array('query' => drupal_get_destination())
    if (isset($panes[$pane_id]['settings form'])) {
      $settings_form_path = variable_get('commerce_cp_settings_form_path', 'admin/commerce/config/cart/form/pane');      
      // Add a configuration link for the pane.
      $form['page'][$page_id]['panes'][$pane_id]['ops'] = array(
        '#markup' => l(t('configure'), $settings_form_path.'/'.$pane_id , array('query' => drupal_get_destination())),
      );
    }    
  }

  $form['actions'] = array(
    '#type' => 'actions',
    '#tree' => FALSE,
  );
  $form['actions']['submit'] = array(
    '#type' => 'submit',
    '#value' => t('Save configuration'),
    '#submit' => array('commerce_cp_builder_form_save_submit'),
  );  

  return $form;
}

/**
 * Submit handler for the cart builder form's save button.
 */
function commerce_cp_builder_form_save_submit($form, &$form_state) {  
  $panes_by_weight = array();
  // Loop through each of the cart panes.
  if (!empty($form_state['values']['panes'])) {
    foreach ($form_state['values']['panes'] as $pane_id => $data) {
      if ($data['page'] == 'cart') {
        $panes_by_weight[$pane_id] = $data['weight'];
      }
    }
  }
  variable_set('commerce_cp_panes_weight', $panes_by_weight);
}

/**
 * Theme the cart pages form to enable tabledrag.
 */
function theme_commerce_cp_builder_form($variables) {
  $form = $variables['form'];

  drupal_add_css(drupal_get_path('module', 'commerce_cp') .'/commerce_cp.admin.css');
  drupal_add_js(drupal_get_path('module', 'commerce_cp') .'/commerce_cp_admin.js');

  // Build the full table header; Page and Weight will be hidden by tabledrag.
  $header = array(t('Cart pane'), t('Page'), t('Weight'), t('Operations'));

  $rows = array();

  // Loop through each page array in the form.
  foreach ($form['cart_pages']['#value'] as $page_id => $cart_page) {
    // Initialize the tabledrag for this page.
    drupal_add_tabledrag('panes', 'match', 'sibling', 'cart-pane-page', 'cart-pane-page-'. $page_id);
    drupal_add_tabledrag('panes', 'order', 'sibling', 'cart-pane-weight', 'cart-pane-weight-'. $page_id);

    // Add a non-draggable header row for each cart page.
    $row = array(
      array('data' => $cart_page['title'], 'colspan' => 4),
    );

    $rows[] = array('data' => $row, 'class' => array('page-header'));

    // Determine whether the page currently has any panes in it.
    $class = count(element_children($form['page'][$page_id]['panes'])) == 0 ? 'page-empty' : 'page-populated';

    // Add a row to the table that will be automatically shown or hidden as a
    // placeholder for pages that do not have any panes.
    $rows[] = array(
      'data' => array(
        array('data' => $page_id != 'disabled' ? t('No panes on this page.') : t('No disabled panes.'), 'colspan' => 4),
      ),
      'class' => array('page-message page-'. $page_id .'-message', $class),
    );

    // Loop through each cart pane currently assigned to this page.
    foreach (element_children($form['page'][$page_id]['panes']) as $pane_id) {
      $row = array(
        drupal_render($form['page'][$page_id]['panes'][$pane_id]['name']),
        drupal_render($form['page'][$page_id]['panes'][$pane_id]['page']),
        drupal_render($form['page'][$page_id]['panes'][$pane_id]['weight']),
        drupal_render($form['page'][$page_id]['panes'][$pane_id]['ops']),
      );

      $rows[] = array('data' => $row, 'class' => array('draggable'));
    }
  }

  $variables = array(
    'header' => $header,
    'rows' => $rows,
    'attributes' => array('id' => 'panes'),
  );

  return theme('table', $variables) . drupal_render_children($form);
}

/**
 * Return the title of a cart pane settings form page.
 *
 * @param $cart_pane
 *   The cart pane object represented on the settings form.
 */
function commerce_cp_settings_title($cart_pane) {
  $panes = module_invoke_all('commerce_cp_info');

  if (isset($panes[$cart_pane])) {
    return t("'!pane' cart pane", array('!pane' => $panes[$cart_pane]['name']));
  }
  return '';
}