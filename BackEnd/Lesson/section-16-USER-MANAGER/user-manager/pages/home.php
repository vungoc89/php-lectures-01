<?php
//require 'include/header.php';
//require 'library/func_print.php';
get_header();
?>
<div id="content">
    Homepage
    <?php
    show_data($_SESSION);
    ?>
</div>
<!--end content-->

<?php
//require 'include/footer.php';
get_footer();
?>