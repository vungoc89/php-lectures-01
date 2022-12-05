<?php
get_header();
?>

<?php
//Get id in url
$id = (int)$_GET['id'];
//Create func get data
$item = get_page_by_id($id);
?>

<div id="main-content-wp" class="detail-news-page">
    <div class="wp-inner clearfix">
       <?php get_sidebar(); ?>
        <div id="content" class="fl-right">
            <div class="section" id="detail-news-wp">
                <div class="section-head">
                    <h3 class="section-title"><?= $item['page_title'] ?></h3>
                </div>
                <div class="section-detail">
                    <p class="create-date"><?= $item['create_at'] ?></p>
                    <div class="content-news">
                        <?= $item['page_content'] ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--end content-->
<?php
get_footer();
?>