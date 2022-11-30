<?php

/**
 * BIEN CO TAM VUC TOAN CUC (global)
   $a = 10;
 * $b = 20;
 * function sum(){
    * global $a, $b;
    * return $a + $b;
 * }
 * 
 * hoac
 * 
 * function sum(){
 *      return $GLOBALS['a'] + $GLOBALS['b'];
 * }
 */

$a = 100;
$b = 200;
function sum(){
    global $a, $b;
    return $a + $b;
}
$sum = sum();

echo "Sum = {$sum}<br>"; //Sum = 300
//========================================
function sum2(){
     return $GLOBALS['a'] + $GLOBALS['b'];
}
$sum2 = sum2();
echo "Sum = {$sum2}<br>"; //Sum = 300