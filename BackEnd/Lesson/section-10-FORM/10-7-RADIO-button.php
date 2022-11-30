
<?php

/* 
 * 10-7: RADIO FORM
 * Radio button dùng để tùy chọn từ một nhóm các tùy chọn cùng loại
 * Note: 
 * -> Cách tùy chọn trong cùng loại cần viết cùng tên (name)
 * -> Giá trị của radio_button được xác định = value của radio được chọn.
 * -> Nếu ko có lựa chọn nào, data của radio_button KO được đưa lên server
 * -> Thiết lập giá trị mặc định => dùng checked="checked" 
 * trong thẻ html của radio button
 * ----------------------------------------------
 * NHẬN DATA: 
 * 1.Nhóm radio_button có giá trị mặc định
 * <?php $gender = $_POST['gender']; ?>
 * 
 * 2.Nhóm radio_button KO có giá trị mặc định
 * <?php if(isset($_POST['gender'])){ //isset: kiểm tra tồn tại
 *      $gender = $_POST['gender'];
 * }else{
 *      $gender = false;
 * }
 *  ?>
 * ----------------------------------------------
 * VD: 
 * Giới tính: 
 *  - Nam
 *  - Nữ
 * 
 * Hình thức thanh toán: 
 *  - Thanh toán tại nhà
 *  - Thanh toán online

 */
function show_data($data){
    if(is_array($data)){
        echo "<pre>";
        print_r($data);
        echo "<pre>";
    }
}
//show_data($_SERVER); 

//TH1: KO có checked
if(isset($_POST['btn_reg'])){
    show_data($_POST);
    $list_gender = [
      'male' => 'Nam',
      'female' => 'Nữ',
    ];
    if(empty($_POST['gender'])){
        echo "Hãy chọn giới tính";
    }else{
        $gender = $_POST['gender'];
//        echo "{$gender}<br>";
        echo $list_gender[$gender];
    }
}

//TH2: CÓ checked
//Code: như TH1
?>

<html>
    <head>
        <title>
            TRUYEN DATA FORM - RADIO FORM
        </title>
    </head>
    
    <body>
        <div class="form-container">
            <h1>RADIO FORM: </h1>
            <form action="" method="POST">
                <!--<input type="radio" name="gender" value="male"/>-->
                <input type="radio" name="gender" value="male" checked="checked"/>
                <label for="male"> Nam</label> <br><br>
                
                <input type="radio" name="gender" value="female"/>
                <label for="male"> Nữ</label> <br><br>
                
                <input type="submit" name="btn_reg" value="Register"/><br><br>
            </form>
        </div>
    </body>
</html>

