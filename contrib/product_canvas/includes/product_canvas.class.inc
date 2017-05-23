<?php

/**
 * @file
 * Product Canvas class.
 */

/**
 * The class used for product_canvas entities.
 */
class ProductCanvas extends Entity {
  /**
   * Class constructor.
   */
  public function __construct($values = array()) {
    parent::__construct($values, 'product_canvas');
  }

  /**
   * Defines the default entity label.
   */
  protected function defaultLabel() {
    return $this->label;
  }

  /**
   * Defines the default entity URI.
   */
  protected function defaultUri() {
    return array('path' => 'product_canvas/' . $this->product_canvas_id);
  }
}

/**
 * The class used for Product Canvas type entities.
 */
class ProductCanvasType extends Entity {
  public $type;
  public $label;

  /**
   * Class constructor.
   */
  public function __construct($values = array()) {
    parent::__construct($values, 'product_canvas_type');
  }
}
