<?php
session_start();
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
setcookie('is_login', true, time() - 3600, "/");

//Chưa xđ chỗ username đã được chưa ? (vì khi exit thì info user trong Cookies của
//Chrome cũng mất luôn chứ ko thấy là lưu được 3600s
//setcookie('user_login', $username, time() - 3600, "/");
setcookie('user_login', $_POST['username'], time() - 3600, "/");

unset($_SESSION['is_login']);
unset($_SESSION['user_login']);

redirect_to('?page=login');
echo 'Logout success';

