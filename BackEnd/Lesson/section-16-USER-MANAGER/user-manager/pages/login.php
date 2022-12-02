<?php
//require 'func-for-validate/func-validate.php';

//require 'data/users.php'; //import array $list_users
//require 'library/func_redirect.php';
/* 
 */
if(isset($_POST['btn-login'])){
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
//                echo "{$username}<br>";
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
//                echo "{$password}<br>";
               }
    }
    //Ket luan
    if(empty($error)){
//        echo "Username: {$username} <br> Password: {$password} <br>";
        if(check_login($username, $password)){
            echo "Login success !";
            //Luu tru phien dang nhap
            $_SESSION['is_login'] = true;
            $_SESSION['user_login'] = $username;
            
            //COOKIE B1: Save data login to cookie (//COOKIE B2:trong index.php: Check cookie va gui du lieu cho session)
             if(isset($_POST['remember_me'])){
//              echo $_POST['remember_me'];
//                die(); // stop 
                setcookie('is_login', true, time() + 3600, "/");
                setcookie('user_login', $username, time() + 3600, "/");
                
            }
            //Chuyen huong vao trong system
            redirect_to("?page=home");
            
        }else{
            $error['account'] = "Username hoac password khong dung hoac khong ton tai";
        }
    }
   }
?>

<html>
    <head>
        <title>Trang đăng nhập</title>
 
        <link href="public/css/reset.css" rel="stylesheet" type="text/css"/>
        <!--<link href="public/css/style.css" rel="stylesheet" type="text/css"/>-->
        <link href="public/css/login.css" rel="stylesheet" type="text/css"/>
    </head>

    <body>
         <style>
            p.error{color: red;}
        </style>
        <div class="wp-form-login">
            <h1><strong>LOGIN</strong> </h1>
            <form id="form-login" action="" method="post">

                <input type="text" name="username" id="username" value="<?php echo set_value('username') ?>" placeholder="Username" />
                 <?php echo form_error('username'); ?>
                
                <input type="text" name="password" id="password" value="" placeholder="Password" />
                 <?php echo form_error('password'); ?>
                
                 <input type="checkbox" name="remember_me" id="">
                <label for="remember_me">Save login</label>
                
                <input type="submit" name="btn-login" id="btn-login" value="Đăng nhập">
                <?php echo form_error('account'); ?>
            </form>
            <a href="" id="miss-pass">Miss password?</a>
        </div>
    </body>
</html>