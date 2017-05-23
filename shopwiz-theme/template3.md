<?php

/**
 * @file   drupal_add_js('https://use.fortawesome.com/229e5a4c.js', 'external');
 * Template overrides as well as (pre-)process and alter hooks for the
 * shopwiz theme. if ($form_id == 'commerce_cart_add_to_cart_form'); 
 *  $form['attributes']['field_sizes']['
 *  drupal_set_message("This is the form id : Roni");
 *  $form['submit']['#weight']= 99; $form['field_sizes']['class'][] = 'styled-select'; 
 */

      function shopwiz_form_alter(&$form, &$form_state, $form_id){
     //dpm($form_id);
    if(stristr($form_id,"commerce_cart_add_to_cart_form")){
                //dpm($form);
               $form['submit'] = array(
      '#type' => 'submit',
      '#value' => t('Buy now'),
    );

    //$form['submit']['#attributes']['data-toggle'] = 'modal';
    //$form['submit']['#attributes']['data-target'] = '#myConfirm';


        $form ['attributes']['field_colors']['#weight']= 99;
        $form['unchanged_attributes']['field_colors']['#weight']= 99;
        $form['attributes']['field_colors']['#attributes']['class'][] = 'form-control custom color-preview';
        $form['attributes']['field_sizes']['#attributes']['class'][] = 'form-control custom';
        $form['unchanged_attributes']['field_colors']['#attributes']['class'][] = 'form-control custom color-preview';
        $form['unchanged_attributes']['field_sizes']['#attributes']['class'][] = 'form-control  custom';
      }


 }




      /**
 * Returns HTML for status and/or error messages, grouped by type.
 
function shopwiz_status_messages($variables) {
  $display = $variables['display'];
  $output = '';

  $status_heading = array(
    'status' => t('Status message'),
    'error' => t('Error message'),
    'warning' => t('Warning message'),
  );

  // Map Drupal message types to their corresponding Bootstrap classes.
  // @see http://twitter.github.com/bootstrap/components.html#alerts
  $status_class = array(
    'status' => 'success',
    'error' => 'error',
    'warning' => 'info',
  );

  foreach (drupal_get_messages($display) as $type => $messages) {
    $class = (isset($status_class[$type])) ? ' alert-' . $status_class[$type] : '';
   $output .= "<div class=\"messages $type alert alert-block$class\">\n";
   // $output .= "<div class=\"alert alert-block$class\">\n";
    $output .= "  <a class=\"close\" data-dismiss=\"alert\" href=\"#\">x</a>\n";

    if (!empty($status_heading[$type])) {
      $output .= '<h2 class="element-invisible">' . $status_heading[$type] . "</h2>\n";
    }

    if (count($messages) > 1) {
      $output .= " <ul>\n";
      foreach ($messages as $message) {
        $output .= '  <li>' . $message . "</li>\n";
      }
      $output .= " </ul>\n";
    }
    else {
      $output .= $messages[0];
    }

    $output .= "</div>\n";
  }
  return $output;
}
 */

/**
 *   function shopwiz_form_element($vars) {
 * $original = theme_form_element($vars);
 * return '<div class="better">' . $original . '</div>';
  }
*/


function shopwiz_preprocess_commerce_line_item_summary(&$variables) {
  $variables['total_label'] = t('Go to Checkout :Free Delivery inc:');
   //$variables['links']['#attributes']['class'] = 'mybutton ';
}


    function shopwiz_preprocess_page(&$vars) {
/**
 * Implements hook_theme().
*/

 drupal_add_js('https://www.gstatic.com/firebasejs/3.6.8/firebase.js', 'external');

 
 drupal_add_js(drupal_get_path('theme', 'shopwiz') . 'js/shopwizFire.behaviors.js', 'file', 'footer', 'JS_THEME');


function shopwiz_commerce_cart_theme() {
  return array(
    'shopwiz_commerce_cart_empty_block' => array(
      'variables' => array(),
    ),
    'shopwiz_commerce_cart_empty_page' => array(
      'variables' => array(),
    ),
      'shopwiz_form_commerce_cart_add_to_cart_form_alter' => array(
      'variables' => array(),
    ),
     'shopwiz_form_commerce_cart_add_to_cart_form' => array(
      'variables' => array(),
    ),    
    'shopwiz_commerce_cart_block' => array(
      'variables' => array('order' => NULL, 'contents_view' => NULL),
      'path' => drupal_get_path('theme', 'shopwiz') . '/theme',
      'template' => 'commerce-cart-block',
    ),
  );
 }

/**
 * Themes an empty shopping cart block's contents.
 */
function shopwiz_commerce_cart_empty_block() {
  return '<div class="label mylabel cart-empty-block">' . t('Start creating cart is empty.') . '</div>';
}

/**
 * Themes an empty shopping cart page.
 */
function shopwiz_commerce_cart_empty_page() {
  return '<div class="well cart-empty-page">' . t('Start creating cart is empty.') . '</div>';
   }

 }

?>
