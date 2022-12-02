<?php
/*
  1.VÌ SAO CẦN XOÁ FILE:
 * -> Bỏ các file ko còn dùng trên system
 * -> Update file mới
 * -> Giảm tải system

  2.LỆNH XOÁ FILE
 * ->  unlink($file_url)
 * $file_url là đường dẫn of file

  3.ĐỀ BÀI:
 * Xây dựng system quản lý file và save on Database, trong DB đó
 * user có thể chọn và xoá một or many file nếu ko còn use.
 * 
 * 3.1 Đề bài thực hành tự đặt ra: 
 * HIển thị danh sách images trong folder uploads có giao diện như sau:
 * 
 * checkbox        image_file_name     btn_delete
 */

//Tao folder chua file upload
$upload_dir = 'uploads/';
//Duong dan of file sau khi upload
//    $upload_file = $upload_dir . ($_FILES['file']['name']);

//$url_img = "{$upload_dir}devops.png";
//$url_img = "{$upload_dir}devops01.png";
$url_img = "{$upload_dir}mobike-electric.png";


echo(">>>url of img = {$url_img}<br>");

if (isset($_POST['btn_delete']) && !empty($_POST['btn_delete'])) {
     if (file_exists($url_img)) {
//unlink('upload/devops01.png');
        unlink($url_img);
        echo "Delete file success";
    } else {
        echo "Duon dan file ko ton tai";
    }  
}
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Delete file</title>
    </head>
    <body>
        <table>
            <thead>
                <tr>
                    <td>Tick here</td>
                    <td>Image name</td>
                    <td>Confirm delete</td>
                </tr>
            </thead>
            
            <tbody>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
        <form action="" method="post">
            <label for="">Confirm by click: </label>
            <input type="submit" name="btn_delete" value="Delete File">
        </form>
    </body>
</html>
