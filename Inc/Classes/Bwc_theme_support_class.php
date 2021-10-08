<?php

/**
 * https://developer.wordpress.org/themes/functionality/
 */

namespace BWC\THEME\Classes;

use BWC\THEME\Helpers\Singleton;

class Bwc_theme_support_class
{
    use Singleton;

    public function __construct()
    {
        add_action('after_setup_theme', [$this, 'bwc_support_function']);
    }

    public function bwc_support_function()
    {
        global $content_width;
        if (!isset($content_width)) :
            $content_width = 1240;
        endif;

        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');
        add_theme_support('automatic-feed-links');
        add_theme_support('customize-selective-refresh-widgets');

        add_theme_support('custom-logo', [
            'header-text'          => ['site-title', 'site-description'],
            'height'               => 100,
            'width'                => 300,
            'flex-height'          => true,
            'flex-width'           => true,
            'unlink-homepage-logo' => true,
        ]);

        add_theme_support('html5', [
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'style',
            'script'
        ]);
    }
}
