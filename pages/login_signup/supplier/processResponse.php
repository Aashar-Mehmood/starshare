<?php
include_once('../checkUsersSession.php');
include_once('../db_connection.php');

$supplierId = $_SESSION['id'];
$quoteId = $_POST['quoteId'];
$supplierQuoteAmount = $_POST['supplierQuoteAmount'];
$supplierQuote = $_POST['supplierQuote'];

$execute = mysqli_query(
    $conn,
    "UPDATE quotations SET supplier_quotation = '$supplierQuote', supplier_quotation_amount = $supplierQuoteAmount, status = 'responded'
    WHERE id = $quoteId AND supplier_id = $supplierId"
) or die(mysqli_error($conn));

if (!$execute) {
    $message = "Error while submitting response!";
} else {
    $message = "Response sent successfully";
}

echo "<script>alert('$message')</script>";
header("Refresh:0; URL=./details.php");