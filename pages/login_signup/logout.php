<?php
  require("./db_connection.php");
  session_start();
  session_destroy();
  header("Location: ./login_signup.php");
?>
