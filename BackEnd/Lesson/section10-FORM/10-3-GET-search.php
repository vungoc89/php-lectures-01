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
 */
function show_data($data){
    if(is_array($data)){
        echo "<pre>";
        print_r($data);
        echo "<pre>";
    }
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
            
        </div>
    </body>
</html>
