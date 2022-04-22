<?php
include_once('../checkUsersSession.php');
include_once('../db_connection.php');
$productId = $_GET['pId'];
$supplierId = $_SESSION['id'];

$message = "";

$delete = mysqli_query($conn, "DELETE FROM `products` WHERE `id` = $productId AND `supplier_id` = $supplierId");
if (!$delete) {
    $message = "Unable to delete the product";
} else {
    $message = "Product deleted succssfully";
}


echo "<script>alert('$message')</script>";
header("Refresh:0; URL=./details.php");