<?php

/* FILE NÀY LÀ OPTION CỦA THUỘC TÍNH action trong form ở file index(tùy 
 * vào ta có truyền tên file(này) vào action="" hay không.
 * 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
    
 * PHUONG THUC GET
 * -> Thong tin truyen len duoc nhin thay tren url (khac vs POST)
 * -> Cac thao tac giong nhu POST
 * -> Info duoc gui len link qua cau truc key=value va ket noi bang ky tu &
 * $q = $_GET['q'];
 * 
 * 
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
//    show_data($_GET); 
    $tim_kiem = $_GET['tim_kiem'];
    echo $tim_kiem;
}

show_data($_SERVER); 

show_data($_GET);
?>

<html>
    <head>
        <title>
            TRUYEN DATA FORM - PHUONG THUC GET
        </title>
    </head>
    
    <body>
        <div class="form-container">
            <h1>SEARCH report: </h1>
            <p>Bạn đang tìm kiếm: <?= $tim_kiem ?></p>
        </div>
    </body>
</html>
