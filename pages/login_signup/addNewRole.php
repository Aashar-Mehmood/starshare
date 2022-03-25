<?php

include_once('./checkUsersSession.php');
include_once('./db_connection.php');

$uId = $_SESSION['id'];
$message = "";
$submitError = false;
$role = $_GET['role'];

if (!isset($_POST["submit"])) {
  $message = "Form not submitted";
  $submitError = true;
} else {
  $name = $_POST['fullName'];
  $email = $_POST['email'];
  $contact = $_POST['contact'];
  $address = $_POST['address'];
  $description = $_POST['description'];
  $profileName = $_FILES['profile_img']['name'];

  $profileSize = filesize($_FILES['profile_img']['tmp_name']);

  $allowedImg = array("jpg", "jpeg", "png", "svg", "gif", "jfif");
  $extensionArr = explode('.', $profileName);
  $extension = end($extensionArr);

  if (
    empty($name) || empty($email) || empty($contact) ||
    empty($address) || empty($description) || $profileSize == 0
  ) {
    $message = "All fields are required.";
    $submitError = true;
  } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $message = "Enter a valid email address";
    $submitError = true;
  } else if (!in_array($extension, $allowedImg)) {
    $message = "Only jpg, jpeg, png, svg, gif, and jfif files are allowed";
    $submitError = true;
  } else if ($profileSize > 1100000) {
    $message = "Files upto 1.1 Mb are allowed";
    $submitError = true;
  } else {
    $random = rand(10, 1000);
    $path = "assets/media/profiles/" . $random . $profileName;
    $destination = '../../' . $path;
    move_uploaded_file($_FILES['profile_img']['tmp_name'], $destination);

    //Begin data insertion in database

    $tableName = $role . "s";
    $insertQuery = "INSERT INTO 
    `$tableName`(`u_id`, `name`, `email`, `contact`, `address`, `description`, `profile_img`) 
    VALUES ($uId, '$name', '$email', '$contact', '$address', '$description', '$path');";
    $inserted = mysqli_query($conn, $insertQuery);

    // check if data is inserted
    if (!$inserted) {
      $message = "Error occured while registering";
    } else {
      $columnName = "is_" . $role;
      $updateQuery = "UPDATE `users` SET `$columnName` = 1 WHERE `id` = $uId;";

      $updated = mysqli_query($conn, $updateQuery);

      if ($updated) {
        $submitError = false;
        setSessionVars($conn, $role);
        $message = "Registered Successfully";
      }
    }
  }
}
mysqli_close($conn);

echo "<script>alert('$message')</script>";

if ($submitError) {
  header("Refresh:0; URL=./signupForRole.php?role=$role");
} else {
  header("Refresh:0; URL=./$role/details.php");
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
