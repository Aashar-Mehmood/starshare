<?php
include_once('../db_connection.php');
include_once('../checkUsersSession.php');
$quoteId = $_GET["quoteId"];
$supplierId = $_SESSION['id'];

$execute = mysqli_query(
    $conn,
    "UPDATE quotations SET status = 'rejected' 
    WHERE id = $quoteId AND supplier_id = $supplierId"
) or die(mysqli_error($conn));

if (!$execute) {
    $_SESSION['error_msg'] = "Quote Rejection Failed.";
} else {
    $_SESSION['success_msg'] = "Quote Rejected Successfully.";
}


header("Location:./details.php?parentId=supplier&activeTab=3");
