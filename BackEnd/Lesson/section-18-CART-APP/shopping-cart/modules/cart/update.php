<?php

if(isset($_POST['btn_update_cart'])){
//    show_data($_POST);//ok
    update_cart($_POST['qty']);
    redirect_to("?mod=cart&act=show");
}
    
