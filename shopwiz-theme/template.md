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
     dpm($form_id);
    if(stristr($form_id,"commerce_cart_add_to_cart_form")){
                //dpm($form);
               $form['submit'] = array(
      '#type' => 'submit',
      '#value' => t('Buy now'),
    );

    //$form['actions']['submit']['#attributes'] = array('data-toggle' => 'modal','data-target'  => '#myConfirm');     
    $form['submit']['#attributes']['data-toggle'] = 'modal';
    $form['submit']['#attributes']['data-target'] = '#myConfirm';


        $form ['attributes']['field_colors']['#weight']= 99;
        $form['unchanged_attributes']['field_colors']['#weight']= 99;
        $form['attributes']['field_colors']['#attributes']['class'][] = 'form-control custom color-preview';
        $form['attributes']['field_sizes']['#attributes']['class'][] = 'form-control custom';
        $form['unchanged_attributes']['field_colors']['#attributes']['class'][] = 'form-control custom color-preview';
        $form['unchanged_attributes']['field_sizes']['#attributes']['class'][] = 'form-control  custom';
      }


 }

/**
 *   function shopwiz_form_element($vars) {
 * $original = theme_form_element($vars);
 * return '<div class="better">' . $original . '</div>';
  }
*/

function shopwiz_preprocess_page(&$vars) {

/**
 * Implements hook_theme().
 */
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


   function shopwiz_form_commerce_cart_add_to_cart_form_alter(&$form, &$form_state, $form_id) {
         dpm($form_id);
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
