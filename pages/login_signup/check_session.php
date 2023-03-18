<?php
session_start();
if (
  !isset($_SESSION["id"]) ||
  !isset($_SESSION["name"])
) {
  $_SESSION['error_msg'] = 'You are not logged In';
  header("location:  ../login_signup/login_signup.php");
}
