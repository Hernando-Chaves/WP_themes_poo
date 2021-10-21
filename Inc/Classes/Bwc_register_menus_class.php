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

     public function get_child_menu_items($array_menu, $parent_id)
     {
          $child_menu_items = [];

          if (!empty($array_menu) && is_array($array_menu)) :

               foreach ($array_menu as $menu_item) :

                    if (intval($menu_item->menu_item_parent) === $parent_id) :

                         array_push($child_menu_items, $menu_item);

                    endif;

               endforeach;

          endif;

          return $child_menu_items;
     }
}
