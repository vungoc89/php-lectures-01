<?php

/* 
HIDDEN FIELD: 
 * -> Là kiểu data KO HIỂN THỊ trên web giúp ta truyền dữ liệu ngầm
 * -> Dùng để truyền các info được điền sẵn trong form hoặc nhận giá trị 
 * trong quá trình user tương tác đến form.
 */

   /** LOGIN FLOW
    * B1: Kiem tra data
    * B2: Gan data
    * B3: Kiem tra login
    * B4: Xu ly login
    */
function show_data($data){
    if(is_array($data)){
        echo "<pre>";
        print_r($data);
        echo "<pre>";
    }
}

if(isset($_POST['btn_login'])){
//    print_r($_POST);
//    echo $_POST['username'];
    $info_user = array(
        'username' => 'admin',
        'password' => 'abc123',
    );
    $error = array();
    if(empty($_POST['username'])){
//        echo "Khong duoc de trong username";
        $error['username'] = "Khong duoc de trong username";
    }else{
        $username = $_POST['username'];
        
    }
    
    if(empty($_POST['password'])){
//    echo "Khong duoc de trong password";
      $error['password'] = "Khong duoc de trong password";  
    }else{
        $password = $_POST['password'];
    }
   $username = $_POST['username'];
   $password = $_POST['password'];
//   echo "{$username} - {$password}";

   
   if(empty($error)){
        if($username == $info_user['username'] && $password == $info_user['password']){
           $redirect_to = $_POST['redirect_to'];
           header("location:{$redirect_to}");
        }else{
//            echo "Sai ten dang nhap hoac password!";
            $error['login'] = "Sai ten dang nhap hoac password!";
        }
   }
   
   if(!empty($error)){
       show_data($error);
   }
}
?>


<html>
    <head>
        <title>
            TRUYEN DATA FORM - GET DATA FROM HIDDEN FIELD
        </title>
    </head>
    
    <body>
        <div class="form-container">
            <h1>LOGIN: </h1>
            <form action="" method="POST">
                
                Username: <input type="text" name="username" /><br><br>
                
                Password: <input type="password" name="password" id="password"/><br><br>
                <input type="hidden" name="redirect_to" value="10-6-cart.php"/>
                <input type="submit" name="btn_login" value="login"/>
            </form>
        </div>
    </body>
</html>