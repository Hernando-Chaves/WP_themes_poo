<?php

namespace BWC\THEME\Classes;

use BWC\THEME\Helpers\Singleton;

class Bwc_scripts_class
{
    use Singleton;

    public function __construct()
    {
        add_action('wp_enqueue_scripts', [$this, 'bwc_add_scripts'], 999);
    }

    public function bwc_add_scripts()
    {
        $this->bwc_register_styles($this->bwc_get_styles());
        $this->bwc_register_scripts($this->bwc_get_scripts());
    }

    public function bwc_register_styles($styles)
    {
        foreach ($styles as $handle => $style) {
            $deps = isset($style['deps']) ? $style['deps'] : '';
            $ver  = isset($style['ver']) ? $style['ver'] : '';

            wp_register_style($handle, $style['src'], $deps, $ver, 'all');
            wp_enqueue_style($handle);
        }
    }

    public function bwc_get_styles()
    {
        $styles = [
            'stylesheet' => [
                'src' => STYLE_DIR,
                'ver' => \filemtime(BWC_DIR_PATH . '/style.css'),
                'deps' => [],
            ],
            'bootstrap_css' => [
                'src' => BWC_DIR_URI . '/assets/libs/bootstrap/css/bootstrap.min.css',
                'ver' => '5.1.1',
                'deps' => [],
            ],
        ];

        return $styles;
    }

    public function bwc_register_scripts($scripts)
    {
        foreach ($scripts as $handle => $script) {
            $deps      = isset($script['deps']) ? $script['deps'] : '';
            $ver       = isset($script['ver']) ? $script['ver']  : '';
            $in_footer = isset($script['in_footer']) ? $script['in_footer'] : '';

            wp_register_script($handle, $script['src'], $deps, $ver, $in_footer);
            wp_enqueue_script($handle);
        }
    }

    public function bwc_get_scripts()
    {
        $scripts = [
            'main-js' => [
                'src'       => BWC_DIR_URI . '/assets/js/main.js',
                'deps'      => [],
                'ver'       => \filemtime(BWC_DIR_PATH . '/assets/js/main.js'),
                'in_footer' => true,
            ],
            'bootstrap-js' => [
                'src'       => BWC_DIR_URI . '/assets/libs/bootstrap/js/bootstrap.min.js',
                'deps'      => [],
                'ver'       => '5.1.1',
                'in_footer' => true,
            ],
        ];

        return $scripts;
    }
}
