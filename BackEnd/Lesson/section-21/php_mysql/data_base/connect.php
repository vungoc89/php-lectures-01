<?php 
//Connect DB
$db_name = 'db_users_01';
$conn = mysqli_connect('localhost', 'root', '', $db_name);
if(!$conn){
    echo "Connect NOT success".mysqli_connect_error();
    die();
}else{
    echo "Connect to {$db_name} is success";
}
?>
