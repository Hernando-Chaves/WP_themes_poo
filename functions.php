<?php

require_once ( get_template_directory() . '/Inc/Helpers/bwc_settings.php' );
require_once BWC_DIR_PATH . '/vendor/autoload.php';
// require_once BWC_DIR_PATH . '/Inc/Helpers/autoloader.php';

function get_instance_theme()
{
    \BWC\THEME\Classes\Bwc_theme_class::get_instance();    
}
get_instance_theme();



if(! function_exists('bwc_wp_body_open')){
    function bwc_wp_body_open()
    {
        if(function_exists('wp_body_open')){
            wp_body_open();
        } else {
            do_action('wp_body_open');
        }
    }
}
