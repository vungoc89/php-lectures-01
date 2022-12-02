<?php
session_start();
unset($_SESSION['is_login']);
unset($_SESSION['user_login']);

//After delete so redirect to login
header("Location: login.php");