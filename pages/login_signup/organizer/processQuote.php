<?php
include_once('../checkUsersSession.php');
include_once('../db_connection.php');

$successMsg = '';
$errorMsg = '';

(int)$eventId = $_POST['event_id'];
(int)$organizerId = $_SESSION['id'];
(int)$supplierId = $_POST['supplier_id'];
$description = $_POST['description'];
(float)$amount = $_POST['amount'];

if (
    empty($eventId) || empty($organizerId) || empty($supplierId) || empty($description) || empty($amount)
) {
    $errorMsg = 'Fill all the fields';
} else {
    try {
        $execute = mysqli_query(
            $conn,
            "INSERT INTO quotations (event_id, organizer_id, supplier_id, organizer_quotation, organizer_quotation_amount)
             VALUES($eventId, $organizerId, $supplierId,'$description', $amount);"
        );
        if (!$execute) {
            throw new Exception(mysqli_error($conn), mysqli_errno($conn));
        } else {
            $successMsg = "Quote Sent Successfully";
        }
    } catch (Exception $e) {
        $errorMsg = "Internal Server Error";
    }
}


if (!empty($errorMsg)) {
    $_SESSION['error_msg'] = $errorMsg;
    header("Location:./requestQuote.php?eventId=$eventId&parentId=organizer");
} else if (!empty($successMsg)) {
    $_SESSION['success_msg'] = $successMsg;
    header("Location:./editEvent.php?eventId=$eventId&activeTab=2&parentId=organizer");
}
