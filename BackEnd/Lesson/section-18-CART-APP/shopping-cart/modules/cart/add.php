<?php

/*

 */
#Get info product can them vao cart
$id = (int) $_GET['id'];
$item = get_product_by_id($id);

add_cart($id);

//show_data($_SESSION['cart']);

redirect_to("?mod=cart&act=show");
#Add info vao cart
//$qty = 1;
//if (isset($_SESSION['cart']) && array_key_exists($id, $_SESSION['cart']['buy'])) {
//    $qty = $_SESSION['cart']['buy'][$id]['qty'] + 1; // CHUA RO ?
//    //'cart', 'buy' Ở ĐÂU RA ? => đây là các data ta tự thêm vào mảng $_SESSION
//}
//$_SESSION['cart']['buy'][$id] = [
//    'id' => $item['id'],
//    'product_title' => $item['product_title'],
//    'product_price' => $item['product_price'],
//    'product_code' => $item['product_code'],
//    'product_thumb' => $item['product_thumb'],
//    'qty' => $qty,
//    'sub_total' => $item['product_price'] * $qty,
//];
//
//
//
//$numb_order = 0;
//$total = 0;
//foreach ($_SESSION['cart']['buy'] as $item){
//    $numb_order += $item['qty'];
//    $total += $item['sub_total'];
//}
//
//$_SESSION['cart']['info'] = [
//  'num_order' => $numb_order,
//    'total' => $total,
//];
//
//show_data($_SESSION['cart']);
?>
