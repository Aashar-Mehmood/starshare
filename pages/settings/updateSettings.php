<?php
session_start();
include_once("../login_signup/db_connection.php");

$name = $_POST['fullName'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$address = $_POST['address'];
$uploadOk = true;

$newPwd = $_POST['newPwd'];
$confirmNewPwd = $_POST['confirmNewPwd'];


if (isset($_FILES['profile_avatar'])) {
  $random = rand(10, 1000);
  $profileImg = $random . $_FILES['profile_avatar']['name'];
  $extension = strtolower(pathinfo($profileImg, PATHINFO_EXTENSION));
  $size = filesize($_FILES['profile_avatar']['tmp_name']);
  $destination = '../../assets/media/profiles/' . $profileImg;
  $uploaded = move_uploaded_file($_FILES['profile_avatar']['tmp_name'], $destination);
  if ($extension != "jpg" && $extension != "jpeg" && $extension != "png" && $extension != "svg" && $extension != "gif") {
    echo "Only jpg, jpeg, png, svg and gif files are allowed";
    $uploadOk = false;
  }
  if ($size > 1100000) {
    echo "Files upto 1 MB are allowed only";
    $uploadOk = false;
  }
  if (!$uploadOk) {
    echo "File not uploaded" . "<br>";
  } else {
    $uploaded = move_uploaded_file($_FILES['profile_avatar']['tmp_name'], $destination);
    $profileVal = "assets/media/profiles/" . $profileImg;
    updateField($conn, 'profile_img', $profileVal);
  }
}

if ($name !== "") {
  updateField($conn, 'name', $name);
}
if ($email !== "") {
  updateField($conn, 'email', $email);
}
if ($contact !== "") {
  updateField($conn, 'contact', $contact);
}
if ($address !== "") {

  updateField($conn, 'address', $address);
}

if(!empty($newPwd) && !empty($confirmNewPwd)){
  if($confirmNewPwd !== $newPwd){
    $message = "The password and its confirm are not same";
  }
  else{
    $hashedPwd = password_hash($newPwd, PASSWORD_DEFAULT);
    updateField($conn, 'password', $hashedPwd);
  }
}

function updateField($conn, $column, $val)
{
  $uId = $_SESSION['id'];
  $query = "UPDATE `users` SET `$column`= ? WHERE `id`= ? ; ";
  $statement = mysqli_stmt_init($conn);
  mysqli_stmt_prepare($statement, $query);
  mysqli_stmt_bind_param($statement, "si", $val, $uId);
  $executed = mysqli_stmt_execute($statement);
  if (!$executed) {
    global $message;
    $message = "Update Failed";
  } else {
    $_SESSION["$column"] = $val;
    global $message;
    $message .= " " . $column . " updated ";
  }
}
$_SESSION['message'] = $message;
if ($_SESSION['is_admin']) {
  $location = "location: ./settings.php";
} else {
  $location = "location: ../login_signup/settings/settings.php";
}
header($location);
