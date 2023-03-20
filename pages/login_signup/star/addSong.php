<?php
include_once('../checkUsersSession.php');
include_once('../db_connection.php');
include_once('../../../functions/formDataInSession.php');

$errorMsg = "";
$successMsg = "";



if (!isset($_POST['addSong'])) {
  $errorMsg =  "Form not submitted";
} else {
  $star_id = $_SESSION['id'];
  $title = $_POST['title'];
  $price = $_POST['price'];
  $originalSize = $_FILES['original']['size'];
  $sampleSize = $_FILES['sample']['size'];
  $bannerSize = $_FILES['banner']['size'];
  if (
    empty($title) || $originalSize == 0 ||
    $sampleSize == 0 || $bannerSize == 0
  ) {
    $errorMsg =  "All fields are required";
  } else {
    $originalPath = "assets/media/songs/" . rand(1, 1000) . $_FILES['original']['name'];
    $samplePath = "assets/media/songs/"  . rand(2, 1000) . $_FILES['sample']['name'];
    $bannerPath = "assets/media/banners/" . rand(3, 1000) . $_FILES['banner']['name'];

    $uploadOk1 = handleBanner($_FILES['banner'], $bannerPath);
    $uploadOk2 = handleAudio($_FILES['original'], $originalPath);
    $uploadOk3 = handleAudio($_FILES['sample'], $samplePath);
    if ($uploadOk1 && $uploadOk2 && $uploadOk3) {
      $query = "INSERT INTO `songs`(`star_id`, `title`, `original`, `sample`, `banner`, `price`) VALUES (?, ?, ?, ?, ?, ?);";
      $stmt = mysqli_stmt_init($conn);
      mysqli_stmt_prepare($stmt, $query);
      mysqli_stmt_bind_param($stmt, "issssi", $star_id, $title, $originalPath, $samplePath, $bannerPath, $price);
      $executed = mysqli_stmt_execute($stmt);
      if ($executed) {
        $successMsg =  "New song Created";
        unset($_SESSION['form_data']);
      }
    }
  }
}

$redirect = "./details.php?parentId=star&activeTab=2";

if (!empty($errorMsg)) {
  $_SESSION['error_msg'] = $errorMsg;
  $redirect .= "&activeModal=add";
} else if (!empty($successMsg)) {
  $_SESSION['success_msg'] = $successMsg;
}

header("Location:$redirect");



function handleBanner($fileArray, $path)
{
  global $errorMsg;
  $allowedImg = array("jpg", "jpeg", "png", "svg", "gif", "jfif");

  $destination = '../../../' . $path;
  $extension = strtolower(pathinfo($path, PATHINFO_EXTENSION));
  $size = filesize($fileArray['tmp_name']);
  if (file_exists($destination)) {
    $errorMsg =  "Image already exist, try to upload after renaming it";
  } else if (!in_array($extension, $allowedImg)) {
    $errorMsg =  "Only jpg, jpeg, png, svg, jfif and gif files are allowed";
  } else if ($size > 1100000) {
    $errorMsg =  "Maximum 1MB allowed for Image";
  } else {
    $uploaded = move_uploaded_file($fileArray['tmp_name'], $destination);
    return $uploaded;
  }
}


function handleAudio($fileArray, $path)
{
  global $errorMsg;
  $allowedAudio = array("mp3", "mp4", "ogg", "webm", "aac", "wav");
  $size = filesize($fileArray['tmp_name']);

  $destination = '../../../' . $path;
  $extension = strtolower(pathinfo($path, PATHINFO_EXTENSION));
  if (file_exists($destination)) {
    $errorMsg =  "Audio already exists, try to upload after renaming it.";
  } else if (!in_array($extension, $allowedAudio)) {
    $errorMsg = "Only mp3, mp4, ogg, webm, aac, and wav files are allowed";
  } else if ($size > 11100000) {
    $errorMsg =  "Maximum 10MB allowed for Song";
  } else {
    $uploaded = move_uploaded_file($fileArray['tmp_name'], $destination);
    return $uploaded;
  }
}
