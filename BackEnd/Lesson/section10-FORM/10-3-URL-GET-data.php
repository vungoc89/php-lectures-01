<?php

/* 
 * NHẬN DATA URL QUA METHOD GET
 * http://localhost/phpLectures01/BackEnd/Lesson/section10-FORM/10-3-GET-search.php?tim_kiem=xin+chao&btn_search=search
 * Chuỗi các tham số bắt đầu = dấu ? và các cặp info ở dạng
 * key = value và kết nối nhau bằng ký tự & 
 * -> giúp ta dựng và lấy data từ URL
 */
function show_data($data){
    if(is_array($data)){
        echo "<pre>";
        print_r($data);
        echo "<pre>";
    }
}

//if($_SERVER['REQUEST_METHOD'] == 'POST'){ //vs GET thi ko dung cach nay
//vì khi enter trên url thì data vẫn đang truyền xuống(?)
//-> Dung isset kiem tra btn_search da ton tai(da click hay chua)
if(isset($_GET['btn_search'])){
    show_data($_GET); 

    $tim_kiem = $_GET['tim_kiem'];
    echo $tim_kiem;
}

//GET DỮ LIỆU TỪ URL

$mod = $_GET['mod'];
$act = $_GET['act'];
$id = $_GET['id'];
echo "{$mod}-{$act}-{$id}";
?>

<html>
    <head>
        <title>
            TRUYEN DATA FORM - PHUONG THUC GET
        </title>
    </head>
    
    <body>
        <a href="?mod=product&act=detail&id=268">Product</a>
        
        <div class="form-container">
            <h1>SEARCH: </h1>
            <form action="" method="GET"> 
                Search: <input type="text" name="tim_kiem"/>
                <input type="submit" name="btn_search" value="search"/>
            </form>
        </div>
    </body>
</html>
