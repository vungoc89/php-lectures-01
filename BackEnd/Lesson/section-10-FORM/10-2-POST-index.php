<?php

/* GET DATA FROM METHOD POST
 * -> Use mang he thong $_POST(bien global) de lay data truyen len theo POST
 * -> Get phan tu trong $_POST giong nhu thao tac vs array 
 * ($_POST CHÍNH LÀ MỘT ARRAY)
 * 
 * VD: 
 * $username = $_POST['username'];
 * password = $_POST['password'];
 * 
 * $POST la mang data duoc tra len tu form login trong file index. 
 * 
 * KHI NAO DUNG POST
 * -> Khi KO MUỐN user nhin thay data info(trên URL)
 * -> Khi KO MUỐN gioi han so luong info truyen len server
 * -> Khi upload file len server
 * <!--CHÚ Ý QUAN TRỌNG: 'name' trong input dùng để lấy dữ liệu trên server-->
 */
function show_data($data){
    if(is_array($data)){
        echo "<pre>";
        print_r($data);
        echo "<pre>";
    }
}
show_data($_SERVER); //=> TRẢ VỀ MỘT MẢNG CÁC THÔNG SỐ (DẠNG KEY => VALUE) CỦA SERVER
//Ban đầu: [REQUEST_METHOD] => GET
//
// Kiểm tra đã submit form hay chưa
if($_SERVER['REQUEST_METHOD'] == 'POST'){ 
//    Hứng giá trị data (name va pass) chua trong $_POST
    show_data($_POST);
    $username = $_POST['username'];
    $password = $_POST['password'];

    echo "{$username} - {$password}";
}
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
            <!--CHÚ Ý QUAN TRỌNG: 'name' trong input dùng để lấy dữ liệu trên server xuống-->
            <h1>LOGIN: </h1>
            <!--<form action="10-2-POST-login.php" method="POST">-->
            <form action="" method="POST">
                Name: <input type="text" name="username"/><br><br>
                Password: <input type="password" name="password"/><br><br>
                <input type="submit" name="btn_login" value="Đăng nhập"/>
            </form>
        </div>
    </body>
</html>
