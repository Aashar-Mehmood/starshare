<?php
include_once('../checkUsersSession.php');
include_once('../db_connection.php');

$message = "";
$star_id = $_SESSION['id'];
$song_id = $_GET['songId'];
$title = $_POST['title'];
$originalSize = $_FILES['original']['size'];
$sampleSize = $_FILES['sample']['size'];
$bannerSize = $_FILES['banner']['size'];

if (!isset($_POST['editSong'])) {
  $message = "Form not submitted";
} else if (
  empty($title) && $originalSize == 0 &&
  $sampleSize == 0 && $bannerSize == 0
) {
  $message = "Fill any field to update";
} else {

  if (!empty($title)) {
    updateField($conn, "title", $title);
  }
  if ($originalSize > 0) {
    $uploaded1 = handleAudio($_FILES['original']);
    if ($uploaded1 != false) {
      updateField($conn, "original", $uploaded1);
    }
  }
  if ($sampleSize > 0) {
    $uploaded2 = handleAudio($_FILES['sample']);
    if ($uploaded2 != false) {
      updateField($conn, "sample", $uploaded2);
    }
  }
  if ($bannerSize > 0) {
    $uploaded3 = handleBanner($_FILES['banner']);
    if ($uploaded3 != false) {
      updateField($conn, "banner", $uploaded3);
    }
  }
}

if (!empty($message)) {
  alertMessage($message);
}

header("Refresh:0; URL=./editSong.php?parentId=star&songId=$song_id");



function alertMessage($msg)
{
  echo "<script>alert('$msg')</script>";
}



function handleAudio($fileArray)
{
  global $message;
  $path = "assets/media/songs/" . rand(10, 1000) . $fileArray['name'];

  $allowedAudio = array("mp3", "mp4", "ogg", "webm", "aac", "wav");

  $destination = '../../../' . $path;
  $extension = strtolower(pathinfo($path, PATHINFO_EXTENSION));

  if (!in_array($extension, $allowedAudio)) {
    $message = "Only mp3, mp4, ogg, webm, aac, and wav files are allowed";
  } else {
    $uploaded = move_uploaded_file($fileArray['tmp_name'], $destination);
    if (!$uploaded) {
      return false;
    } else {
      return $path;
    }
  }
}

function handleBanner($fileArray)
{
  global $message;
  $path = "assets/media/banners/" . rand(10, 1000)  . $_FILES['banner']['name'];

  $allowedImg = array("jpg", "jpeg", "png", "svg", "gif", "jfif");

  $destination = '../../../' . $path;
  $extension = strtolower(pathinfo($path, PATHINFO_EXTENSION));
  $size = filesize($fileArray['tmp_name']);

  if (!in_array($extension, $allowedImg)) {
    $message = "Only jpg, jpeg, png, svg, jfif and gif files are allowed";
  } else if ($size > 1100000) {
    $message = "Files upto 1 MB are allowed only";
  } else {
    $uploaded = move_uploaded_file($fileArray['tmp_name'], $destination);
    if (!$uploaded) {
      return false;
    } else {
      return $path;
    }
  }
}

function updateField($conn, $column, $val)
{

  global $message, $star_id, $song_id;
  if ($column == "original" || $column == "sample" || $column == "banner") {
    $query = "SELECT `$column` FROM `songs` WHERE `id`= $song_id AND `star_id`= $star_id;";
    $result = mysqli_query($conn, $query);
    $record = mysqli_fetch_assoc($result);
    $prevFile = $record["$column"];
    if (file_exists("../../../" . $prevFile)) {
      unlink("../../../" . $prevFile);
    }
  }

  $query1 = "UPDATE `songs` SET `$column` = '$val' WHERE `id`= $song_id AND `star_id`= $star_id;";

  $result1 = mysqli_query($conn, $query1);
  if ($result1) {
    $message .= "Updated " . $column . ". ";
  }
}
