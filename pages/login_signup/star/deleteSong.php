<?php
include_once('../checkUsersSession.php');
include_once('../db_connection.php');
$songId = $_GET['songId'];
$starId = $_SESSION['id'];
$selectQuery = "SELECT * FROM `songs` WHERE `id` = $songId AND `star_id` = $starId;";
$selectResult = mysqli_query($conn, $selectQuery);
$result = mysqli_fetch_assoc($selectResult);
$originalLink = "../../../" . $result['original'];
$sampleLink = "../../../" . $result['sample'];
$bannerLink = "../../../" . $result['banner'];
unlink($originalLink);
unlink($sampleLink);
unlink($bannerLink);
$query = "DELETE FROM `songs` WHERE `id` = $songId AND `star_id` = $starId;";
$executed = mysqli_query($conn, $query);
if (!$executed) {
  echo "<script>alert('Failed to delete Song')</script>";
} else {
  echo "<script>alert('Song deleted Successfully')</script>";
}
header("Refresh:0; URL = ./details.php");
