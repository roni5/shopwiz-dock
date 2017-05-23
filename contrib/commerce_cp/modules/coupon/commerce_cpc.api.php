<?php 

/**
 * @file
 * This file contains no working PHP code; it exists to document hooks in the standard
 * Drupal manner.
 *
 * hook_commerce_cpc_coupon_attached() and hook_commerce_cpc_coupon_detached() hooks allows
 * to react on attaching/detaching coupons to order. As Commerce Coupon module doesn't provide
 * a such of hooks they work only in context of Coupon pane on cart page. For example on 	
 * checkout page these hooks won't be executed with default Coupon pane.
 * hook_commerce_cpc_coupon_attached() - executes after coupon has been attached to the order 
 * on Coupon pane of cart page
 * hook_commerce_cpc_coupon_detached() - executes after coupon has been detached from the order 
 * on Coupon pane of cart page
 * Parameters:
 * - $order object
 * - $coupon object
 */

/**
 * Executes after coupon has been attached to the order on Coupon pane of cart page
 *
 * @param $order
 *   The order object.
 * @param $coupon
 *   The coupon object.
 */
function hook_commerce_cpc_coupon_attached($order, $coupon) { 
	// recalculate shipping after coupon has been attached to order.
	// Works only of Coupon pane module is activated.
  commerce_cps_add_order_shipping($order);  
}

/**
 * Executes after coupon has been detached from the order on Coupon pane of cart page
 *
 * @param $order
 *   The order object.
 * @param $coupon
 *   The coupon object.
 */
function hook_commerce_cpc_coupon_detached($order, $coupon) {
	// recalculate shipping after coupon has been detached from order.
	// Works only of Coupon pane module is activated.
  commerce_cps_add_order_shipping($order);
}