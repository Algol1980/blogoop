<?php

/**
 * Created by PhpStorm.
 * User: Алексей
 * Date: 14.07.2016
 * Time: 12:59
 */
class Config
{
    protected static $settings = array();

    public static function get($key) {
        return isset(self::$settings[$key]) ? self::$settings[$key] : null;
    }

    public static function set($key, $value) {
        self::$settings[$key]->$value;
    }
}