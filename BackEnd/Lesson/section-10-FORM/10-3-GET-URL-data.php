<?php

/* 
 * NHẬN DATA URL QUA METHOD GET (=>APPLY TO XÂY DỰNG HỆ THỐNG ROUTE WEBSITE)
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
//=> Dung isset kiem tra btn_search da ton tai(da click hay chua)
if(isset($_GET['btn_search'])){
    show_data($_GET); 

    $tim_kiem = $_GET['tim_kiem'];
    echo $tim_kiem;
}
//$link_href = "?mod=product&act=detail&id=268";
// show_data($_GET);
//GET DỮ LIỆU TỪ URL
$mod = $_GET['mod'];
$act = $_GET['act'];
$id = $_GET['id'];
echo "<br>{$mod}-{$act}-{$id}";

//Warning: Undefined array key "mod" in C:\xampp\htdocs\phpLectures01\BackEnd\Lesson\section-10-FORM\10-3-GET-URL-data.php on line 31
//
//Warning: Undefined array key "act" in C:\xampp\htdocs\phpLectures01\BackEnd\Lesson\section-10-FORM\10-3-GET-URL-data.php on line 32
//
//Warning: Undefined array key "id" in C:\xampp\htdocs\phpLectures01\BackEnd\Lesson\section-10-FORM\10-3-GET-URL-data.php on line 33
?>

<html>
    <head>
        <title>
            TRUYEN DATA FORM - PHUONG THUC GET
        </title>
    </head>
    
    <body>
        <!--Giả sử href của thẻ a là: "?mod=product&act=detail&id=268"-->
        <!--Khi ta click 'Product' => giao dien in ra cac info cua mod, act, id-->
        
        <a href="?mod=product&act=detail&id=268">Product</a>
        <!--<a href= <?= $link_href ?>Product</a>-->
        
        <div class="form-container">
            <h1>SEARCH: </h1>
            <form action="" method="GET"> 
                <!--Khi ta click btn Search => content trong input sẽ ĐƯỢC ĐƯA LÊN URL
                giống như info trong href của thẻ a ở trên-->
                Search: <input type="text" name="tim_kiem"/>
                <input type="submit" name="btn_search" value="Search"/>
            </form>
        </div>
    </body>
</html>
