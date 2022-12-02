<?php

//XEM content ban đầu(chưa refactor) tại : 11-5-OLD-reuse-validate.php

require 'func-for-validate/func-validate.php';
/* 
 */
function show_data($data){
    if(is_array($data)){
        echo "<pre>";
        print_r($data);
        echo "<pre>";
    }
}
//show_data($_SERVER); 

//show_data($_POST);
if(isset($_POST['btn_login'])){
    $error = [];
    if(empty($_POST['username'])){
        $error['username'] = "Ban can nhap username";
    }else{
        if(!(strlen($_POST['username']) >= 6 && strlen($_POST['username']) <= 32)){
            $error['username'] = "Username tu 6 -> 32 ky tu";
        }else{
//            $pattern = "/^[A-Za-z0-9_\.]{6,32}$/";
//            if(!preg_match($pattern, $_POST['username'], $matchs)){
              if(!is_username($_POST['username'])){
                $error['username'] = "Username phai co ky tu, chu so, dau cham, dau _, tu 6 den 32 ky tu";
            }
            else{   
                $username = $_POST['username'];
                echo "{$username}<br>";
        }
        
    }
    }
    if(empty($_POST['password'])){
        $error['password'] = "Ban can nhap password";
    }else{
        //https://stackoverflow.com/questions/19605150/regex-for-password-must-contain-at-least-eight-characters-at-least-one-number-a
//        $pattern = "/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[#$@!%&*?])[A-Za-z\d#$@!%&*?]{8,30}$/";
//            if(!preg_match($pattern, $_POST['password'], $matchs)){
              if(!is_password($_POST['password'])){
                $error['password'] = "Password ko co space, min 8 ky tu, max 30 ky tu, it nhat 1 chu hoa, 1 chu thuong, 1 so , 1 ky tu dac biet";
            }
            else{   
                $password = $_POST['password'];
                echo "{$password}<br>";
               }
    }
    //Ket luan
    if(empty($error)){
        echo "Username: {$username} <br> Password: {$password} <br>";
    }
   }
   
   //abC@123456
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
                
                <input type="submit" name="btn_login" value="Login"/>
            </form>
        </div>
    </body>
</html>