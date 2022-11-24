<?php

/* 
   1. Lay data form dang nhap gom : ten dang nhap, mat khau
 * 
 * 2. Lay data form dang ky gom: ho ten,ten dang nhap, mat khau,
 * email, sdt, gioi tinh
 * 
 * 3. Tao link va lay thong tin tu url
 * <a href='?mod=product&act=main'>San pham</a>
 * Lay info: mod, act
 * 
 * Chua bai: xem 10-6-HIDDEN-FIELD
 */
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
<html>
    <head>
        <title>
            TRUYEN DATA FORM - PHUONG THUC POST
        </title>
    </head>
    
    <body>
        <div class="form-container">
            <h1>LOGIN: </h1>
            <form action="" method="POST">
                Name: <input type="text" name="username"/><br><br>
                Password: <input type="password" name="password"/><br><br>
                <input type="submit" name="btn_login" value="login"/>
            </form>
        </div>
    </body>
</html>


