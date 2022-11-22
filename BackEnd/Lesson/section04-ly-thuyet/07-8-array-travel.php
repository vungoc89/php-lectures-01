<?php

/* 
 * <?php 
 *      $list_course = array('html', 'css', 'jquery');
 *  ?>

 */ 

//Mang nhieu chieu danh sach thanh vien

/**
 * KEY: Có thể là CHUỖI hoặc SỐ NGUYÊN
 * Nếu ko khai báo key thì key mặc định sẽ được tạo từ số 0 -> n phần tử
 * (tức là với array, nếu ko khai báo key thì vẫn luôn có key ngầm chạy )
 * MẢNG RỖNG : DÙNG LÀM MẢNG KHỞI TẠO
 * $error = array();
 */

$info = array(
    'id' => 1, 
    'fullname' => 'abc', 
    'email' => 'abc@gmail.com'
    );

 echo"<pre>";
 print_r($info);
 echo"</pre>";
 
 
 //CAU TRUC DUYET MANG (neu ko dung key thi ko can dua key vao vong lap)
// foreach($myArr as $key => $value){
    //$key: key cua phan tu dang duoc duyet
    //$value: gia tri cua phan tu dang duoc duyet
// }
 
 $list_prime = array(2, 3, 5, 7); 
 $tong = 0;
 foreach ($list_prime as $key => $value) {
//     echo $value."<br>";
     echo "${key} => {$value}<br>";
     $tong += $value;
}

echo "Tong: {$tong} ";

//==============================================
$list_user = array(
    1 => array(
        'id' => 1, 
        'fullName' => 'nguyen van a', 
        'age' => 30
    ), 
    2 => array(
        'id' => 2, 
        'fullName' => 'nguyen van b', 
        'age' => 20
    ),
);
 foreach ($list_user as $item) {
    echo"<pre>";
    print_r($item);
    echo"</pre>";
}

 foreach ($list_user as $item) {
    echo $item['id']."<br>";
    echo $item['fullName']."<br>";
    echo $item['age']."<br>";
    echo "<br>==================<br>";
}