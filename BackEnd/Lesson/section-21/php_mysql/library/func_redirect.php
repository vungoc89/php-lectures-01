<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function redirect_to($url = '?page=home'){
    if(!empty($url)){
        header("Location: {$url} ");
    }
}
