<?php
/**
 * CÁC CÁCH IN DATA TRONG PHP
 * 1.Dùng echo() => in data lên html
 * 2.Dùng print_r() => in data kiểu array
 */
?>
<?php
//Xuất data trong PHP

function show_data($data){
    echo"<pre>";
    print_r($data);
    echo"</pre>";
}
$var01 = 100;
// Dùng {} để biến ko bị ảnh hưởng bởi các biến xung quanh
echo "Value of var01: {$var01} ";

echo "<br>";

//Xuất DỮ LIỆU MẢNG: PRINT_R
$my_arr = array('a', 'b', 'c');
//print_r($my_arr);
echo"<pre>";
print_r($my_arr);
echo"</pre>";

//Xuất DỮ LIỆU MẢNG: PRINT_R (cách viết khác cho array => dùng [])
$my_arr2 = ['A', 'B', 'C'];
echo"<pre>";
print_r($my_arr2);
echo"</pre>";
/**
 * Ket qua: 
  Array
  (
    [0] => A
    [1] => B
    [2] => C
  )
 */
?>
<html>
    <head>
        <title>
            Cú pháp viết php
        </title>
    </head>
</html>

<body>
    <h1>
        Xin chào, tôi là <?php echo "Tôi là php" ?>;
    </h1>

    <h2>
        Can chinh code:  <?php echo "Alt + Shift + F => can chinh code"; ?>
    </h2>

    <style>
        h1{color: red; }
        h2{color: green;}
    </style>

</body>


