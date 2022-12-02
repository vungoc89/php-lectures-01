<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function check_login($username, $password) {
    global $list_users;
//    show_data($list_users);//ok
    foreach ($list_users as $user) {
        if ($username == $user['username'] && md5($password) == $user['password']) {
            return true;
        }
    }
    return false;
}

function is_login() {
    if (isset($_SESSION['is_login']))
        return true;
    return false;
}

function user_login() {
    if (!empty($_SESSION['user_login'])) {
        return $_SESSION['user_login'];
    }
    return false;
}

//function info_user($username, $field = 'id'){
function info_user($field = 'id'){
     global $list_users;
    if (!empty($_SESSION['user_login'])) {
        foreach ($list_users as $user){
            if($_SESSION['user_login'] == $user['username']){
                if(array_key_exists($field, $user)){
                    return $user[$field];
                }
            }
        }
    }
    return false;
}