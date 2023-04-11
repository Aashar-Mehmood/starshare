<?php
include_once('../login_signup/check_session.php');
include_once('../../functions/formDataInSession.php');

$parent = $_POST['parent'];
$child = $_POST['child'];
$location = "location:./categories.php?activeLinkId=categories";
if (!isset($_POST['addNew'])) {
  $_SESSION['error_msg'] =  "Form Not submitted";
} else if (empty($_POST['child'])) {
  $_SESSION['error_msg'] =  "Enter Category name!";
} else if ($_POST['parent'] == 'null') {
  $_SESSION['error_msg'] =  "Select a Parent Category!";
} else {
  include_once('../login_signup/db_connection.php');
  $query = "INSERT INTO ss_categories (parent_category, child) VALUES (?, ?)";

  $stmt = mysqli_stmt_init($conn);
  $prepare = mysqli_stmt_prepare($stmt, $query);
  mysqli_stmt_bind_param($stmt, 'ss', $parent, $child);
  $executed = mysqli_stmt_execute($stmt);
  mysqli_stmt_close($stmt);
  if (!$executed) {
    $_SESSION['error_msg'] =  "Failed to create new category";
  } else {
    $_SESSION['success_msg'] =  "New category created";
    unset($_SESSION['form_data']);
  }
}

if (!empty($_SESSION['error_msg'])) {
  $location .= "&activeModal=newCategory";
}

header($location);
