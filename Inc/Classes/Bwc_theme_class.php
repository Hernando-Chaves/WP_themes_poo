<?php

namespace BWC\THEME\Classes;

use BWC\THEME\Helpers\Singleton;
use BWC\THEME\Classes\Bwc_scripts_class;
use BWC\THEME\Classes\Bwc_theme_support_class;
use BWC\THEME\Classes\Bwc_register_menus_class;

class Bwc_theme_class
{
    use Singleton;

    protected  function __construct()
    {
        Bwc_scripts_class::get_instance();
        Bwc_theme_support_class::get_instance();
        Bwc_register_menus_class::get_instance();
    }
}
