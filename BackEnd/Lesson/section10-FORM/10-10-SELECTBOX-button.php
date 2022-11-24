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
if(isset($_POST['pay'])){
    show_data($_POST);
    if(empty($_POST['pay'])){
        //Thong bao loi
        echo "Chua chon hinh thuc thanh toan";
    }else{
        $pay = $_POST['pay'];
        echo $pay;
    }
}
?>

<html>
    <head>
        <title>
            TRUYEN DATA FORM - SELECT BOX FORM
        </title>
    </head>
    
    <body>
        <div class="form-container">
            <h1>ĐẶT HÀNG: </h1>
            <form action="" method="POST">
                <label>Hinh thuc thanh toan</label><br>
                <select name="pay">
                    <option value="">--Chọn--</option>
                    <option value="cod" selected="selected">Thanh toán tại nhà</option>
                    <option value="banking">Thanh toán online</option>
                    
                </select>
                <input type="submit" name="btn_order" value="Đặt hàng"/><br><br>
            </form>
        </div>
    </body>
</html>

