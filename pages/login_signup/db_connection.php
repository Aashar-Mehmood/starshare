<?php
if ($_SERVER['SERVER_NAME'] === 'localhost') {
  $host = "127.0.0.1";
  $user = "root";
  $pwd = "";
  $db = "starshare";
} else {
  $host = "sql109.epizy.com";
  $user = "epiz_33811284";
  $pwd = 'fWd2tUIT9Bx';
  $db = "epiz_33811284_starshare";
}

$conn = mysqli_connect($host, $user, $pwd, $db);
if (!$conn) {
  echo "Connection Error : " . mysqli_connect_error();
  exit();
}
