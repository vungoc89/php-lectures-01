<?php

/* 
Func trong file này để định dạng số cho giá tiền sản phẩm.
 * => dùng hàm number_format() của Php
 */
function currency_format($number){
    return number_format($number).'vnđ';
}
