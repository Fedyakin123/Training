<?php
/**
 * Created by PhpStorm.
 * User: Asus
 * Date: 12.08.2015
 * Time: 22:13
 */
class default_controller extends controller
{
    public function default_action()
    {
        $this->view('home');
    }
}