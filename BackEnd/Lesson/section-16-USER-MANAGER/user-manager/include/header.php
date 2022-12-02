<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>
<html>
    <head>
        <title>He thong dieu huong co ban</title>
        <link href="public/css/reset.css" rel="stylesheet" type="text/css"/>
        <link href="public/css/style.css" rel="stylesheet" type="text/css"/>
        
    </head>
    
    <body>
        <div id="wrapper">
            <div id="header">
                <a href="logo">PHP COURSE</a>
                <div id="user-login">
                   
                    <p>Xin chao<strong><?php if(is_login()) echo info_user('fullname'); ?> </strong>(<a href="?page=logout">Exit</a>)</p>
                </div>
                <div id="header">
                    <ul id="main-menu">
                        <li><a href="?page=home">Homepage</a></li>
                        <li><a href="?page=intro">Introduction</a></li>
                        <li><a href="?page=post">News</a></li>
                        <li><a href="?page=product">Product</a></li>
                        <li><a href="?page=courses">Courses</a></li>
                        <li><a href="?page=contact">Contact</a></li>
                    </ul>
                </div>
            </div>
            <!--end header-->