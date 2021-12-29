<?php
session_start();
if (!isset($_SESSION["id"]) || !isset($_SESSION["name"])) {
  header("location: pages/login_signup/login_signup.php");
}
?>
