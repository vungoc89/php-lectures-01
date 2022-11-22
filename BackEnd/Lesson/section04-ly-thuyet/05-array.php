<?php

/* 
 * <?php 
 *      $list_course = array('html', 'css', 'jquery');
 *  ?>

 */

//Mang 1 chieu kieu key => value
$list_even = array(0 => 0, 1 => 2, 2 => 4, 3 => 6, 4 => 8, 5 => 10); 

//Mang nhieu chieu danh sach thanh vien

/**
 * Id:
 * Name: 
 * Age: 
 * 
 */

$list_user = array(
    1 => array(
        'id' => 1, 
        'fullName' => 'nguyen van a', 
        'age' => 30
    ), 
    2 => array(
        'id' => 2, 
        'fullName' => 'nguyen van b', 
        'age' => 20
    ),
);

 //Xuất DỮ LIỆU MẢNG: PRINT_R
 $my_arr = array('a', 'b', 'c');
 echo"<pre>";
 print_r($my_arr);
 echo"</pre>";
