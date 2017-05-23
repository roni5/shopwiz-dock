<?php

/**
 * @file
 * Product Canvas type editing UI.
 */

/**
 * UI controller.
 */
class ProductCanvasTypeUIController extends EntityDefaultUIController {
  /**
   * Overrides hook_menu() defaults.
   */
  public function hook_menu() {
    $items = parent::hook_menu();
    $items[$this->path]['description'] = 'Manage Product Canvas entity types, including adding and removing fields and the display of fields.';

    return $items;
  }
}

/**
 * Generates the Product Canvas type editing form.
 */
function product_canvas_type_form($form, &$form_state, $product_canvas_type, $op = 'edit') {
  if ($op == 'clone') {
    $product_canvas_type->label .= ' (cloned)';
    $product_canvas_type->type = '';
  }

  $form['label'] = array(
    '#title' => t('Label'),
    '#type' => 'textfield',
    '#default_value' => $product_canvas_type->label,
    '#description' => t('The human-readable name of this Product Canvas type.'),
    '#required' => TRUE,
    '#size' => 30,
  );

  // Machine-readable type name.
  $form['type'] = array(
    '#type' => 'machine_name',
    '#default_value' => isset($product_canvas_type->type) ? $product_canvas_type->type : '',
    '#maxlength' => 32,
    '#machine_name' => array(
      'exists' => 'product_canvas_get_types',
      'source' => array('label'),
    ),
    '#description' => t('A unique machine-readable name for this Product Canvas type. It must only contain lowercase letters, numbers, and underscores.'),
  );

  $form['actions'] = array('#type' => 'actions');
  $form['actions']['submit'] = array(
    '#type' => 'submit',
    '#value' => t('Save Product Canvas type'),
    '#weight' => 40,
  );

  return $form;
}

/**
 * Form API submit callback for the type form.
 */
function product_canvas_type_form_submit(&$form, &$form_state) {
  $product_canvas_type = entity_ui_form_submit_build_entity($form, $form_state);
  $product_canvas_type->save();
  $form_state['redirect'] = 'admin/structure/product_canvas_types';
}

/**
 * Form API submit callback for the delete button.
 */
function product_canvas_type_form_submit_delete(&$form, &$form_state) {
  $form_state['redirect'] = 'admin/structure/product_canvas_types/manage/' . $form_state['product_canvas_type']->type . '/delete';
}
