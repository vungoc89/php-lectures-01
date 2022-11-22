<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
    
 * PHUONG THUC GET
 * -> Thong tin truyen len duoc nhin thay tren url (khac vs POST)
 * -> Cac thao tac giong nhu POST
 * -> Info duoc gui len link qua cau truc key=value va ket noi bang ky tu &
 * $q = $_GET['q'];
 * 
 * -> GET thì CÓ GIỚI HẠN số lượng info gửi(2000 ký tự)
 * -> Info truyền lên URL có tác dụng cho bookmark, SEO web
 */
function show_data($data){
    if(is_array($data)){
        echo "<pre>";
        print_r($data);
        echo "<pre>";
    }
}

//if($_SERVER['REQUEST_METHOD'] == 'GET'){ //vs GET thi ko dung cach nay
//-> Dung isset kiem tra btn_search da ton tai(da click hay chua)
//-> KHI DUNG isset thi KO truyen file vao action cua form nua.
//(POST cung dung duoc isset: isset($_POST[''btn_search']))
if(isset($_GET['btn_search'])){
    show_data($_GET); 

    $tim_kiem = $_GET['tim_kiem'];
    echo $tim_kiem;
}

?>

<html>
    <head>
        <title>
            TRUYEN DATA FORM - PHUONG THUC GET
        </title>
    </head>
    
    <body>
        <div class="form-container">
            <h1>SEARCH: </h1>
            <form action="" method="GET"> 
                Search: <input type="text" name="tim_kiem"/>
                <input type="submit" name="btn_search" value="search"/>
            </form>
        </div>
    </body>
</html>
