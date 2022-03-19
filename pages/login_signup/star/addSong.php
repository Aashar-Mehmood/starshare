<?php
include_once('../checkUsersSession.php');
include_once('../db_connection.php');

if (!isset($_POST['addSong'])) {
  echo "Form not submitted";
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
    echo "All fields are required";
  } else {
    $originalPath = "assets/media/songs/" . rand(10, 1000) . $_FILES['original']['name'];
    $samplePath = "assets/media/songs/" . rand(10, 1000)  . $_FILES['sample']['name'];
    $bannerPath = "assets/media/banners/" . rand(10, 1000)  . $_FILES['banner']['name'];

    $uploadOk1 = handleBanner($_FILES['banner'], $bannerPath);
    $uploadOk2 = handleAudio($_FILES['original'], $originalPath);
    $uploadOk3 = handleAudio($_FILES['sample'], $samplePath);
    if ($uploadOk1 && $uploadOk2 && $uploadOk3) {

      $query = "INSERT INTO `songs` (`star_id`, `title`, `original`, `sample`, `banner`) VALUES (?, ?, ?, ?, ?);";
      $stmt = mysqli_stmt_init($conn);
      mysqli_stmt_prepare($stmt, $query);
      mysqli_stmt_bind_param($stmt, "issss", $star_id, $title, $originalPath, $samplePath, $bannerPath);
      $executed = mysqli_stmt_execute($stmt);
      if (!$executed) {
        echo "Song not added to database";
      } else {
        echo "New song added in database";
      }
    }
  }
}

function handleBanner($fileArray, $path)
{
  $allowedImg = array("jpg", "jpeg", "png", "svg", "gif", "jfif");

  $destination = '../../../' . $path;
  $extension = strtolower(pathinfo($path, PATHINFO_EXTENSION));
  $size = filesize($fileArray['tmp_name']);

  if (!in_array($extension, $allowedImg)) {
    echo "Only jpg, jpeg, png, svg, jfif and gif files are allowed <br>";
  }
  if ($size > 1100000) {
    echo "Files upto 1 MB are allowed only <br>";
  } else {
    $uploaded = move_uploaded_file($fileArray['tmp_name'], $destination);
    if (!$uploaded) {
      echo "Failed to upload";
      return false;
    } else {
      return true;
    }
  }
}


function handleAudio($fileArray, $path)
{
  $allowedAudio = array("mp3", "mp4", "ogg", "webm", "aac", "wav");

  $destination = '../../../' . $path;
  $extension = strtolower(pathinfo($path, PATHINFO_EXTENSION));

  if (!in_array($extension, $allowedAudio)) {
    echo "Only mp3, mp4, ogg, webm, aac, and wav files are allowed <br>";
  } else {
    $uploaded = move_uploaded_file($fileArray['tmp_name'], $destination);
    if (!$uploaded) {
      echo "Failed to upload";
      return false;
    } else {
      return true;
    }
  }
}
