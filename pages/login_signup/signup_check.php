<?php


$submitError = false;

if (!isset($_POST["signup"])) {
  echo "Error occured while submitting form";
  $submitError = true;
} else {
  $name = $_POST['fullname'];
  $email = $_POST['email'];
  $userPwd = $_POST['password'];
  $confirmUserPwd = $_POST['cpassword'];

  if (
    $name == '' || $email  == '' ||
    $userPwd  == '' || $confirmUserPwd == ''
  ) {
    echo "Fill all the fields";
    $submitError = true;
  } else {
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      echo "Enter a valid email address";
      $submitError = true;
    }
    if ($userPwd !== $confirmUserPwd) {
      echo "Passwords does not match";
      $submitError = true;
    }
  }
}

if ($submitError == true) {
  header('Refresh:2; URL=./login_signup.php?register=failed');
} else {

  include_once('./db_connection.php');
  
  $hashedPwd = password_hash($userPwd, PASSWORD_DEFAULT);

  $query = "INSERT INTO `users`(`name`, `email`, `password`) VALUES (?, ?, ?);";
  $stmt = mysqli_stmt_init($conn);
  $prepare = mysqli_stmt_prepare($stmt, $query);
  $bind = mysqli_stmt_bind_param($stmt, "sss", $name, $email, $hashedPwd);
  $executed = mysqli_stmt_execute($stmt);
  mysqli_stmt_close($stmt);

  if (!$executed) {
    echo " Query not executed ";
  } else {
    echo " Data inserted successfully ";
    header('Refresh:2; URL=./login_signup.php?register=succeeded');
  }
}
