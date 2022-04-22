<?php
include_once('../checkUsersSession.php');
include_once('../db_connection.php');
$productId = $_GET['pId'];
$supplierId = $_SESSION['id'];

$name = $_POST['name'];
$price = $_POST['price'];
$message = "";

if (!empty($name)) {
    $updateName = mysqli_query($conn, "UPDATE `products` SET `name` = '$name' WHERE `id` = $productId AND `supplier_id` = $supplierId");
    if (!$updateName) {
        $message = mysqli_error($conn);
    } else {
        $message .= "Name updated. ";
    }
}
if (!empty($price)) {
    $updatePrice = mysqli_query($conn, "UPDATE `products` SET `price` = $price WHERE `id` = $productId AND `supplier_id` = $supplierId");
    if (!$updatePrice) {
        $message = mysqli_error($conn);
    } else {
        $message .= "Price updated.";
    }
}

echo "<script>alert('$message')</script>";
header("Refresh:0; URL=./editProduct.php?pId=$productId");