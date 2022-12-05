<?php
get_header();
?>

<?php
    $id = (int)$_GET['id'];
    #Get data product theo id
    $item = get_product_by_id($id);
//    show_array($item);
    
?>
<div id="main-content-wp" class="detail-product-page clearfix">
    <div class="wp-inner clearfix">
        <?php get_sidebar(); ?>
        <div id="content" class="fl-right">
            <div class="section" id="info-product-wp">
                <div class="section-detail clearfix">
                    <div class="thumb fl-left">
                        <img src="<?= $item['product_thumb'] ?>" alt="">
                    </div>
                    <div class="detail fl-right">
                        <h3 class="title"><?= $item['product_title'] ?></h3>
                        <p class="price"><?= currency_format($item['product_price']) ?></p>
                        <p class="product-code">Mã sản phẩm: <span><?= $item['product_code'] ?></span></p>
                        <div class="desc-short">
                            <h5>Mô tả sản phẩm:</h5>
                            <p><?= $item['product_desc'] ?></p>
                        </div>
                        <div class="num-order-wp">
                            <span>Số lượng:</span>
                            <input type="text" id="num-order" name="num-order" value="1">
                            <a href="<?= $item['url_add_cart'] ?>" title="" class="add-to-cart">Thêm giỏ hàng</a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="section" id="desc-wp">
                <div class="section-head">
                    <h3 class="section-title">Chi tiết sản phẩm</h3>
                </div>
                <div class="section-detail">
                    <p><?= $item['product_content'] ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<!--end content-->

<?php
get_footer();
?>