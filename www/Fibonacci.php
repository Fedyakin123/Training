<?php
/**
 * Created by PhpStorm.
 * User: Asus
 * Date: 04.08.2015
 * Time: 19:07
 */
    echo '
        <form method= "post">
            <label> Сколько чисел ты хочешь? </label>
            <br />
            <br />
            <input type= "text" size= "3" name=" num">
            <br />
            <br />
            <input type= "submit">
            <br />
        </form>
    ';

    if($fib_arr == $fib_arr_new) echo 'Одна хуйня! <br />';
    else echo 'Странненько! <br />';

    set_time_limit(10);
    $fib_arr= array();
    $fib_arr_new= array();
    $fib_arr= fibonacci($_POST['num']);
    $fib_arr_new= fibonacci_new($_POST['num']);
    print_r($fib_arr);
    echo '<br />';
    print_r($fib_arr_new);
    echo '<br />';

    function fibonacci($n) {
        $z= array();
        for ($i= 3; $i<= $n; $i++) {
            $z[1]= 1;
            $z[2]= 1;
            $z[$i]= $z[$i-1] + $z[$i-2];
           // echo $i."<br />";
          //  echo $n."<br />";
        }
        return $z;
    }

    function fibonacci_new($n) {
        $z_new= array();
        $fi= ((1+sqrt(5))/2);
        for ($i=1; $i<=$n; $i++) {
            $z_new[$i]= round(pow($fi,$i)/sqrt(5));
        }
        return $z_new;
    }