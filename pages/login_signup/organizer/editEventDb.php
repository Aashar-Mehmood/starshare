<?php
include_once('../checkUsersSession.php');
include_once('../db_connection.php');

if (!isset($_POST['updateEvent'])) {
  echo "<script>alert('Form not submitted')</script>";
} else {

  $message = "";
  $title = $_POST['title'];
  $description = $_POST['description'];
  $location = $_POST['location'];
  $ticketPrice = $_POST['ticket_price'];
  $date = $_POST['date'];
  $time = $_POST['time'];
  $banner = $_FILES['banner']['name'];
  $organizerId = $_SESSION['id'];
  $eventId = $_GET['eventId'];

  if (!empty($title)) {
    updateEvent('title', $title);
  }
  if (!empty($description)) {
    updateEvent('description', $description);
  }
  if (!empty($location)) {
    updateEvent('$location', $location);
  }
  if (!empty($date)) {
    updateEvent('date', $date);
  }
  if (!empty($time)) {
    updateEvent('time', $time);
  }
  if (!empty($ticketPrice)) {
    $ticketUpdate = mysqli_query($conn, "UPDATE `tickets` SET `price` = $ticketPrice WHERE `event_id` = $eventId AND `buyer_id`=NULL;");
    if ($ticketUpdate) {
      $message .= "ticketPrice, ";
    }
  }
  if (!empty($banner)) {
    handleFiles();
  }
}

function updateEvent($column, $value)
{
  global $conn, $eventId, $organizerId, $message;
  $updateQuery = "UPDATE `events` SET `$column` = '$value' WHERE `id` = $eventId AND `organizer_id` = $organizerId;";
  $result = mysqli_query($conn, $updateQuery);
  if ($result) {
    $message .= $column . ", ";
  }
}

function handleFiles()
{
  global $banner;
  $allowedFiles = array("jpg", "png", "jpeg", "svg", "gif", "jfif");
  $extensionArr = explode('.', $banner);
  $extension = end($extensionArr);
  if (filesize($_FILES['banner']['tmp_name']) > 1100000) {
    echo "<script>alert('Files upto 1 Mb are allowed')</script>";
  } else if (!in_array($extension, $allowedFiles)) {
    echo "<script>alert('Only jpg, png, jpeg, svg, gif and jfif files are allowed');</script>";
  } else {
    global $conn, $eventId, $organizerId;
    $getOldBanner = mysqli_query($conn, "SELECT `banner` FROM `events` WHERE `id` = $eventId AND `organizer_id` = $organizerId;");
    $oldBannerArr = mysqli_fetch_assoc($getOldBanner);
    $oldBanner = $oldBannerArr['banner'];
    unlink("../../../" . $oldBanner);
    $random = rand(1, 1000);
    $path = "assets/media/banners/" . $random . $banner;
    $destination = "../../../" . $path;
    move_uploaded_file($_FILES['banner']['tmp_name'], $destination);
    updateEvent('banner', $path);
  }
}
$alert = $message . "udated";
echo "<script>alert('$alert')</script>";
header("Refresh:0; URL=./editEvent.php?eventId=$eventId");
