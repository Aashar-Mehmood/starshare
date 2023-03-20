<?php
include_once('../checkUsersSession.php');
include_once('../db_connection.php');
$songId = $_GET['songId'];
$starId = $_SESSION['id'];
$status = $_GET['setStatus'];

$query = "UPDATE `songs` SET `status` = '$status' WHERE `id` = $songId AND `star_id` = $starId;";
$executed = mysqli_query($conn, $query);
if (!$executed) {
  $_SESSION['error_msg'] = "Failed to $status song";
} else {
  $_SESSION['success_msg'] = "Song $status successfully";
}


header("Location: ./details.php?parentId=star&activeTab=2");
