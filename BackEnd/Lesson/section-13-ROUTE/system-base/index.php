<?php
require 'library/func_print.php';
require 'data/post.php';
require 'library/func_include.php';
?>

<?php
//require 'include/header.php';
get_header();
?>
       
<?php
$page = !empty($_GET['page']) ? $_GET['page'] : 'home';

$path = "pages/{$page}.php";

if(file_exists($path)){
    require $path;
}else{
    require 'include/404.php';
}


?>
<?php
//require 'include/footer.php';
get_footer();
?>