<?php

/**
 * @file
 * product_canvas install schema.
 */

/**
 * Implements hook_schema().
 */
function product_canvas_schema() {
  $schema = array();

  $schema['product_canvas'] = array(
    'description' => 'The base table for Product Canvas entities.',
    'fields' => array(
      'product_canvas_id' => array(
        'description' => 'Primary Key: Identifier for a Product Canvas.',
        'type' => 'serial',
        'unsigned' => TRUE,
        'not null' => TRUE,
      ),
      'type' => array(
        'description' => 'The type of this Product Canvas.',
        'type' => 'varchar',
        'length' => 255,
        'not null' => TRUE,
        'default' => '',
      ),
      'label' => array(
        'description' => 'The name of the Product Canvas - a human-readable identifier.',
        'type' => 'varchar',
        'length' => 255,
        'not null' => TRUE,
        'default' => '',
      ),
      'created' => array(
        'description' => 'The Unix timestamp when the Product Canvas was created.',
        'type' => 'int',
        'not null' => TRUE,
        'default' => 0,
      ),
      'changed' => array(
        'description' => 'The Unix timestamp when the Product Canvas was most recently saved.',
        'type' => 'int',
        'not null' => TRUE,
        'default' => 0,
      ),
    ) + entity_exportable_schema_fields(),
    'primary key' => array('product_canvas_id'),
    'indexes' => array(
      'type' => array('type'),
    ),
  );

  $schema['product_canvas_type'] = array(
    'description' => 'Stores information about defined Product Canvas types.',
    'fields' => array(
      'id' => array(
        'type' => 'serial',
        'not null' => TRUE,
        'description' => 'Primary Key: Unique Product Canvas type identifier.',
      ),
      'type' => array(
        'description' => 'The machine-readable name of this Product Canvas type.',
        'type' => 'varchar',
        'length' => 255,
        'not null' => TRUE,
      ),
      'label' => array(
        'description' => 'The human-readable name of this Product Canvas type.',
        'type' => 'varchar',
        'length' => 255,
        'not null' => TRUE,
        'default' => '',
      ),
      'weight' => array(
        'type' => 'int',
        'not null' => TRUE,
        'default' => 0,
        'size' => 'tiny',
        'description' => 'The weight of this Product Canvas type in relation to others.',
      ),
    ) + entity_exportable_schema_fields(),
    'primary key' => array('id'),
    'unique keys' => array(
      'type' => array('type'),
    ),
  );

  return $schema;
}
