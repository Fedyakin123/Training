<?php
/**
 * Created by PhpStorm.
 * User: Asus
* Date: 12.08.2015
* Time: 22:01
*/

class registration_controller extends controller
{
    public function default_action() //как сделать,чтобы прошлое набранное не пропадало? или только с помощью JS?
    {
        if(isset($_POST['save_user_btn'])) {
            if (($_POST['user']['login'] and $_POST['user']['user_email'] and $_POST['user']['user_password']) != '' ){
                $_POST['user']['user_password'] = md5(SALT . $_POST['user']['user_password']);
                $_POST['user']['create_date'] = date('Y-m-d H:i:s');
                if ($_POST['user']['user_name'] == 0) {
                    $_POST['user']['user_name'] = $_POST['user']['login'];
                }
                $model = new model('users');
                $id = $model->insert($_POST['user']);
                //header('Location: ' .  SITE_DIR . 'registration/success'); //Что с этим делать? писать метод? Id сохранять в свойство?
                $this->render('last_inserted_id', $id);
            } else {
                $notice = '';
                foreach ($_POST['user'] as $index => $value){
                    if (($index != 'user_name') and ($value == '')){
                        $newindex = ltrim($index, 'user');
                        $notice .= ucfirst(ltrim($newindex,'_')) . ", ";
                    }
                }
                $notice = trim($notice, ", ");
                $this ->render('notice', $notice);
            }
        }
        $this->view('registration');
    }
}
