<?php
session_start();
ob_start();
require 'func-for-validate/func-validate.php';
require 'library/func_print.php';
require 'data/post.php';
require 'data/users.php'; //import array $list_users
require 'library/func_include.php';
require 'library/func_users.php';
require 'library/func_redirect.php';
?>

//<?php
////require 'include/header.php';
//get_header();
//
?>

<?php
$page = !empty($_GET['page']) ? $_GET['page'] : 'home';

$path = "pages/{$page}.php";

//COOKIE B2: Check cookie va gui du lieu cho session
if (!empty($_COOKIE['is_login'])) {
    $_SESSION['is_login'] = $_COOKIE['is_login'];
    $_SESSION['user_login'] = $_COOKIE['user_login'];
}

//CHECK LOGIN
if (!is_login() && $page != 'login') {
    redirect_to("?page=login");
}

if (file_exists($path)) {
    require $path;
} else {
    require 'include/404.php';
}
?>

//<?php
////require 'include/footer.php';
//get_footer();
//?>