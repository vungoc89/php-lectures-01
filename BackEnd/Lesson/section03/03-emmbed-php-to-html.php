
<?php ?>
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
        h2{color: green;}
        .img01{width: 100px; height: 100px;}
    </style>

    <div id="content">
        <h1 class="post-title"><?php echo $post_title_1 ?></h1>
        <div class="post-content"><?php echo $post_content_1 ?></div>
    </div>
</body>


