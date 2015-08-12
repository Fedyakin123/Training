<?php
/**
 * Created by PhpStorm.
 * User: Asus
 * Date: 12.08.2015
 * Time: 22:43
 */
class controller
{
    public function view($template)
    {
        require_once(ROOT_DIR . 'templates' . DS . 'main.php');
    }
}