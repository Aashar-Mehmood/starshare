<?php
$message = " ";
include_once('../login_signup/db_connection.php');
$id = $_GET['id'];
$query = "DELETE FROM `ss_categories` WHERE `id` = '$id';";
$result = mysqli_query($conn, $query);
if (!$result) {
  $message = "Error while deleting Category";
} else {
  $message = "Category delted Successfully";
  header("location:./categories.php?message=$message");
}
