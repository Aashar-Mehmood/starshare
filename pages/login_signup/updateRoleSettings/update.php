<?php
session_start();
include_once("../db_connection.php");

$message = "";
$name = $_POST['fullName'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$address = $_POST['address'];
$description = $_POST['description'];

if (
  empty($name) && empty($email) && empty($contact) &&
  empty($address) && empty($description) && empty($_FILES['profile_avatar']['name'])
) {
  $message = "Enter a value in any field to update.";
} else {

  if (!empty($_FILES['profile_avatar']['name'])) {

    $allowedImg = array("jpg", "jpeg", "png", "svg", "gif");
    $random = rand(10, 1000);
    $profileImg = $random . $_FILES['profile_avatar']['name'];
    $destination = '../../../assets/media/profiles/' . $profileImg;
    $extension = strtolower(pathinfo($profileImg, PATHINFO_EXTENSION));
    $size = filesize($_FILES['profile_avatar']['tmp_name']);
    if (!in_array($extension, $allowedImg)) {
      $message = "Only jpg, jpeg, png, svg and gif files are allowed";
    } else if ($size > 1100000) {
      $message = "Files upto 1.1 Mb are allowed only";
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
}
function updateField($conn, $column, $val)
{
  global $message;
  $tableName = $_GET['role'] . "s";
  $uId = $_SESSION['id'];
  $query = "UPDATE `$tableName` SET `$column`= ? WHERE `u_id`= ? ; ";
  $statement = mysqli_stmt_init($conn);
  mysqli_stmt_prepare($statement, $query);
  mysqli_stmt_bind_param($statement, "ss", $val, $uId);
  $executed = mysqli_stmt_execute($statement);
  if (!$executed) {
    $message = "Update Failed";
  } else {
    $message .= $column . " Updated. ";
    $sessionVariable = $_GET['role'] . "_" . $column;
    $_SESSION[$sessionVariable] = $val;
  }
}
echo "<script>alert('$message')</script>";
$userRole = $_GET['role'];
header("Refresh:0; URL=../$userRole/details.php");
