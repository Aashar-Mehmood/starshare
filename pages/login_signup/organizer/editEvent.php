<?php
include_once('../checkUsersSession.php');
include_once('../db_connection.php');


$activeTab = $_GET['activeTab'] ?? '1';
$eventId = $_GET['eventId'];
$organizerId = $_SESSION['id'];

$prevRecord = mysqli_query($conn, "SELECT * FROM `events` WHERE `id`= $eventId AND `organizer_id` = $organizerId;");
$recordArr = mysqli_fetch_assoc($prevRecord);

$prevSeats = mysqli_query($conn, "SELECT * FROM `tickets` WHERE `event_id` = $eventId;");
$seatsArr = mysqli_fetch_assoc($prevSeats);
$ticketPrice = $seatsArr['price'];

$title = $recordArr['title'];
$description = $recordArr['description'];
$location = $recordArr['location'];
$date = $recordArr['date'];
$time = $recordArr['time'];
$banner = $recordArr['banner'];
?>
<!DOCTYPE html>

<html lang="en">

<!--begin::Head-->

<head>
    <base href="../../../">
    <meta charset="utf-8" />
    <title>Edit Event</title>
    <?php include("../../../partials/csslinks.php"); ?>
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

<body id="kt_body" class="header-fixed header-mobile-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
    <!--begin::Main-->

    <?php include("../../../partials/_header-mobile.php"); ?>
    <div class="d-flex flex-column flex-root">

        <!--begin::Page-->
        <div class="d-flex flex-row flex-column-fluid page">

            <?php
            include_once("../../../partials/_asideForRoles.php");
            if (isset($_SESSION['error_msg']) || isset($_SESSION['success_msg'])) {
                include_once("../../../components/Alert.php");
            }
            ?>

            <!--begin::Wrapper-->
            <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">

                <div id="kt_header" class="header header-fixed">

                    <!--begin::Container-->
                    <div class="container-fluid d-flex align-items-stretch justify-content-between">

                        <!--begin::Header Menu Wrapper-->
                        <!--begin::Header Menu-->

                        <ul class="nav nav-tabs nav-tabs-line nav-bold nav-tabs-line-2x d-flex align-items-center ml-2 ml-md-8" style="border: none; font-size: 1.12rem;">
                            <li class="nav-item">
                                <a class="nav-link <?php echo $activeTab == '1' ? ' active' : '' ?>" data-toggle="tab" href="#kt_tab_pane_1">Edit Event</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?php echo $activeTab == '2' ? ' active' : '' ?>" data-toggle="tab" href="#kt_tab_pane_2">Quotes</a>
                            </li>
                        </ul>
                        <!--end::Header Menu-->

                        <!--end::Header Menu Wrapper-->

                        <!--begin::Topbar-->
                        <div class="topbar">
                            <!--begin::User-->
                            <div class="topbar-item">
                                <div class="btn btn-icon btn-icon-mobile w-auto btn-clean d-flex align-items-center btn-lg px-2" id="kt_quick_user_toggle">
                                    <span class="text-muted font-weight-bold font-size-base d-none d-md-inline mr-1">Hi,</span>
                                    <span class="text-dark-50 font-weight-bolder font-size-base d-none d-md-inline mr-3">
                                        <?php echo $_SESSION['organizer_name']; ?>
                                    </span>
                                    <span class="symbol symbol-lg-35 symbol-25 symbol-light-success">
                                        <span class="symbol-label font-size-h5 font-weight-bold">
                                            <?php echo substr($_SESSION['organizer_name'], 0, 1);  ?>
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

                <!-- modal to show previous banner of event -->
                <div class="modal fade" id="previousBanner" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Previous Banner</h5>
                            </div>
                            <div class="modal-body p-4">
                                <img class="w-100" src="<?php echo $banner ?>" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <!--============= end modal=================-->

                <!--begin::Content-->
                <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                    <div class="tab-content mt-5" id="myTabContent" style="overflow-x: hidden;">
                        <div class="tab-pane fade <?php echo $activeTab == '1' ? 'show active' : '' ?>" id="kt_tab_pane_1" role="tabpanel" aria-labelledby="kt_tab_pane_1">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-12">
                                        <div class="card card-custom">
                                            <div class="card-header">
                                                <h2 class="card-title">
                                                    Edit Event
                                                </h2>
                                            </div>
                                            <!--begin::Form-->

                                            <form action="<?php echo "pages/login_signup/organizer/editEventDb.php?eventId=" . $eventId ?>" method="POST" enctype="multipart/form-data">

                                                <div class="card-body">
                                                    <div class="form-group row">
                                                        <div class="col-lg-6">
                                                            <label>Title :</label>
                                                            <input name="title" type="text" class="form-control form-control-solid" placeholder="<?php echo $title ?>" />
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <label>Description :</label>
                                                            <textarea name="description" class="form-control form-control-solid" rows="3" placeholder="<?php echo $description ?>"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-lg-6">
                                                            <label>New Location :</label>
                                                            <input name="location" type="text" class="form-control form-control-solid" placeholder="<?php echo $location ?>" />
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <label>Ticket Price :</label>
                                                            <input name="ticket_price" type="number" name="ticketPrice" class="form-control form-control-solid" placeholder="<?php echo $ticketPrice ?>" />
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-lg-6">
                                                            <label for="eventDate" class="d-flex justify-content-between">
                                                                New Date :
                                                                <span class="text-primary">(Old <?php echo $date ?>)</span>
                                                            </label>
                                                            <input name="date" class="form-control form-control-solid" type="date" id="eventDate" />
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <label for="eventTime" class="d-flex justify-content-between">
                                                                New Time :
                                                                <span class="text-primary">(Old <?php echo $time ?>)</span>
                                                            </label>
                                                            <input name="time" class="form-control form-control-solid" type="time" id="eventTime" />
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-lg-6">
                                                            <label class="d-flex justify-content-between pr-2">
                                                                New Banner Image
                                                                <a href="javascript;" data-target="#previousBanner" data-toggle="modal">View
                                                                    Previous</a>
                                                            </label>
                                                            <div></div>
                                                            <div class="custom-file">
                                                                <input name="banner" type="file" class="custom-file-input" id="customFile" />
                                                                <label class="custom-file-label" for="customFile">Choose
                                                                    Image</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-footer ml-6">
                                                    <input type="submit" name="updateEvent" value="Save Changes" class="btn btn-primary" />
                                                    <input type="reset" value="Reset" class="btn btn-secondary ml-10" />
                                                </div>
                                            </form>
                                            <!--end::Form-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade <?php echo $activeTab == '2' ? 'show active' : '' ?>" id="kt_tab_pane_2" role="tabpanel" aria-labelledby="kt_tab_pane_2">
                            <div class="container">
                                <div class="row">
                                    <div class="col-xl-10">

                                        <div class="card card-custom gutter-b">
                                            <!--begin::Header-->
                                            <div class="card-header d-flex align-items-center">
                                                <h2 class="card-title">
                                                    Sent Quotes
                                                </h2>
                                                <a href="pages/login_signup/organizer/requestQuote.php?eventId=<?php echo $eventId ?>&parentId=organizer">
                                                    <button class="btn btn-primary btn-large">
                                                        Request a Quote
                                                    </button>
                                                </a>
                                            </div>
                                            <!--end::Header-->
                                            <!--begin::Body-->
                                            <div class="card-body pt-2 pb-0 mt-n3">
                                                <div class="tab-content mt-5" id="myTabTables11">
                                                    <div class="table-responsive">
                                                        <table class="table table-vertical-center table-bordered">
                                                            <thead class="thead-dark">
                                                                <?php
                                                                $query = "SELECT event_id, organizer_quotation_amount AS quoteAmount, status, name FROM quotations
                                                                    INNER JOIN suppliers ON quotations.supplier_id = suppliers.u_id WHERE quotations.organizer_id = $organizerId;";
                                                                $sentQuotes = mysqli_query($conn, $query) or die(mysqli_error($conn));
                                                                if (mysqli_num_rows($sentQuotes) < 1) {
                                                                    echo
                                                                    '<tr>
                                                                            <th colspan="4" class="text-center text-lg">
                                                                                No Quotes Sent Yet
                                                                            </th>
                                                                        </tr>';
                                                                } else {
                                                                    echo
                                                                    '
                                                                        <tr>
                                                                            <th style="min-width: 150px;">Event Title</th>
                                                                            <th style="min-width: 150px;">Supplier Name</th>
                                                                            <th style="min-width: 150px;">Quote Amount</th>
                                                                            <th style="min-width: 200px;">Status</th>
                                                                        </tr>
                                                                        ';
                                                                }
                                                                ?>


                                                            </thead>
                                                            <tbody>
                                                                <?php
                                                                while ($quotesArr = mysqli_fetch_assoc($sentQuotes)) {
                                                                    $eId = $quotesArr['event_id'];
                                                                    $eData = mysqli_query($conn, "SELECT title FROM events WHERE `id` = $eId;") or die(mysqli_error($conn));
                                                                    $eArr = mysqli_fetch_assoc($eData);

                                                                    echo '<tr>
                                                                        <td>
                                                                            <a
                                                                                class="text-dark-75 font-weight-bolder mb-1 font-size-lg">
                                                                                ' . $eArr['title'] . '
                                                                            </a>
                                                                        </td>
                                                                        <td>
                                                                            <span
                                                                                class="text-dark-75 font-weight-bolder d-block font-size-lg">
                                                                                ' . $quotesArr['name'] . '
                                                                                </span>
                                                                        </td>
                                                                        <td>
                                                                            <span
                                                                                class="text-dark-75 font-weight-bolder d-block font-size-lg">
                                                                                ' . $quotesArr['quoteAmount'] . '    
                                                                            </span>
                                                                        </td>
                                                                        <td>
                                                                            <span
                                                                                class="text-dark-75 font-weight-bolder d-block font-size-lg">
                                                                                ' . $quotesArr['status'] . '    
                                                                            </span>
                                                                        </td>
                                                                    </tr>';
                                                                }
                                                                ?>


                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <!--end::Table-->
                                            </div>
                                            <!--end::Tap pane-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
    <?php include("../../../partials/_extras/offcanvas/quick-organizer.php") ?>
    <?php include("../../../partials/jslinks.php"); ?>
</body>

<!--end::Body-->

</html>