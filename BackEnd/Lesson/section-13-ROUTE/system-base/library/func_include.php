<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function get_header() {
    $path_header = 'include/header.php';
    if(file_exists($path_header))
        require $path_header;
    else{
        echo "No exist {$path_header}";
    }
}
function get_footer() {
    $path_footer = 'include/footer.php';
    if(file_exists($path_footer))
        require $path_footer;
    else{
        echo "No exist {$path_footer}";
    }
}

function get_sidebar() {
    $path_sidebar = 'include/sidebar.php';
    if(file_exists($path_sidebar))
        require $path_sidebar;
    else{
        echo "No exist {$path_sidebar}";
    }
}
