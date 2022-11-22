<?php

/* 
INPUT TEXT sẽ luôn gửi data lên server dù có dữ liệu hay ko
 */
if(isset($_POST['btn_login'])){
//    print_r($_POST);
//    echo $_POST['username'];
    if(empty($_POST['username'])){
        echo "Khong duoc de trong username";
    }else{
        $username = $_POST['username'];
        echo $username;
    }
}
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
                
                Username: <input type="text" name="username" /><br><br>
                
                Password: <input type="password" name="password" id="password"/><br><br>
                
                <input type="submit" name="btn_login" value="login"/>
            </form>
        </div>
    </body>
</html>