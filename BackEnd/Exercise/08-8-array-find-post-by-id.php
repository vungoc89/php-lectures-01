<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$list_news = array(
     1 => array(
        'id' => 1001, 
        'post_author' => 'author01',
        'post_title' => 'bai viet 01', 
        'post_content' => 'Day la content 01',
        'post_desc' => 'Content 01',
        'category_id' => 001,
        'post_thumb' => 'img01',
        'post_date' => '01/01/2001',
    ), 
    2 => array(
        'id' => 1002, 
        'post_author' => 'author02',
        'post_title' => 'bai viet 02', 
        'post_content' => 'Day la content 02',
        'post_desc' => 'Content 02',
        'category_id' => 002,
        'post_thumb' => 'img01',
        'post_date' => '01/01/2001',
    ),
 );
function show_array($data) {
    if (is_array($data)) {
        echo"<pre>";
        print_r($data);
        echo"</pre>";
    }
}
function getPostByID($id){
    global $list_news;
    
//    C1: foreach
//    foreach ($list_news as $key => $value) {
//        if($key == $id){
//            return $list_news[$id];
//        }
//    }
    
//    C2: use array_key_exists cua php
    if(array_key_exists($id, $list_news)){
        return $list_news[$id];
    }
    return FALSE;
}

$itemID = getPostByID(2);

show_array($itemID); 


