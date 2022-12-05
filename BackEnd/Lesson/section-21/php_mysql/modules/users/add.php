<?php //
get_header();
?>

<?php
if (isset($_POST['btn_reg'])) {
    $error = [];
    $success = [];
    #==================================
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
    if (empty($_POST['username'])) {
        $error['username'] = "Ban can nhap username";
    } else {
        if (!(strlen($_POST['username']) >= 6 && strlen($_POST['username']) <= 32)) {
            $error['username'] = "Username tu 6 -> 32 ky tu";
        } else {
//            $pattern = "/^[A-Za-z0-9_\.]{6,32}$/";
//            if(!preg_match($pattern, $_POST['username'], $matchs)){
            if (!is_username($_POST['username'])) {
                $error['username'] = "Username phai co ky tu, chu so, dau cham, dau _, tu 6 den 32 ky tu";
            } else {
                $username = $_POST['username'];
//                echo "{$username}<br>";
            }
        }
    }
    #==================================
    if (empty($_POST['gender'])) {
        $error['gender'] = "Ban can nhap gender";
    } else {
        $gender = $_POST['gender'];
    }

    #==================================
    #CHECK EMAIL
    if (empty($_POST['email'])) {
        $error['email'] = "Ban can nhap email";
    } else {
        //https://stackoverflow.com/questions/19605150/regex-for-password-must-contain-at-least-eight-characters-at-least-one-number-a
//        $pattern = "/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[#$@!%&*?])[A-Za-z\d#$@!%&*?]{8,30}$/";
//            if(!preg_match($pattern, $_POST['password'], $matchs)){
        if (!is_email($_POST['email'])) {
            $error['email'] = "Email ko dung dinh dang";
        } else {
            $email = $_POST['email'];
//                echo "{$email}<br>";
        }
    }
    #==================================
    if (empty($_POST['password'])) {
        $error['password'] = "Ban can nhap password";
    } else {
        //https://stackoverflow.com/questions/19605150/regex-for-password-must-contain-at-least-eight-characters-at-least-one-number-a
//        $pattern = "/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[#$@!%&*?])[A-Za-z\d#$@!%&*?]{8,30}$/";
//            if(!preg_match($pattern, $_POST['password'], $matchs)){
        if (!is_password($_POST['password'])) {
            $error['password'] = "Password ko co space, min 8 ky tu, max 30 ky tu, it nhat 1 chu hoa, 1 chu thuong, 1 so , 1 ky tu dac biet";
        } else {
            $password = md5($_POST['password']);
//                echo "{$password}<br>";
        }
    }
    //Ket luan
    if (empty($error)) {
        
    } else {
        
    }
//CONNECT DB: Ket luan
    if (empty($error)) {
        $sql = "insert into tbl_users (fullname, username, email, password, gender)"
                . "values ('{$fullname}', '{$username}','{$email}','{$password}','{$gender}')";
        if (mysqli_query($conn, $sql)) {
//            echo "Add data is successed";
            $success['success'] = "Add data is successed";
        }else{
            echo "Error!".mysqli_errno($conn);
        }
    } else {
        //Show error array
        show_data($error);
    }
}
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
            }
            #btn_reg{
                margin-top: 20px;
                display: block;
                padding: 9px 10px;
                text-align: center;
                border: none;
                width: 100%;
                background: orange;
                transform:uppercase ;
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
            <input type="text" name="fullname" id="fullname" value="<?php echo set_value('fullname') ?>" placeholder="Fullname" />
            <?php echo form_error('fullname'); ?>

            <label for="username">Ten dang nhap</label>
            <input type="text" name="username" id="username" value="<?php echo set_value('username') ?>" placeholder="Username" />
            <?php echo form_error('username'); ?>

            <label for="email">Email</label>
            <input type="text" name="email" id="email" value="" placeholder="Email" />
            <?php echo form_error('email'); ?>

            <label for="password">Mat khau</label>
            <input type="text" name="password" id="password" value="" placeholder="Password" />
            <?php echo form_error('password'); ?>

            <select name="gender" id="">
                <option value="">--Chon gioi tinh--</option>
                <option value="male">Nam</option>
                <option value="female">Nu</option>
            </select>
            <?php echo form_error('gender'); ?>
            <input type="submit" name="btn_reg" id="btn_reg" value="Đăng ký">

        </form>

    </div>
<?php
   get_footer();
?>