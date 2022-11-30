<?php

/* 
Print info user lên giao diện html: 
 * info user được lưu trong :$fullname, $username, $mail
 */
$fullname = 'fullname01';
$username = 'username01';
$mail = 'username01@gmail.com';
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
    </head>
    <body>
        <style>
            p{
                font-size: 18px;
                color: brown;
            }
            p span{
                font-size: 30px;
                color: aqua;
            }
        </style>
        <p>Họ và tên: <span><?= $fullname ?></span></p>
        <p>Username: <span><?= $username ?></span></p>
        <p>EMail: <span><?= $mail ?></span></p>
    </body>
</html>
