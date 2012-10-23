<?php

class AutoLoader {    
    public static function load($class) {

        if(file_exists("Models/class.".$class .".php")) {      
            require_once("Models/class.".$class .".php");
            //echo "Model/class.".$class .".php\n";
        }        
    }
}

spl_autoload_register(array('AutoLoader', 'load'));