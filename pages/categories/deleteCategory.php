<?php
$message = " ";
include_once('../login_signup/db_connection.php');
include_once('../login_signup/check_session.php');
$id = $_GET['id'];
$query = "DELETE FROM `ss_categories` WHERE `id` = '$id';";
$result = mysqli_query($conn, $query);
if (!$result) {
  $message = "Error while deleting Category";
} else {
  $message = "Category delted Successfully";
}
$_SESSION['message'] = $message;
header("location:./categories.php");
