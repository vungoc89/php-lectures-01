<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function add_cart($id) {
    global $list_product;
    $item = get_product_by_id($id);

    $qty = 1;
    if (isset($_SESSION['cart']) && array_key_exists($id, $_SESSION['cart']['buy'])) {
        $qty = $_SESSION['cart']['buy'][$id]['qty'] + 1; // CHUA RO ?
        //'cart', 'buy' Ở ĐÂU RA ? => đây là các data ta tự thêm vào mảng $_SESSION
    }
    $_SESSION['cart']['buy'][$id] = [
        'id' => $item['id'],
        'url' => $item['url'],
        'product_title' => $item['product_title'],
        'product_price' => $item['product_price'],
        'product_code' => $item['product_code'],
        'product_thumb' => $item['product_thumb'],
        'qty' => $qty,
        'sub_total' => $item['product_price'] * $qty,
    ];


    update_info_cart();


//show_data($_SESSION['cart']);
}

function update_info_cart() {
    if (isset($_SESSION['cart'])) {
        $numb_order = 0;
        $total = 0;
        foreach ($_SESSION['cart']['buy'] as $item) {
            $numb_order += $item['qty'];
            $total += $item['sub_total'];
        }

        $_SESSION['cart']['info'] = [
            'num_order' => $numb_order,
            'total' => $total,
        ];
    }
}

function get_list_buy_cart() {
    if (isset($_SESSION['cart'])) {
        //Delete one product in cart => ADD A NEW FIELD(url_delte_cart) TO $_SESSION => foreach
//        foreach ($_SESSION['cart']['buy'] as $item){
        foreach ($_SESSION['cart']['buy'] as &$item){
            $item['url_delete_cart'] = "?mod=cart&act=delete&id={$item['id']}"; 
            //C1: use tham tri, C2: use tham chieu &: &$item (putin foreach)
//            $_SESSION['cart']['buy'][$item['id']] = $item; //C1: use tham tri
        }
        return $_SESSION['cart']['buy'];
    }
    return false;
}

function get_num_order_cart() {
    if (isset($_SESSION['cart'])) {

        return $_SESSION['cart']['info']['num_order'];
    }
}

function get_total_cart() {
    if (isset($_SESSION['cart'])) {

        return $_SESSION['cart']['info']['total'];
    }
    return false;
}

function delete_cart($id=NULL){
    IF(isset($_SESSION['cart'])){
        if(!empty($id)){
            unset($_SESSION['cart']['buy'][$id]);
            update_info_cart();
        }else{ //delete all
            unset($_SESSION['cart']);
        }
    }
}

function update_cart($qty){
    foreach ($qty as $id => $new_qty){
        $qty = $_SESSION['cart']['buy'][$id]['qty'] = $new_qty;
        $qty = $_SESSION['cart']['buy'][$id]['sub_total'] = $new_qty * $_SESSION['cart']['buy'][$id]['product_price'];
    }
    update_info_cart();
}