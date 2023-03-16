<?php
session_start();
unset($_SESSION);
setcookie(session_name(), session_id(), time() - 1000, "/");
session_destroy();
header("Location: ./login_signup.php");
