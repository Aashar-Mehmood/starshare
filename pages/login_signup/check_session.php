<?php
session_start();
if (
  !isset($_SESSION["id"]) || 
  !isset($_SESSION["name"]) ||
  $_SESSION["role"]!=="Admin"
  ) {
  header("location:  ../login_signup/login_signup.php");
}
?>
