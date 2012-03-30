<?php
/**
 * @file
 * theme_factory_slideshow_1.features.inc
 */

/**
 * Implements hook_views_api().
 */
function theme_factory_slideshow_1_views_api() {
  list($module, $api) = func_get_args();
  if ($module == "views" && $api == "views_default") {
    return array("version" => "3.0");
  }
}
