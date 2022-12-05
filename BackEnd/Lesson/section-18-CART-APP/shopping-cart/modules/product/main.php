<?php
$cat_id = (int) ($_GET['cat_id']);
//echo $cat_id;

#Get info danh mục
$info_cat = get_info_cat($cat_id);
//show_data($info_cat);

#Get danh sách bài viết
$list_item = get_list_product_by_cat_id($cat_id);
//show_data($list_item);
?>
<?php
get_header();
?>

<div id="main-content-wp" class="category-product-page">
    <div class="wp-inner clearfix">
        <?php get_sidebar(); ?>
        <div id="content" class="fl-right">
            <div class="section list-cat">
                <div class="section-head">
                    <h3 class="section-title"><?= $info_cat['cat_title'] ?></h3>
                    <p class="section-desc">Có <?= count($list_item) ?> sản phẩm trong mục này</p>
                </div>
                <div class="section-detail">
                    <?php
                    if (!empty($list_item)) {
                        ?>
                        <ul class="list-item clearfix">
                            <?php foreach ($list_item as $item) { ?>
                                <li>
                                    <a href="<?= $item['url'] ?>" title="" class="thumb">
                                        <img src="<?= $item['product_thumb'] ?>" alt="">
                                    </a>
                                    <a href="<?= $item['url'] ?>" title="" class="title"><?= $item['product_title'] ?></a>
                                    <p class="price"><?= currency_format($item['product_price'])  ?></p>
                                </li>
                            <?php } ?>
                        </ul>
                    <?php } ?>
                </div>
            </div>
            <div class="section" id="pagenavi-wp">
                <div class="section-detail">
                    <ul id="list-pagenavi">
                        <li class="active">
                            <a href="" title="">1</a>
                        </li>
                        <li>
                            <a href="" title="">2</a>
                        </li>
                        <li>
                            <a href="" title="">3</a>
                        </li>
                    </ul>
                    <a href="" title="" class="next-page"><i class="fa fa-angle-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--end content-->
<?php
get_footer();
?>