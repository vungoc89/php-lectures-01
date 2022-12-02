<?php
require 'lib/show_data.php';
require 'lib/func_get_html.php';
//require 'inc/header.php';//C1
get_header();//C2
?>

<div id="content">
    Home
    <?php
    $data = [1, 2, 4, 5];
    show_data($data);
    ?>
</div>

<?php
//require 'inc/footer.php';//C1
get_footer();//C2
?>   