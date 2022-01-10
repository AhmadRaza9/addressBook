<?php 

require_once "config/config.php";
require_once "helpers/system_helper.php";

function my_autoloader($class) {
    include 'libraries/' . $class . '.php';
}

spl_autoload_register('my_autoloader');

?>