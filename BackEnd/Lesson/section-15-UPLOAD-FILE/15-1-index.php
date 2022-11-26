<?php

/*
  1. Vai tro cua upload file
 * -> Chia se tai nguyen download: pdf, doc, ...
 * -> Hien thi info, images
  2. CAU TRUC CUA FORM UPLOAD
  <form enctype="multipart/form-data" action="upload-file.php" method="POST">
  Send this file: <input type="file" name="file" /> <br>
  <input type="submit" value="Send file"/> <br>
  </form>

  3. THONG TIN UPLOAD => thong tin upload duoc save trong bien global $_FILES
 * Bao gom 5 info: 
 * $_FILES['file']['name'] => Ten file
 * $_FILES['file']['type'] => Loai file
 * $_FILES['file']['size'] => Kich thuoc file
 * $_FILES['file']['tmp_name'] => Duong dan tam of file
 * $_FILES['file']['error'] => Thong bao loi
 */

//4. XU LY UPLOAD
require 'data/data.php';

if (isset($_FILES['file'])) {

    show_data($_FILES);
    /**
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
//Tao folder chua file upload
    $upload_dir = 'uploads/';
//Duong dan of file sau khi upload
    $upload_file = $upload_dir . ($_FILES['file']['name']);

//
    if (move_uploaded_file($_FILES['file']['tmp_name'], $upload_file)) {
        echo "Upload file success <br>";
        echo "<a href='$upload_file'>Download: {$_FILES['file']['name']} </a>";
    } else {
        echo "Upload file fail";
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

