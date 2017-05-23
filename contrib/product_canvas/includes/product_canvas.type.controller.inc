<?php

/**
 * @file
 * Product Canvas controller class.
 */

/**
 * The Controller for Product Canvas entities.
 */
class ProductCanvasTypeController extends EntityAPIControllerExportable {
  /**
   * Create a Product Canvas type.
   *
   * @param array $values
   *   An array containing the possible values.
   *
   * @return object
   *   A type object with all default fields initialized.
   */
  public function create(array $values = array()) {
    // Add values that are specific to our Product Canvas.
    $values += array(
      'id' => '',
    );
    $entity_type = parent::create($values);

    return $entity_type;
  }
}
