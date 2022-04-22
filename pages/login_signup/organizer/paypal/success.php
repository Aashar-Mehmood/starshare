<?php

include_once '../../checkUsersSession.php';
include_once '../../db_connection.php';

(int)$buyerId = $_SESSION['ticketBuyerId'];
(int)$sellerId = $_SESSION['ticketSellerId'];
(int)$eventId = $_SESSION['eventId'];
(int)$firstTicketId = $_SESSION['firstTicketId'];
(int)$pricePerTicket = $_SESSION['pricePerTicket'];
(int)$totalTickets = $_COOKIE['totalTicketsBought'];
$total =  $pricePerTicket *  $totalTickets;

$updateTicket = mysqli_query(
    $conn,
    "UPDATE `tickets` SET `buyer_id` = $buyerId, `status` = 'soldOut' 
    WHERE `event_id` = $eventId AND `id` >= $firstTicketId LIMIT $totalTickets;"
);

$insertTransaction = mysqli_query(
    $conn,
    "INSERT INTO `transactions`(`buyer_id`, `seller_id`, `product_name`, `amount`) 
    VALUES ($buyerId, $sellerId, 'Ticket', $total);"
);