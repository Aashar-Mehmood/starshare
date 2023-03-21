<?php
include_once('../checkUsersSession.php');
include_once('../db_connection.php');
$productId = $_GET['pId'];
$supplierId = $_SESSION['id'];


$delete = mysqli_query($conn, "DELETE FROM `products` WHERE `id` = $productId AND `supplier_id` = $supplierId");
if (!$delete) {
    $_SESSION['error_msg'] = "Failed to delete Product";
} else {
    $_SESSION['success_msg'] = "Product deleted succssfully";
}


header("Location:./details.php?parentId=supplier&activeTab=2");
