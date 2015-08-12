<?php
/**
 * Created by PhpStorm.
 * User: Asus
* Date: 12.08.2015
* Time: 22:01
*/
class registration_controller extends controller
{
    function default_action()
    {
        if(isset($_POST['save_user_btn'])) {
            $_POST['user']['user_password'] = md5(SALT . $_POST['user']['user_password']);
            $_POST['user']['create_date'] = date('Y-m-d H:i:s');
            $model = new model('users');
            $model->insert($_POST['user']);
        }
        $this->view('view');
    }
}