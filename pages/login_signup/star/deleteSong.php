<?php
include_once('../checkUsersSession.php');
include_once('../db_connection.php');
$songId = $_GET['songId'];
$starId = $_SESSION['id'];
$status = $_GET['setStatus'];

$query = "UPDATE `songs` SET `status` = '$status' WHERE `id` = $songId AND `star_id` = $starId;";
$executed = mysqli_query($conn, $query);
if (!$executed) {
  echo "<script>alert('Song not $status')</script>";
} else {
  echo "<script>alert('Song $status')</script>";
}
header("Refresh:0; URL = ./details.php");