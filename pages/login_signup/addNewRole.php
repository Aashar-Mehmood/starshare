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

  if ($_FILES['profile_img']['size'] == 0) {
    echo "Upload your profile picture";
    header("Refresh:2; URL=./signupForRole.php?role=$role");
    exit();
  } else {
    $random = rand(10, 1000);
    $allowedImg = array("jpg", "jpge", "png", "svg", "gif");
    $profileImg = $random . $_FILES['profile_img']['name'];
    $destination = '../../../assets/media/profiles/' . $profileImg;
    $extension = strtolower(pathinfo($profileImg, PATHINFO_EXTENSION));
    $size = filesize($_FILES['profile_img']['tmp_name']);

    if (!in_array($extension, $allowedImg)) {
      echo "Only jpg, jpeg, png, svg and gif files are allowed";
    }
    if ($size > 1100000) {
      echo "Files upto 1 MB are allowed only";
    } else {
      $path = "assets/media/profiles/" . $_FILES['profile_img']['name'];
      move_uploaded_file($_FILES['profile_img']['tmp_name'], "../../" . $path);
    }
  }

  include_once('./db_connection.php');

  $tableName = $role . "s";
  $insertQuery = "INSERT INTO 
  `$tableName`(`u_id`, `name`, `email`, `contact`, `address`, `description`, `profile_img`) 
  VALUES ($uId, '$dataArr[0]', '$dataArr[1]', '$dataArr[2]', '$dataArr[3]', '$dataArr[4]', '$path');";

  $inserted = mysqli_query($conn, $insertQuery);




  if (!$inserted) {
    echo "<script>alert('Error occured while registering')</script>";
    header("Refresh:0; URL=./signupForRole.php?role=$role");
  } else {

    $columnName = "is_" . $role;
    $updateQuery = "UPDATE `users` SET `$columnName` = 1 WHERE `id` = $uId;";

    $updated = mysqli_query($conn, $updateQuery);

    if ($updated) {
      setSessionVars($conn, $role);
      echo "<script>alert('Registered Successfully')</script>";
      header("Refresh:0; URL=./$role/details.php");
    }
  }



  mysqli_close($conn);
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
