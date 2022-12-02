<?php
//require 'include/header.php';
get_header();
?>
<div id="content">
    News
    <?php if(!empty($list_post)) { ?>
        <ul class="list_post">
            <?php

            foreach ($list_post as $item) {

            ?>
                <li>
                <a class="post_title"><?= $item['post_title'] ?></a>
                <p class="post_desc"><?= $item['post_desc'] ?></p>
                </li>

            <?php 
            }
            ?>

        </ul>
    <?php } ?>
    
</div>

?>
<?php
//require 'include/footer.php';
get_footer();
?>