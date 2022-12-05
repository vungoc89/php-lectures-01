<?php
$cat_id = (int)($_GET['cat_id']);
//echo $cat_id;
?>
<?php
get_header('product');
?>

<div id="content">
    <h1>Danh sach san pham - Danh muc <?= $cat_id ?> </h1>           
</div>
<!--end content-->
<?php
get_footer();
?>