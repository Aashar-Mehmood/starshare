<?php
session_start();
if (
    !isset($_SESSION["id"]) ||
    !isset($_SESSION["name"]) ||
    $_SESSION["is_admin"] !== true
) {
    header("location: pages/login_signup/login_signup.php");
}
include_once('./pages/login_signup/db_connection.php');
$currentYear  = date('Y', time());
$currentMonth = date('m', time());
$todayDate = date('d', time());

$usersData = getRows('users');
$starsData = getRows('stars');
$organizersData = getRows('organizers');
$suppliersData = getRows('suppliers');

$totalUsers = $usersData[0];
$yearUsers = $usersData[1];
$monthUsers = $usersData[2];
$todayUsers = $usersData[3];

$totalStars = $starsData[0];
$yearStars = $starsData[1];
$monthStars = $starsData[2];
$todayStars = $starsData[3];

$totalOrganizers = $organizersData[0];
$yearOrganizers = $organizersData[1];
$monthOrganizers = $organizersData[2];
$todayOrganizers = $organizersData[3];

$totalSuppliers = $suppliersData[0];
$yearSuppliers = $suppliersData[1];
$monthSuppliers = $suppliersData[2];
$todaySuppliers = $suppliersData[3];

// select latest 10 events created
$eventQuery = "SELECT  events.location, events.date, organizers.name AS organizer_name FROM events
INNER JOIN organizers ON events.organizer_id = organizers.u_id ORDER BY events.id DESC LIMIT 10;";
$latestEvents = mysqli_query($conn, $eventQuery);

// select latest 10 songs added
$songQuery = "SELECT songs.title AS song_title, songs.sample AS song_sample , stars.name AS star_name FROM songs 
INNER JOIN stars ON songs.star_id = stars.u_id ORDER BY songs.upload_date DESC LIMIT 10;";
$latestSongs = mysqli_query($conn, $songQuery);

// select latest 10 tickets purchased
$ticketsData = mysqli_query(
    $conn,
    "SELECT amount, transactions.date, name FROM transactions 
    INNER JOIN organizers ON transactions.seller_id = organizers.u_id
    WHERE product_name = 'ticket' LIMIT 10 OFFSET 0;"
) or die(mysqli_error($conn));


function getRows($table)
{

    global $conn, $currentYear, $currentMonth, $todayDate;
    if ($table == 'users') {
        $totalRec = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM `$table` WHERE `is_admin`=0;"));
        $yearlyRec = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM `$table` WHERE `is_admin`=0 AND  `date` LIKE  '$currentYear%';"));
        $monthlyRec = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM `$table` WHERE `is_admin`=0 AND `date` LIKE  '%-$currentMonth-%';"));
        $todayRec = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM `$table` WHERE `is_admin`=0 AND `date` LIKE  '%$todayDate';"));
    } else {
        $totalRec = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM `$table`;"));
        $yearlyRec = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM `$table` WHERE `date` LIKE  '$currentYear%';"));
        $monthlyRec = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM `$table` WHERE `date` LIKE  '%-$currentMonth-%';"));
        $todayRec = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM `$table` WHERE `date` LIKE  '%$todayDate';"));
    }
    return array($totalRec, $yearlyRec, $monthlyRec, $todayRec);
}


?>
<!DOCTYPE html>

<html lang="en">

<!--begin::Head-->

<head>
    <meta charset="utf-8" />
    <title>Dashboard</title>
    <?php include("partials/csslinks.php"); ?>
    <style>
        @media screen and (max-width:375px) {
            div.customCSS {
                min-width: 100%;
                margin-bottom: 2rem;
            }

            div.mr-7 {
                margin-right: 0 !important;
            }
        }
    </style>
</head>

<!--end::Head-->

<!--begin::Body-->

<body id="kt_body" class="header-fixed header-mobile-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
    <!--begin::Main-->

    <?php include("partials/_header-mobile.php"); ?>
    <div class="d-flex flex-column flex-root">

        <!--begin::Page-->
        <div class="d-flex flex-row flex-column-fluid page">

            <?php include("partials/_aside.php"); ?>

            <!--begin::Wrapper-->
            <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">

                <?php include("partials/_header.php"); ?>

                <!--begin::Content-->
                <div class="content d-flex flex-column flex-column-fluid" id="kt_content">

                    <!--dynamic content start-->

                    <div id="dynamicContent">
                        <div class="container">
                            <!--begin::Dashboard-->

                            <!--begin::Row-->
                            <div class="row">
                                <div class="col-lg-6">

                                    <!--begin::Mixed Widget 1-->
                                    <div class="card card-custom bg-white card-stretch gutter-b">

                                        <!--begin::Header-->
                                        <div class="card-header border-0 bg-danger py-5">
                                            <h3 class="card-title font-weight-bolder text-white">Users Stat</h3>
                                            <div class="card-toolbar">
                                                <div class="dropdown dropdown-inline">
                                                    <a href="#" class="btn btn-transparent btn-sm font-weight-bolder px-5"></a>
                                                    <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!--end::Header-->

                                        <!--begin::Body-->
                                        <div class="card-body p-0 position-relative overflow-hidden">

                                            <!--begin::Chart-->
                                            <div class="card-rounded-bottom bg-light-danger" style="height: 200px">
                                            </div>

                                            <!--end::Chart-->

                                            <!--begin::Stats-->
                                            <div class="card-spacer mt-n25">

                                                <!--begin::Row-->
                                                <div class="row m-0">
                                                    <div class="col bg-light-warning px-6 py-8 rounded-xl mr-7 mb-7 customCSS">
                                                        <span class="svg-icon svg-icon-3x svg-icon-warning d-block my-2">

                                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Media/Equalizer.svg-->
                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                    <rect x="0" y="0" width="24" height="24" />
                                                                    <rect fill="#000000" opacity="0.3" x="13" y="4" width="3" height="16" rx="1.5" />
                                                                    <rect fill="#000000" x="8" y="9" width="3" height="11" rx="1.5" />
                                                                    <rect fill="#000000" x="18" y="11" width="3" height="9" rx="1.5" />
                                                                    <rect fill="#000000" x="3" y="13" width="3" height="7" rx="1.5" />
                                                                </g>
                                                            </svg>

                                                            <!--end::Svg Icon-->
                                                        </span>
                                                        <p class="text-warning font-weight-bold font-size-h6">Total
                                                            Users</p>
                                                        <br>
                                                        <h2 class="pt-5">
                                                            <?php echo $totalUsers ?>
                                                        </h2>
                                                    </div>
                                                    <div class="col bg-light-success px-6 py-8 rounded-xl mb-7 customCSS">
                                                        <span class="svg-icon svg-icon-3x svg-icon-success d-block my-2">

                                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Add-user.svg-->
                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                    <polygon points="0 0 24 0 24 24 0 24" />
                                                                    <path d="M18,8 L16,8 C15.4477153,8 15,7.55228475 15,7 C15,6.44771525 15.4477153,6 16,6 L18,6 L18,4 C18,3.44771525 18.4477153,3 19,3 C19.5522847,3 20,3.44771525 20,4 L20,6 L22,6 C22.5522847,6 23,6.44771525 23,7 C23,7.55228475 22.5522847,8 22,8 L20,8 L20,10 C20,10.5522847 19.5522847,11 19,11 C18.4477153,11 18,10.5522847 18,10 L18,8 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                                    <path d="M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
                                                                </g>
                                                            </svg>

                                                            <!--end::Svg Icon-->
                                                        </span>
                                                        <p class="text-success font-weight-bold font-size-h6 mt-2">Added
                                                            this year</p>
                                                        <h2 class="pt-5">
                                                            <?php echo $yearUsers ?>
                                                        </h2>
                                                    </div>
                                                </div>

                                                <!--end::Row-->

                                                <!--begin::Row-->
                                                <div class="row m-0">
                                                    <div class="col bg-light-danger px-6 py-8 rounded-xl mr-7 customCSS">
                                                        <span class="svg-icon svg-icon-3x svg-icon-danger d-block my-2">

                                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Layers.svg-->
                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                    <polygon points="0 0 24 0 24 24 0 24" />
                                                                    <path d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z" fill="#000000" fill-rule="nonzero" />
                                                                    <path d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z" fill="#000000" opacity="0.3" />
                                                                </g>
                                                            </svg>

                                                            <!--end::Svg Icon-->
                                                        </span>
                                                        <p class="text-danger font-weight-bold font-size-h6 mt-2">Added
                                                            this month</p>
                                                        <h2 class="pt-5">
                                                            <?php echo $monthUsers ?>
                                                        </h2>
                                                    </div>
                                                    <div class="col bg-light-primary px-6 py-8 rounded-xl customCSS">
                                                        <span class="svg-icon svg-icon-3x svg-icon-primary d-block my-2">

                                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Urgent-mail.svg-->
                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                    <rect x="0" y="0" width="24" height="24" />
                                                                    <path d="M12.7037037,14 L15.6666667,10 L13.4444444,10 L13.4444444,6 L9,12 L11.2222222,12 L11.2222222,14 L6,14 C5.44771525,14 5,13.5522847 5,13 L5,3 C5,2.44771525 5.44771525,2 6,2 L18,2 C18.5522847,2 19,2.44771525 19,3 L19,13 C19,13.5522847 18.5522847,14 18,14 L12.7037037,14 Z" fill="#000000" opacity="0.3" />
                                                                    <path d="M9.80428954,10.9142091 L9,12 L11.2222222,12 L11.2222222,16 L15.6666667,10 L15.4615385,10 L20.2072547,6.57253826 C20.4311176,6.4108595 20.7436609,6.46126971 20.9053396,6.68513259 C20.9668779,6.77033951 21,6.87277228 21,6.97787787 L21,17 C21,18.1045695 20.1045695,19 19,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,6.97787787 C3,6.70173549 3.22385763,6.47787787 3.5,6.47787787 C3.60510559,6.47787787 3.70753836,6.51099993 3.79274528,6.57253826 L9.80428954,10.9142091 Z" fill="#000000" />
                                                                </g>
                                                            </svg>

                                                            <!--end::Svg Icon-->
                                                        </span>
                                                        <p class="text-primary font-weight-bold font-size-h6 mt-2">Added
                                                            today</p>
                                                        <h2 class="pt-5">
                                                            <?php echo $todayUsers ?>
                                                        </h2>
                                                    </div>
                                                </div>

                                                <!--end::Row-->
                                            </div>

                                            <!--end::Stats-->
                                        </div>

                                        <!--end::Body-->
                                    </div>

                                    <!--end::Mixed Widget 1-->

                                </div>
                                <div class="col-lg-6">

                                    <!--begin::Mixed Widget 1-->
                                    <div class="card card-custom bg-white card-stretch gutter-b">

                                        <!--begin::Header-->
                                        <div class="card-header border-0 bg-warning py-5">
                                            <h3 class="card-title font-weight-bolder text-white">Stars Stat</h3>
                                            <div class="card-toolbar">
                                                <div class="dropdown dropdown-inline">
                                                    <a href="#" class="btn btn-transparent btn-sm font-weight-bolder px-5"></a>
                                                    <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!--end::Header-->

                                        <!--begin::Body-->
                                        <div class="card-body p-0 position-relative overflow-hidden">

                                            <!--begin::Chart-->
                                            <div class="card-rounded-bottom bg-light-warning" style="height: 200px">
                                            </div>

                                            <!--end::Chart-->

                                            <!--begin::Stats-->
                                            <div class="card-spacer mt-n25">

                                                <!--begin::Row-->
                                                <div class="row m-0">
                                                    <div class="col bg-light-danger px-6 py-8 rounded-xl mr-7 mb-7">
                                                        <span class="svg-icon svg-icon-3x svg-icon-danger d-block my-2">

                                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Media/Equalizer.svg-->
                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                    <rect x="0" y="0" width="24" height="24" />
                                                                    <rect fill="#000000" opacity="0.3" x="13" y="4" width="3" height="16" rx="1.5" />
                                                                    <rect fill="#000000" x="8" y="9" width="3" height="11" rx="1.5" />
                                                                    <rect fill="#000000" x="18" y="11" width="3" height="9" rx="1.5" />
                                                                    <rect fill="#000000" x="3" y="13" width="3" height="7" rx="1.5" />
                                                                </g>
                                                            </svg>

                                                            <!--end::Svg Icon-->
                                                        </span>
                                                        <p class="text-danger font-weight-bold font-size-h6">Total Stars
                                                        </p>
                                                        <br>
                                                        <h2 class="pt-5">
                                                            <?php echo $totalStars ?>
                                                        </h2>
                                                    </div>
                                                    <div class="col bg-light-primary px-6 py-8 rounded-xl customCSS mb-7">
                                                        <span class="svg-icon svg-icon-3x svg-icon-primary d-block my-2">

                                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Add-user.svg-->
                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                    <polygon points="0 0 24 0 24 24 0 24" />
                                                                    <path d="M18,8 L16,8 C15.4477153,8 15,7.55228475 15,7 C15,6.44771525 15.4477153,6 16,6 L18,6 L18,4 C18,3.44771525 18.4477153,3 19,3 C19.5522847,3 20,3.44771525 20,4 L20,6 L22,6 C22.5522847,6 23,6.44771525 23,7 C23,7.55228475 22.5522847,8 22,8 L20,8 L20,10 C20,10.5522847 19.5522847,11 19,11 C18.4477153,11 18,10.5522847 18,10 L18,8 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                                    <path d="M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
                                                                </g>
                                                            </svg>

                                                            <!--end::Svg Icon-->
                                                        </span>
                                                        <a href="#" class="text-primary font-weight-bold font-size-h6 mt-2">Added
                                                            this year</a>
                                                        <h2 class="pt-5">
                                                            <?php echo $yearStars ?>
                                                        </h2>
                                                    </div>
                                                </div>

                                                <!--end::Row-->

                                                <!--begin::Row-->
                                                <div class="row m-0">
                                                    <div class="col bg-light-warning px-6 py-8 rounded-xl mr-7 customCSS">
                                                        <span class="svg-icon svg-icon-3x svg-icon-warning d-block my-2">

                                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Layers.svg-->
                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                    <polygon points="0 0 24 0 24 24 0 24" />
                                                                    <path d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z" fill="#000000" fill-rule="nonzero" />
                                                                    <path d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z" fill="#000000" opacity="0.3" />
                                                                </g>
                                                            </svg>

                                                            <!--end::Svg Icon-->
                                                        </span>
                                                        <p class="text-warning font-weight-bold font-size-h6 mt-2">Added
                                                            this month</p>
                                                        <h2 class="pt-5">
                                                            <?php echo $monthStars ?>
                                                        </h2>
                                                    </div>
                                                    <div class="col bg-light-success px-6 py-8 rounded-xl customCSS">
                                                        <span class="svg-icon svg-icon-3x svg-icon-success d-block my-2">

                                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Urgent-mail.svg-->
                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                    <rect x="0" y="0" width="24" height="24" />
                                                                    <path d="M12.7037037,14 L15.6666667,10 L13.4444444,10 L13.4444444,6 L9,12 L11.2222222,12 L11.2222222,14 L6,14 C5.44771525,14 5,13.5522847 5,13 L5,3 C5,2.44771525 5.44771525,2 6,2 L18,2 C18.5522847,2 19,2.44771525 19,3 L19,13 C19,13.5522847 18.5522847,14 18,14 L12.7037037,14 Z" fill="#000000" opacity="0.3" />
                                                                    <path d="M9.80428954,10.9142091 L9,12 L11.2222222,12 L11.2222222,16 L15.6666667,10 L15.4615385,10 L20.2072547,6.57253826 C20.4311176,6.4108595 20.7436609,6.46126971 20.9053396,6.68513259 C20.9668779,6.77033951 21,6.87277228 21,6.97787787 L21,17 C21,18.1045695 20.1045695,19 19,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,6.97787787 C3,6.70173549 3.22385763,6.47787787 3.5,6.47787787 C3.60510559,6.47787787 3.70753836,6.51099993 3.79274528,6.57253826 L9.80428954,10.9142091 Z" fill="#000000" />
                                                                </g>
                                                            </svg>

                                                            <!--end::Svg Icon-->
                                                        </span>
                                                        <p class="text-success font-weight-bold font-size-h6 mt-2">Added
                                                            today</p>
                                                        <h2 class="pt-5">
                                                            <?php echo $todayStars ?>
                                                        </h2>
                                                    </div>
                                                </div>

                                                <!--end::Row-->
                                            </div>

                                            <!--end::Stats-->
                                        </div>

                                        <!--end::Body-->
                                    </div>

                                </div>

                                <div class="col-lg-6">


                                    <!--begin::Mixed Widget 1-->
                                    <div class="card card-custom bg-white card-stretch gutter-b">

                                        <!--begin::Header-->
                                        <div class="card-header border-0 bg-success py-5">
                                            <h3 class="card-title font-weight-bolder text-white">Organizers Stat</h3>
                                            <div class="card-toolbar">
                                                <div class="dropdown dropdown-inline">
                                                    <a href="#" class="btn btn-transparent btn-sm font-weight-bolder px-5"></a>
                                                    <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!--end::Header-->

                                        <!--begin::Body-->
                                        <div class="card-body p-0 position-relative overflow-hidden">

                                            <!--begin::Chart-->
                                            <div class="card-rounded-bottom bg-light-success" style="height: 200px">
                                            </div>

                                            <!--end::Chart-->

                                            <!--begin::Stats-->
                                            <div class="card-spacer mt-n25">

                                                <!--begin::Row-->
                                                <div class="row m-0">
                                                    <div class="col bg-light-warning px-6 py-8 rounded-xl mr-7 mb-7 customCSS">
                                                        <span class="svg-icon svg-icon-3x svg-icon-warning d-block my-2">

                                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Media/Equalizer.svg-->
                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                    <rect x="0" y="0" width="24" height="24" />
                                                                    <rect fill="#000000" opacity="0.3" x="13" y="4" width="3" height="16" rx="1.5" />
                                                                    <rect fill="#000000" x="8" y="9" width="3" height="11" rx="1.5" />
                                                                    <rect fill="#000000" x="18" y="11" width="3" height="9" rx="1.5" />
                                                                    <rect fill="#000000" x="3" y="13" width="3" height="7" rx="1.5" />
                                                                </g>
                                                            </svg>

                                                            <!--end::Svg Icon-->
                                                        </span>
                                                        <p class="text-warning font-weight-bold font-size-h6">Total
                                                            organizers</p>
                                                        <br>
                                                        <h2 class="pt-5">
                                                            <?php echo $totalOrganizers ?>
                                                        </h2>
                                                    </div>
                                                    <div class="col bg-light-danger px-6 py-8 rounded-xl mb-7">
                                                        <span class="svg-icon svg-icon-3x svg-icon-danger d-block my-2">

                                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Add-user.svg-->
                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                    <polygon points="0 0 24 0 24 24 0 24" />
                                                                    <path d="M18,8 L16,8 C15.4477153,8 15,7.55228475 15,7 C15,6.44771525 15.4477153,6 16,6 L18,6 L18,4 C18,3.44771525 18.4477153,3 19,3 C19.5522847,3 20,3.44771525 20,4 L20,6 L22,6 C22.5522847,6 23,6.44771525 23,7 C23,7.55228475 22.5522847,8 22,8 L20,8 L20,10 C20,10.5522847 19.5522847,11 19,11 C18.4477153,11 18,10.5522847 18,10 L18,8 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                                    <path d="M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
                                                                </g>
                                                            </svg>

                                                            <!--end::Svg Icon-->
                                                        </span>
                                                        <p class="text-danger font-weight-bold font-size-h6 mt-2">Added
                                                            this year</p>
                                                        <h2 class="pt-5">
                                                            <?php echo $yearOrganizers ?>
                                                        </h2>
                                                    </div>
                                                </div>

                                                <!--end::Row-->

                                                <!--begin::Row-->
                                                <div class="row m-0">
                                                    <div class="col bg-light-primary px-6 py-8 rounded-xl customCSS mr-7">
                                                        <span class="svg-icon svg-icon-3x svg-icon-primary d-block my-2">

                                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Layers.svg-->
                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                    <polygon points="0 0 24 0 24 24 0 24" />
                                                                    <path d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z" fill="#000000" fill-rule="nonzero" />
                                                                    <path d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z" fill="#000000" opacity="0.3" />
                                                                </g>
                                                            </svg>

                                                            <!--end::Svg Icon-->
                                                        </span>
                                                        <p class="text-primary font-weight-bold font-size-h6 mt-2">Added
                                                            this month</p>
                                                        <h2 class="pt-5">
                                                            <?php echo $monthOrganizers ?>

                                                        </h2>
                                                    </div>
                                                    <div class="col bg-light-success px-6 py-8 rounded-xl customCSS">
                                                        <span class="svg-icon svg-icon-3x svg-icon-success d-block my-2">

                                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Urgent-mail.svg-->
                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                    <rect x="0" y="0" width="24" height="24" />
                                                                    <path d="M12.7037037,14 L15.6666667,10 L13.4444444,10 L13.4444444,6 L9,12 L11.2222222,12 L11.2222222,14 L6,14 C5.44771525,14 5,13.5522847 5,13 L5,3 C5,2.44771525 5.44771525,2 6,2 L18,2 C18.5522847,2 19,2.44771525 19,3 L19,13 C19,13.5522847 18.5522847,14 18,14 L12.7037037,14 Z" fill="#000000" opacity="0.3" />
                                                                    <path d="M9.80428954,10.9142091 L9,12 L11.2222222,12 L11.2222222,16 L15.6666667,10 L15.4615385,10 L20.2072547,6.57253826 C20.4311176,6.4108595 20.7436609,6.46126971 20.9053396,6.68513259 C20.9668779,6.77033951 21,6.87277228 21,6.97787787 L21,17 C21,18.1045695 20.1045695,19 19,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,6.97787787 C3,6.70173549 3.22385763,6.47787787 3.5,6.47787787 C3.60510559,6.47787787 3.70753836,6.51099993 3.79274528,6.57253826 L9.80428954,10.9142091 Z" fill="#000000" />
                                                                </g>
                                                            </svg>

                                                            <!--end::Svg Icon-->
                                                        </span>
                                                        <a href="#" class="text-success font-weight-bold font-size-h6 mt-2">Added
                                                            today</a>
                                                        <h2 class="pt-5">
                                                            <?php echo $todayOrganizers ?>
                                                        </h2>
                                                    </div>
                                                </div>

                                                <!--end::Row-->
                                            </div>

                                            <!--end::Stats-->
                                        </div>

                                        <!--end::Body-->
                                    </div>

                                    <!--end::Mixed Widget 1-->

                                </div>
                                <div class="col-lg-6">


                                    <!--begin::Mixed Widget 1-->
                                    <div class="card card-custom bg-white card-stretch gutter-b">

                                        <!--begin::Header-->
                                        <div class="card-header border-0 bg-dark py-5">
                                            <h3 class="card-title font-weight-bolder text-white">Suppliers Stat</h3>
                                            <div class="card-toolbar">
                                                <div class="dropdown dropdown-inline">
                                                    <a href="#" class="btn btn-transparent btn-sm font-weight-bolder px-5"></a>
                                                    <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!--end::Header-->

                                        <!--begin::Body-->
                                        <div class="card-body p-0 position-relative overflow-hidden">

                                            <!--begin::Chart-->
                                            <div class="card-rounded-bottom bg-light-dark" style="height: 200px"></div>

                                            <!--end::Chart-->

                                            <!--begin::Stats-->
                                            <div class="card-spacer mt-n25">

                                                <!--begin::Row-->
                                                <div class="row m-0">
                                                    <div class="col bg-light-danger px-6 py-8 rounded-xl mr-7 mb-7">
                                                        <span class="svg-icon svg-icon-3x svg-icon-danger d-block my-2">

                                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Media/Equalizer.svg-->
                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                    <rect x="0" y="0" width="24" height="24" />
                                                                    <rect fill="#000000" opacity="0.3" x="13" y="4" width="3" height="16" rx="1.5" />
                                                                    <rect fill="#000000" x="8" y="9" width="3" height="11" rx="1.5" />
                                                                    <rect fill="#000000" x="18" y="11" width="3" height="9" rx="1.5" />
                                                                    <rect fill="#000000" x="3" y="13" width="3" height="7" rx="1.5" />
                                                                </g>
                                                            </svg>

                                                            <!--end::Svg Icon-->
                                                        </span>
                                                        <p class="text-danger font-weight-bold font-size-h6">Total
                                                            Suppliers</p>
                                                        <br>
                                                        <h2 class="pt-5">
                                                            <?php echo $totalSuppliers ?>
                                                        </h2>
                                                    </div>
                                                    <div class="col bg-light-primary px-6 py-8 rounded-xl customCSS mb-7">
                                                        <span class="svg-icon svg-icon-3x svg-icon-primary d-block my-2">

                                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Add-user.svg-->
                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                    <polygon points="0 0 24 0 24 24 0 24" />
                                                                    <path d="M18,8 L16,8 C15.4477153,8 15,7.55228475 15,7 C15,6.44771525 15.4477153,6 16,6 L18,6 L18,4 C18,3.44771525 18.4477153,3 19,3 C19.5522847,3 20,3.44771525 20,4 L20,6 L22,6 C22.5522847,6 23,6.44771525 23,7 C23,7.55228475 22.5522847,8 22,8 L20,8 L20,10 C20,10.5522847 19.5522847,11 19,11 C18.4477153,11 18,10.5522847 18,10 L18,8 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                                    <path d="M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
                                                                </g>
                                                            </svg>

                                                            <!--end::Svg Icon-->
                                                        </span>
                                                        <p class="text-primary font-weight-bold font-size-h6 mt-2">Added
                                                            this year</p>
                                                        <h2 class="pt-5">
                                                            <?php echo $yearSuppliers ?>

                                                        </h2>
                                                    </div>
                                                </div>

                                                <!--end::Row-->

                                                <!--begin::Row-->
                                                <div class="row m-0">
                                                    <div class="col bg-light-warning px-6 py-8 rounded-xl mr-7 customCSS">
                                                        <span class="svg-icon svg-icon-3x svg-icon-warning d-block my-2">

                                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Layers.svg-->
                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                    <polygon points="0 0 24 0 24 24 0 24" />
                                                                    <path d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z" fill="#000000" fill-rule="nonzero" />
                                                                    <path d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z" fill="#000000" opacity="0.3" />
                                                                </g>
                                                            </svg>

                                                            <!--end::Svg Icon-->
                                                        </span>
                                                        <p class="text-warning font-weight-bold font-size-h6 mt-2">Added
                                                            this month</p>
                                                        <h2 class="pt-5">
                                                            <?php echo $monthSuppliers ?>

                                                        </h2>
                                                    </div>
                                                    <div class="col bg-light-success px-6 py-8 rounded-xl customCSS">
                                                        <span class="svg-icon svg-icon-3x svg-icon-success d-block my-2">

                                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Urgent-mail.svg-->
                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                    <rect x="0" y="0" width="24" height="24" />
                                                                    <path d="M12.7037037,14 L15.6666667,10 L13.4444444,10 L13.4444444,6 L9,12 L11.2222222,12 L11.2222222,14 L6,14 C5.44771525,14 5,13.5522847 5,13 L5,3 C5,2.44771525 5.44771525,2 6,2 L18,2 C18.5522847,2 19,2.44771525 19,3 L19,13 C19,13.5522847 18.5522847,14 18,14 L12.7037037,14 Z" fill="#000000" opacity="0.3" />
                                                                    <path d="M9.80428954,10.9142091 L9,12 L11.2222222,12 L11.2222222,16 L15.6666667,10 L15.4615385,10 L20.2072547,6.57253826 C20.4311176,6.4108595 20.7436609,6.46126971 20.9053396,6.68513259 C20.9668779,6.77033951 21,6.87277228 21,6.97787787 L21,17 C21,18.1045695 20.1045695,19 19,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,6.97787787 C3,6.70173549 3.22385763,6.47787787 3.5,6.47787787 C3.60510559,6.47787787 3.70753836,6.51099993 3.79274528,6.57253826 L9.80428954,10.9142091 Z" fill="#000000" />
                                                                </g>
                                                            </svg>

                                                            <!--end::Svg Icon-->
                                                        </span>
                                                        <a href="#" class="text-success font-weight-bold font-size-h6 mt-2">Added
                                                            today</a>
                                                        <h2 class="pt-5">
                                                            <?php echo $todaySuppliers ?>
                                                        </h2>
                                                    </div>
                                                </div>

                                                <!--end::Row-->
                                            </div>

                                            <!--end::Stats-->
                                        </div>

                                        <!--end::Body-->
                                    </div>

                                    <!--end::Mixed Widget 1-->

                                </div>
                                <div class="col-lg-4">
                                    <!--begin::List Widget 1-->
                                    <div class="card card-custom card-stretch gutter-b">
                                        <!--begin::Header-->
                                        <div class="card-header border-0 pt-5">
                                            <h3 class="card-title align-items-start flex-column">
                                                <span class="card-label font-weight-bolder text-dark">Events
                                                    Activity</span>
                                                <span class="text-muted mt-3 font-weight-bold font-size-sm">Latest 10
                                                    Events organized</span>
                                            </h3>
                                        </div>
                                        <!--end::Header-->
                                        <!--begin::Body-->
                                        <div class="card-body pt-8">
                                            <!--begin::Item-->
                                            <?php
                                            while ($eventArr = mysqli_fetch_assoc($latestEvents)) {
                                                echo '<div class="d-flex align-items-center mb-10">
                          <!--begin::Symbol-->
                          <div class="symbol symbol-40 symbol-light-primary mr-5">
                            <span class="symbol-label">
                              <span class="svg-icon svg-icon-xl svg-icon-primary">
                                <i class="fas fa-location-arrow " style="color: green;"></i>
                              </span>
                            </span>
                          </div>
                          <!--end::Symbol-->
                          <!--begin::Text-->
                          <div class="d-flex flex-column font-weight-bold">
                            
                            <span class="pt-2">Organizer : &nbsp;&nbsp; 
                              <span>' . $eventArr['organizer_name'] . '</span>
                            </span>
                            <span class="pt-2">Location : &nbsp;&nbsp; 
                              <span>' . $eventArr['location'] . '</span>
                            </span>
                            <span class="pt-2">Date : &nbsp;&nbsp; 
                              <span>' . $eventArr['date'] . '</span>
                            </span>
                          </div>
                          <!--end::Text-->
                        </div>';
                                            }
                                            ?>

                                            <!--end::Item-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::List Widget 1-->
                                </div>
                                <div class="col-lg-4">
                                    <!--begin::List Widget 1-->
                                    <div class="card card-custom card-stretch gutter-b">
                                        <!--begin::Header-->
                                        <div class="card-header border-0 pt-5">
                                            <h3 class="card-title align-items-start flex-column">
                                                <span class="card-label font-weight-bolder text-dark"> Songs
                                                    Activity</span>
                                                <span class="text-muted mt-3 font-weight-bold font-size-sm">Latest 10
                                                    Songs Uploaded</span>
                                            </h3>
                                        </div>
                                        <!--end::Header-->
                                        <!--begin::Body-->
                                        <div class="card-body pt-8">
                                            <?php
                                            while ($songArr = mysqli_fetch_assoc($latestSongs)) {
                                                echo '<!--begin::Item-->
                          <div class="d-flex align-items-center mb-10">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-40 symbol-light-warning mr-5">
                              <span class="symbol-label">
                                <span class="svg-icon svg-icon-lg svg-icon-warning">
                                  <i class="fas fa-microphone-alt" style="color: orange;"></i>
                                </span>
                              </span>
                            </div>
                            <!--end::Symbol-->
                            <!--begin::Text-->
                            <div class="d-flex flex-column font-weight-bold">
                              
                              <span class="pt-2">Title: &nbsp;&nbsp; 
                                <span>' . $songArr['song_title'] . '
                                </span>
                              </span>

                              <span class="pt-2">Star: &nbsp;&nbsp; 
                                <span>' . $songArr['star_name'] . '
                                </span>
                              </span>
                              
                            </div>
                            <!--end::Text-->
                          </div>
                          <!--end::Item-->';
                                            }
                                            ?>


                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::List Widget 1-->
                                </div>

                                <div class="col-lg-4">
                                    <!--begin::List Widget 1-->
                                    <div class="card card-custom card-stretch gutter-b">
                                        <!--begin::Header-->
                                        <div class="card-header border-0 pt-5">
                                            <h3 class="card-title align-items-start flex-column">
                                                <span class="card-label font-weight-bolder text-dark">Tickets
                                                    Activity</span>
                                                <span class="text-muted mt-3 font-weight-bold font-size-sm">Latest 10
                                                    tickets Purchased</span>
                                            </h3>

                                        </div>
                                        <!--end::Header-->
                                        <!--begin::Body-->
                                        <div class="card-body pt-8">
                                            <?php

                                            while ($ticketsArr = mysqli_fetch_assoc($ticketsData)) {
                                                echo '<!--begin::Item-->
                                                <div class="d-flex align-items-center mb-10">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-40 symbol-light-primary mr-5">
                                                        <span class="symbol-label">
                                                            <span class="svg-icon svg-icon-xl svg-icon-primary">
                                                                <!--begin::Svg Icon | path:assets/media/svg/icons/Home/Library.svg-->
                                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                        <rect x="0" y="0" width="24" height="24"></rect>
                                                                        <path d="M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z" fill="#000000"></path>
                                                                        <rect fill="#000000" opacity="0.3" transform="translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519)" x="16.3255682" y="2.94551858" width="3" height="18" rx="1"></rect>
                                                                    </g>
                                                                </svg>
                                                                <!--end::Svg Icon-->
                                                            </span>
                                                        </span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Text-->
                                                    <div class="d-flex flex-column font-weight-bold">
                                                        <a class="text-dark mb-1 font-size-lg">
                                                            Seller : ' . $ticketsArr['name'] . '
                                                        </a>
                                                        <span class="text-muted">
                                                            Price : ' . $ticketsArr['amount'] . '
                                                        </span>
                                                        <span class="text-muted">
                                                            Date : ' . $ticketsArr['date'] . '
                                                        </span>
                                                    </div>
                                                    <!--end::Text-->
                                                </div>
                                                <!--end::Item-->';
                                            }
                                            ?>

                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::List Widget 1-->
                                </div>


                            </div>

                            <!--end::Container-->
                        </div>
                    </div>
                    <!-- dynamic content end -->
                </div>

                <!--end::Content-->

                <?php include("partials/_footer.php"); ?>
            </div>

            <!--end::Wrapper-->
        </div>

        <!--end::Page-->
    </div>

    <!--end::Main-->
    <?php include("partials/_extras/offcanvas/quick-user.php") ?>
    <?php include("partials/_extras/scrolltop.php") ?>
    <?php include("partials/jslinks.php"); ?>
</body>

<!--end::Body-->

</html>