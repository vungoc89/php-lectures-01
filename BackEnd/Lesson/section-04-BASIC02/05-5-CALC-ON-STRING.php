<?php

/* 
 *  Phép toán   Tên             VD              Kết quả
        .       Nối             $str1.$str2     Nối 2 chuỗi
 *      .=      Nối thêm chuỗi  $str1.=$str2    str1 được update = giá trị của nó 
 *                                              và thêm vào phía sau bởi str2

 */
$a = 10;
if($a % 2 == 0){
    echo "{$a} la mot so chan";
    $a++;
    echo "<br/>";
    echo "a = {$a} sau khi tang 1 don vi";
}else{
     echo "{$a} la mot so le";
}
?>

