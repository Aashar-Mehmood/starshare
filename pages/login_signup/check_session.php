<?php
session_start();
if (
  !isset($_SESSION["id"]) || 
  !isset($_SESSION["name"]) ||
  $_SESSION["is_admin"]!==true
  ) {
  header("location:  ../login_signup/login_signup.php");
}
?>
