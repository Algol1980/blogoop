<?php
/**
 * Created by PhpStorm.
 * User: Алексей
 * Date: 14.07.2016
 * Time: 13:12
 */
spl_autoload_register(function($className) {
    $libPath = ROOT.DS.'lib'.DS.strtolower($className).'.class.php';
    $controllersPath = ROOT.DS.'controllers'.DS.str_replace('controller', '', strtolower($className)).'.controller.php';
    $modelsPath = ROOT.DS.'models'.DS.strtolower($className).'.model.php';
    if(file_exists($libPath)) {
        require_once($libPath);
    }
    elseif(file_exists($controllersPath)) {
        require_once($controllersPath);

    }
    elseif(file_exists($modelsPath)) {
        require_once($modelsPath);

    }
    else {
        throw new Exception('Failed to include class: ' . $className);
    }
});

require_once (ROOT.DS.'config'.DS.'config.php');

