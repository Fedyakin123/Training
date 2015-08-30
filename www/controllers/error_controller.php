<?php
/**
 * Created by PhpStorm.
 * User: Asus
 * Date: 25.08.2015
 * Time: 4:51
 */
class error_controller extends controller
{
    public function page_not_found()
    {
        $this->view('404');
    }
}