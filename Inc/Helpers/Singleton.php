<?php

namespace BWC\THEME\Helpers;

trait Singleton
{
    final public static function get_instance()
    {
        static $instance = [];
        $called_class = get_called_class();

        if (!isset($instance[$called_class])) {
            $instance[$called_class] = new $called_class;
        }
        return $instance[$called_class];
    }
}
