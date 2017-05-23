<?php

/**
 * @file
 * product_canvas editing UI.
 */

/**
 * UI controller.
 */
class ProductCanvasUIController extends EntityDefaultUIController {
  /**
   * Overrides hook_menu() defaults.
   *
   * Main reason for doing this is that parent class hook_menu() is, optimized
   * for entity type administration.
   */
  public function hook_menu() {
    // TODO: EntityDefaultUIController controller automatically adds the menu
    // to import entities, but there is a bug with this action and can not work
    // with the version of your entity_api module, track the issue # 2112755
    // https://www.drupal.org/node/2112755
    $wildcard = isset($this->entityInfo['admin ui']['menu wildcard']) ? $this->entityInfo['admin ui']['menu wildcard'] : '%entity_object';

    $items = parent::hook_menu();

    // Change the overview menu type for the list of Product Canvas.
    $items[$this->path]['type'] = MENU_LOCAL_TASK;

    // Replaces default entity title.
    $items[$this->path]['title'] = 'Product Canvas';

    // Extend the 'edit' path.
    $items['product_canvas/' . $wildcard . '/edit'] = array(
      'title callback' => 'product_canvas_page_title',
      'title arguments' => array(1),
      'page callback' => 'entity_ui_get_form',
      'page arguments' => array($this->entityType, 1),
      'access callback' => 'entity_access',
      'access arguments' => array('edit', $this->entityType),
    );

    // Extend the 'add' path.
    $items[$this->path . '/add'] = array(
      'title callback' => 'entity_ui_get_action_title',
      'title arguments' => array('add', $this->entityType),
      'page callback' => 'entity_ui_bundle_add_page',
      'page arguments' => array($this->entityType),
      'access callback' => 'entity_access',
      'access arguments' => array('create', $this->entityType),
    );

    $items[$this->path . '/add/%'] = array(
      'title callback' => 'entity_ui_get_action_title',
      'title arguments' => array('add', $this->entityType, $this->id_count + 1),
      'page callback' => 'entity_ui_get_bundle_add_form',
      'page arguments' => array($this->entityType, $this->id_count + 1),
      'access callback' => 'entity_access',
      'access arguments' => array('create', $this->entityType),
    );

    $items['product_canvas/' . $wildcard] = array(
      'title callback' => 'product_canvas_page_title',
      'title arguments' => array(1),
      'page callback' => 'product_canvas_page_view',
      'page arguments' => array(1),
      'access callback' => 'entity_access',
      'access arguments' => array('view', $this->entityType),
    );

    return $items;
  }
}

/**
 * Form callback: create or edit a Product Canvas.
 */
function product_canvas_form($form, &$form_state, $product_canvas, $op = 'edit', $entity_type) {
  // Add the breadcrumb for the form's location.
  product_canvas_set_breadcrumb();

  // Add the default field elements.
  $form['label'] = array(
    '#type' => 'textfield',
    '#title' => t('Product Canvas Label'),
    '#default_value' => isset($product_canvas->label) ? $product_canvas->label : '',
    '#maxlength' => 255,
    '#required' => TRUE,
    '#weight' => -5,
  );

  // Add the field related form elements.
  $form_state['product_canvas'] = $product_canvas;
  field_attach_form('product_canvas', $product_canvas, $form, $form_state);

  $form['actions'] = array(
    '#type' => 'container',
    '#attributes' => array('class' => array('form-actions')),
    '#weight' => 400,
  );

  // We add the form #submit array to this button along with the actual submit
  // handler to preserve any submit handlers added by a form callback_wrapper.
  $submit = array();

  if (!empty($form['#submit'])) {
    $submit += $form['#submit'];
  }

  $form['actions']['submit'] = array(
    '#type' => 'submit',
    '#value' => t('Save Product Canvas'),
    '#submit' => $submit + array('product_canvas_edit_form_submit'),
  );

  if (!empty($product_canvas->label)) {
    $form['actions']['delete'] = array(
      '#type' => 'submit',
      '#value' => t('Delete Product Canvas'),
      '#suffix' => l(t('Cancel'), 'admin/content/product_canvas'),
      '#submit' => $submit + array('product_canvas_form_submit_delete'),
      '#weight' => 45,
    );
  }

  // We append the validate handler to validate in case a form callback_wrapper
  // is used to add validate handlers earlier.
  $form['#validate'] = array('product_canvas_edit_form_validate');

  return $form;
}

/**
 * Form API validate callback for the Product Canvas form.
 */
function product_canvas_edit_form_validate(&$form, &$form_state) {
  $product_canvas = $form_state['product_canvas'];

  // Notify field widgets to validate their data.
  field_attach_form_validate('product_canvas', $product_canvas, $form, $form_state);
}

/**
 * Form API submit callback for the Product Canvas form.
 */
function product_canvas_edit_form_submit(&$form, &$form_state) {
  // Save the entity and go back to the list of Product Canvas.
  $product_canvas = entity_ui_controller('product_canvas')->entityFormSubmitBuildEntity($form, $form_state);

  // Add in created and changed times.
  $is_new_entity = $product_canvas->is_new = isset($product_canvas->is_new) ? $product_canvas->is_new : 0;
  if ($is_new_entity) {
    $product_canvas->created = time();
  }

  $product_canvas->changed = time();

  $product_canvas->save();

  // Send feedback message to the user.
  $message = t("Product Canvas :label updated.", array(':label' => $product_canvas->label));

  if ($is_new_entity) {
    $message = t("Product Canvas :label created.", array(':label' => $product_canvas->label));
  }

  drupal_set_message($message);

  $form_state['redirect'] = 'admin/content/product_canvas';
}

/**
 * Form API submit callback for the delete button.
 */
function product_canvas_form_submit_delete(&$form, &$form_state) {
  $form_state['redirect'] = 'admin/content/product_canvas/manage/' . $form_state['product_canvas']->product_canvas_id . '/delete';
}

/**
 * Sets the breadcrumb for administrative Product Canvas pages.
 */
function product_canvas_set_breadcrumb() {
  $breadcrumb = array(
    l(t('Home'), '<front>'),
    l(t('Administration'), 'admin'),
    l(t('Content'), 'admin/content'),
    l(t('Product Canvas'), 'admin/content/product_canvas'),
  );

  drupal_set_breadcrumb($breadcrumb);
}
