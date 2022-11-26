<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//show_data($list_post);
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
