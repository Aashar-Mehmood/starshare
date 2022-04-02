<?php
include_once('../checkUsersSession.php');
include_once('../db_connection.php');

$message = "";

if (!isset($_POST['addSong'])) {
  $message =  "Form not submitted";
} else {
  $star_id = $_SESSION['id'];
  $title = $_POST['title'];
  $originalSize = $_FILES['original']['size'];
  $sampleSize = $_FILES['sample']['size'];
  $bannerSize = $_FILES['banner']['size'];
  if (
    empty($title) || $originalSize == 0 ||
    $sampleSize == 0 || $bannerSize == 0
  ) {
    $message =  "All fields are required";
  } else {
    $originalPath = "assets/media/songs/" . $_FILES['original']['name'];
    $samplePath = "assets/media/songs/"  . $_FILES['sample']['name'];
    $bannerPath = "assets/media/banners/"  . $_FILES['banner']['name'];

    $uploadOk1 = handleBanner($_FILES['banner'], $bannerPath);
    $uploadOk2 = handleAudio($_FILES['original'], $originalPath);
    $uploadOk3 = handleAudio($_FILES['sample'], $samplePath);
    if ($uploadOk1 && $uploadOk2 && $uploadOk3) {
      $query = "INSERT INTO `songs` (`star_id`, `title`, `original`, `sample`, `banner`) VALUES (?, ?, ?, ?, ?);";
      $stmt = mysqli_stmt_init($conn);
      mysqli_stmt_prepare($stmt, $query);
      mysqli_stmt_bind_param($stmt, "issss", $star_id, $title, $originalPath, $samplePath, $bannerPath);
      $executed = mysqli_stmt_execute($stmt);
      if ($executed) {
        $message =  "New song added";
      }
    }
  }
}
if (!empty($message)) {
  alertMessage($message);
}

header("Refresh:0; URL=./details.php?parentId=star");


function alertMessage($msg)
{
  echo "<script>alert('$msg')</script>";
}

function handleBanner($fileArray, $path)
{
  $message = "";
  $allowedImg = array("jpg", "jpeg", "png", "svg", "gif", "jfif");

  $destination = '../../../' . $path;
  $extension = strtolower(pathinfo($path, PATHINFO_EXTENSION));
  $size = filesize($fileArray['tmp_name']);
  if (file_exists($destination)) {
    $message =  "File already exists.";
  } else if (!in_array($extension, $allowedImg)) {
    $message =  "Only jpg, jpeg, png, svg, jfif and gif files are allowed";
  } else if ($size > 1100000) {
    $message =  "Files upto 1 MB are allowed only";
  } else {
    $uploaded = move_uploaded_file($fileArray['tmp_name'], $destination);
    return $uploaded;
  }
  if (!empty($message)) {
    alertMessage($message);
  }
}


function handleAudio($fileArray, $path)
{
  $allowedAudio = array("mp3", "mp4", "ogg", "webm", "aac", "wav");

  $destination = '../../../' . $path;
  $extension = strtolower(pathinfo($path, PATHINFO_EXTENSION));
  if (file_exists($destination)) {
    $message =  "File already exists.";
  } else if (!in_array($extension, $allowedAudio)) {
    $message = "Only mp3, mp4, ogg, webm, aac, and wav files are allowed";
    alertMessage($message);
  } else {
    $uploaded = move_uploaded_file($fileArray['tmp_name'], $destination);
    return $uploaded;
  }
}