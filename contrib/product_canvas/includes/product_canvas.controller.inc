<?php

/**
 * @file
 * Product Canvas controller class.
 */

/**
 * The Controller for Product Canvas entities.
 */
class ProductCanvasController extends EntityAPIController {
  /**
   * Create a Product Canvas.
   *
   * @param array $values
   *   An array containing the possible values.
   *
   * @return object
   *   A object with all default fields initialized.
   */
  public function create(array $values = array()) {
    // Add values that are specific to our entity.
    $values += array(
      'product_canvas_id' => '',
      'is_new' => TRUE,
      'label' => '',
      //'title' => '',
      // 'uid' => $user->uid,
      //'datajson' => '',
    );

    $entity = parent::create($values);

    return $entity;
  }
}
