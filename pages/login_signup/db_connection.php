<?php
$host = "127.0.0.1";
$user = "root";
$pwd = "";
$db = "starshare";

// $host = "sql100.epizy.com";
// $user = "epiz_32164986";
// $pwd = "ouABtsvb5NCeN8";
// $db = "epiz_32164986_starshare";

$conn = mysqli_connect($host, $user, $pwd, $db);
if (!$conn) {
  echo "Connection Error : " . mysqli_connect_error();
  exit();
}
