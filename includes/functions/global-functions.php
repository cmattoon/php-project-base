<?php
/* 
 * This file contains some basic global functions
 * 
 *     Autoloader
 */

spl_autoload_register(function ($class) {
    if (file_exists(DIR_CLASSES . $class . '.php')) {
        require_once(DIR_CLASSES . $class . '.php');
    } else {

    }
});

