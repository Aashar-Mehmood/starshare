<?php
include_once('../checkUsersSession.php');
include_once('../db_connection.php');

$successMsg = '';
$errorMsg = 'empty';

if (!isset($_POST['updateEvent'])) {
  $errorMsg = 'Form not submitted';
} else {
  $title = $_POST['title'];
  $description = $_POST['description'];
  $location = $_POST['location'];
  $ticketPrice = $_POST['ticket_price'];
  $date = $_POST['date'];
  $time = $_POST['time'];
  $banner = $_FILES['banner']['name'];
  $organizerId = $_SESSION['id'];
  $eventId = $_GET['eventId'];
  if (empty(array_filter([$title, $description, $location, $ticketPrice, $date, $time, $banner]))) {
    $errorMsg = 'Fill any field to update it\'s value';
  } else {

    if (!empty($title)) {
      updateEvent('title', $title);
    }
    if (!empty($description)) {
      updateEvent('description', $description);
    }
    if (!empty($location)) {
      updateEvent('location', $location);
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
        $successMsg .= "ticket Price, ";
      }
    }
    if (!empty($banner)) {
      handleFiles();
    }
  }
}


function updateEvent($column, $value)
{
  global $conn, $eventId, $organizerId, $successMsg;
  $updateQuery = "UPDATE `events` SET `$column` = '$value' WHERE `id` = $eventId AND `organizer_id` = $organizerId;";
  $result = mysqli_query($conn, $updateQuery);
  if ($result) {
    $successMsg .= $column . ", ";
  }
}

function handleFiles()
{
  global $banner, $errorMsg;

  $allowedFiles = array("jpg", "png", "jpeg", "svg", "gif", "jfif");
  $extensionArr = explode('.', $banner);
  $extension = end($extensionArr);
  if (filesize($_FILES['banner']['tmp_name']) > 1100000) {
    $errorMsg = 'Banner image too large, maximum 1MB allowed';
  } else if (!in_array($extension, $allowedFiles)) {
    $errorMsg = 'Only jpg, png, jpeg, svg, gif and jfif files are allowed';
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

if (!empty($successMsg)) {
  $successMsg = rtrim($successMsg, ', ');
  $successMsg .= " upated successfully.";
  $_SESSION['success_msg'] = $successMsg;
} else if (!empty($errorMsg)) {
  $_SESSION['error_msg'] = $errorMsg;
}


header("Location:./editEvent.php?eventId=$eventId&parentId=organizer");
