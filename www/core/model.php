<?php
/**
 * Created by PhpStorm.
 * User: Asus
 * Date: 12.08.2015
 * Time: 23:25
 */
class model
{
    public $db;
    public $table;
    public function __constructor($table)
    {
        $this->table = $table;
        $dsn = 'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME;
        $this->db = new PDO($dsn, DB_USER, DB_PASSWORD);
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->db->setAttribute(PDO::ATTR_ORACLE_NULLS, PDO::NULL_TO_STRING);
        $this->db->exec("SET sql_mode = ''");
        $this->db->exec("SET NAMES utf8");
        echo $dsn .  "<br />";
        echo $table . "<br />";
    }

    public function insert($data)
    {
        $query = ' INSERT INTO '. $this->table .' SET ';
        $temp = array();
        $n = 0;
        foreach($data as $index => $value){
            $temp[$n] = '`' . $index . '` = "' . $value . '"';
            $n ++;
        }
        $string = implode(', ',$temp);
        $query .= $string;
        $stm = $this->db->prepare($query);
        $stm->execute();
        echo $query;

    }
}

//class pdo
//{
//    public $connect;
//    public $query;
//
//    public function __construct($args) {
//        //connec
//        $this->connect = 'connect';
//    }
//
//    public function prepare($query)
//    {
//        $this->query = $query;
//    }
//
//    public function execute()
//    {
//        mysql_query($this->query, $this->connect);
//    }
//}