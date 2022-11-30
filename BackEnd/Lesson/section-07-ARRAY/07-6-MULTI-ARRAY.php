<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



 $list_user = array(
    1 => array(
        'id' => 1, 
        'fullName' => 'nguyen van a', 
        'email' => 'nvA@gmail.com',
    ), 
    2 => array(
        'id' => 2, 
        'fullName' => 'nguyen van b', 
        'email' => 'nvB@gmail.com',
    ),
);
 
 //Them ele vao mang nhieu chieu: C1
 $list_user[3] = array(
        'id' => 3, 
        'fullName' => 'nguyen van c', 
        'email' => 'nvCgmail.com',
 );
 
  //Them ele vao mang nhieu chieu: C2
  $list_user[3]['id'] = 3;
  $list_user[3]['fullName'] = 'nguyen van c';
  $list_user[3]['email'] = 'nvC@gmail.com';
?>