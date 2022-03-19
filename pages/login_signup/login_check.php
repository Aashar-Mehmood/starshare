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


if (mysqli_num_rows($result) < 1) {
  echo "<script>alert('Invalid email')</script>";
  header("Refresh:0; URL = ./login_signup.php");
} else {
  $row = mysqli_fetch_assoc($result);
  $hashedPwd = $row['password'];
  echo $pwd;
  if (!password_verify($pwd, $hashedPwd)) {
    echo "<script>alert('Wrong Password')</script>";
    header("Refresh:0; URL = ./login_signup.php");
  } else {
    session_start();
    $_SESSION['id'] = $row['id'];
    $_SESSION['name'] = $row['name'];
    $_SESSION['email'] = $row['email'];
    $_SESSION['profile_img'] = $row['profile_img'];
    $_SESSION['is_star'] = false;
    $_SESSION['is_organizer'] = false;
    $_SESSION['is_supplier'] = false;
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

      header("location: ./dashboard.php");
    }
  }
}


function setSessionVars($conn, $role)
{
  $table = $role . "s";
  $query = "SELECT * FROM `$table` WHERE `u_id` = ?;";
  $stmt = mysqli_stmt_init($conn);
  mysqli_stmt_prepare($stmt, $query);
  mysqli_stmt_bind_param($stmt, "i", $_SESSION['id']);
  mysqli_stmt_execute($stmt);
  $result = mysqli_stmt_get_result($stmt);
  $record = mysqli_fetch_assoc($result);
  $name = $role . "_name";
  $email = $role . "_email";
  $desc = $role . "_description";
  $profile = $role . "_profile_img";
  $isRole = "is_" . $role;
  $_SESSION["$name"] = $record["name"];
  $_SESSION["$email"] = $record["email"];
  $_SESSION["$desc"] = $record["description"];
  $_SESSION["$profile"] = $record["profile_img"];
  $_SESSION["$isRole"] = true;
}
