<?php
include_once('../login_signup/db_connection.php');
$id = $_GET['id'];
$query = "DELETE FROM `categories` WHERE `id` = '$id';";
$result = mysqli_query($conn, $query);
if(!$result){
  echo "Error while deleting Category";
}
else{
  echo "Category delted Successfully";
  header("Refresh:2; URL=./categories.php");
}
