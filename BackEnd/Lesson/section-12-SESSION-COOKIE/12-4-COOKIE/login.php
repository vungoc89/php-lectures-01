<?php
ob_start();
session_start();
/* */
//Set report when login success
//$_SESSION['is_login'] = true;
//$_SESSION['user_login'] = 'userAccount';
//header("Location: index.php");
//
//XEM content ban đầu(chưa refactor) tại : 11-5-OLD-reuse-validate.php

require 'func-for-validate/func-validate.php';
/*
 */

function show_data($data) {
    if (is_array($data)) {
        echo "<pre>";
        print_r($data);
        echo "<pre>";
    }
}

//show_data($_SERVER); 
//show_data($_POST);
if (isset($_POST['btn_login'])) {
    $error = [];
    if (empty($_POST['username'])) {
        $error['username'] = "Ban can nhap username";
    } else {
        if (!(strlen($_POST['username']) >= 6 && strlen($_POST['username']) <= 32)) {
            $error['username'] = "Username tu 6 -> 32 ky tu";
        } else {
//            $pattern = "/^[A-Za-z0-9_\.]{6,32}$/";
//            if(!preg_match($pattern, $_POST['username'], $matchs)){
            if (!is_username($_POST['username'])) {
                $error['username'] = "Username phai co ky tu, chu so, dau cham, dau _, tu 6 den 32 ky tu";
            } else {
                $username = $_POST['username'];
                echo "{$username}<br>";
            }
        }
    }
    if (empty($_POST['password'])) {
        $error['password'] = "Ban can nhap password";
    } else {
        //https://stackoverflow.com/questions/19605150/regex-for-password-must-contain-at-least-eight-characters-at-least-one-number-a
//        $pattern = "/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[#$@!%&*?])[A-Za-z\d#$@!%&*?]{8,30}$/";
//            if(!preg_match($pattern, $_POST['password'], $matchs)){
        if (!is_password($_POST['password'])) {
            $error['password'] = "Password ko co space, min 8 ky tu, max 30 ky tu, it nhat 1 chu hoa, 1 chu thuong, 1 so , 1 ky tu dac biet";
        } else {
            $password = $_POST['password'];
            echo "{$password}<br>";
        }
    }
    //Ket luan
    if (empty($error)) {
        $info_data = [
            'username' => 'abc123',
            'password' => 'abC@xyz123',
        ];
        if ($username == $info_data['username'] && $password == $info_data['password']) {
            if(isset($_POST['remember_me'])){
//              echo $_POST['remember_me'];
//                die(); // stop 
                setcookie('is_login', true, time() + 3600, "/");
                setcookie('user_login', 'abc123', time() + 3600, "/");
                
            }
            //REDIRECT FILE: USE header()(func system) and SET session here
            $_SESSION['is_login'] = true;
            $_SESSION['user_login'] = 'abc123';
            header("Location: index.php");
        } else {
            echo "Sai thong tin dang nhap hoac Tai khoan khong ton tai";
        }
//            echo "Username: {$username} <br> Password: {$password} <br>";
    }
}

//abC@123456
//abD$12343347

// if(isset($_POST['remember_me'])){
//                setcookie('is_login', true, time() + 3600, "/", NULL);
//                setcookie('user_login', 'abc123', time() + 3600, "/", NULL);
//            }
//            echo $_COOKIE;
?>

<html>
    <head>
        <title>
            TRUYEN DATA FORM - PHUONG THUC POST
        </title>
    </head>

    <body>
        <style>
            p.error{color: red;}
        </style>
        
        
        <div class="form-container">
            <h1>LOGIN: </h1>
            <form action="" method="POST">
                <label for="username">Username:</label><br>
                <input type="text" name="username" id="username" 
                       value="<?php echo set_value('username') ?>"/><br>
<?php echo form_error('username'); ?>

                <label for="password">Password:</label><br>
                <input type="password" name="password" id="password"/><br>
<?php echo form_error('password'); ?>

                <input type="checkbox" name="remember_me" id="">
                <label for="remember_me">Save login</label>
                
                <input type="submit" name="btn_login" value="Login"/>
            </form>
        </div>
    </body>
</html>
<!--header("Location: index.php"); -->