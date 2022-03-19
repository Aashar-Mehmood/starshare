<?php
include_once('../checkUsersSession.php');
include_once('../db_connection.php');

if (!isset($_POST['editSong'])) {
  echo "Form not submitted";
} else {
  $star_id = $_SESSION['id'];
  $song_id = $_GET['songId'];
  $title = $_POST['title'];
  $originalSize = $_FILES['original']['size'];
  $sampleSize = $_FILES['sample']['size'];
  $bannerSize = $_FILES['banner']['size'];
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



function handleAudio($fileArray)
{
  $path = "assets/media/songs/" . rand(10, 1000) . $fileArray['name'];

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
      return $path;
    }
  }
}

function handleBanner($fileArray)
{
  $path = "assets/media/banners/" . rand(10, 1000)  . $_FILES['banner']['name'];

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
      return $path;
    }
  }
}

function updateField($conn, $column, $val)
{

  global $star_id, $song_id;
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
  if (!$result1) {
    echo "update Failed";
  } else {
    echo "Updated " . $column . "<br>";
  }
}
