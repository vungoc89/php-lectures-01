<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function show_data($data){
    echo"<pre>";
    print_r($data);
    echo"</pre>";
}

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
show_data($list_user);
// XÓA 1 phan tu trong mang nhieu chieu: unset($list_user[1]);
//XÓA 1 field cua phan tu trong mang nhieu chieu: unset($list_user[1]['age']);
unset($list_user[1]);

show_data($list_user);

unset($list_user[2]['age']);

show_data($list_user);