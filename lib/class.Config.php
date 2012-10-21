<?php

// Configuration Class
class Config {
    static $confArray;

    public static function read($name) {
        return self::$confArray[$name];
    }

    public static function write($name, $value) {
        self::$confArray[$name] = $value;
    }
}

// DB Config
Config::write('db.host', 'localhost');
Config::write('db.port', '');
Config::write('db.basename', 'events');
Config::write('db.user', 'root');
Config::write('db.password', '');