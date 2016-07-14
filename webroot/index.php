<?php
/**
 * Created by PhpStorm.
 * User: Алексей
 * Date: 14.07.2016
 * Time: 3:23
 */

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(dirname(__FILE__)));

require_once(ROOT.DS.'lib'.DS.'init.php');

$router = new Router($_SERVER['REQUEST_URI']);

//$uri = $_SERVER['REQUEST_URI'];

//print_r($uri);