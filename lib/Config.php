<?php

namespace lib;

// Configuration Class
class Config {
    static $confArray;

    public static function read($name) 
    {
        if(isset(self::$confArray[APPLICATION_ENV][$name])){
            return self::$confArray[APPLICATION_ENV][$name];    
        }
        return self::$confArray['local'][$name];
    }

    public static function write($name, $value) 
    {
            self::$confArray[APPLICATION_ENV][$name] = $value;
    }
}