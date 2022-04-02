<?php
include_once('../db_connection.php');
include_once('../checkUsersSession.php');
$message = "";
if (!isset($_POST['create'])) {
    $message = "Form not submitted";
} else if (empty($_POST['name']) || empty($_POST['price'])) {
    $message = "Both name and price are required";
} else {
    $id = $_SESSION['id'];
    $name = $_POST['name'];
    $price = $_POST['price'];

    $result = mysqli_query($conn, "INSERT INTO `products`(`supplier_id`, `name`, `price`) VALUES ($id, '$name', $price)");
    if (!$result) {
        $message = mysqli_error($conn);
    } else {
        $message = "Product created successfully";
    }
}

echo "<script>alert('$message')</script>";
header("Refresh:0; URL=./details.php");