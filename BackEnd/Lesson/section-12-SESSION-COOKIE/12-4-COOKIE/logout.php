<?php
session_start();

setcookie('is_login', true, time() - 3600, "/");
setcookie('user_login', 'abc123', time() - 3600, "/");

unset($_SESSION['is_login']);
unset($_SESSION['user_login']);

//After delete so redirect to login
header("Location: login.php");