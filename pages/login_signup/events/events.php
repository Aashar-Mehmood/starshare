<?php
include_once('../checkUsersSession.php');
include_once('../db_connection.php');

$buyerId = $_SESSION['id'];
$eventQuery = "SELECT `my_events`.`seat_numbers`, `events`.`title`, 
`events`.`location`, `events`.`date`, `events`.`time`, `events`.`banner`
FROM `my_events` INNER JOIN `events` ON `my_events`.`event_id` = `events`.`id` 
WHERE `my_events`.`buyer_id` = $buyerId;";

$myEvents = mysqli_query($conn, $eventQuery);

?>

<!DOCTYPE html>

<html lang="en">

<!--begin::Head-->

<head>
    <base href="../../../">
    <meta charset="utf-8" />
    <title>My Events</title>
    <?php include("../../../partials/csslinks.php"); ?>

</head>

<!--end::Head-->

<!--begin::Body-->

<body id="kt_body"
    class="header-fixed header-mobile-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
    <!--begin::Main-->

    <?php include("../../../partials/_header-mobile.php"); ?>
    <div class="d-flex flex-column flex-root">

        <!--begin::Page-->
        <div class="d-flex flex-row flex-column-fluid page">

            <?php include("../../../partials/_asideForRoles.php"); ?>

            <!--begin::Wrapper-->
            <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">

                <?php include("../../../partials/_header.php"); ?>

                <!--begin::Content-->
                <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                    <div class="container">
                        <?php
                        if (mysqli_num_rows($myEvents) < 1) {
                            echo '
                               <h2 class="w-60 mx-auto my-4">
                                    You have not purchased any tickets.
                               </h2>';
                        } else {
                            echo '<h2 class="pl-8">My Events</h2>';
                            echo '<div class="row">';
                            while ($eventArr = mysqli_fetch_assoc($myEvents)) {

                                echo '<div class="col-md-6 col-xl-4">
                                <div class="card card-custom gutter-b">
                                    <!--begin::Body-->
                                    <div class="card-body">
                                        <!--begin::Wrapper-->
                                        <div class="d-flex justify-content-between flex-column h-100">
                                            <!--begin::Container-->
                                            <div class="h-100">
                                                <!--begin::Header-->
                                                <div class="d-flex flex-column flex-center">
                                                    <!--begin::Image-->
                                                    <div class="bgi-no-repeat bgi-size-cover rounded min-h-180px w-100"
                                                        style="background-image: url(' . $eventArr["banner"] . ')">
                                                    </div>
                                                    <!--end::Image-->
                                                    <!--begin::Title-->
                                                    <p
                                                        class="card-title font-weight-bolder text-dark-75 font-size-h4 m-0 pt-7 pb-1">
                                                        ' . $eventArr["title"] . '
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
                                                                ' . $eventArr["location"] . '
                                                            </p>
                                                        </div>
                                                        <!--end::Text-->

                                                    </div>
                                                    <!--end::Item-->


                                                </div>
                                                <div class="pt-1">
                                                    <!--begin::Item-->
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
                                                            <p class="text-dark-75 mb-1 font-size-lg font-weight-bolder">Timing
                                                               ' . $eventArr["date"] . ' <br>
                                                               ' . $eventArr["time"] . ' 
                                                            </p>
                                                        </div>
                                                        <!--end::Text-->

                                                    </div>
                                                    <!--end::Item-->


                                                </div>
                                                <div class="pt-1">
                                                    <!--begin::Item-->
                                                    <div class="d-flex flex-center pb-9">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-45 symbol-light mr-4">
                                                            <span class="symbol-label">
                                                                <i class="fas fa-chair"></i>
                                                            </span>
                                                        </div>
                                                        <!--end::Symbol-->
                                                        <!--begin::Text-->
                                                        <div class="d-flex flex-column flex-grow-1">
                                                            <p
                                                                class="text-dark-75 mb-1 font-size-lg font-weight-bolder">
                                                                Seats Bought: ' . $eventArr["seat_numbers"] . '
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <!--end::Item-->
                                                </div>
                                                <!--end::Body-->
                                            </div>
                                            <!--eng::Container-->

                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::Body-->
                                </div>
                            </div>';
                            }
                            // close row
                            echo ' </div>';
                        }

                        ?>
                    </div>

                </div>

                <!--end::Content-->

                <?php include("../../../partials/_footer.php"); ?>
            </div>

            <!--end::Wrapper-->
        </div>

        <!--end::Page-->
    </div>

    <!--end::Main-->
    <?php include("../../../partials/_extras/offcanvas/quick-user.php") ?>
    <?php include("../../../partials/jslinks.php"); ?>
</body>

<!--end::Body-->

</html>