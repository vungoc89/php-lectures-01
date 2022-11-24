<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
echo "Login page";

function show_data($data){
    if(is_array($data)){
        echo "<pre>";
        print_r($data);
        echo "<pre>";
    }
}

show_data($_POST);

if(isset($_POST['btn_login'])){
    $error = [];
        if(empty($_POST['username'])){
        $error = "Ban chua nhap username";
    }else{
        $username = $_POST['username'];
        echo "{$username}<br>";
    }
    if(empty($_POST['password'])){
        $error = "Ban chua nhap password";
    }else{
        $password = $_POST['password'];
        echo "{$password}<br>";
    }
    
}
?>

