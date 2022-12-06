<?php //
get_header();
?>

<?php 
    $id = (int)$_GET['id']; 
?>

<?php
if (isset($_POST['btn_update'])) {
    $error = [];
    $success = [];
    #=============Gia su chi update fullname and gender =====================
    if (empty($_POST['fullname'])) {
        $error['fullname'] = "Ban can nhap fullname";
    } else {
        $fullname = $_POST['fullname'];
//        if (!(strlen($_POST['fullname']) >= 6 && strlen($_POST['fullname']) <= 32)) {
//            $error['fullname'] = "Fullname tu 6 -> 32 ky tu";
//        } else {
//            if (!is_fullname($_POST['fullname'])) {
//                $error['fullname'] = "fullname phai co ky tu, chu so, dau cham, dau _, tu 6 den 32 ky tu";
//            } else {
//                $fullname = $_POST['fullname'];
//            }
//        }
    }
    #==================================
   
    #==================================
    if (empty($_POST['gender'])) {
        $error['gender'] = "Ban can nhap gender";
    } else {
        $gender = $_POST['gender'];
    }

    #==================================
    #CHECK EMAIL
   
    #==================================
   
    //Ket luan
    if (empty($error)) {
        
    } else {
        
    }
//CONNECT DB: Ket luan
    if (empty($error)) {
//        $sql = "update `tbl_users` set `fullname` = '{$fullname}', `gender`='{$gender}' where `user_id` = {$id}" ;
//               
//        if (mysqli_query($conn, $sql)) {
////            echo "Add data is successed";
//            $success['success'] = "Update data is successed";
//        }else{
//            echo "Error!".mysqli_errno($conn);
//        }
//    } else {
//        //Show error array
//        show_data($error);
//    }
        
        //c2
        $data = [
            'fullname' => $fullname,
            'gender' => $gender,
        ];
        db_update('tbl_users', $data, "`user_id` = {$id}");
    }
}

//c1
//$sql = "select * from tbl_users where user_id = {$id}";
//$result = mysqli_query($conn, $sql);
//$item = mysqli_fetch_array($result);

//c2
$item = db_fetch_row("select * from tbl_users where user_id = {$id}");
//show_data($item);//OK
?>

    <div id="content">
        <style>
            p.error{color: red;}
            p.success{color: yellowgreen;}
/*            #content{
                min-height: 500px;
            }*/
            #form_reg{
                width: 250px;
            }
            label{
                /*display: block;*/
                margin: 0 0 5px 0;
                
            }
            input{
                display: block;
                margin-bottom: 10px;
            }
            input[type='text'],input[type='email'],input[type='password']{
                padding: 5px 10px;
                border: 1px solid #ccc;
                width: 100%;
            }
            #btn_update{
                margin-top: 20px;
                display: block;
                padding: 9px 10px;
                text-align: center;
                border: none;
                width: 100%;
                background: orange;
                transform:uppercase ;
                cursor: pointer;
            }
            select{
                padding: 6px 10px;
                border: 1px solid #ccc;
                width: 100%;
            }
        </style>
      
        <h1><strong>Add new</strong> </h1>
        <?php if(!empty($success)){
            
            ?>
        <p class="success"><?= $success['success']; ?></p>
        <?php } ?>
        <form id="form_reg" action="" method="POST">

            <label for="fullname">Ho va ten</label>
            <input type="text" name="fullname" id="fullname" value="<?php if(!empty($item['fullname'])) echo $item['fullname']; ?>" placeholder="Fullname" />
            <?php echo form_error('fullname'); ?>

            <select name="gender" id="">
                <option value="">--Chon gioi tinh--</option>
                <option <?php if(isset($item['gender']) && $item['gender'] == 'male')  echo "selected='selected' "?> value="male">Nam</option>
                <option <?php if(isset($item['gender']) && $item['gender'] == 'female')  echo "selected='selected' "?> value="female">Nu</option>
            </select>
            <?php echo form_error('gender'); ?>
            <input type="submit" name="btn_update" id="btn_update" value="Cập nhật">

        </form>

    </div>
<?php
   get_footer();
?>

