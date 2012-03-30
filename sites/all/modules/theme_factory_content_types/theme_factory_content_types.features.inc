<?php
/**
 * @file
 * theme_factory_content_types.features.inc
 */

/**
 * Implements hook_node_info().
 */
function theme_factory_content_types_node_info() {
  $items = array(
    'slide' => array(
      'name' => t('Slide'),
      'base' => 'node_content',
      'description' => t('each slide in a slideshow.'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
  );
  return $items;
}
