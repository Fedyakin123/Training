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

<<<<<<< HEAD
function model_insert($table_name, $arr_name)
{
    $query = ' INSERT INTO '.$table_name.' SET ';
    $temp = array();
    $n=0;
    foreach($arr_name as $index => $value){
        $temp[$n] = "`$index` = \"$value\"";
        $n++;
    }
    $string = implode(', ',$temp);
    $query .= $string;
     mysql_query($query) or die(mysql_error());
}

=======
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



>>>>>>> origin/master
