<?php


$submitError = false;

if (!isset($_POST["signup"])) {
  echo "<script>alert('Error occured while submitting form')</script>";
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
    echo "<script>alert('Fill all the fields')</script>";
    $submitError = true;
  } else {
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      echo "<script>alert('Enter a valid email address')</script>";
      $submitError = true;
    }
    if ($userPwd !== $confirmUserPwd) {
      echo "<script>alert('Passwords does not match')</script>";
      $submitError = true;
    }
  }
}

if ($submitError == true) {
  header('Refresh:0; URL=./login_signup.php?register=failed');
} else {

  include_once('./db_connection.php');

  $existingEmails = mysqli_num_rows(
    mysqli_query(
      $conn,
      "SELECT id FROM users WHERE email = '$email';"
    )
  );
  if ($existingEmails > 0) {
    echo "<script>alert('Email already used')</script>";
    header('Refresh:0; URL=./login_signup.php?register=failed');
    exit();
  }

  $hashedPwd = password_hash($userPwd, PASSWORD_DEFAULT);

  $query = "INSERT INTO `users`(`name`, `email`, `password`) VALUES (?, ?, ?);";
  $stmt = mysqli_stmt_init($conn);
  $prepare = mysqli_stmt_prepare($stmt, $query);
  $bind = mysqli_stmt_bind_param($stmt, "sss", $name, $email, $hashedPwd);
  $executed = mysqli_stmt_execute($stmt);
  mysqli_stmt_close($stmt);

  if (!$executed) {
    echo "<script>alert('Registration Failed')</script>";
  } else {
    echo "<script>alert('Registered successfully')</script>";
    header('Refresh:0; URL=./login_signup.php?register=succeeded');
  }
}
