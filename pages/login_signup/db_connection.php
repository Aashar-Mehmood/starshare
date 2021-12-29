<?php
$host = "127.0.0.1";
$user = "root";
$pwd = "";
$db = "starshare";

$conn = mysqli_connect($host, $user, $pwd, $db);
if (!$conn) {
  echo "Connection Error : " . mysqli_connect_error();
  exit();
}
