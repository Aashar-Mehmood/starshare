<?php
include_once('../db_connection.php');
include_once('../checkUsersSession.php');
$errorMsg = "";
$successMsg = "";
if (!isset($_POST['create'])) {
    $errorMsg = "Form not submitted";
} else if (empty($_POST['name']) || empty($_POST['price'])) {
    $errorMsg = "Both name and price are required";
} else {
    $id = $_SESSION['id'];
    $name = $_POST['name'];
    $price = $_POST['price'];

    try {
        $result = mysqli_query($conn, "INSERT INTO `products`(`supplier_id`, `name`, `price`) VALUES ($id, '$name', $price)");
        if (!$result) {
            throw new Exception(mysqli_error($conn));
        } else {
            $successMsg = "Product created successfully";
        }
    } catch (Exception $e) {
        $errorMsg = "Internal Server Error";
    }
}

$redirect = "./details.php?parentId=supplier&activeTab=2";
if (!empty($errorMsg)) {
    $redirect .= "&activeModal=add";
    $_SESSION['error_msg'] = $errorMsg;
} else if (!empty($successMsg)) {
    $_SESSION['success_msg'] = $successMsg;
}

header("Location:$redirect");
