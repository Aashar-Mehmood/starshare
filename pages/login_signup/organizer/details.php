<?php
include_once('../checkUsersSession.php');
include_once('../db_connection.php');
$uId = $_SESSION['id'];

$totalEvents = mysqli_num_rows(
    mysqli_query(
        $conn,
        "SELECT id FROM events WHERE organizer_id = $uId;"
    )
);

$suppliersHired = mysqli_num_rows(
    mysqli_query(
        $conn,
        "SELECT id FROM quotations WHERE organizer_id = $uId AND status = 'accepted';"
    )
);

$totalEarningsData = mysqli_query(
    $conn,
    "SELECT SUM(amount) AS total_earnings  FROM transactions 
    WHERE seller_id = $uId AND product_name = 'ticket';"
);
$totalArr = mysqli_fetch_assoc($totalEarningsData);
$totalEarnings = $totalArr['total_earnings'];
if (empty($totalEarnings)) {
    $totalEarnings = '0';
}

$currentMonth = date('Y-m');
$monthlyEarningsData = mysqli_query(
    $conn,
    "SELECT SUM(amount) AS monthly_earnings  FROM transactions 
    WHERE seller_id = $uId AND product_name = 'ticket' AND date LIKE '$currentMonth%';"
);
$monthlyEarningsArr = mysqli_fetch_assoc($monthlyEarningsData);
$monthlyEarnings = $monthlyEarningsArr['monthly_earnings'];
if (empty($monthlyEarnings)) {
    $monthlyEarnings = '0';
}

$currentYear = date('Y');
$yearlyEarningsData = mysqli_query(
    $conn,
    "SELECT SUM(amount) AS yearly_earnings  FROM transactions 
    WHERE seller_id = $uId AND product_name = 'ticket' AND date LIKE '$currentYear%';"
);
$yearlyEarningsArr = mysqli_fetch_assoc($yearlyEarningsData);
$yearlyEarnings = $yearlyEarningsArr['yearly_earnings'];
if (empty($yearlyEarnings)) {
    $yearlyEarnings = '0';
}


?>

<!DOCTYPE html>

<html lang="en">

<!--begin::Head-->

<head>
    <base href="../../../">
    <meta charset="utf-8" />
    <title>Organizer Details</title>
    <?php
    include("../../../partials/csslinks.php");
    ?>
    <link rel="stylesheet" href="assets/css/custom/bordered_inputs.css">
    <link rel="stylesheet" href="assets/css/custom/user_details.css">

</head>
<style>


</style>

<!--end::Head-->

<!--begin::Body-->

<body id="kt_body" class="header-fixed header-mobile-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
    <?php
    include("../../../partials/_header-mobile.php");
    ?>

    <div class="d-flex flex-column flex-root">

        <div class="d-flex flex-row flex-column-fluid page">

            <?php
            include_once("../../../partials/_asideForRoles.php");
            if (isset($_SESSION['success_msg']) || isset($_SESSION['error_msg'])) {

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
                                <a class="nav-link active" data-toggle="tab" href="#kt_tab_pane_1">Overview</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#kt_tab_pane_2">Events</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#kt_tab_pane_3">Quote Responses</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#kt_tab_pane_4">Settings</a>
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
                                        <?php echo $_SESSION['organizer_name'] ?>
                                    </span>
                                    <span class="symbol symbol-lg-35 symbol-25 symbol-light-success">
                                        <span class="symbol-label font-size-h5 font-weight-bold">
                                            <?php echo substr($_SESSION['organizer_name'], 0, 1)  ?>
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
                <!-- Begin Content -->
                <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                    <div class="tab-content mt-5" id="myTabContent">
                        <div class="tab-pane fade show active" id="kt_tab_pane_1" role="tabpanel" aria-labelledby="kt_tab_pane_1">
                            <div class="container">
                                <div class="row align-items-center">
                                    <div class="col-md-6 col-xl-4">
                                        <div class="card card-custom gutter-b">
                                            <!--begin::Body-->
                                            <div class="card-body">
                                                <!--begin::Wrapper-->
                                                <div class="d-flex justify-content-between flex-column pt-4 h-100">
                                                    <!--begin::Container-->
                                                    <div class="pb-5">
                                                        <!--begin::Header-->
                                                        <div class="d-flex flex-column flex-center">
                                                            <!--begin::Symbol-->
                                                            <div class="symbol symbol-120 symbol-circle symbol-success overflow-hidden">
                                                                <span class="symbol-label">
                                                                    <img src="assets/media/svg/avatars/007-boy-2.svg" class="h-75 align-self-end" alt="">
                                                                </span>
                                                            </div>
                                                            <!--end::Symbol-->
                                                            <!--begin::Username-->
                                                            <p class="card-title font-weight-bolder text-dark-75 font-size-h4 m-0 pt-7 pb-1">
                                                                <?php echo $_SESSION['organizer_name'] ?>
                                                            </p>
                                                            <!--end::Username-->
                                                            <!--begin::Info-->
                                                            <div class="font-weight-bold text-dark-50 font-size-sm pb-6">
                                                                <?php echo $_SESSION['organizer_email'] ?>
                                                            </div>
                                                            <!--end::Info-->
                                                        </div>
                                                        <!--end::Header-->
                                                        <!--begin::Body-->
                                                        <div class="pt-1">
                                                            <!--begin::Text-->
                                                            <p class="text-dark-75 font-weight-nirmal font-size-lg m-0 pb-7">
                                                                <?php echo $_SESSION['organizer_description'] ?>
                                                            </p>
                                                            <!--end::Text-->
                                                            <!--begin::Item-->
                                                            <div class="d-flex align-items-center pb-9">
                                                                <!--begin::Symbol-->
                                                                <div class="symbol symbol-45 symbol-light mr-4">
                                                                    <span class="symbol-label">
                                                                        <span class="svg-icon svg-icon-2x svg-icon-dark-50">
                                                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Media/Equalizer.svg-->
                                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                    <rect x="0" y="0" width="24" height="24"></rect>
                                                                                    <rect fill="#000000" opacity="0.3" x="13" y="4" width="3" height="16" rx="1.5">
                                                                                    </rect>
                                                                                    <rect fill="#000000" x="8" y="9" width="3" height="11" rx="1.5">
                                                                                    </rect>
                                                                                    <rect fill="#000000" x="18" y="11" width="3" height="9" rx="1.5">
                                                                                    </rect>
                                                                                    <rect fill="#000000" x="3" y="13" width="3" height="7" rx="1.5">
                                                                                    </rect>
                                                                                </g>
                                                                            </svg>
                                                                            <!--end::Svg Icon-->
                                                                        </span>
                                                                    </span>
                                                                </div>
                                                                <!--end::Symbol-->
                                                                <!--begin::Text-->
                                                                <div class="d-flex flex-column flex-grow-1">
                                                                    <p class="text-dark-75 mb-1 font-size-lg font-weight-bolder">
                                                                        Reviews
                                                                    </p>
                                                                </div>
                                                                <!--end::Text-->
                                                                <!--begin::label-->
                                                                <span class="font-weight-bolder label label-xl label-light-success label-inline px-3 py-5 min-w-45px">60</span>
                                                                <!--end::label-->
                                                            </div>
                                                            <!--end::Item-->
                                                            <!--begin::Item-->
                                                            <div class="d-flex align-items-center justify-content-center pb-9">
                                                                <!--begin::Symbol-->
                                                                <div class="d-flex">
                                                                    <i class="fas fa-star fa-2x" style="color: #3edf3e;"></i>
                                                                    <i class="fas fa-star fa-2x" style="color: #3edf3e;"></i>
                                                                    <i class="fas fa-star fa-2x" style="color: #3edf3e;"></i>
                                                                    <i class="fas fa-star fa-2x" style="color: #3edf3e;"></i>
                                                                </div>
                                                                <!--end::Symbol-->
                                                            </div>
                                                            <!--end::Item-->
                                                        </div>
                                                        <!--end::Body-->
                                                    </div>
                                                    <!--end::Container-->
                                                </div>
                                                <!--end::Wrapper-->
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xl-4">
                                        <div class="card card-custom bg-gray-100 card-stretch-half gutter-b">
                                            <!--begin::Header-->
                                            <div class="card-header border-0 py-5" style="background-color: #24bd76;">
                                                <h2 class="font-weight-bolder text-dark">Total Events Organized</h2>
                                            </div>
                                            <!--end::Header-->
                                            <!--begin::Body-->
                                            <div class="card-body p-0 position-relative overflow-hidden">
                                                <!--begin::Chart-->
                                                <div class="card-rounded-bottom pt-10 pl-8" style=" background-color: #24bd7680;">
                                                    <h1>
                                                        <?php
                                                        echo $totalEvents;
                                                        ?>
                                                    </h1>
                                                </div>
                                                <!--end::Chart-->
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <div class="card card-custom bg-gray-100 card-stretch-half gutter-b">
                                            <!--begin::Header-->
                                            <div class="card-header border-0 py-5" style="background-color: #e52a6f;">
                                                <h2 class="font-weight-bolder text-dark">Total Earnings</h2>
                                            </div>
                                            <!--end::Header-->
                                            <!--begin::Body-->
                                            <div class="card-body p-0 position-relative overflow-hidden">
                                                <!--begin::Chart-->
                                                <div class="card-rounded-bottom pt-10 pl-8" style="background-color:#e52a6f80; ">
                                                    <h1>
                                                        <?php
                                                        echo $totalEarnings . ' &dollar;'
                                                        ?>
                                                    </h1>
                                                </div>
                                                <!--end::Chart-->
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-xl-4">
                                        <div class="card card-custom bg-gray-100 card-stretch-half gutter-b">
                                            <!--begin::Header-->
                                            <div class="card-header border-0 bg-warning py-5">
                                                <h2 class="font-weight-bolder text-dark">Suppliers Hired</h2>
                                            </div>
                                            <!--end::Header-->
                                            <!--begin::Body-->
                                            <div class="card-body p-0 position-relative overflow-hidden">
                                                <!--begin::Chart-->
                                                <div class="card-rounded-bottom pt-10 pl-8" style=" background-color:#ffa80080">
                                                    <h1>
                                                        <?php
                                                        echo $suppliersHired;
                                                        ?>
                                                    </h1>
                                                </div>
                                                <!--end::Chart-->
                                            </div>
                                            <!--end::Body-->
                                        </div>

                                        <div class="card card-custom bg-gray-100 card-stretch-half gutter-b">
                                            <!--begin::Header-->
                                            <div class="card-header border-0 bg-success py-5">
                                                <h2 class="font-weight-bolder text-dark">This Month Earnings</h2>
                                            </div>
                                            <!--end::Header-->
                                            <!--begin::Body-->
                                            <div class="card-body p-0 position-relative overflow-hidden">
                                                <!--begin::Chart-->
                                                <div class="card-rounded-bottom pt-10 pl-8" style="height:100%;  background-color: #1bc5bd80;">
                                                    <h1>
                                                        <?php
                                                        echo $monthlyEarnings . ' &dollar;'
                                                        ?>
                                                    </h1>
                                                </div>
                                                <!--end::Chart-->
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xl-4">
                                        <div class="card card-custom bg-gray-100 card-stretch gutter-b">
                                            <!--begin::Header-->
                                            <div class="card-header border-0 bg-primary py-5">
                                                <h2 class="font-weight-bolder text-dark">This Year Earnings</h2>
                                            </div>
                                            <!--end::Header-->
                                            <!--begin::Body-->
                                            <div class="card-body p-0 position-relative overflow-hidden">
                                                <!--begin::Chart-->
                                                <div class="card-rounded-bottom pt-10 pl-8" style="background-color:#3699ff80 ">
                                                    <h1>
                                                        <?php
                                                        echo $yearlyEarnings . ' &dollar;'
                                                        ?>
                                                    </h1>
                                                </div>
                                                <!--end::Chart-->
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="kt_tab_pane_2" role="tabpanel" aria-labelledby="kt_tab_pane_2">
                            <div class="modal fade" id="newEvent" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">Add a new Event</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">

                                            <form class="form" action="pages/login_signup/organizer/addEvent.php" method="POST" enctype="multipart/form-data">

                                                <div class="form-group row">
                                                    <div class="col-lg-6">
                                                        <label>Title :</label>
                                                        <input type="text" name="title" class="form-control form-control-solid" />
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <label>Description :</label>
                                                        <textarea name="description" class="form-control form-control-solid" rows="3">
                            </textarea>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <div class="col-lg-6">
                                                        <label>Location :</label>
                                                        <input name="location" type="text" class="form-control form-control-solid" />
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <label>Total Seats :</label>
                                                        <input name="total_seats" type="number" class="form-control form-control-solid" />
                                                    </div>

                                                </div>


                                                <div class="form-group row">
                                                    <div class="col-lg-6">
                                                        <label for="eventDate">Date :</label>
                                                        <input name="date" class="form-control form-control-solid" type="date" id="eventDate" />
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <label for="eventTime">Time :</label>
                                                        <input name="time" class="form-control form-control-solid" type="time" id="eventTime" />
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-lg-6">
                                                        <label for="selectStar">
                                                            Select Star
                                                        </label>

                                                        <select name="star_performing" class="form-control form-control-solid" id="selectStar">
                                                            <option selected></option>
                                                            <?php
                                                            $currentUserId = $_SESSION['id'];
                                                            $selectStars = "SELECT `u_id`, `name` FROM `stars` WHERE NOT `u_id` = $currentUserId LIMIT 20";
                                                            $selectResult = mysqli_query($conn, $selectStars);
                                                            while ($row = mysqli_fetch_assoc($selectResult)) {
                                                                $sId = $row['u_id'];
                                                                $sName = $row['name'];
                                                                $rating = rand(1, 5);
                                                                $reviews = rand(1, 100);
                                                                echo "
                                  <option value='$sId'>
                                    $sName &nbsp;&nbsp;&nbsp; Rating : $rating stars &nbsp;&nbsp;&nbsp; Total Reviews : $reviews    
                                  </option>";
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <label>Banner Image</label>
                                                        <div></div>
                                                        <div class="custom-file">
                                                            <input name="banner" type="file" class="custom-file-input" id="customFile" />
                                                            <label class="custom-file-label" for="customFile">Choose
                                                                Image</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-lg-6">
                                                        <label for="ticketPrice">Ticket Price $ :</label>
                                                        <input name="ticketPrice" class="form-control form-control-solid" type="number" id="ticketPrice" />

                                                    </div>
                                                </div>

                                                <div class="d-flex col-md-6 mt-12 px-6">
                                                    <input type="submit" name="add_event" value="Add Event" class="btn btn-primary" />

                                                    <button type="button" class="btn btn-secondary ml-12" data-dismiss="modal">Close</button>
                                                </div>

                                            </form>

                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="container">
                                <div class="row">
                                    <div class="col-xl-10">
                                        <div class="card card-custom gutter-b">
                                            <!--begin::Header-->
                                            <div class="card-header d-flex align-items-center">
                                                <h2 class="card-title">Events</h2>
                                                <button class="btn btn-primary btn-large" data-target="#newEvent" data-toggle="modal">
                                                    Add Event
                                                </button>
                                            </div>
                                            <!--end::Header-->
                                            <!--begin::Body-->
                                            <div class="card-body pt-2 pb-0 mt-n3">
                                                <div class="tab-content mt-5" id="myTabTables11">
                                                    <div class="table-responsive">
                                                        <table class="table table-vertical-center table-bordered">
                                                            <thead class="thead-dark">
                                                                <tr>
                                                                    <th style="min-width: 150px;">Event Title</th>
                                                                    <th style="min-width: 150px;">Location</th>
                                                                    <th style="min-width: 150px;">Date</th>
                                                                    <th style="min-width: 150px;">Time</th>
                                                                    <th style="min-width:200px; padding-left:1.75rem">
                                                                        Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php
                                                                $organizerId = $_SESSION['id'];
                                                                $selectEvents = "SELECT * FROM `events` WHERE `organizer_id` = $organizerId;";
                                                                $eventResult = mysqli_query($conn, $selectEvents);
                                                                while ($record = mysqli_fetch_assoc($eventResult)) {
                                                                    $eventId = $record['id'];
                                                                    echo '<tr>
                                  <td>
                                    <p
                                      class="text-dark-75 font-weight-bolder mb-1 font-size-lg">
                                      ' . $record['title'] . '
                                      </p>
                                  </td>
                                  <td>
                                    <span class="text-dark-75 font-weight-bolder d-block font-size-lg">
                                    ' . $record['location'] . '
                                    </span>
                                  </td>
                                  <td>
                                  <span class="text-dark-75 font-weight-bolder d-block font-size-lg">
                                  ' . $record['date'] . '
                                  </span>
                                  </td>
                                  <td>
                                  <span class="text-dark-75 font-weight-bolder d-block font-size-lg">
                                  ' . date_format(new DateTime($record['time']), 'h-i-s : A') . '
                                  </span>
                                  </td>
                                  <td>
                                    <a href="pages/login_signup/organizer/editEvent.php?eventId=' . $eventId . '" title="Edit Event"
                                      class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">
                                      <span class="svg-icon svg-icon-md svg-icon-primary">
                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg-->
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                          xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                          viewBox="0 0 24 24" version="1.1">
                                          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24"></rect>
                                            <path
                                              d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z"
                                              fill="#000000" fill-rule="nonzero"
                                              transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)">
                                            </path>
                                            <path
                                              d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z"
                                              fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                                          </g>
                                        </svg>
                                        <!--end::Svg Icon-->
                                      </span>
                                    </a>
                                    <a href="#" title="Close Event"
                                      class="btn btn-icon btn-light btn-hover-danger btn-sm">
                                      <i class="far fa-calendar-times text-danger"></i>
                                    </a>
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
                        <?php
                        // select the quotes with status = responded
                        $quotesData = mysqli_query(
                            $conn,
                            "SELECT `quotations`.`id`, `supplier_quotation`, `supplier_quotation_amount` AS `amount`,`title`, `banner`, `date`
              FROM quotations INNER JOIN events ON quotations.event_id = events.id 
              WHERE `status` = 'responded' AND `quotations`.`organizer_id` = $uId;"
                        ) or die(mysqli_error($conn));
                        ?>
                        <div class="tab-pane fade" id="kt_tab_pane_3" role="tabpanel" aria-labelledby="kt_tab_pane_3">
                            <div class="container">
                                <div class="row">
                                    <?php
                                    if (mysqli_num_rows($quotesData) < 1) {
                                        echo ' <div class="col-12 pl-8 pl-md-12 ">
                                            <h2>No response received yet</h2>
                                        </div>
                                        ';
                                    } else {
                                        while ($quotesArr = mysqli_fetch_assoc($quotesData)) {
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
                                                                <div class="bgi-no-repeat bgi-size-cover rounded min-h-180px w-100" style="background-image: url(' . $quotesArr['banner'] . ')">
                                                                </div>
                                                                <!--end::Image-->
                                                                <!--begin::Title-->
                                                                <p class="card-title font-weight-bolder text-dark-75  font-size-h4 m-0 pt-7 pb-1">
                                                                    ' . $quotesArr['title'] . '
                                                                </p>
                                                                <!--end::Title-->
                                                                <!--begin::Text-->
                                                                <!--end::Text-->
                                                            </div>
                                                            <!--end::Header-->
                                                            <!--begin::Body-->
                                                            <div class="pt-1">
                                                            <div class="d-flex align-items-center pb-9">
                                                            <!--begin::Symbol-->
                                                            <div class="symbol symbol-45 symbol-light mr-4">
                                                                <span class="symbol-label">
                                                                    <i class="fas fa-clock"></i>
                                                                </span>
                                                            </div>
                                                            <!--end::Symbol-->
                                                            <!--begin::Text-->
                                                            <div class="flex-grow-1">
                                                                <p class="text-dark-75  mb-1 font-size-lg font-weight-bolder">
                                                                  Event Date
                                                                </p>
                                                            </div>
                                                            <span class=" font-weight-bolder label label-xl label-light-success label-inline px-3 py-5 min-w-45px">
                                                                ' . $quotesArr['date'] . ' 
                                                            </span>
                                                            <!--end::Text-->
                                                        </div>
                                                                <!--begin::Item-->
                                                                <div class="d-flex align-items-center pb-9">
                                                                    <!--begin::Symbol-->
                                                                    <div class="symbol symbol-45 symbol-light mr-4">
                                                                        <span class="symbol-label">
                                                                            <i class="fas fa-dollar-sign"></i>
                                                                        </span>
                                                                    </div>
                                                                    <!--end::Symbol-->
                                                                    <!--begin::Text-->
                                                                    <div class="flex-grow-1">
                                                                        <p class="text-dark-75  mb-1 font-size-lg font-weight-bolder">
                                                                            Quote Amount
                                                                        </p>
                                                                    </div>
                                                                    <span class=" font-weight-bolder label label-xl label-light-success label-inline px-3 py-5 min-w-45px">
                                                                        ' . $quotesArr['amount'] . ' $
                                                                    </span>
                                                                    <!--end::Text-->
                                                                </div>
                                                                
                                                                <div class="d-flex pb-9">
                                                                    ' . $quotesArr['supplier_quotation'] . '
                                                                    
                                                                </div>
                                                            </div>
                                                            <!--end::Body-->
                                                        </div>
                                                        <!--eng::Container-->
                                                        <!--begin::Footer-->
                                                        <div class="d-flex align-items-center justify-content-between">
    
                                                            <a href="pages/login_signup/supplier/acceptQuote.php?quoteId=' . $quotesArr["id"] . '">
                                                                <button class="btn btn-primary font-weight-bolder font-size-sm py-3 px-8">
                                                                    Accept
                                                                </button>
                                                            </a>
                                                            <a href="pages/login_signup/supplier/rejectQuote.php?quoteId=' . $quotesArr["id"] . '">
                                                                <button class="btn btn-secondary font-weight-bolder font-size-sm py-3 px-8">
                                                                    Reject
                                                                </button>
                                                            </a>
                                                        </div>
                                                        <!--end::Footer-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                </div>
                                                <!--end::Body-->
                                            </div>
                                        </div>';
                                        }
                                    }
                                    ?>

                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="kt_tab_pane_4" role="tabpanel" aria-labelledby="kt_tab_pane_3">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12">
                                        <!--begin::Card-->
                                        <div class="card card-custom">
                                            <!--begin::Card header-->
                                            <div class="card-header card-header-tabs-line nav-tabs-line-3x">
                                                <!--begin::Toolbar-->
                                                <div class="card-toolbar">
                                                    <ul class="nav nav-tabs nav-bold nav-tabs-line nav-tabs-line-3x">
                                                        <!--begin::Item-->
                                                        <li class="nav-item mr-3">
                                                            <a class="nav-link active" data-toggle="tab" href="#kt_user_edit_tab_1">
                                                                <span class="nav-icon">
                                                                    <span class="svg-icon">
                                                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Layers.svg-->
                                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                <polygon points="0 0 24 0 24 24 0 24">
                                                                                </polygon>
                                                                                <path d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z" fill="#000000" fill-rule="nonzero">
                                                                                </path>
                                                                                <path d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z" fill="#000000" opacity="0.3"></path>
                                                                            </g>
                                                                        </svg>
                                                                        <!--end::Svg Icon-->
                                                                    </span>
                                                                </span>
                                                                <span class="nav-text font-size-lg">Profile</span>
                                                            </a>
                                                        </li>
                                                        <!--end::Item-->
                                                        <li class="nav-item mr-3">
                                                            <a class="nav-link" data-toggle="tab" href="#kt_user_edit_tab_2">
                                                                <span class="nav-icon">
                                                                    <span class="svg-icon">
                                                                        <i class="fa fa-key" aria-hidden="true"></i>
                                                                    </span>
                                                                </span>
                                                                <span class="nav-text font-size-lg">Password</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Button-->
                                                    <button id="resetBtn" name="reset" class="btn btn-default font-weight-bold
                            btn-sm px-3 font-size-base
                            mb-6 mr-10 mb-md-0">
                                                        Reset
                                                    </button>
                                                    <!--end::Button-->
                                                    <!--begin::Dropdown-->
                                                    <div class="btn-group ml-2">
                                                        <button type="button" name="editSettings" id="editSettings" class="btn btn-primary font-weight-bold
                              btn-sm px-3 font-size-base
                              ml-14 ml-md-0 mb-6 mb-md-0">
                                                            Save Changes
                                                        </button>
                                                    </div>
                                                    <!--end::Dropdown-->
                                                </div>
                                                <!--end::Toolbar-->
                                            </div>
                                            <!--end::Card header-->
                                            <!--begin::Card body-->
                                            <div class="card-body">
                                                <form class="form" id="kt_form" action="pages/login_signup/updateRoleSettings/update.php?role=organizer" method="POST" enctype="multipart/form-data">
                                                    <div class="tab-content">
                                                        <!--begin::Tab-->
                                                        <div class="tab-pane show px-md-7 active" id="kt_user_edit_tab_1" role="tabpanel">
                                                            <!--begin::Row-->
                                                            <div class="row">
                                                                <div class="col-xl-7 my-2">
                                                                    <!--begin::Row-->
                                                                    <div class="row">
                                                                        <label class="col-md-3"></label>
                                                                        <div class="col-md-9">
                                                                            <h6 class="text-dark font-weight-bold mb-10">
                                                                                Organizer Info:</h6>
                                                                        </div>
                                                                    </div>
                                                                    <!--end::Row-->
                                                                    <!--begin::Group-->
                                                                    <div class="form-group row">
                                                                        <label class="col-form-label col-md-3  ">Profile
                                                                            Image</label>
                                                                        <div class="col-md-9">
                                                                            <div class="image-input image-input-empty image-input-outline" id="kt_user_edit_avatar" style="background-image: url(<?php echo $_SESSION['organizer_profile_img'] ?>)">
                                                                                <div class="image-input-wrapper"></div>
                                                                                <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
                                                                                    <i class="fa fa-pen icon-sm text-muted"></i>
                                                                                    <input type="file" name="profile_avatar" accept=".png, .jpg, .jpeg">
                                                                                    <input type="hidden" name="profile_avatar_remove">
                                                                                </label>
                                                                                <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="" data-original-title="Cancel avatar">
                                                                                    <i class="ki ki-bold-close icon-xs text-muted"></i>
                                                                                </span>
                                                                                <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="remove" data-toggle="tooltip" title="" data-original-title="Remove avatar">
                                                                                    <i class="ki ki-bold-close icon-xs text-muted"></i>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!--end::Group-->
                                                                    <!--begin::Group-->
                                                                    <div class="form-group row">
                                                                        <label class="col-form-label col-md-3  ">Full
                                                                            Name</label>
                                                                        <div class="col-md-9">
                                                                            <input name="fullName" class="form-control form-control-lg form-control-solid" type="text" placeholder="<?php echo $_SESSION['organizer_name'] ?>">
                                                                        </div>
                                                                    </div>
                                                                    <!--end::Group-->
                                                                    <!--begin::Group-->
                                                                    <div class="form-group row">
                                                                        <label class="col-form-label col-md-3  ">Email
                                                                        </label>
                                                                        <div class="col-md-9">
                                                                            <div class="input-group input-group-lg input-group-solid">
                                                                                <div class="input-group-prepend">
                                                                                    <span class="input-group-text">
                                                                                        <i class="la la-at"></i>
                                                                                    </span>
                                                                                </div>
                                                                                <input name="email" type="email" class="form-control form-control-lg form-control-solid" placeholder="<?php echo $_SESSION['organizer_email'] ?>">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!--end::Group-->
                                                                    <!--begin::Group-->
                                                                    <div class="form-group row">
                                                                        <label class="col-form-label col-md-3">Contact
                                                                        </label>
                                                                        <div class="col-md-9">
                                                                            <div class="input-group input-group-lg input-group-solid">
                                                                                <div class="input-group-prepend">
                                                                                    <span class="input-group-text">
                                                                                        <i class="la la-phone"></i>
                                                                                    </span>
                                                                                </div>
                                                                                <input name="contact" type="text" class="form-control form-control-lg form-control-solid" placeholder="<?php echo $_SESSION['organizer_contact'] ?>">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!--end::Group-->
                                                                    <!--begin::Group-->
                                                                    <div class="form-group row">
                                                                        <label class="col-form-label col-md-3  ">Address
                                                                        </label>
                                                                        <div class="col-md-9">
                                                                            <div class="input-group input-group-lg input-group-solid">
                                                                                <div class="input-group-prepend">
                                                                                    <span class="input-group-text">
                                                                                        <i class="fa fa-map-marker-alt"></i>
                                                                                    </span>
                                                                                </div>
                                                                                <input type="text" name="address" class="form-control form-control-lg form-control-solid" placeholder="<?php echo $_SESSION['organizer_address'] ?>">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!--end::Group-->

                                                                    <!--begin::Group-->
                                                                    <div class="form-group row">
                                                                        <label class="col-form-label col-md-3">Description
                                                                        </label>
                                                                        <div class="col-md-9">
                                                                            <div class="input-group input-group-lg input-group-solid">
                                                                                <textarea name="description" class="form-control" style="border: none !important;" rows="3" spellcheck="false" placeholder="<?php echo $_SESSION['organizer_description'] ?>"></textarea>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!--end::Group-->
                                                                </div>
                                                            </div>
                                                            <!--end::Row-->
                                                        </div>
                                                        <!--end::Tab-->
                                                        <div class="tab-pane px-md-7" id="kt_user_edit_tab_2" role="tabpanel">
                                                            <!--begin::Row-->
                                                            <div class="row">
                                                                <div class="col-xl-7 my-2">
                                                                    <!--begin::Row-->
                                                                    <div class="row">
                                                                        <label class="col-md-3"></label>
                                                                        <div class="col-md-9">
                                                                            <h6 class="text-dark font-weight-bold mb-10">
                                                                                Change Password:</h6>
                                                                        </div>
                                                                    </div>
                                                                    <!--end::Row-->

                                                                    <!--begin::Group-->
                                                                    <div class="form-group row">
                                                                        <label class="col-form-label col-md-3  ">New
                                                                            Password</label>
                                                                        <div class="col-md-9">
                                                                            <input name="newPwd" class="form-control form-control-lg form-control-solid" type="password" autocomplete="new-password">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label class="col-form-label col-md-3  ">Confirm
                                                                            Password</label>
                                                                        <div class="col-md-9">
                                                                            <input name="confirmNewPwd" class="form-control form-control-lg form-control-solid" type="password">
                                                                        </div>
                                                                    </div>
                                                                    <!--end::Group-->
                                                                </div>
                                                            </div>
                                                            <!--end::Row-->
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <!--begin::Card body-->
                                        </div>
                                        <!--end::Card-->
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
            <!-- End content -->

        </div>

    </div>
    </div>
    <!--Content area here-->

    </div>

    <!--end::Content-->

    <?php include("../../../partials/_footer.php"); ?>
    </div>

    <!--end::Wrapper-->
    </div>

    </div>
    <?php include("../../../partials/_extras/offcanvas/quick-organizer.php") ?>
    <?php
    include("../../../partials/jslinks.php");
    ?>
    <script>
        const editSettingsBtn = document.getElementById("editSettings");
        const resetBtn = document.getElementById("resetBtn");
        const settingsForm = document.getElementById("kt_form");
        editSettingsBtn.addEventListener('click', () => {
            settingsForm.submit();
        });
        resetBtn.addEventListener('click', () => {
            settingsForm.reset();
        });
    </script>

</body>

<!--end::Body-->

</html>