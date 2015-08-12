<?php
/**
 * Created by PhpStorm.
 * User: asus1
 * Date: 04.08.2015
 * Time: 0:38
 */

if(isset($_POST['save_user_btn'])) {
    $_POST['user']['user_password'] = md5(SALT . $_POST['user']['user_password']);
    $_POST['user']['create_date'] = date('Y-m-d H:i:s');
    connectTest(DB_HOST, DB_USER, DB_PASSWORD);
    model_insert(users,$_POST['user']);
}
else {
}

require_once(ROOT_DIR . 'view.php');

