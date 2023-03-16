<?php session_start();
include_once("./db_connection.php");
$errorMsg = '';
$successMsg = '';
$email =  $_POST['email'];
$pwd = $_POST['password'];
$dashboard = './dashboard.php';

$query = "SELECT * FROM `users` WHERE `email` = ?;";
$stmt = mysqli_stmt_init($conn);
$prep = mysqli_stmt_prepare($stmt, $query);
mysqli_stmt_bind_param($stmt, "s", $email);
$exec  = mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);


if (mysqli_num_rows($result) < 1) {
  $errorMsg = 'Invalid Credentials';
} else {
  $row = mysqli_fetch_assoc($result);
  $hashedPwd = $row['password'];
  if (!password_verify($pwd, $hashedPwd)) {
    $errorMsg = 'Invalid Credentials';
  } else {
    $successMsg = 'Logged in Successfully';

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
      $dashboard = '../../index.php';
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
  $contact = $role . "_contact";
  $address = $role . "_address";
  $desc = $role . "_description";
  $profile = $role . "_profile_img";
  $isRole = "is_" . $role;
  $_SESSION["$name"] = $record["name"];
  $_SESSION["$email"] = $record["email"];
  $_SESSION["$contact"] = $record["contact"];
  $_SESSION["$address"] = $record["address"];
  $_SESSION["$desc"] = $record["description"];
  $_SESSION["$profile"] = $record["profile_img"];
  $_SESSION["$isRole"] = true;
}

if (!empty($errorMsg)) {
  $_SESSION['error_msg'] = $errorMsg;
  header("Location:./login_signup.php");
} else if (!empty($successMsg)) {
  $_SESSION['success_msg'] = $successMsg;
  header("Location:" . "$dashboard");
}
