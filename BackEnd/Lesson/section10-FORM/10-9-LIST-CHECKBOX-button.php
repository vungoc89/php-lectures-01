
<?php

/* 
 * 10-7: LIST CHECKBOX FORM
 * ... dùng để chọn nhiều selection cho một đối tượng.
 * tiết kiệm time)
 * VD: chọn nhiều item để xóa, chọn sở thích, chọn danh mục bài viết, sản phẩm.
 *     CẬP NHẬT GIỎ HÀNG
 * Note: 
 * -> Cách tùy chọn trong cùng loại cần viết cùng tên (name)
 * -> 'name' LƯU TRỮ Ở DẠNG ARRAY
 * -> Giá trị của ... được xác định = value của radio được chọn.
 * -> Nếu ko có lựa chọn nào, data của ... KO được đưa lên server
 *  
 * -> Data đưa lên server dạng array có key là 'name' của nhóm checkbox
 * -> Mảng trả về có key được set auto từ 0, giá trị là 'value' của checkbox được chọn
 * 
 * ----------------------------------------------
 * NHẬN DATA: 
 * 1.Nhóm ... có giá trị mặc định
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
if(isset($_POST['btn_add'])){
    show_data($_POST);
    /**
     * Array
        (
            [cat] => Array
                (
                    [0] => 1
                    [1] => 2
                )

            [btn_add] => Thêm bài viết
        )
     */
    //C1: 
    if(!empty($_POST['cat'])){
        foreach ($_POST['cat'] as $item) {
            echo $item.'<br>';
        }
        
        //C2
        $list_cat = implode(',', $_POST['cat']);
        echo $list_cat;
    }
    
    
}
/**
 * cat[] <=> key mặc định auto tăng từ 0
 * Nếu muốn có key xác định => truyền số nguyên vào []. VD: cat[10]
 */
?>

<html>
    <head>
        <title>
            TRUYEN DATA FORM - LIST CHECKBOX FORM
        </title>
    </head>
    
    <body>
        <div class="form-container">
            <h1>LIST CHECKBOX FORM: </h1>
            <form action="" method="POST">
                
                <input type="checkbox" name="cat[]" value="1" id="cat_1"/>
                <label for="cat_1">Sport</label> <br><br>
                
                <input type="checkbox" name="cat[]" value="2" id="cat_2"/>
                <label for="cat_2"> Social</label> <br><br>
                
                <input type="submit" name="btn_add" value="Thêm bài viết"/><br><br>
            </form>
        </div>
    </body>
</html>

