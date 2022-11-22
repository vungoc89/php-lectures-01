<?php ?>
<?php //Xuất data trong PHP

 $var01 = 100;
// Dùng {} để biến ko bị ảnh hưởng bởi các biến xung quanh
 echo "Value of var01: {$var01} ";
 
 echo "<br>";
 //Xuất DỮ LIỆU MẢNG: PRINT_R
 $my_arr = array('a', 'b', 'c');
 echo"<pre>";
 print_r($my_arr);
 echo"</pre>";
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


