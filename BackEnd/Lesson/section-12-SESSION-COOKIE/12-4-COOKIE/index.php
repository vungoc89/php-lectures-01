<?php
session_start();
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
echo "WELCOME TO HOMPAGE<br>";
if(isset($_COOKIE['is_login'])){
    echo "Cookie: {$_COOKIE['user_login']}<br>";
}
if (!isset($_SESSION['is_login'])) {
    header("Location: login.php");
} else {
//    echo $is_login;
    echo "Xin chào {$_SESSION['user_login']}";
}

?>
<br>
<a href="logout.php">LogOut</a>