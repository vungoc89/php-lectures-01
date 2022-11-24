<?php

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
        $username = $_POST['username'];
    }
    
    if(empty($_POST['password'])){
        $error['password'] = "Ban can nhap password";
    }else{
        $password = $_POST['password'];
    }
    
    //Ket luan
    if(empty($error)){
        echo "Username: {$username} <br> Password: {$password}";
    }
    
//Doan duoi day duoc thay bang the <p class="error"><?php if(!empty($error['username'])) echo "{$error['username']}" </p>
//trong html
//    else{ //error != empty => Co loi
//        show_data($error);
//    }
}
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
                       value="<?php if(!empty($username)) echo "{$username}" ?>"/><br>
                <p class="error"><?php if(!empty($error['username'])) echo "{$error['username']}" ?></p>
                
                <label for="password">Password:</label><br>
                <input type="password" name="password" id="password"/><br>
                <p class="error"><?php if(!empty($error['password'])) echo "{$error['password']}" ?></p>
                
                <input type="submit" name="btn_login" value="Login"/>
            </form>
        </div>
    </body>
</html>
