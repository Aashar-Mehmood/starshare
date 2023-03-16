<?php
$host = "127.0.0.1";
$user = "root";
$pwd = "";
$db = "starshare";

// $host = "localhost";
// $user = "id19811089_aashar";
// $pwd = 'T9YHS%)aOOxM-JAq';
// $db = "id19811089_starshare";

$conn = mysqli_connect($host, $user, $pwd, $db);
if (!$conn) {
  echo "Connection Error : " . mysqli_connect_error();
  exit();
}
