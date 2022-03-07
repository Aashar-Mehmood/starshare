<?php

include_once('./checkUsersSession.php');
$uId = $_SESSION['id'];

$submitError = false;
$role = $_GET['role'];

if (!isset($_POST["submit"])) {
  echo "Error occured while submitting form";
  header("Refresh:2; URL=./signupForRole.php?role=$role");
} else {

  $dataArr = array(
    $_POST['fullName'],
    $_POST['email'], $_POST['contact'],
    $_POST['address'], $_POST['description']
  );

  for ($i = 0; $i < count($dataArr); $i++) {
    if ($dataArr[$i] == '') {
      echo "Fill all the fields";
      header("Refresh:2; URL=./signupForRole.php?role=$role");
      exit();
    }
  }

  if (!filter_var($dataArr[1], FILTER_VALIDATE_EMAIL)) {
    echo "Enter a valid email address";
    header("Refresh:2; URL=./signupForRole.php?role=$role");
    exit();
  }
  if (!isset($_FILES['profile_img'])) {
    echo "Upload your profile picture";
    header("Refresh:2; URL=./signupForRole.php?role=$role");
    exit();
  } else {
    $path = "assets/media/profiles/" . $_FILES['profile_img']['name'];
    if (file_exists("../../" . $path)) {
      echo "This file already exists, rename before uploading";
    } else {
      move_uploaded_file($_FILES['profile_img']['tmp_name'], "../../" . $path);
    }
  }

  include_once('./db_connection.php');

  $tableName = $role . "s";
  $insertQuery = "INSERT INTO 
  `$tableName`(`u_id`, `name`, `email`, `contact`, `address`, `description`, `profile_img`) 
  VALUES ($uId, '$dataArr[0]', '$dataArr[1]', '$dataArr[2]', '$dataArr[3]', '$dataArr[4]', '$path');";

  $inserted = mysqli_query($conn, $insertQuery);

  $columnName = "is_" . $role;
  $updateQuery = "UPDATE `users` SET `$columnName` = 1 WHERE `id` = $uId;";

  $updated = mysqli_query($conn, $updateQuery);


  if (!$inserted) {
    echo "Error occured while registering." . "<br>";
  } else {

    echo " Registered Successfully." . "<br>";
  }

  if (!$updated) {
    echo "Role not updated" . "<br>";
  } else {
    echo " Role Updated Successfully " . "<br>";
    $_SESSION["$tableName"] = true;
  }
  mysqli_close($conn);

  header("Refresh:2; URL=./signupForRole.php?register=succeeded&?role=$role");
}
