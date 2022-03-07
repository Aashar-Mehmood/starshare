<?php
$message =  " ";
$parent = $_POST['parent'];
$child = $_POST['child'];
if (!isset($_POST['addNew'])) {
  $message =  "Form Not submitted";
} else {

  if ($_POST['parent'] = "" || $_POST['child'] == "") {
    $message =  "Write name of child category and choose parent Category";
  } else {

    include_once('../login_signup/db_connection.php');
    $query = "INSERT INTO ss_categories (parent_category, child) VALUES (?, ?)";

    $stmt = mysqli_stmt_init($conn);
    $prepare = mysqli_stmt_prepare($stmt, $query);
    mysqli_stmt_bind_param($stmt, 'ss', $parent, $child);
    $executed = mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    if (!$executed) {
      $message =  "Unable to create new Category";
    } else {
      $message =  "New Category Created";
    }
  }
}
header("location:./categories.php?message=$message");
