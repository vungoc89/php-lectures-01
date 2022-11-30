<?php
/**
 * WHY EMBED PHP IN HTML
 * 1. -> Tạo sự kết hợp giữa cấu trúc html có sẵn và dữ liệu php được xử lý
 * 2. -> Tạo các content được thay đổi trên cùng một cấu trúc website
 */
?>

<?php
$post_title_1 = "This is a post title";
$post_content_1 = "This is a post content 
            <div class='img01'><img alt='docker' src='../images/docker01.jpg'/></div>"
?>
<html>
    <head>
        <title>
            Cú pháp viết php
        </title>
    </head>
</html>

<body>
    <style>
        h1{color: red; }
        
        .item{
            margin-top: 15px;
            margin-bottom: 50px;
        }
        .post-content{
            font-size: 18px;
            color: yellowgreen;
        }
        .img01{width: 100px; height: 100px;}
    </style>

    <div id="content">
        <div class="item">
            <h1 class="post-title"><?php echo $post_title_1 ?></h1>
            <div class="post-content"><?php echo $post_content_1 ?></div>
        </div>
        <hr>
        <!--Có thể dùng cách viết ngắn hơn cho < ?php là < ?= -->
        <div class="item">
            <h1 class="post-title"><?= $post_title_1 ?></h1>
            <div class="post-content"><?= $post_content_1 ?></div>
        </div>

    </div>
</body>


