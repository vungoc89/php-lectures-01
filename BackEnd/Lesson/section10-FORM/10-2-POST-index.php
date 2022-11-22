<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.

 */
function show_data($data){
    if(is_array($data)){
        echo "<pre>";
        print_r($data);
        echo "<pre>";
    }
}
show_data($_SERVER); 

show_data($_POST);
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
            <form action="10-2-POST-login.php" method="POST">
                Name: <input type="text" name="username"/><br><br>
                Password: <input type="password" name="password"/><br><br>
                <input type="submit" name="btn_login" value="login"/>
            </form>
        </div>
    </body>
</html>
