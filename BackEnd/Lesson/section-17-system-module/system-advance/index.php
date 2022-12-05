<?php
require 'library/func_print.php';
require 'data/post.php';
require 'library/func_include.php';
?>

<?php
//require 'include/header.php';
//get_header();
?>
       
<?php
//mod is viet tat cua modules
//$page = !empty($_GET['page']) ? $_GET['page'] : 'home';
$mod = !empty($_GET['mod']) ? $_GET['mod'] : 'home';
$act = !empty($_GET['act']) ? $_GET['act'] : 'main';

//$path = "pages/{$page}.php";
$path = "modules/{$mod}/{$act}.php";

if(file_exists($path)){
    require $path;
}else{
    require 'include/404.php';
}


?>
<?php
//require 'include/footer.php';
//get_footer();
?>