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
//$upload_dir = 'uploads/';
//Duong dan of file sau khi upload
//    $upload_file = $upload_dir . ($_FILES['file']['name']);
//$url_img = "{$upload_dir}devops.png";
//$url_img = "{$upload_dir}devops01.png";
//$url_img = "{$upload_dir}mobike-electric.png";

function show_data($data) {
    echo"<pre>";
    print_r($data);
    echo"</pre>";
}
/**
 * Bai 3.1: Vẫn chưa xử lý được, đang có vấn đề như sau: 
 * khi vừa mới load vào file, chưa click button Delete File thì chương trình 
 * đã tự động xoá đi một file đầu tiên (?)
 * //=========================================================================
 * Có thể phải dùng cách sau: https://www.youtube.com/watch?v=w-rWCGyK9HE
 * (Remove or Delete Folder or Directory - PHP Filesystem with Ajax JQuery - 7)
 * //=========================================================================
 */
$mydir = 'uploads';

//array_diff: so sánh và trả lại các ele khác nhau giữa 2 mảng ('.', '..' là symbol cho thư mục)
//tức là so sánh $mydir vs '.', '..', file nào khác '.' và '..' thì sẽ được return.
$myfiles = array_diff(scandir($mydir), array('.', '..'));

show_data($myfiles);

//echo(">>>url of img = {$url_img}<br>");
//$url_img = "{$upload_dir}devops.png";
//========================================
foreach ($myfiles as $key => $value) {
//    $tmp = 1;
//    if ($key - 1 >= 1) { // Vì trước đó xoá 2 file ảnh nên chỉ số $key ko bắt đầu từ 1 (mà bắt đầu từ 2(?) nên phải set lại key từ 1 
//        $key_tmp = $key - 1;
//    }
    $url_img = "{$mydir}/{$value}";
//    echo(">>>url of img {$key} = {$url_img}<br>");
//    if (isset($_POST['btn_delete']) && !empty($_POST['btn_delete'])) {
//        if (file_exists($url_img)) {
//            unlink($url_img);
//            echo "Delete file success<br>";
//        } else {
//            echo "Duong dan file ko ton tai<br>";
//        }
//        echo "Da clicked btn";
//    } else{
//        echo "KO clicked btn";
//    }
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
                    <td>STT</td>
                    <td>Image-name</td>
                    <td>Confirm-delete</td>
                </tr>
            </thead>

            <tbody>
                <?php
                $tmp = 0;
                foreach ($myfiles as $key => $value) {
//    $tmp++;
                    if ($key - 1 >= 1) { // Vì trước đó xoá 2 file ảnh nên chỉ số $key ko bắt đầu từ 1 (mà bắt đầu từ 2(?) nên phải set lại key từ 1 
                        $key_tmp = $key - 1;
//        $tmp++;
                        ?>
                        <tr>
                            <td>
                                <label for="btn_delete"><?= $key_tmp ?></label>
                            </td>
                            <td><?= $value ?></td>
                            <td>
                                 <?php
                                           $tmp++;
                                           echo "tmp = {$tmp}<br>";
                                           if ($tmp = $key_tmp) {
                                               if (isset($_POST['btn_delete'])) {
                                                   if (file_exists($url_img)) {
                                                       unlink($url_img);
                                                       echo "Delete file success<br>"; ?>
                                <form action="" method="post">
                                    <input type="submit" name="btn_delete"
                                           accept="" value="Delete File">
                                          
                                   
                                </form>
                                 <?php
                                                   } 
                                               }
                                           }
                                           ?>
                            </td>
                        </tr>

                        <?php
                    }
                }
                ?>
            </tbody>
        </table>

        <h1>Below is the form</h1>
        <!--        <form action="" method="post">
                    <label for="">Confirm by click: </label>
                    <input type="submit" name="btn_delete" value="Delete File">
                </form>-->
    </body>
</html>
