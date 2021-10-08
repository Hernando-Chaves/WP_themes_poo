<?php

namespace BWC\THEME\Classes;

use BWC\THEME\Helpers\Singleton;

class Bwc_register_menus_class
{
     use Singleton;

     public function __construct()
     {
          add_action('init', [$this, 'bwc_add_menus']);
     }

     public function bwc_add_menus()
     {
          register_nav_menus([
               'header_menu_bwc' => esc_html__('Header Menu BWC', BWC_DOMAIN),
               'footer_menu_bwc' => esc_html__('Footer Menu BWC', BWC_DOMAIN)
          ]);
     }

     public function get_menu_id($location)
     {
          $locations = get_nav_menu_locations();
          $menu_id   = $locations[$location];

          return !empty($menu_id) ? $menu_id : '';
     }
}
