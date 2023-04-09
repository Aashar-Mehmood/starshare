<?php
session_start();
include_once("../db_connection.php");

$errorMsg = "";
$successMsg = "";
$name = $_POST['fullName'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$address = $_POST['address'];
$description = $_POST['description'];

$newPwd = $_POST['newPwd'];
$confirmNewPwd = $_POST['confirmNewPwd'];
$uId = $_SESSION['id'];



if (empty(array_filter(
  [
    $name, $email, $contact, $address,
    $description, $_FILES['profile_avatar']['name'],
    $newPwd
  ]
))) {
  $errorMsg = "Enter a value in any field to update.";
} else {

  if (!empty($_FILES['profile_avatar']['name'])) {

    $allowedImg = array("jpg", "jpeg", "png", "svg", "gif");
    $random = rand(10, 1000);
    $profileImg = $random . $_FILES['profile_avatar']['name'];
    $destination = '../../../assets/media/profiles/' . $profileImg;
    $extension = strtolower(pathinfo($profileImg, PATHINFO_EXTENSION));
    $size = filesize($_FILES['profile_avatar']['tmp_name']);
    if (!in_array($extension, $allowedImg)) {
      $errorMsg = "Only jpg, jpeg, png, svg and gif files are allowed";
    } else if ($size > 1100000) {
      $errorMsg = "Files upto 1.1 Mb are allowed only";
    } else {
      $uploaded = move_uploaded_file($_FILES['profile_avatar']['tmp_name'], $destination);
      $profileVal = "assets/media/profiles/" . $profileImg;
      updateField($conn, 'profile_img', $profileVal);
    }
  }

  if ($name != "") {
    updateField($conn, 'name', $name);
  }
  if ($email != "") {
    updateField($conn, 'email', $email);
  }
  if ($contact != "") {

    updateField($conn, 'contact', $contact);
  }
  if ($address != "") {

    updateField($conn, 'address', $address);
  }
  if ($description != "") {

    updateField($conn, 'description', $description);
  }

  if (!empty($newPwd) && !empty($confirmNewPwd)) {
    if ($confirmNewPwd !== $newPwd) {
      $errorMsg = "The password and its confirm are not same";
    } else {
      $hashedPwd = password_hash($newPwd, PASSWORD_DEFAULT);
      $result = mysqli_query($conn, "UPDATE users SET password = '$hashedPwd' WHERE id = $uId");
      if ($result) {
        $successMsg .=  "Password, ";
      }
    }
  }
}
function updateField($conn, $column, $val)
{
  global $successMsg, $uId;
  $tableName = $_GET['role'] . "s";
  $query = "UPDATE `$tableName` SET `$column`= ? WHERE `u_id`= ? ; ";
  $statement = mysqli_stmt_init($conn);
  mysqli_stmt_prepare($statement, $query);
  mysqli_stmt_bind_param($statement, "ss", $val, $uId);
  $executed = mysqli_stmt_execute($statement);
  if ($executed) {
    $successMsg .= $column . ", ";
    $sessionVariable = $_GET['role'] . "_" . $column;
    $_SESSION[$sessionVariable] = $val;
  }
}

if (!empty($successMsg)) {
  $successMsg = rtrim($successMsg, ', ');
  $successMsg .= " Updated Successfully";
  $_SESSION['success_msg'] = $successMsg;
} else if (!empty($errorMsg)) {
  $_SESSION['error_msg'] = $errorMsg;
}


$userRole = $_GET['role'];
header("Location:../$userRole/details.php?parentId=$userRole&activeTab=4");
