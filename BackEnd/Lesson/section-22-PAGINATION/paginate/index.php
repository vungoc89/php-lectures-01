<?php
//require 'data_base/connect.php'; //C1
require 'data_base/config.php';//C2
require 'data_base/func_database.php';//C2

require 'library/func_print.php';
require 'data/post.php';
require 'library/func_include.php';
require 'library/func-validate.php';
require 'library/func_redirect.php';
require 'library/func_users.php';
require 'library/func_pagging.php';
?>

<?php
//require 'include/header.php';
//get_header();
?>
       
<?php
db_connect($db_config);
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