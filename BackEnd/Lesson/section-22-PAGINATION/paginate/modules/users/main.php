<?php
get_header();
?>

<?php 
//Print data
//$sql = "select * from `tbl_users`";//c1
//$sql = "select * from `tbl_users` where `gender` = 'male'";//c2
//$result = mysqli_query($conn, $sql);
//$list_user = [];
//$num_rows = mysqli_num_rows($result);
//if($num_rows > 0){
//    while($row = mysqli_fetch_assoc($result)){
//        $list_user[] = $row;
//    }
//}

//Print data c2
//$list_user = db_fetch_array("select * from `tbl_users`");

$num_rows = db_num_rows("select * from `tbl_users`");
//$num_rows = db_num_rows("select * from `tbl_users` where `gender` = 'male'");
#===================================================
//So ban ghi tren page
$num_per_page = 3;
//Tong ban ghi
$total_row = $num_rows;

$num_page = ceil($total_row/$num_per_page);

echo "So page = {$num_page}<br>";

//$page = isset($_GET['page'])?(int)$_GET['page'] : 1;
//$start = ($page - 1)* $num_per_page;
if(isset($_GET['page'])){
    $page = (int)$_GET['page'];
    $start = ($page - 1)*$num_per_page;
}else{
    $start = 1;
}

//echo "Trang = {$page}<br>";
//echo "Bat dau tai index = {$start}<br>";

$list_user = get_users($start, $num_per_page);
//$list_user = get_users($start, $num_per_page, "`gender` = 'male'");

//$list_user = db_fetch_array("select * from `tbl_users` limit {$start}, {$num_per_page}");
#===================================================
foreach ($list_user as &$user){ //CẬP NHẬT THEO THAM CHIẾU(KO CÓ & SẼ LỖI)
    $user['url_update'] = "?mod=users&act=update&id={$user['user_id']}";
    $user['url_delete'] = "?mod=users&act=delete&id={$user['user_id']}"; 
//    show_data($user);//ok
}
//=============================
unset($user); //===> ?
//=============================
//show_data($list_user);//ok


?>
<div id="content">
    <a class="add_new" href="?mod=users&act=add">Them moi</a>
    <style>
        .list_user{
    width: 100%;
}
        .list_user thead tr td{
            font-weight: bold;
            border-bottom: 3px solid #ccc;
           
        }
        .list_user tr td{
            border-bottom: 1px solid #ccc;
            padding: 8px 15px; 
        }
    </style>
    <h1>Danh sach thanh vien</h1>    
    <?php 
        if(!empty($list_user)){
    ?>
    <table class="list_user">
        <thead>
            <tr>
                <td>STT</td>
                <td>ID</td>
                <td>Fullname</td>
                <td>Username</td>
                <td>Email</td>
                <td>Gender</td>
                <td>Action</td>
            </tr>
        </thead>
        <tbody>
            <?php 
            $tmp = $start;
                foreach ($list_user as $user){
                    $tmp++;
            ?>
            <tr>
                <td><?= $tmp; ?></td>
                <td><?= $user['user_id']; ?></td>
                <td><?= $user['fullname']; ?></td>
                <td><?= $user['username']; ?></td>
                <td><?= $user['email']; ?></td>
                <td><?= show_gender($user['gender']); ?></td>
                <td>
              
                    <a href="<?php echo $user['url_update']; ?>"> Update</a> |
                    <a href="<?php echo $user['url_delete']; ?>"> Delete</a> 
                </td>
            </tr>
          <?php 
                }
            ?>
        </tbody>
    </table>
   
   <?php 
   echo get_pagging($num_page, $page, "?mod=users&act=main");
   ?>
   
    
    <p class="num_rows">Có <?= $num_rows; ?> members </p>
    
    <div class="clearfix"></div>
    <?php 
        }
        ?>
</div>
<!--end content-->
<?php
get_footer();
?>