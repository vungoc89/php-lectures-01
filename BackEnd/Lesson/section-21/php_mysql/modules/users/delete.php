<?php

$id = (int)$_GET['id'];

//$sql = "delete from `tbl_users` where `user_id` = {$id}";
//
//if(mysqli_query($conn, $sql)){
//    echo "Deleted user success";
//    redirect_to("?mod=users&act=main");
//}

db_delete("tbl_users", "`user_id`={$id}");
redirect_to("?mod=users&act=main");