<?php
include_once("./db_connection.php");
$email =  $_POST['email'];
$pwd = $_POST['password'];
$userRoles = '';

$query = "SELECT * FROM `users` WHERE `email` = ?;";
$stmt = mysqli_stmt_init($conn);
$prep = mysqli_stmt_prepare($stmt, $query);
mysqli_stmt_bind_param($stmt, "s", $email);
$exec  = mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$row = mysqli_fetch_assoc($result);


if (!$row) {
  echo "Invalid email";
} else if ($result) {
  $hashedPwd = $row['password'];
  echo $pwd;
  if (!password_verify($pwd, $hashedPwd)) {
    echo "Wrong Password";
  } else {
    session_start();
    $_SESSION['id'] = $row['id'];
    $_SESSION['name'] = $row['name'];
    $_SESSION['email'] = $row['email'];
    $_SESSION['profile'] = $row['profile_img'];
    if ($row['is_admin']) {
      $_SESSION['is_admin'] = true;
      $_SESSION['is_fan'] = false;
      header("location: ../../index.php");
    } else if ($row['is_fan']) {
      $_SESSION['is_admin'] = false;
      $_SESSION['is_fan'] = true;
      if ($row['is_star']) {
        setSessionVars($conn, 'star');
      }
      if ($row['is_organizer']) {
        setSessionVars($conn, 'organizer');
      }
      if ($row['is_supplier']) {
        setSessionVars($conn, 'supplier');
      }

      header("location:  ./dashboard.php");
    }
  }
}


function setSessionVars($conn, $role)
{
  $table = $role . "s";
  $query = "SELECT * FROM `$table` WHERE `id` = ?;";
  $stmt = mysqli_stmt_init($conn);
  mysqli_stmt_prepare($stmt, $query);
  mysqli_stmt_bind_param($stmt, "i", $_SESSION['id']);
  mysqli_stmt_execute($stmt);
  $result = mysqli_stmt_get_result($stmt);
  $record = mysqli_fetch_assoc($result);
  $name = $role . "_name";
  $email = $role . "_email";
  $desc = $role . "_desc";
  $profile = $role . "_profile";
  $isRole = "is_" . $role;
  $_SESSION["$name"] = $record["name"];
  $_SESSION["$email"] = $record["email"];
  $_SESSION["$desc"] = $record["description"];
  $_SESSION["$profile"] = $record["profile"];
  $_SESSION["$isRole"] = true;
}
