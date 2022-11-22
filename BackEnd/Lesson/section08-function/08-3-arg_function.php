<?php

/**
 * THAM SO HAM NANG CAO
 * 
 * Ham bo tro(co san trong php)
 * -> Lay so luong tham so: func_num_args()
 * -> Lay gia tri tham so ham rieng le: func_get_arg(k)
 * -> Lay mang tham so ham: func_get_args()
 */
function sum_number() {
//    echo func_get_args();
    //0 1 2 3
    $a = func_get_arg(0);
    $b = func_get_arg(1);

    echo "a = {$a} <br> b = {$b} ";
}

sum_number(10, 20);

echo "<br>";
/**
  a = 10
  b = 20
 */
function show_array($data) {
    if (is_array($data)) {
        echo"<pre>";
        print_r($list_args);
        echo"</pre>";
    }
}

function sum_number_02() {
    $list_args = func_get_args();
    $t = 0;
    foreach ($list_args as $value) {
        $t += $value;
    }
//    show_array($list_args);
    echo $t;
}

sum_number_02(10, 20, 30); //60
/**
Array
(
    [0] => 10
    [1] => 20
    [2] => 30

 */
echo "<br>";
//===============================
$list_number = array(2, 4, 6);
function sum_number_03($list_number = array()){
    if(is_array($list_number)){
        $t = 0;
        foreach ($list_number as $value) {
            $t += $value;
        }
        echo $t;
    }
 
}
sum_number_03($list_number); //12
echo "<br>";
//===============================
function myFunction($a1, $a2, $option = array()) {
    
}

//<input type='text' name='' value='' id='' class=''/>
function create_input_text($name, $value, $option = array()){
    $name = func_get_arg(0);
    $value = func_get_arg(1);
    $option = func_get_arg(2);
    if(!empty($option)){
        $id = $option['id'];
        $class  = $option['class'];
    }
    
    show_array($option); 
    
    $input_html = "<input type='text' name='{$name}' value='{$value}' id='{$id}' class='{$class}'/>";
    echo $input_html;
}

create_input_text('username', '', $option = array('id' => 'username', 'class' => 'form_input'));

