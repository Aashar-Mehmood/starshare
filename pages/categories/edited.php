<?php
include_once("../login_signup/check_session.php");
include_once("../login_signup/db_connection.php");
if (isset($_POST["submit"])) {
  $id = $_GET['id'];
  $message = '';
  $newName = $_POST["newName"];
  $parent = $_POST["parentCategory"];
  $res = mysqli_query(
    $conn,
    "UPDATE `ss_categories` SET `parent_category`='$parent', `child`='$newName' WHERE `id` = '$id' ;"
  );
  if (!$res) {
    $message = 'Unable to Edit';
  } else {
    $message = 'Edited Successfully';
  }
  header("location:./categories.php");
  $_SESSION['message'] = $message;
}
