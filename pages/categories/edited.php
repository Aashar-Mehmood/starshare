<?php
include_once("../login_signup/check_session.php");
include_once("../login_signup/db_connection.php");
if (isset($_POST["submit"])) {
  $id = $_GET['id'];
  $newName = $_POST["newName"];
  $parent = $_POST["parentCategory"];
  $res = mysqli_query(
    $conn,
    "UPDATE `ss_categories` SET `parent_category`='$parent', `child`='$newName' WHERE `id` = '$id' ;"
  );
  if (!$res) {
    $_SESSION['error_msg'] = 'Failed to Update Category';
    header("location:./editCategory.php?activeLinkId=categories");
  } else {
    $_SESSION['success_msg'] = 'Category Updated Successfully';
    header("location:./categories.php?activeLinkId=categories");
  }
}
