<?php
/**
 * Created by PhpStorm.
 * User: Asus
 * Date: 12.08.2015
 * Time: 21:47
 */
require_once(ROOT_DIR . 'controllers' . DS . 'error_controller.php');
$notfound = new error_controller;

if(isset($_GET['route'])) {
    $array = explode('/', trim($_GET['route'], '/')); //режем строку ГЕТ,отбрасываем слэши
    $controller_name = $array[0] . '_controller';
} else {
    $controller_name = 'default_controller';
}

$controller_file = ROOT_DIR . 'controllers' . DS . $controller_name . '.php';

if(file_exists($controller_file)) { //Если контроллер существует - выбираем его
    require_once($controller_file);
} else {
    $notfound->page_not_found();
    exit;
}

$controller = new $controller_name;

if(isset($array[1])) {
    if(method_exists($controller, $array[1])) {
        $action = $array[1];
    } else {
        $notfound->page_not_found();
        exit;
    }
} else {
    $action = 'default_action';
}

if(isset($array[2])) {
    $notfound->page_not_found();
}

$controller->$action();
