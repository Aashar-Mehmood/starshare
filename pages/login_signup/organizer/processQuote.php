<?php
include_once('../checkUsersSession.php');
include_once('../db_connection.php');

(int)$eventId = $_POST['event_id'];
(int)$organizerId = $_SESSION['id'];
(int)$supplierId = $_POST['supplier_id'];
$description = $_POST['description'];
(float)$amount = $_POST['amount'];

$execute = mysqli_query(
    $conn,
    "INSERT INTO `quotations`(`event_id`, `organizer_id`, `supplier_id`, `organizer_quotation`, `organizer_quotation_amount`)
    VALUES($eventId, $organizerId, $supplierId,'$description', $amount)"
);


if (!$execute) {
    $message = "Unable to send Quote";
} else {
    $message = "Quote Sent Successfully";
}

echo "<script>alert('$message')</script>";
header("Refresh:0; url=./editEvent.php?eventId=$eventId");