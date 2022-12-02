<?php
/*
  1. CHUAN HOA UPLOAD - CU THE LA FILE IMAGE
 * -> Dung luong file (<20 MB)
 * -> Duoi file ho tro(png, jpg, gif, jpeg)
 * -> Trung lap ten file (thong bao file da ton tai)
 * => dat bien flag de xu ly. 
 * 
  2. HAM HO TRO
 * Get ten fle: basename($_FILES['fileUpload']['name']);
 * Get duoi file: pathinfo($_FILES['fileUpload']['name'], PATHINFO_EXTENSION);
 * 
 *  
 * Chon file anh => KQ la: 
  Array
  (
  [file] => Array
  (
  [name] => docker01.jpg
  [full_path] => docker01.jpg
  [type] => image/jpeg
  [tmp_name] => C:\xampp\tmp\phpB046.tmp (day la path server ao)
  [error] => 0
  [size] => 2208 (kB)
  )

  )
 */
//1. XU LY UPLOAD
require 'data/data.php';

if (isset($_FILES['file'])) {
    //Tao folder chua file upload
    $upload_dir = 'uploads/';

//Duong dan of file sau khi upload
    $upload_file = $upload_dir . ($_FILES['file']['name']);

    show_data($_FILES);
    $error = [];
    //Xu ly CHECK xem upload dung type file hay khong
    $type_allow = ['png', 'jpg', 'gift', 'jpeg'];
    $type = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
    //echo $type
    if (!in_array(strtolower($type), $type_allow)) {
        $error['type'] = "File khong dung dinh dang 'png', 'jpg', 'gift', 'jpeg'";
    } else {
        //Xu ly CHECK upload dung size file(<20MB) => doi ra Byte ~ 29,000,000 bytes
        $file_size = $_FILES['file']['size'];
        if ($file_size > 29000000) {
            $error['file_size'] = "Error size of file is exceed limit 20MB";
        }

        //Xu ly CHECK Trung lap ten file (thong bao file da ton tai)
        if (file_exists($upload_file)) {

        //15-5 XỬ LÝ ĐỔI TÊN FILE
        //B1: Tạo new file
        $file_name = pathinfo($_FILES['file']['name'], PATHINFO_FILENAME);
        $new_file_name = $file_name.' - Copy.';
        echo $file_name;
        
        //B2: Tao new path
        $new_upload_file = $upload_dir.$new_file_name.$type;
        
        //B3: Check ton tai
        $idx = 1;
        while(file_exists($new_upload_file)){
            $new_file_name = $file_name."  - Copy({$idx}).";
            $idx++;
            $new_upload_file = $upload_dir.$new_file_name.$type;
        }
        
        //if while o tren ko xay ra
        $upload_file = $new_upload_file;
        
//        $error['file_exists'] = "File da ton tai tren he thong";
        }
    }

    if (empty($error)) {
        if (move_uploaded_file($_FILES['file']['tmp_name'], $upload_file)) {
            echo "Upload file success <br>";
            echo "<img src ='{$upload_file}' /> <br>";
            echo "<a href='{$upload_file}'>Download: {$_FILES['file']['name']} </a>";
        } else {
            echo "Upload file fail";
        }
    } else {
        show_data($error);
    }
}
?>

<html>
    <head>
        <title>
            UPLOAD FILE ON SEVER USE PHP
        </title>
    </head>

    <body>
        <div class="form-container">
            <h1>UPLOAD FILE: </h1>
            <form enctype="multipart/form-data" action="" method="POST">
                <input type="file" name="file" /> <br>
                <input type="submit" value="Send file"/> <br>
            </form>
        </div>
    </body>
</html>

