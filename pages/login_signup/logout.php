<?php session_start();
session_destroy();
session_start();
$_SESSION['success_msg'] = 'Logged Out';
header("Location: ./login_signup.php");
