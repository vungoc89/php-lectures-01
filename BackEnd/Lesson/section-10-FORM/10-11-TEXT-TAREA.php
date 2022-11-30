<?php

/*
 * -> Data của text area luôn được đưa lên server dù ko có value
 * -> Dùng empty() để check và xử lý khi data empty 
 */
function show_data($data){
    if(is_array($data)){
        echo "<pre>";
        print_r($data);
        echo "<pre>";
    }
}
if(isset($_POST['btn_add'])){
    if(empty($_POST['post_detail'])){
        //Thong bao error
        echo "Ban can nhap thong tin bai viet";
    }else{
        $post_detail = $_POST['post_detail'];
        echo $post_detail;
    }
}
?>
<html>
    <head>
        <title>
            TRUYEN DATA FORM - TEXTAREA FORM
        </title>
    </head>
    
    <body>
        <div class="form-container">
            <h1>ĐẶT HÀNG: </h1>
            <form action="" method="POST">
                <label>DETAIL: </label><br>
                <textarea name="post_detail" cols="10" rows="20"></textarea><br><br>
                <input type="submit" name="btn_add" value="Thêm bài viết"/><br><br>
            </form>
        </div>
    </body>
</html>
