<?php
/** 
 * This file is included on all pages. Dont run unnecessary things here.
 */

session_start();

/* DIR constants are absolute filesystem paths (for PHP files) */
define('DIR_ROOT', $_SERVER['DOCUMENT_ROOT']);
define('DIR_INCLUDES', DIR_ROOT . 'includes/');
define('DIR_FUNCTIONS', DIR_INCLUDES . 'functions/');
define('DIR_CLASSES', DIR_INCLUDES . 'classes/');
define('DIR_TEMPLATES', DIR_ROOT . 'templates/');
define('DIR_COMPILED_TEMPLATES', DIR_ROOT . 'tplcache/');
/* WWW constants are root-relative web dir paths (for templates) */
define('WWW_CSS', '/css/');
define('WWW_JS', '/js/');
define('WWW_IMG', '/img/');


require_once(DIR_FUNCTIONS . 'global-functions.php');
/* The base template class */
require_once(DIR_CLASSES . 'Smarty-3.1.18/libs/Smarty.class.php');
