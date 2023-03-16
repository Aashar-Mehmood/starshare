<?php
session_start();

$errorMsg = '';
$successMsg = '';

if (!isset($_POST["signup"])) {
  $errorMsg = "Error occured while submitting form";
} else {
  $name = $_POST['fullname'];
  $email = $_POST['email'];
  $userPwd = $_POST['password'];
  $confirmUserPwd = $_POST['cpassword'];
  if (empty($name) || empty($email) || empty($userPwd) || empty($confirmUserPwd)) {
    $errorMsg = 'Fill all the fields';
  } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errorMsg = 'Enter a valid email address';
  } else if ($userPwd !== $confirmUserPwd) {
    $errorMsg = 'Passwords does not match';
  } else {
    include_once('./db_connection.php');
    $existingEmails = mysqli_num_rows(
      mysqli_query(
        $conn,
        "SELECT id FROM users WHERE email = '$email';"
      )
    );
    if ($existingEmails > 0) {
      $errorMsg = 'Email already exist';
    } else {

      $hashedPwd = password_hash($userPwd, PASSWORD_DEFAULT);

      $query = "INSERT INTO `users`(`name`, `email`, `password`) VALUES (?, ?, ?);";
      $stmt = mysqli_stmt_init($conn);
      $prepare = mysqli_stmt_prepare($stmt, $query);
      $bind = mysqli_stmt_bind_param($stmt, "sss", $name, $email, $hashedPwd);
      $executed = mysqli_stmt_execute($stmt);
      mysqli_stmt_close($stmt);
      $newUser = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email';");

      if (mysqli_num_rows($newUser) < 1) {
        $errorMsg = 'Registration Failed';
      } else {
        $newUserArr = mysqli_fetch_assoc($newUser);
        $_SESSION['id'] = $newUserArr["id"];
        $_SESSION['name'] = $newUserArr["name"];
        $_SESSION['is_star'] = false;
        $_SESSION['is_organizer'] = false;
        $_SESSION['is_supplier'] = false;
        $_SESSION['is_admin'] = false;
        $successMsg = 'Registered successfully';
      }
    }
  }
}

if (!empty($errorMsg)) {
  $_SESSION['error_msg'] = $errorMsg;
  header('Location:./login_signup.php?signUpActive=true');
} else if (!empty($successMsg)) {
  $_SESSION['success_msg'] = $successMsg;
  // include_once('../../components/Alert.php');
  header('Location:./dashboard.php');
}
