<?php
/**
 * Created by PhpStorm.
 * User: Asus
 * Date: 20.08.2015
 * Time: 21:51
 */
class user_controller extends controller
{
    public function default_action()
    {
        $model = new model('users');
        if (isset($_POST['select_user_btn'])){
            $array = [];
            foreach ($_POST['select'] as $index => $value){
                if ($value != ''){
                    $array[$index] = $value;
                }
            }
            if ($array){
                $user = $model->get_by_fields($array);
            } else {
                $user = $model->get_all(); //если параметры не заданы,то покажет всех
            }
        }

        if (isset($_POST['show_user_list_btn'])){ //наверное лишнее
            $user = $model->get_all();
        }
        $this->render('user',$user);
        $this->view('user' . DS . 'user_view');
    }
}