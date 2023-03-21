<?php
include_once('../checkUsersSession.php');
include_once('../db_connection.php');
include_once('../../../functions/formDataInSession.php');
$successMsg = '';
$errorMsg = '';
if (!isset($_POST['add_event'])) {
  $errorMsg = 'Form not submitted';
} else {
  (int)$organizerId = $_SESSION['id'];
  (int)$starId = $_POST['star_performing'];
  $title = $_POST['title'];
  $desc = $_POST['description'];
  $location = $_POST['location'];
  $totalSeats = $_POST['total_seats'];
  $date = $_POST['date'];
  $time = $_POST['time'];
  $bannerName = $_FILES['banner']['name'];
  $ticketPrice = $_POST['ticketPrice'];
  $allowedFiles = array("jpg", "png", "jpeg", "svg", "gif", "jfif");
  $extensionArr = explode('.', $bannerName);
  $extension = end($extensionArr);
  if (
    empty($title) || empty($desc) || empty($location) ||
    empty($totalSeats) || empty($date) || empty($time) ||
    empty($starId) || empty($bannerName) || empty($ticketPrice)

  ) {
    $errorMsg = 'Fill all Fields';
  } else if (filesize($_FILES['banner']['tmp_name']) > 1100000) {
    $errorMsg = 'Image too large, max 1MB allowed';
  } else if (!in_array($extension, $allowedFiles)) {
    $errorMsg = 'Only jpg, png, jpeg, svg, gif and jfif files are allowed';
  } else {
    $random = rand(1, 1000);
    $path = "assets/media/banners/" . $random . $bannerName;
    $destination = "../../../" . $path;
    move_uploaded_file($_FILES['banner']['tmp_name'], $destination);
    $eventInsert = "INSERT INTO 
    `events` (`organizer_id`, `star_id`, `title`, `description`, `location`, `date`, `time`, `banner`) 
    VALUES (?, ?, ?, ?, ?, ?, ?, ?);";
    $stmt1 = mysqli_stmt_init($conn);
    mysqli_stmt_prepare($stmt1, $eventInsert);
    mysqli_stmt_bind_param($stmt1, "iissssss", $organizerId, $starId, $title, $desc, $location, $date, $time, $path);
    $executed1 = mysqli_stmt_execute($stmt1);
    if ($executed1) {

      // get the id of currently created event to be inserted in tickets
      $selectEventQuery = "SELECT id FROM events WHERE star_id = $starId AND title= '$title';";

      $result2 = mysqli_query($conn, $selectEventQuery);

      $record  = mysqli_fetch_assoc($result2);
      $eventId = $record['id'];

      // insert into tickets table
      $ticketInsert = "INSERT INTO `tickets`(`event_id`, `price`) VALUES($eventId, $ticketPrice);";
      for ($i = 1; $i <= $totalSeats; $i++) {
        mysqli_query($conn, $ticketInsert);
      }
      $successMsg = 'Event Created Successfully';
    }
  }
}

$redirect = "./details.php?parentId=organizer&activeTab=2";

if (!empty($successMsg)) {
  $_SESSION['success_msg'] = $successMsg;
  unset($_SESSION['form_data']);
} else if (!empty($errorMsg)) {
  $_SESSION['error_msg'] = $errorMsg;
  $redirect .= "&activeModal=add";
}
header("Location:$redirect");
