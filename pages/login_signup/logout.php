<?php
  require("./db_connection.php");
  session_start();
  unset($_SESSION["id"]);
  unset($_SESSION["name"]);
  header("Location: ./login_signup.php");
?>
