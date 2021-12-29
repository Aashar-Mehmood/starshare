<?php
include_once("db_connection.php");
$email =  $_POST['email'];
$pwd = $_POST['password'];

$query = "SELECT * FROM `admin` WHERE `email` = ?;";
$stmt = mysqli_stmt_init($conn);
$prep = mysqli_stmt_prepare($stmt, $query);
mysqli_stmt_bind_param($stmt, "s", $email);
$exec  = mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
if (!$result) {
  echo "An error occured" . mysqli_stmt_error($stmt);
} else {
  $row = mysqli_fetch_array($result);
  $hashedPwd = $row[3];
  if ($pwd != $hashedPwd) {
    echo "Wrong Password";
  } else {
    session_start();
    $_SESSION["id"]=$row[0];
    $_SESSION["name"]=$row[1];
    header("location: ../../index.php");
  }
}

mysqli_stmt_close($stmt);

?>
