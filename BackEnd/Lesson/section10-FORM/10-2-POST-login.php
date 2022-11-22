<?php

/* 
 * 
 *  * NHAN DATA TU METHOD POST
 * -> Use mang he thong $_POST(bien global) de lay data truyen len theo POST
 * -> Get phan tu trong $_POST giong nhu thao tac vs array 
 * ($_POST chinh la mot array)
 * 
 * VD: 
 * $username = $_POST['username'];
 * password = $_POST['password'];
 * 
 * $POST la mang data duoc tra len tu form login trong file index. 
 * 
 * KHI NAO DUNG POST
 * -> Khi ko muon user nhin thay data info
 * -> Khi ko muon gioi han so luong info truyen len server
 * -> Khi upload file len server
 */
function show_data($data){
    if(is_array($data)){
        echo "<pre>";
        print_r($data);
        echo "<pre>";
    }
}
//show_data($_SERVER); 

// Kiem tra da submit form
if($_SERVER['REQUEST_METHOD'] == 'POST'){ 
//    Hứng giá trị data (name va pass) chua trong $_POST
    show_data($_POST);
    $username = $_POST['username'];
    $password = $_POST['password'];

    echo "{$username} - {$password}";
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
            <h1>LOGIN report: </h1>
        </div>
    </body>
</html>
