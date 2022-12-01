<?php
/*
 * ==========================================================
  INPUT TEXT sẽ luôn gửi data lên server dù có dữ liệu hay ko
 * ==========================================================
 */

require 'func-for-validate/func-validate.php';

if (isset($_POST['btn_login'])) {
    if (empty($_POST['username'])) {
        echo "Khong duoc de trong username";
    } else {
        $username = $_POST['username'];
    }
    
    if (empty($_POST['password'])) {
        echo "Khong duoc de trong password";
    } else {
      
        $password = $_POST['password'];   
    }
//     echo "{$username} -- {$password} <br>";
}

echo "{$username} -- {$password} <br>";
?>


<html>
    <head>
        <title>
            TRUYEN DATA FORM - GET DATA FROM TEXTBOX
        </title>
    </head>

    <body>
        <div class="form-container">
            <h1>LOGIN: </h1>
            <form action="" method="POST">
                Username: <input type="text" name="username" value="<?php if(!empty($username)) echo "{$username}" ?>"/> <br><br>

                Password: <input type="password" name="password" id="password"/><br><br>

                <input type="submit" name="btn_login" value="LOGIN - Đăng nhập"/>
            </form>
        </div>
    </body>
</html>