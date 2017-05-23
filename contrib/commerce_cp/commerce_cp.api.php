<?php

/**
 * @file
 * This file contains no working PHP code; it exists to document hooks in the standard
 * Drupal manner.
 */

/**
 * Defines cart panes available for use on cart page. 
 *
 * Any number of panes may be assigned to a cart page and reordered on 'Cart settings' page.
 * Each pane may also have its own settings form accessible by clicking on Configuration link.
 * On the cart page each pane is represented as form element. For example if you need to show
 * discount info you can use $form['#type'] = 'markup', and if you need radiobuttons you can use
 * $form['#type'] = 'radios'. Panes can be system and contrib. System panes is the form elements
 * that has already presented on default cart view. For example Line item table, Summary, 
 * Submit buttons are all default form elements. And they also can be wrapped as panes and 
 * handled on 'Cart settings' page. The Commerce Cart Pane module defines 3 mentioned system 
 * panes in its own implementation of this hook, commerce_cp_commerce_cp_info():
 * - Line items table: shows a list of products added to cart
 * - Summary: shows a short Total value (Subtotal) or extended Order total table. Also this
 * pane is provided by Settings form where admin can switch between short and extended summary.
 * - Submit buttons: shows 2 buttons - Update cart and Checkout
 *
 * Shipping and Coupon panes are defined by Shipping pane and Coupon pane modules.
 *
 * The full list of properties is as follows:
 *
 * - Array key is pane_id, machine-name identifying the pane using lowercase alphanumeric
 *   characters, -, and _ . For system panes the key should be the same a name of form element. 
 *   For example 'Line item table' pane has pane a key = 'output', 'Submit buttons' = 'actions'.
 * - name: the translatable name of the pane, used in administrative displays
 * - warning message: the translatable name waring message, will be added next to pane name 
 *   with small font size.
 * - weight: integer weight of the page used for determining the pane sort order on cart page.
 * - page: string, 'cart' or 'disabled'. Is used to setup where a pane should be appeared 
 * 	 by default.
 * - system: boolean, indicates that pane is system, key (pane_id) should be same as form 
 *   element and 'pane callback' property is not needed.
 * - pane callback: string, the name of pane callback that should return a form element that 
 *   will be taken on cart page. Note, that it's important to setup a weight to form element
 *   which is passed as callback parameter. Otherwise reordering won't be worked.
 *   - Parameters:
 *    - $form - form array from cart page
 *    - $form_state - form_state array from cart page
 *    - $cart_order - order object
 *    - $pane_weight - weight that should be setup for pane form element (see example below)
 * - settings form: string, the name of settings form, that returns form elements for the 				pane's settings form. Returned form is wrapped into system_settings_form() so additinal
 *   submit actions is not required for saving variables. (see example below
 *   commerce_cp_summary_settings_form()).
 */
function hook_commerce_cp_info() {
  $cart_panes = array();
  
  $cart_panes['summary'] = array(
    'name' => t('Summary'),
    'warning message' => t('(cannot be disabled)'),
    'page' => 'cart',
    'weight' => 1,        
    'settings form' => 'commerce_cp_summary_settings_form',
    'system' => TRUE,
  );
  $cart_panes['discount_info'] = array(
    'name' => t('Discount info'),    
    'pane callback' => 'commerce_cp_discount_info_pane',    
    'page' => 'cart',
  );

  return $cart_panes;
}

/**
 * Settings form of Summary pane 
 */
function commerce_cp_summary_settings_form() {
  $form = array();

  // 
  $form['cp_textfield1'] = array(
  	'#type' => 'textfield',
  	'#title' => t('Textfield 1'),
  	'#default_value' => variable_get('cp_textfield1', ''),
	);

	$form['update_view'] = array(
  	'#type' => 'submit',
  	'#value' => t('Update view'),
  	'#submit' => array('commerce_cp_summary_settings_form_submit'),
	);

  return $form;
}

function commerce_cp_summary_settings_form_submit($form, &$form_state) {
	// some code here
}

/**
 * Discount info cart pane callback
 */
function commerce_cp_discount_info_pane($form, $form_state, $cart_order, $pane_weight) {
  $form_pane = array();
  $form_pane['discount_info'] = array(
    '#markup' => t('Discount message'),
    '#weight' => $pane_weight,
    '#prefix' => '<div id="discount-info">',
    '#suffix' => '</div>',
  );

  return $form_pane;
}