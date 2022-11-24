<?php

/* 
 * HAI CACH VIET THONG BAO ERROR TRONG HTML
 * Cach viet thong bao loi kieu 1: de the <p></p> o ngoai, <?php o trong
 *  <p class="error"><?php if(!empty($error['gender'])) echo "{$error['gender']} <br>" ?></p>
 * 
 * Cach viet thong bao loi kieu 2: de the <?php o ngoai, <p></p> o trong
 * <?php if(!empty($error['gender'])) echo "<p class='error'>{$error['gender']}</p> <br>" ?>
 */
function show_data($data){
    if(is_array($data)){
        echo "<pre>";
        print_r($data);
        echo "<pre>";
    }
}
//show_data($_SERVER); 

//show_data($_POST);
if(isset($_POST['btn_reg'])){
    $error = [];
    if(empty($_POST['username'])){
        $error['username'] = "Ban can nhap username";
    }else{
        $username = $_POST['username'];
    }
    
    if(empty($_POST['gender'])){
        $error['gender'] = "Ban can chon gioi tinh";
    }else{
        $gender = $_POST['gender'];
    }
    
    //Ket luan
    if(empty($error)){
        echo "Gender: {$gender} - Username: {$username} <br>";
    }
    
//Doan duoi day duoc thay bang the <p class="error"><?php if(!empty($error['username'])) echo "{$error['username']}" </p>
//trong html
//    else{ //error != empty => Co loi
//        show_data($error);
//    }
}
?>

<html>
    <head>
        <title>
            TRUYEN DATA FORM - PHUONG THUC POST
        </title>
    </head>
    
    <body>
        <style>
            p.error{color: red;}
        </style>
        <div class="form-container">
            <h1>REGISTER: </h1>
            <form action="" method="POST">
                <label for="username">Ho va ten</label><br>
                <input type="text" name="username" id="fullname"
                       value="<?php if(!empty($username)) echo "{$username}" ?>"/><br>
                <?php if(!empty($error['username'])) echo "<p class='error'>{$error['username']}</p> <br>" ?>
                
                <label >Giới tính</label><br>
                <select name="gender">
                    <option value="">--Select--</option>
                    <option <?php if(!empty($gender)&& $gender == 'Nam') echo "selected='selected'" ?> 
                        value="Nam">Nam</option>
                    <option <?php if(!empty($gender)&& $gender == 'Nữ') echo "selected='selected'" ?> 
                        value="Nữ">Nữ</option>
                </select><br>
               
                <?php if(!empty($error['gender'])) echo "<p class='error'>{$error['gender']}</p> <br>" ?>
                
                <input type="submit" name="btn_reg" value="Register"/>
            </form>
        </div>
    </body>
</html>
