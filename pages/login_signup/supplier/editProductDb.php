<?php
include_once('../checkUsersSession.php');
include_once('../db_connection.php');
$productId = $_GET['pId'];
$supplierId = $_SESSION['id'];

$name = $_POST['name'];
$price = $_POST['price'];
$successMsg = '';
if (empty($name) && empty($price)) {
    $_SESSION['error_msg'] = 'Fill any field to update it\'s value';
} else {
    if (!empty($name)) {
        $updateName = mysqli_query($conn, "UPDATE `products` SET `name` = '$name' WHERE `id` = $productId AND `supplier_id` = $supplierId");
        if (!$updateName) {
            $_SESSION['error_msg'] = mysqli_error($conn);
        } else {
            $successMsg .= "Name, ";
        }
    }
    if (!empty($price)) {
        $updatePrice = mysqli_query($conn, "UPDATE `products` SET `price` = $price WHERE `id` = $productId AND `supplier_id` = $supplierId");
        if (!$updatePrice) {
            $_SESSION['error_msg'] = mysqli_error($conn);
        } else {
            $successMsg .= "Price, ";
        }
    }
}

if (!empty($successMsg)) {
    $successMsg = rtrim($successMsg, ', ');
    $successMsg .= ' updated successfully';
    $_SESSION['success_msg'] = $successMsg;
}

header("Refresh:0; URL=./editProduct.php?pId=$productId&parentId=supplier");
