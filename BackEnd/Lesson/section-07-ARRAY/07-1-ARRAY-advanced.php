<?php

/* 
 * <?php 
 *      $list_course = array('html', 'css', 'jquery');
 *  ?>

 */

//Mang 1 chieu kieu key => value
$list_even = array(0 => 0, 1 => 2, 2 => 4, 3 => 6, 4 => 8, 5 => 10); 

//Mang nhieu chieu danh sach thanh vien

/**
 * CAU TRUC MANG:
 * KEY      KEY 1           KEY 1           KEY 1 ...
 * VALUE    VALUE 1         VALUE 1         VALUE 1 ...
 * 
 * KEY: Có thể là CHUỖI hoặc SỐ NGUYÊN, dùng để phân biệt các ele.
 * VALUE: giá trị của ele.
 * (Key, Value): cặp info của mỗi ele.

 * 
 * //================================================
 * TYPE 1: MẢNG RỖNG : DÙNG LÀM MẢNG KHỞI TẠO
 * $error = array();
 * 
 * TYPE 2: Mảng với KEY mặc định
 * Nếu ko khai báo key thì key mặc định sẽ được tạo từ số 0 -> n phần tử
 * (tức là với array, nếu ko khai báo key thì vẫn luôn có key ngầm chạy )
 * $list_even = array(0 => 0, 1 => 2, 2 => 4, 3 => 6, 4 => 8, 5 => 10);
 * Cách viết rút gọn: 
 * $list_even = array(0, 2, 4, 6, 8, 10);
 * 
 * TYPE 3: Mảng với KEY xác định
 * Key      id      name        email
 * Value    1       name01      email01
 */
function show_data($data){
    echo"<pre>";
    print_r($data);
    echo"</pre>";
}

$info = array(
    'id' => 1, 
    'fullname' => 'abc', 
    'email' => 'abc@gmail.com'
    );

 echo"<pre>";
 print_r($info);
 echo"</pre>";
 
 /** Ket qua: 
    Array
    (
        [id] => 1
        [fullname] => abc
        [email] => abc@gmail.com
     )
*/
 
// THÊM PHẦN TỬ CHO MẢNG
 $info['phone'] = '0123456789';

 echo"<pre>";
 print_r($info);
 echo"</pre>";
 /** Ket qua: 
   Array
    (
        [id] => 1
        [fullname] => abc
        [email] => abc@gmail.com
        [phone] => 0123456789
    )
*/

 // THEM PHAN TU KEY MAC DINH
 $list_prime = array(2, 3, 5, 7); 
 $list_prime[] = 11;
  echo"<pre>";
 print_r($list_prime);
 echo"</pre>";
 
 /**
 Array
(
    [0] => 2
    [1] => 3
    [2] => 5
    [3] => 7
    [4] => 11
)
  */
 
 //TRUY XUAT PHAN TU : dung key
 //Lay fullname
 $fullname = $info['fullname'];
 echo $fullname;
 
 //CAP NHAT THONG TIN TRONG MANG
 $info['fullname'] = 'update_abc';
 echo"<pre>";
 print_r($info);
 echo"</pre>";
 
 //DELETE
 //Xoa mang: unset($info);
 //Xoa phan tu trong mang: unset($info['email']);
 
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
 
// XÓA 1 phan tu trong mang nhieu chieu: unset($list_user[1]);
//XÓA 1 field cua phan tu trong mang nhieu chieu: unset($list_user[1]['age']);