<?php
require 'lib/show_data.php';
require 'inc/header.php';
?>

<div id="content">
    Home
    <?php
    $data = [1, 2, 4, 5];
    show_data($data);
    ?>
</div>

<?php
require 'inc/footer.php';
?>   