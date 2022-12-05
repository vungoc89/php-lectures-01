<?php

function is_username($username) {
    $pattern = "/^[A-Za-z0-9_\.]{6,32}$/";
            if(!preg_match($pattern, $username, $matchs))
                    return false;
            return true;
}
function is_fullname($fullname) {
    $pattern = "/^[A-Za-z0-9_\.]{6,32}$/";
            if(!preg_match($pattern, $fullname, $matchs))
                    return false;
            return true;
}

function is_email($email) {
    $pattern = "/^[A-Za-z0-9_\.]{6,32}@([a-zA-Z0-9]{2,12})(.[a-zA-Z]{2,12})+$/";
            if(!preg_match($pattern, $email, $matchs))
                    return false;
            return true;
}

function is_password($password) {
    $pattern = "/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[#$@!%&*?])[A-Za-z\d#$@!%&*?]{8,30}$/";
            if(!preg_match($pattern, $password, $matchs))
                    return false;
            return true;
}

//function for form in html
function form_error($label){
    global $error;
    if(!empty($error[$label]))
        return "<p class='error'>{$error[$label]}</p>";
}

//function set_value to print username (DÙNG 2 DẤU $)
function set_value($label) {
    global $$label;
    if(!empty($$label)) return $$label;
}