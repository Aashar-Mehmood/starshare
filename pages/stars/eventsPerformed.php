<?php
include_once("../login_signup/check_session.php");
include_once("../login_signup/db_connection.php");
if (!isset($_GET['starId'])) {
  header("location:./stars.php");
} else {
  $id = $_GET['starId'];

  $currentMonth = date('M', time());
  $getPrevMonth = date_sub(new DateTime($currentMonth), new DateInterval("P1M"));
  $prevMonth = date_format($getPrevMonth, "m");

  $currentYear = date('Y', time());
  $getPrevYear = date_sub(new DateTime($currentYear), new DateInterval("P1Y"));
  $prevYear = date_format($getPrevYear, "y");

  $totalEvents = mysqli_num_rows(mysqli_query($conn, "SELECT `id` FROM `events` WHERE `star_id` = $id"));
  $prevMonthEvents = mysqli_num_rows(mysqli_query($conn, "SELECT `id` FROM `events` WHERE `star_id` = $id AND `date` LIKE '%-$prevMonth-%';"));
  $prevYearEvents = mysqli_num_rows(mysqli_query($conn, "SELECT `id` FROM `events` WHERE `star_id` = $id AND `date` LIKE '$prevYear%';"));


  $upComingEvents = "SELECT * FROM `events` WHERE `star_id` = $id AND `date` >= DATE_ADD(CURRENT_TIMESTAMP, INTERVAL 1 DAY) LIMIT 6;";
  $eventData = mysqli_query($conn, $upComingEvents);
}
?>

<!DOCTYPE html>

<html lang="en">

<!--begin::Head-->

<head>
  <base href="../../">
  <meta charset="utf-8" />
  <title>Star Details | Songs</title>
  <?php
  include("../../partials/csslinks.php");
  ?>
  <link rel="stylesheet" href="assets/css/custom/user_details.css">
  <style>
    @media screen and (max-width: 355px) {

      ul.nav li:nth-child(4),
      ul.nav li:nth-child(4) a {
        margin-left: 0 !important;
      }
    }
  </style>
</head>

<!--end::Head-->

<!--begin::Body-->

<body id="kt_body" class="header-fixed header-mobile-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
  <?php
  include("../../partials/_header-mobile.php");
  ?>

  <div class="d-flex flex-column flex-root">

    <div class="d-flex flex-row flex-column-fluid page">

      <?php include("../../partials/_aside.php"); ?>

      <!--begin::Wrapper-->
      <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">

        <div id="kt_header" class="header header-fixed">

          <!--begin::Container-->
          <div class="container-fluid d-flex align-items-stretch justify-content-between">

            <!--begin::Header Menu Wrapper-->
            <!--begin::Header Menu-->

            <ul class="nav nav-tabs nav-tabs-line nav-bold nav-tabs-line-2x d-flex align-items-center ml-2 ml-md-8" style="border: none; font-size: 1.12rem;">
              <li class="nav-item">
                <a class="nav-link " href="pages/stars/star_details.php?activeLinkId=stars&starId=<?php echo $id ?>">Overview</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="pages/stars/allSongs.php?activeLinkId=stars&starId=<?php echo $id ?>">Songs</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="pages/stars/eventsPerformed.php?activeLinkId=stars&starId=<?php echo $id ?>">Events Performed</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="pages/stars/transactions.php?activeLinkId=stars&starId=<?php echo $id ?>">Transactions</a>
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
                    <?php echo $_SESSION['name'] ?>
                  </span>
                  <span class="symbol symbol-lg-35 symbol-25 symbol-light-success">
                    <span class="symbol-label font-size-h5 font-weight-bold">
                      <?php echo substr($_SESSION['name'], 0, 1)  ?>
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

        <!--begin::Content-->
        <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
          <div class="tab-content mt-5" id="myTabContent" style="overflow-x: hidden;">

            <div class="tab-pane fade show active" id="kt_tab_pane_3" role="tabpanel" aria-labelledby="kt_tab_pane_3">
              <div class="container">
                <h2 class="text-dark pl-md-8">Events History</h2>
                <div class="row">
                  <div class="col-md-6 col-xl-4">
                    <div class="card card-custom bg-gray-100 card-stretch gutter-b">
                      <div class="card-header border-0 bg-warning py-5">
                        <h2 class="font-weight-bolder text-dark">Total Events</h2>
                      </div>
                      <div class="card-body p-0 position-relative overflow-hidden">
                        <div class="card-rounded-bottom pt-10 px-8" style="background-color:#ffa80080">
                          <h2>
                            <?php echo $totalEvents ?>
                          </h2>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-xl-4">
                    <div class="card card-custom bg-gray-100 card-stretch gutter-b">
                      <div class="card-header border-0 py-5" style="background-color: #1bc5bd;">
                        <h2 class="font-weight-bolder text-dark">Last Month</h2>
                      </div>
                      <div class="card-body p-0 position-relative overflow-hidden">
                        <div class="card-rounded-bottom pt-10 px-8" style="background-color:#1bc5bd80">
                          <h2>
                            <?php echo $prevMonthEvents ?>
                          </h2>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-xl-4">
                    <div class="card card-custom bg-gray-100 card-stretch gutter-b">
                      <div class="card-header border-0 py-5" style="background-color: #3699ff;">
                        <h2 class="font-weight-bolder text-dark">Last Year</h2>
                      </div>
                      <div class="card-body p-0 position-relative overflow-hidden">
                        <div class="card-rounded-bottom pt-10 px-8" style="background-color:#3699ff80">
                          <h2>
                            <?php echo $prevYearEvents ?>
                          </h2>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <?php
                  if (mysqli_num_rows($eventData) == 0) {
                    echo '
                          <div class="w-60 mx-auto py-10">
                            <h2>No upcoming events yet.</h2>
                          </div>
                          ';
                  } else {
                    echo '<h2 class="text-dark pl-md-10 mt-16 col-12">Upcoming Events</h2>';
                    while ($eventArr = mysqli_fetch_assoc($eventData)) {
                      echo '
                            <div class="col-md-6 col-xl-4">
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
                                          style="background-image: url(' . $eventArr['banner'] . ')"></div>
                                        <!--end::Image-->
                                        <!--begin::Title-->
                                        <p
                                          class="card-title font-weight-bolder text-dark-75 font-size-h4 m-0 pt-7 pb-1">
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
                                            <p
                                              class="text-dark-75 mb-1 font-size-lg font-weight-bolder">
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
                                            <p
                                              class="text-dark-75  mb-1 font-size-lg font-weight-bolder">
                                              Scheduled date : ' . date('d-M-Y', strtotime($eventArr['date'])) . ' <br>
                                              Time : ' . date('h-i-s : A', strtotime($eventArr['time'])) . '
                                              
                                            </p>
                                          </div>
                                          <!--end::Text-->
                                          <!--begin::label-->
                                        </div>
                                      </div>
                                      <!--end::Body-->
                                    </div>
                                    <!--end::Container-->

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

          </div>
        </div>
      </div>

    </div>
  </div>
  <!--Content area here-->

  </div>

  <!--end::Content-->

  <?php include("../../partials/_footer.php"); ?>
  </div>

  <!--end::Wrapper-->
  </div>

  </div>
  <?php include("../../partials/_extras/offcanvas/quick-user.php") ?>
  <?php
  include("../../partials/jslinks.php");
  ?>


</body>

<!--end::Body-->

</html>