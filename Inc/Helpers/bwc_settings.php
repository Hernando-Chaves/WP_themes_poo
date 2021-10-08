<?php

if (!defined('BWC_DIR_PATH')) {
    define('BWC_DIR_PATH', untrailingslashit(get_template_directory()));
}

if (!defined('BWC_DIR_URI')) {
    define('BWC_DIR_URI', untrailingslashit(get_template_directory_uri()));
}

if (!defined('STYLE_DIR')) {
    define('STYLE_DIR', untrailingslashit(get_stylesheet_uri()));
}

if (!defined('BWC_DOMAIN')) {
    define('BWC_DOMAIN', 'bwc_domain');
}
