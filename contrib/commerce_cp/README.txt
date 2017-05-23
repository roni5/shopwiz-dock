Commerce Cart Pane
===============

This module allows to create and place the panes on cart page.

Features
--------
* Ability to organize and configure cart panes on Cart settings page like on Checkout settings page
* Module provides a hook that allows to create a custom panes. Note that panes are not related to checkout panes provided by Drupal Commerce.
* Module works with default cart view

Types of panes
--------------
Panes can be system and contrib. System panes is the form elements that has already presented on default cart view. Contrib panes defines own form elements that are added on the form of cart view.

System panes
------------
- Line items table: shows a list of products added to cart
- Summary: shows a short Total value (Subtotal) or extended Order total table. Also this
  pane is provided by Settings form where admin can switch between short and extended summary.
- Submit buttons: shows 2 buttons - Update cart and Checkout

Contrib panes
-------------
- Shipping pane (Shipping pane (commerce_cps) module needs to be activated)
- Coupon pane (Coupon pane (commerce_cpc) module needs to be activated)

How to create own panes
-----------------------
See commerce_cp.api.php file

Installation & Usage
----------------------------
- Install as usual.
- Install Shipping pane and Coupon pane modules from Commerce (Cart) package if needed
- Go to Store > Configuration > Cart settings (admin/commerce/config/cart)
- Activate and organize panes as you need.
  Node: If you use Shipping pane or Coupon pane it's good to see a changes in Summary table. But by default cart page shows only Subtotal value (sum of all product line items) as summary. In order to switch to full summary table as on checkout page go to Configure in front of Summary pane and check a box. It will update a footer of cart view (can be done manually)
- Go back to cart page to see the changes