<?php
get_header();
?>

<?php 
$sql = "select * from `tbl_users`";
//$sql = "select * from `tbl_users` where `gender` = 'male'";
$result = mysqli_query($conn, $sql);
$list_user = [];
$num_rows = mysqli_num_rows($result);
if($num_rows > 0){
    while($row = mysqli_fetch_assoc($result)){
        $list_user[] = $row;
    }
}

foreach ($list_user as &$user){ //CẬP NHẬT THEO THAM CHIẾU(KO CÓ & SẼ LỖI)
    $user['url_update'] = "?mod=users&act=update&id={$user['user_id']}";
    $user['url_delete'] = "?mod=users&act=delete&id={$user['user_id']}";
    
//    show_data($user);//ok
}

//show_data($list_user);//ok
?>
<div id="content">
    <a class="add_new" href="?mod=users&act=add">Them moi</a>
    <style>
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
            $tmp = 0;
                foreach ($list_user as $user){
                    $tmp++;
            ?>
            <tr>
                <td><?= $tmp; ?></td>
                <td><?= $user['user_id']; ?></td>
                <td><?= $user['fullname']; ?></td>
                <td><?= $user['username']; ?></td>
                <td><?= $user['email']; ?></td>
                <td><?= $user['gender']; ?></td>
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
    <p>Có <?= $num_rows; ?> members </p>
    <?php 
        }
        ?>
</div>
<!--end content-->
<?php
get_footer();
?>