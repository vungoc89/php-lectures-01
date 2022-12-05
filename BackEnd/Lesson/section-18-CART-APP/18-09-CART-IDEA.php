<?php

/* 
7. Y tuong luu tru gio hang
 * 1.Info sản phẩm đã mua
 * id
 * product_title
 * product_price
 * product_amount
 * product_thumb (img)
 * sub_total (paid: thành tiền 1 sản phẩm)
 * product_code
 * 
 * 2.Info tong ket don hang
 * num_order(total so luong da mua)
 * total (tong tien: có thể là 1 or nhiều sản phẩm)
 * 
 * LƯU Sản phẩm đã mua: dùng phiên vì user có thể ko mua liên tục, mà mua gián đoạn
 *
 * $_SESSION['cart']['buy'] = array(
 * 1 => array(
 *      ...
 * ),
 */

