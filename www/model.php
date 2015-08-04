<?php
/**
 * Created by PhpStorm.
 * User: asus1
 * Date: 04.08.2015
 * Time: 0:38
 */

/**
 * @param $host
 * @param $user
 * @param $password
 * @return resource
 */

function connectTest($host, $user, $password)
{

    $connect = mysql_connect($host, $user, $password);
    mysql_query('USE test');
    mysql_query("SET NAMES 'utf8'");
    mysql_query("SET CHARACTER SET 'utf8'");
    return $connect;
}

function createUser($user)
{
$query = '
    INSERT INTO
        users
    SET
        login = "' . $user['login'] . '",
        user_password = "' . md5($user['password']) . '",
        user_name = "' . $user['name'] . '",
        user_email = "' . $user['email'] . '",
        create_date = "' . date('Y-m-d H:i:s') . '"';

        mysql_query($query) or die(mysql_error());
}



