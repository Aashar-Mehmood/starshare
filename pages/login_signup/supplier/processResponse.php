<?php
include_once('../checkUsersSession.php');
include_once('../db_connection.php');
include_once('../../../functions/formDataInSession.php');

$supplierId = $_SESSION['id'];
$quoteId = $_POST['quoteId'];
$supplierQuoteAmount = $_POST['supplierQuoteAmount'];
$supplierQuote = $_POST['supplierQuote'];

$redirect = "Location:./responseToQuote.php?quoteId=$quoteId&parentId=supplier";

if (empty($supplierQuote) || empty($supplierQuoteAmount)) {
    $_SESSION['error_msg'] = 'Both quote amount and description are required';
} else {
    $execute = mysqli_query(
        $conn,
        "UPDATE quotations SET supplier_quotation = '$supplierQuote', supplier_quotation_amount = $supplierQuoteAmount, status = 'responded'
    WHERE id = $quoteId AND supplier_id = $supplierId"
    );

    if (!$execute) {
        $_SESSION['error_msg'] = "Error while submitting response!";
    } else {
        $_SESSION['success_msg'] = "Response sent successfully";
        unset($_SESSION['form_data']);
        $redirect = "Location:./details.php?parentId=supplier&activeTab=3";
    }
}
header($redirect);
