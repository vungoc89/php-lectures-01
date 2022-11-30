<?php

/* 
STRING: 
 * -> Lưu văn bản, ký tự bất kỳ.
 * -> Nằm trong cặp dấu nháy đơn ('') hoặc nháy kép("")
 * -> Nằm trong nháy đơn đều là chuỗi, nằm trong nháy kép ngoài ký tự, chuỗi
 * thì còn có thể là biến.
 */

$str01 = "acd #$ 0123";
$str02 = ""; //empty

//Nằm trong nháy kép ngoài ký tự, chuỗi thì còn có thể là biến.
$name = "name01";
$str03 = "My name is:<strong>{$name}</strong>";

