<?php
/**
 * Created by PhpStorm.
 * User: Asus
 * Date: 12.08.2015
 * Time: 21:47
 */
$_GET['route'] = '';
if($_GET['route']) {
    $array = explode('/', trim($_GET['route'], '/'));
    $controller_name = $array[0] . '_controller';
} else {
    $controller_name = 'default_controller';
}
$controller_file = ROOT_DIR . 'controllers' . DS . $controller_name . '.php';
if(file_exists($controller_file)) {
    require_once($controller_file);
} else {
    echo '404';
    exit;
}
if($array[1]) {
    $action = $array[1];
} else {
    $action = 'default_action';
}

$controller = new $controller_name;
$controller->$action();