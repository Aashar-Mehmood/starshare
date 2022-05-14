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

// update the tickets table 
$updateTicket = mysqli_query(
    $conn,
    "UPDATE `tickets` SET `buyer_id` = $buyerId, `status` = 'soldOut' 
    WHERE `event_id` = $eventId AND `id` >= $firstTicketId LIMIT $totalTickets;"
);

// add a new transaction 
$insertTransaction = mysqli_query(
    $conn,
    "INSERT INTO `transactions`(`buyer_id`, `seller_id`, `product_name`, `amount`) 
    VALUES ($buyerId, $sellerId, 'Ticket', $total);"
);

// get the data of events whose tickets are purchased
$selectEvent = mysqli_query($conn, "SELECT * FROM `events` WHERE `id` = $eventId");
$eventArr = mysqli_fetch_assoc($selectEvent);

// select all the tickets purchased by the fan
$seletcTickets = mysqli_query($conn, "SELECT `id` FROM `tickets` WHERE `buyer_id` = $buyerId AND `event_id` = $eventId;");
$seatsArr = [];
while ($ticketArr = mysqli_fetch_assoc($seletcTickets)) {
    array_push($seatsArr, $ticketArr['id']);
}
$seatNumbers = implode(', ', $seatsArr);

// insert or update in my events table 
$myEvents = mysqli_query($conn, "SELECT * FROM `my_events` WHERE `buyer_id` = $buyerId AND `event_id` = $eventId;");
if (mysqli_num_rows($myEvents) < 1) {
    mysqli_query($conn, "INSERT INTO `my_events` (`buyer_id`, `event_id`, `seat_numbers`) VALUES ($buyerId, $eventId, '$seatNumbers');");
} else {
    mysqli_query($conn, "UPDATE `my_events` SET `seat_numbers` = '$seatNumbers' WHERE `buyer_id` = $buyerId AND `event_id` = $eventId;");
}

?>


<!DOCTYPE html>

<html lang="en">

<!--begin::Head-->

<head>
    <base href="../../../../">
    <meta charset="utf-8" />
    <title>Success</title>
    <?php include("../../../../partials/csslinks.php"); ?>
    <link rel="stylesheet" href="assets/css/custom/bordered_inputs.css">

</head>
<style>
@media screen and (max-width:425px) {
    .form-group.row {
        margin-bottom: 0 !important;
    }

    div.col-lg-6 {
        padding: 1rem;
    }
}
</style>
<!--end::Head-->

<!--begin::Body-->

<body id="kt_body"
    class="header-fixed header-mobile-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
    <!--begin::Main-->

    <?php include("../../../../partials/_header-mobile.php"); ?>
    <div class="d-flex flex-column flex-root">

        <!--begin::Page-->
        <div class="d-flex flex-row flex-column-fluid page">

            <?php include("../../../../partials/_asideForRoles.php"); ?>

            <!--begin::Wrapper-->
            <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">

                <!--begin::Header-->
                <div id="kt_header" class="header header-fixed">

                    <!--begin::Container-->
                    <div class="container-fluid d-flex align-items-stretch justify-content-between">

                        <!--begin::Header Menu Wrapper-->
                        <div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">

                            <!--begin::Header Menu-->


                            <!--end::Header Menu-->
                        </div>

                        <!--end::Header Menu Wrapper-->

                        <!--begin::Topbar-->
                        <div class="topbar">

                            <!--begin::Search-->

                            <!--end::Search-->

                            <!--begin::User-->
                            <div class="topbar-item">
                                <div class="btn btn-icon btn-icon-mobile w-auto btn-clean d-flex align-items-center btn-lg px-2"
                                    id="kt_quick_user_toggle">
                                    <span
                                        class="text-muted font-weight-bold font-size-base d-none d-md-inline mr-1">Hi,</span>
                                    <span
                                        class="text-dark-50 font-weight-bolder font-size-base d-none d-md-inline mr-3">
                                        <?php echo $_SESSION["name"]; ?>
                                    </span>
                                    <span class="symbol symbol-lg-35 symbol-25 symbol-light-success">
                                        <span class="symbol-label font-size-h5 font-weight-bold">
                                            <?php echo substr($_SESSION["name"], 0, 1) ?>
                                        </span>
                                    </span>
                                </div>
                            </div>

                            <!--end::User-->
                        </div>

                        <!--end::Topbar-->
                    </div>

                    <!--end::Container-->
                </div>

                <!--end::Header-->


                <!--begin::Content-->
                <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-8 col-xl-6">
                                <div class="card card-custom">
                                    <div class="card-header">
                                        <h2 class="card-title">
                                            Tickets Purchased Successfully
                                        </h2>
                                    </div>
                                    <?php
                                    echo '<div class="card-body">
                                        <!--begin::Wrapper-->
                                        <div class="d-flex justify-content-between flex-column h-100">
                                            <!--begin::Container-->
                                            <div class="h-100">
                                                <!--begin::Header-->
                                                <div class="d-flex flex-column flex-center">
                                                    <!--begin::Image-->
                                                    <div class="bgi-no-repeat bgi-size-cover rounded min-h-300px w-100"
                                                        style="background-image: url(' . $eventArr['banner'] . ')"></div>
                                                    <!--end::Image-->
                                                    <!--begin::Title-->
                                                    <p class="card-title font-weight-bolder text-dark-75 font-size-h4 m-0 pt-7 pb-1">
                                                        ' . $eventArr['title'] . '
                                                    </p>
                                                    <!--end::Title-->
                                                    <!--begin::Text-->
                                                    <!--end::Text-->
                                                </div>
                                                <!--end::Header-->
                                                <!--begin::Body-->
                                                <div class="pt-1">
                                                    <!--begin::Item-->
                                                    <div class="d-flex flex-center pb-9">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-45 symbol-light mr-4">
                                                            <span class="symbol-label">
                                                                <i class="fas fa-map-marker-alt"></i>
                                                            </span>
                                                        </div>
                                                        <!--end::Symbol-->
                                                        <!--begin::Text-->
                                                        <div class="d-flex flex-column flex-grow-1">
                                                            <p class="text-dark-75 mb-1 font-size-lg font-weight-bolder">
                                                                ' . $eventArr['location'] . '
                                                            </p>
                                                        </div>
                                                        <!--end::Text-->
                                                    </div>
                                                    <div class="d-flex flex-center pb-9">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-45 symbol-light mr-4">
                                                            <span class="symbol-label">
                                                                <i class="fas fa-clock"></i>
                                                            </span>
                                                        </div>
                                                        <!--end::Symbol-->
                                                        <!--begin::Text-->
                                                        <div class="d-flex flex-column flex-grow-1">
                                                            <p class="text-dark-75  mb-1 font-size-lg font-weight-bolder">
                                                                Scheduled date : ' . date('d-M-Y', strtotime($eventArr['date'])) . ' <br>
                                                                Time : ' . date('h-i-s : A', strtotime($eventArr['time'])) . '
                                    
                                                            </p>
                                                        </div>
                                                        <!--end::Text-->
                                                        <!--begin::label-->
                                                    </div>
                                                    <div class="d-flex flex-center pb-9">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-45 symbol-light mr-4">
                                                            <span class="symbol-label">
                                                                <i class="fas fa-map-marker-alt"></i>
                                                            </span>
                                                        </div>
                                                        <!--end::Symbol-->
                                                        <!--begin::Text-->
                                                        <div class="d-flex flex-column flex-grow-1">
                                                            <p class="text-dark-75 mb-1 font-size-lg font-weight-bolder">
                                                               Seat/Ticket Numbers : ' . $seatNumbers . '
                                                            </p>
                                                        </div>
                                                        <!--end::Text-->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>';
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end::Content-->
                </div>
                <?php include("../../../../partials/_footer.php"); ?>

                <!--end::Wrapper-->
            </div>

            <!--end::Page-->
        </div>

        <!--end::Main-->
        <?php include("../../../../partials/_extras/offcanvas/quick-user.php") ?>
        <?php include("../../../../partials/jslinks.php"); ?>
</body>

<!--end::Body-->

</html>