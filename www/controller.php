<?php
/**
 * Created by PhpStorm.
 * User: asus1
 * Date: 04.08.2015
 * Time: 0:38
 */
require_once(ROOT_DIR . 'view.php');
if(isset($_POST['save_user_btn'])) {
<<<<<<< HEAD
    $_POST['user']['user_password'] = md5(SALT . $_POST['user']['user_password']);
    $_POST['user']['create_date'] = date('Y-m-d H:i:s');
    connectTest(DB_HOST, DB_USER, DB_PASSWORD);
    model_insert(users,$_POST['user']);
=======
    $_POST['user']['password'] = SALT . $_POST['user']['password'];
    connectTest(DB_HOST, DB_USER, DB_PASSWORD);
    createUser($_POST['user']);
>>>>>>> origin/master
} else {
}