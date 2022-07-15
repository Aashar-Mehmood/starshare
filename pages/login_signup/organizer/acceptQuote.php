<?php
include_once('../db_connection.php');
include_once('../checkUsersSession.php');
$quoteId = $_GET["quoteId"];
$organizerId = $_SESSION['id'];

$execute = mysqli_query(
    $conn,
    "UPDATE quotations SET status = 'accepted' 
    WHERE id = $quoteId AND organizer_id = $organizerId"
) or die(mysqli_error($conn));

if (!$execute) {
    $message = "Unable to process request.";
} else {
    $message = "Quote accepted Successfully.";
}

echo "<script>alert('$message')</script>";

header("Refresh:0 URL=./details.php");
