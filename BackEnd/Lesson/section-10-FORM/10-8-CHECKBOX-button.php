
<?php

/* 
 * 10-7: CHECKBOX FORM
 * Check button dùng để tùy chọn từ một nhóm các tùy chọn cùng loại
 * Note: 
 * -> Cách tùy chọn trong cùng loại cần viết cùng tên (name)
 * -> Giá trị của check_box được xác định = value của radio được chọn.
 * -> Nếu ko có lựa chọn nào, data của check_box KO được đưa lên server
 * -> Thiết lập giá trị mặc định => check_box thường KO có giá trị mặc định 
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
    if(isset($_POST['rules'])){
        $rules = $_POST['rules'];
        echo $rules;
    }else{
        echo "You must agree rules";
    }
}

//TH2: CÓ checked
//Code: như TH1
?>

<html>
    <head>
        <title>
            TRUYEN DATA FORM - CHECKBOX FORM
        </title>
    </head>
    
    <body>
        <div class="form-container">
            <h1>CHECKBOX FORM: </h1>
            <p style="width: 400px; height: 100px; overflow-y: scroll;">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
            </p>
            <form action="" method="POST">
                <!--<input type="radio" name="gender" value="male"/>-->
                <input type="checkbox" name="rules" value="yes"/>
                <label>Agree</label><br><br>
                <input type="submit" name="btn_reg" value="Register"/><br><br>
            </form>
        </div>
    </body>
</html>

