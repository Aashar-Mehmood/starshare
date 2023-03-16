<?php session_start();
include_once('./db_connection.php');
if (
  !isset($_SESSION["id"]) ||
  !isset($_SESSION["name"])
) {
  $_SESSION['error_msg'] = 'You are not logged In';
  header("Location: ./login_signup.php");
}
$today = date('Y-m-d', time());

?>

<!DOCTYPE html>

<html lang="en">

<!--begin::Head-->

<head>
  <base href="../../">
  <meta charset="utf-8" />
  <title>Dashboard</title>
  <?php include("../../partials/csslinks.php"); ?>
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

  <?php include("../../partials/_header-mobile.php"); ?>
  <div class="d-flex flex-column flex-root">

    <!--begin::Page-->
    <div class="d-flex flex-row flex-column-fluid page">

      <?php include("../../partials/_asideForRoles.php"); ?>

      <!--begin::Wrapper-->
      <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">

        <!--begin::Header-->
        <div id="kt_header" class="header header-fixed">

          <!--begin::Container-->
          <div class="container-fluid d-flex align-items-stretch justify-content-between">
            <?php
            if (isset($_SESSION['error_msg']) || isset($_SESSION['success_msg'])) {
              include_once('../../components/Alert.php');
            }
            ?>
            <!--begin::Header Menu Wrapper-->
            <div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">

              <!--begin::Header Menu-->


              <!--end::Header Menu-->
            </div>

            <!--end::Header Menu Wrapper-->

            <!--begin::Topbar-->
            <div class="topbar">

              <!--begin::Notification-->
              <?php
              if ($_SESSION['is_star']) {
                $sId = $_SESSION['id'];

                // select only those events which are happening one or two days after the current date
                $add1Day = date_add(new DateTime($today), new DateInterval("P1D"));
                $add2Day = date_add(new DateTime($today), new DateInterval("P2D"));
                $added1 = date_format($add1Day, "Y-m-d");
                $added2 = date_format($add2Day, "Y-m-d");

                $selectQuery = "SELECT * FROM `events` WHERE `star_id` = $sId AND ( `date`='$today' OR `date`='$added1' OR `date`='$added2' );";
                $eventResult = mysqli_query($conn, $selectQuery);
                $totalRows = mysqli_num_rows($eventResult);
                echo '<div class="dropdown">
      <!--begin::Toggle-->
      <div class="topbar-item" data-toggle="dropdown" data-offset="10px,0px">
        <div class="btn btn-icon btn-clean btn-dropdown btn-lg mr-1 pulse pulse-primary">
          <span class="svg-icon svg-icon-xl svg-icon-primary">
            <!--begin::Svg Icon | path:assets/media/svg/icons/Code/Compiling.svg-->
            <svg
              xmlns="http://www.w3.org/2000/svg"
              xmlns:xlink="http://www.w3.org/1999/xlink"
              width="24px"
              height="24px"
              viewBox="0 0 24 24"
              version="1.1"
            >
              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <rect x="0" y="0" width="24" height="24"></rect>
                <path
                  d="M2.56066017,10.6819805 L4.68198052,8.56066017 C5.26776695,7.97487373 6.21751442,7.97487373 6.80330086,8.56066017 L8.9246212,10.6819805 C9.51040764,11.267767 9.51040764,12.2175144 8.9246212,12.8033009 L6.80330086,14.9246212 C6.21751442,15.5104076 5.26776695,15.5104076 4.68198052,14.9246212 L2.56066017,12.8033009 C1.97487373,12.2175144 1.97487373,11.267767 2.56066017,10.6819805 Z M14.5606602,10.6819805 L16.6819805,8.56066017 C17.267767,7.97487373 18.2175144,7.97487373 18.8033009,8.56066017 L20.9246212,10.6819805 C21.5104076,11.267767 21.5104076,12.2175144 20.9246212,12.8033009 L18.8033009,14.9246212 C18.2175144,15.5104076 17.267767,15.5104076 16.6819805,14.9246212 L14.5606602,12.8033009 C13.9748737,12.2175144 13.9748737,11.267767 14.5606602,10.6819805 Z"
                  fill="#000000"
                  opacity="0.3"
                ></path>
                <path
                  d="M8.56066017,16.6819805 L10.6819805,14.5606602 C11.267767,13.9748737 12.2175144,13.9748737 12.8033009,14.5606602 L14.9246212,16.6819805 C15.5104076,17.267767 15.5104076,18.2175144 14.9246212,18.8033009 L12.8033009,20.9246212 C12.2175144,21.5104076 11.267767,21.5104076 10.6819805,20.9246212 L8.56066017,18.8033009 C7.97487373,18.2175144 7.97487373,17.267767 8.56066017,16.6819805 Z M8.56066017,4.68198052 L10.6819805,2.56066017 C11.267767,1.97487373 12.2175144,1.97487373 12.8033009,2.56066017 L14.9246212,4.68198052 C15.5104076,5.26776695 15.5104076,6.21751442 14.9246212,6.80330086 L12.8033009,8.9246212 C12.2175144,9.51040764 11.267767,9.51040764 10.6819805,8.9246212 L8.56066017,6.80330086 C7.97487373,6.21751442 7.97487373,5.26776695 8.56066017,4.68198052 Z"
                  fill="#000000"
                ></path>
              </g>
            </svg>
            <!--end::Svg Icon-->
          </span>';
                if ($totalRows > 0) {
                  echo '<span class="pulse-ring"></span>';
                }
                echo '</div>
      </div>
      <!--end::Toggle-->
      <!--begin::Dropdown-->
      <div class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-anim-up dropdown-menu-lg">
        <form>
          <!--begin::Header-->
          <div
            class="d-flex flex-column pt-12 bgi-size-cover bgi-no-repeat rounded-top"
            style="background-image: url(assets/media/misc/bg-1.jpg)"
          >
            <!--begin::Title-->
            <h4 class="d-flex justify-content-around align-items-center mb-8 rounded-top">
              <span class="text-white">Star Notifications</span>
              <span class="btn btn-text btn-success btn-sm font-weight-bold btn-font-md ml-2">
                ' . $totalRows . ' new 
              </span>
            </h4>
            <!--end::Title-->
          </div>
          <!--end::Header-->
          <!--begin::Content-->
          <div class="tab-content">
            <!--begin::Tabpane-->
            <div class="tab-pane active show" id="topbar_notifications_events" role="tabpanel">
              <!--begin::Nav-->
              <div
                class="navi navi-hover scroll my-4 ps"
                data-scroll="true"
                data-height="300"
                data-mobile-height="200"
                style="height: 300px; overflow: hidden"
              >';
                if ($totalRows > 0) {
                  while ($eventArr = mysqli_fetch_assoc($eventResult)) {
                    echo '<a class="navi-item">
                          <div class="navi-link">
                            <div class="navi-icon mr-2">
                              <i class="flaticon2-line-chart text-success"></i>
                            </div>
                            <div class="navi-text">
                              <div class="font-weight-bold">
                                You are invited to event at ' . $eventArr["location"] . ' 
                              </div>
                              <div class="text-muted">
                                Event Date : ' . $eventArr["date"] . '
                              </div>
                              <div class="text-muted">
                                Event Time : ' . $eventArr["time"] . '
                              </div>
                            </div>
                          </div>
                        </a>';
                  }
                }

                echo '<div class="ps__rail-x" style="left: 0px; bottom: 0px">
                  <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px"></div>
                </div>
                <div class="ps__rail-y" style="top: 0px; right: 0px">
                  <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px"></div>
                </div>
              </div>
              <!--end::Nav-->
            </div>
            <!--end::Tabpane-->
          </div>
          <!--end::Content-->
        </form>
      </div>
      <!--end::Dropdown-->
    </div>';
              }
              ?>
              <!--end::Notification-->

              <!--begin::User-->
              <div class="topbar-item">
                <div class="btn btn-icon btn-icon-mobile w-auto btn-clean d-flex align-items-center btn-lg px-2" id="kt_quick_user_toggle">
                  <span class="text-muted font-weight-bold font-size-base d-none d-md-inline mr-1">Hi,</span>
                  <span class="text-dark-50 font-weight-bolder font-size-base d-none d-md-inline mr-3">
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

        <?php
        $fId = $_SESSION['id'];
        $ticketsData = mysqli_query($conn, "SELECT `id` FROM tickets WHERE buyer_id = $fId;");
        $totalTickets = mysqli_num_rows($ticketsData);

        // tickets purchased today
        $todayTickets = mysqli_num_rows(
          mysqli_query(
            $conn,
            "SELECT `id` FROM tickets WHERE buyer_id = $fId AND buying_time LIKE '%-$today%';"
          )
        );

        // tickets purchased this month
        $currentMonth = date('Y-m');
        $monthlyTickets = mysqli_num_rows(
          mysqli_query(
            $conn,
            "SELECT `id` FROM tickets WHERE buyer_id = $fId AND buying_time LIKE '%$currentMonth%';"
          )
        );

        // tickets purchased this year
        $currentYear = date('Y');
        $yearlyTickets = mysqli_num_rows(
          mysqli_query(
            $conn,
            "SELECT `id` FROM tickets WHERE buyer_id = $fId AND buying_time LIKE '$currentYear%';"
          )
        );


        // total songs purchcased
        $songsData = mysqli_query($conn, "SELECT `id` FROM my_songs WHERE buyer_id = $fId;");
        $totalSongs = mysqli_num_rows($songsData);

        // songs purchased today
        $todaySongs = mysqli_num_rows(
          mysqli_query(
            $conn,
            "SELECT `id` FROM my_songs WHERE buyer_id = $fId AND buying_date LIKE '%-$today%';"
          )
        );

        // songs purchased this month
        $monthlySongs = mysqli_num_rows(
          mysqli_query(
            $conn,
            "SELECT `id` FROM my_songs WHERE buyer_id = $fId AND buying_date LIKE '%$currentMonth%';"
          )
        );

        // songs purchased this year
        $yearlySongs = mysqli_num_rows(
          mysqli_query(
            $conn,
            "SELECT `id` FROM my_songs WHERE buyer_id = $fId AND buying_date LIKE '$currentYear%';"
          )
        );

        ?>

        <!--begin::Content-->
        <div class="content d-flex flex-column flex-column-fluid" id="kt_content">

          <!--content start-->
          <div class="container">
            <div class="row">

              <div class="col-12">
                <h1 class="w-100 mb-0">Fan Dashboard</h1>
              </div>
              <div class="col-lg-6">

                <!--begin::Mixed Widget 1-->
                <div class="card card-custom bg-white card-stretch gutter-b">

                  <!--begin::Header-->
                  <div class="card-header border-0 bg-danger py-5">
                    <h3 class="card-title font-weight-bolder text-white">Tickets Purchased</h3>

                  </div>

                  <!--end::Header-->

                  <!--begin::Body-->
                  <div class="card-body p-0 position-relative overflow-hidden">

                    <!--begin::Chart-->
                    <div class="card-rounded-bottom bg-light-danger" style="height: 200px"></div>

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
                          <p class="text-warning font-weight-bold font-size-h6">Total</p>
                          <br>
                          <h2 class="pt-5">
                            <?php echo $totalTickets ?>
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
                          <p class="text-success font-weight-bold font-size-h6 mt-2">Today</p>
                          <h2 class="pt-5">
                            <?php echo $todayTickets ?>
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
                          <p class="text-danger font-weight-bold font-size-h6 mt-2">This Month
                          </p>
                          <h2 class="pt-5">
                            <?php echo $monthlyTickets ?>
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
                          <p class="text-primary font-weight-bold font-size-h6 mt-2">This Year
                          </p>
                          <h2 class="pt-5">
                            <?php echo $yearlyTickets ?>

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
                <div class="card card-custom bg-white card-stretch gutter-b">
                  <!--begin::Header-->
                  <div class="card-header border-0 bg-warning py-5">
                    <h3 class="card-title font-weight-bolder text-white">Songs Purchased</h3>

                  </div>

                  <!--end::Header-->

                  <!--begin::Body-->
                  <div class="card-body p-0 position-relative overflow-hidden">

                    <!--begin::Chart-->
                    <div class="card-rounded-bottom bg-light-warning" style="height: 200px"></div>

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
                          <p class="text-danger font-weight-bold font-size-h6">Total</p>
                          <br>
                          <h2 class="pt-5">
                            <?php echo $totalSongs ?>
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
                          <p class="text-primary font-weight-bold font-size-h6 mt-2">Today</p>
                          <h2 class="pt-5">
                            <?php echo $todaySongs ?>

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
                          <p class="text-warning font-weight-bold font-size-h6 mt-2">
                            This Month
                          </p>
                          <h2 class="pt-5">
                            <?php echo $monthlySongs ?>
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
                          <p class="text-success font-weight-bold font-size-h6 mt-2">
                            This Year
                          </p>
                          <h2 class="pt-5">
                            <?php echo $yearlySongs ?>

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
            </div>
            <?php
            if ($_SESSION['is_star']) {

              // uploaded songs data
              $totalUploaded = mysqli_num_rows(
                mysqli_query(
                  $conn,
                  "SELECT `id` FROM songs WHERE star_id = $fId;"
                )
              );
              $uploadedToday = mysqli_num_rows(
                mysqli_query(
                  $conn,
                  "SELECT `id` FROM songs WHERE star_id = $fId AND upload_date LIKE '%-$today%';"
                )
              );
              $uploadedThisMonth = mysqli_num_rows(
                mysqli_query(
                  $conn,
                  "SELECT `id` FROM songs WHERE star_id = $fId AND upload_date LIKE '%$currentMonth%';"
                )
              );
              $uploadedThisYear = mysqli_num_rows(
                mysqli_query(
                  $conn,
                  "SELECT `id` FROM songs WHERE star_id = $fId AND upload_date LIKE '$currentYear%';"
                )
              );

              // events performed data
              $totalPerformed = mysqli_num_rows(
                mysqli_query(
                  $conn,
                  "SELECT `id` FROM events WHERE star_id = $fId;"
                )
              );
              $todayPerformed = mysqli_num_rows(
                mysqli_query(
                  $conn,
                  "SELECT `id` FROM events WHERE star_id = $fId AND `date` LIKE '%-$today%';"
                )
              );
              $monthlyPerformed = mysqli_num_rows(
                mysqli_query(
                  $conn,
                  "SELECT `id` FROM events WHERE star_id = $fId AND `date` LIKE '%$currentMonth%';"
                )
              );
              $yearlyPerformed = mysqli_num_rows(
                mysqli_query(
                  $conn,
                  "SELECT `id` FROM events WHERE star_id = $fId AND `date` LIKE '$currentYear%';"
                )
              );

              echo '<div class="row">
              <div class="col-12">
                <h1 class="w-100 mb-0">Star Dashboard</h1>
              </div>
              <div class="col-lg-6">

                <!--begin::Mixed Widget 1-->
                <div class="card card-custom bg-white card-stretch gutter-b">

                  <!--begin::Header-->
                  <div class="card-header border-0 bg-success py-5">
                    <h3 class="card-title font-weight-bolder text-white">Songs Uploaded</h3>
                    
                  </div>

                  <!--end::Header-->

                  <!--begin::Body-->
                  <div class="card-body p-0 position-relative overflow-hidden">

                    <!--begin::Chart-->
                    <div class="card-rounded-bottom bg-light-success" style="height: 200px"></div>

                    <!--end::Chart-->

                    <!--begin::Stats-->
                    <div class="card-spacer mt-n25">

                      <!--begin::Row-->
                      <div class="row m-0">
                        <div class="col bg-light-warning px-6 py-8 rounded-xl mr-7 mb-7 customCSS">
                          <span class="svg-icon svg-icon-3x svg-icon-warning d-block my-2">

                            <!--begin::Svg Icon | path:assets/media/svg/icons/Media/Equalizer.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                              width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
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
                          <p class="text-warning font-weight-bold font-size-h6">Total </p>
                          <br>
                          <h2 class="pt-5">' . $totalUploaded . '</h2>
                        </div>
                        <div class="col bg-light-danger px-6 py-8 rounded-xl mb-7">
                          <span class="svg-icon svg-icon-3x svg-icon-danger d-block my-2">

                            <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Add-user.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                              width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <polygon points="0 0 24 0 24 24 0 24" />
                                <path
                                  d="M18,8 L16,8 C15.4477153,8 15,7.55228475 15,7 C15,6.44771525 15.4477153,6 16,6 L18,6 L18,4 C18,3.44771525 18.4477153,3 19,3 C19.5522847,3 20,3.44771525 20,4 L20,6 L22,6 C22.5522847,6 23,6.44771525 23,7 C23,7.55228475 22.5522847,8 22,8 L20,8 L20,10 C20,10.5522847 19.5522847,11 19,11 C18.4477153,11 18,10.5522847 18,10 L18,8 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z"
                                  fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                <path
                                  d="M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z"
                                  fill="#000000" fill-rule="nonzero" />
                              </g>
                            </svg>

                            <!--end::Svg Icon-->
                          </span>
                          <p class="text-danger font-weight-bold font-size-h6 mt-2">Today </p>
                          <h2 class="pt-5">
                          ' . $uploadedToday . '
                          </h2>
                        </div>
                      </div>

                      <!--end::Row-->

                      <!--begin::Row-->
                      <div class="row m-0">
                        <div class="col bg-light-primary px-6 py-8 rounded-xl customCSS mr-7">
                          <span class="svg-icon svg-icon-3x svg-icon-primary d-block my-2">

                            <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Layers.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                              width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <polygon points="0 0 24 0 24 24 0 24" />
                                <path
                                  d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z"
                                  fill="#000000" fill-rule="nonzero" />
                                <path
                                  d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z"
                                  fill="#000000" opacity="0.3" />
                              </g>
                            </svg>

                            <!--end::Svg Icon-->
                          </span>
                          <p class="text-primary font-weight-bold font-size-h6 mt-2">This Month </p>
                          <h2 class="pt-5">
                          ' . $uploadedThisMonth . '
                          </h2>
                        </div>
                        <div class="col bg-light-success px-6 py-8 rounded-xl customCSS">
                          <span class="svg-icon svg-icon-3x svg-icon-success d-block my-2">

                            <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Urgent-mail.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                              width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24" />
                                <path
                                  d="M12.7037037,14 L15.6666667,10 L13.4444444,10 L13.4444444,6 L9,12 L11.2222222,12 L11.2222222,14 L6,14 C5.44771525,14 5,13.5522847 5,13 L5,3 C5,2.44771525 5.44771525,2 6,2 L18,2 C18.5522847,2 19,2.44771525 19,3 L19,13 C19,13.5522847 18.5522847,14 18,14 L12.7037037,14 Z"
                                  fill="#000000" opacity="0.3" />
                                <path
                                  d="M9.80428954,10.9142091 L9,12 L11.2222222,12 L11.2222222,16 L15.6666667,10 L15.4615385,10 L20.2072547,6.57253826 C20.4311176,6.4108595 20.7436609,6.46126971 20.9053396,6.68513259 C20.9668779,6.77033951 21,6.87277228 21,6.97787787 L21,17 C21,18.1045695 20.1045695,19 19,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,6.97787787 C3,6.70173549 3.22385763,6.47787787 3.5,6.47787787 C3.60510559,6.47787787 3.70753836,6.51099993 3.79274528,6.57253826 L9.80428954,10.9142091 Z"
                                  fill="#000000" />
                              </g>
                            </svg>

                            <!--end::Svg Icon-->
                          </span>
                          <p class="text-success font-weight-bold font-size-h6 mt-2">This Year </p>
                          <h2 class="pt-5">
                          ' . $uploadedThisYear . '
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
                    <h3 class="card-title font-weight-bolder text-white">Events Performed</h3>
                    
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
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                              width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
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
                          <p class="text-danger font-weight-bold font-size-h6">Total</p>
                          <br>
                          <h2 class="pt-5">
                          ' . $totalPerformed . '
                          </h2>
                        </div>
                        <div class="col bg-light-primary px-6 py-8 rounded-xl customCSS mb-7">
                          <span class="svg-icon svg-icon-3x svg-icon-primary d-block my-2">

                            <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Add-user.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                              width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <polygon points="0 0 24 0 24 24 0 24" />
                                <path
                                  d="M18,8 L16,8 C15.4477153,8 15,7.55228475 15,7 C15,6.44771525 15.4477153,6 16,6 L18,6 L18,4 C18,3.44771525 18.4477153,3 19,3 C19.5522847,3 20,3.44771525 20,4 L20,6 L22,6 C22.5522847,6 23,6.44771525 23,7 C23,7.55228475 22.5522847,8 22,8 L20,8 L20,10 C20,10.5522847 19.5522847,11 19,11 C18.4477153,11 18,10.5522847 18,10 L18,8 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z"
                                  fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                <path
                                  d="M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z"
                                  fill="#000000" fill-rule="nonzero" />
                              </g>
                            </svg>

                            <!--end::Svg Icon-->
                          </span>
                          <p class="text-primary font-weight-bold font-size-h6 mt-2">Today</p>
                          <h2 class="pt-5">
                          ' . $todayPerformed . '
                          </h2>
                        </div>
                      </div>

                      <!--end::Row-->

                      <!--begin::Row-->
                      <div class="row m-0">
                        <div class="col bg-light-warning px-6 py-8 rounded-xl mr-7 customCSS">
                          <span class="svg-icon svg-icon-3x svg-icon-warning d-block my-2">

                            <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Layers.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                              width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <polygon points="0 0 24 0 24 24 0 24" />
                                <path
                                  d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z"
                                  fill="#000000" fill-rule="nonzero" />
                                <path
                                  d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z"
                                  fill="#000000" opacity="0.3" />
                              </g>
                            </svg>

                            <!--end::Svg Icon-->
                          </span>
                          <p class="text-warning font-weight-bold font-size-h6 mt-2">This Month</p>
                          <h2 class="pt-5">
                          ' . $monthlyPerformed . '
                          </h2>
                        </div>
                        <div class="col bg-light-success px-6 py-8 rounded-xl customCSS">
                          <span class="svg-icon svg-icon-3x svg-icon-success d-block my-2">

                            <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Urgent-mail.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                              width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24" />
                                <path
                                  d="M12.7037037,14 L15.6666667,10 L13.4444444,10 L13.4444444,6 L9,12 L11.2222222,12 L11.2222222,14 L6,14 C5.44771525,14 5,13.5522847 5,13 L5,3 C5,2.44771525 5.44771525,2 6,2 L18,2 C18.5522847,2 19,2.44771525 19,3 L19,13 C19,13.5522847 18.5522847,14 18,14 L12.7037037,14 Z"
                                  fill="#000000" opacity="0.3" />
                                <path
                                  d="M9.80428954,10.9142091 L9,12 L11.2222222,12 L11.2222222,16 L15.6666667,10 L15.4615385,10 L20.2072547,6.57253826 C20.4311176,6.4108595 20.7436609,6.46126971 20.9053396,6.68513259 C20.9668779,6.77033951 21,6.87277228 21,6.97787787 L21,17 C21,18.1045695 20.1045695,19 19,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,6.97787787 C3,6.70173549 3.22385763,6.47787787 3.5,6.47787787 C3.60510559,6.47787787 3.70753836,6.51099993 3.79274528,6.57253826 L9.80428954,10.9142091 Z"
                                  fill="#000000" />
                              </g>
                            </svg>

                            <!--end::Svg Icon-->
                          </span>
                          <p class="text-success font-weight-bold font-size-h6 mt-2">This Year</p>
                          <h2 class="pt-5">
                          ' . $yearlyPerformed . '
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
            </div>';
            }
            ?>

            <?php
            if ($_SESSION['is_organizer']) {

              // events Organized data
              $totalOrganized = mysqli_num_rows(
                mysqli_query(
                  $conn,
                  "SELECT `id` FROM events WHERE organizer_id = $fId;"
                )
              );
              $todayOrganized = mysqli_num_rows(
                mysqli_query(
                  $conn,
                  "SELECT `id` FROM events WHERE organizer_id = $fId AND `date` LIKE '%-$today%';"
                )
              );
              $monthlyOrganized = mysqli_num_rows(
                mysqli_query(
                  $conn,
                  "SELECT `id` FROM events WHERE organizer_id = $fId AND `date` LIKE '%$currentMonth%';"
                )
              );
              $yearlyOrganized = mysqli_num_rows(
                mysqli_query(
                  $conn,
                  "SELECT `id` FROM events WHERE organizer_id = $fId AND `date` LIKE '$currentYear%';"
                )
              );

              // tickets sold data

              $totalTicketsSold = mysqli_num_rows(
                mysqli_query(
                  $conn,
                  "SELECT tickets.id FROM tickets INNER JOIN events ON tickets.event_id = events.id
                  WHERE organizer_id = $fId AND status = 'soldOut';"
                )
              );

              $todayTicketsSold = mysqli_num_rows(
                mysqli_query(
                  $conn,
                  "SELECT tickets.id FROM tickets INNER JOIN events ON tickets.event_id = events.id
                  WHERE organizer_id = $fId AND status = 'soldOut' AND buying_time LIKE '%-$today';"
                )
              );
              $monthlyTicketsSold = mysqli_num_rows(
                mysqli_query(
                  $conn,
                  "SELECT tickets.id FROM tickets INNER JOIN events ON tickets.event_id = events.id
                  WHERE organizer_id = $fId AND status = 'soldOut' AND buying_time LIKE '%$currentMonth%';"
                )
              );
              $yearlyTicketsSold = mysqli_num_rows(
                mysqli_query(
                  $conn,
                  "SELECT tickets.id FROM tickets INNER JOIN events ON tickets.event_id = events.id
                  WHERE organizer_id = $fId AND status = 'soldOut' AND buying_time LIKE '$currentYear%';"
                )
              );


              echo '<div class="row">
              <div class="col-12">
                <h1 class="w-100 mb-0">Organizer Dashboard</h1>
              </div>
              <div class="col-lg-6">

                <!--begin::Mixed Widget 1-->
                <div class="card card-custom bg-white card-stretch gutter-b">

                  <!--begin::Header-->
                  <div class="card-header border-0 bg-danger py-5">
                    <h3 class="card-title font-weight-bolder text-white">Events Organized</h3>
                   
                  </div>

                  <!--end::Header-->

                  <!--begin::Body-->
                  <div class="card-body p-0 position-relative overflow-hidden">

                    <!--begin::Chart-->
                    <div class="card-rounded-bottom bg-light-danger" style="height: 200px"></div>

                    <!--end::Chart-->

                    <!--begin::Stats-->
                    <div class="card-spacer mt-n25">

                      <!--begin::Row-->
                      <div class="row m-0">
                        <div class="col bg-light-warning px-6 py-8 rounded-xl mr-7 mb-7 customCSS">
                          <span class="svg-icon svg-icon-3x svg-icon-warning d-block my-2">

                            <!--begin::Svg Icon | path:assets/media/svg/icons/Media/Equalizer.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                              width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
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
                          <p class="text-warning font-weight-bold font-size-h6">Total</p>
                          <br>
                          <h2 class="pt-5">
                            ' . $totalOrganized . '
                          </h2>
                        </div>
                        <div class="col bg-light-success px-6 py-8 rounded-xl mb-7 customCSS">
                          <span class="svg-icon svg-icon-3x svg-icon-success d-block my-2">

                            <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Add-user.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                              width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <polygon points="0 0 24 0 24 24 0 24" />
                                <path
                                  d="M18,8 L16,8 C15.4477153,8 15,7.55228475 15,7 C15,6.44771525 15.4477153,6 16,6 L18,6 L18,4 C18,3.44771525 18.4477153,3 19,3 C19.5522847,3 20,3.44771525 20,4 L20,6 L22,6 C22.5522847,6 23,6.44771525 23,7 C23,7.55228475 22.5522847,8 22,8 L20,8 L20,10 C20,10.5522847 19.5522847,11 19,11 C18.4477153,11 18,10.5522847 18,10 L18,8 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z"
                                  fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                <path
                                  d="M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z"
                                  fill="#000000" fill-rule="nonzero" />
                              </g>
                            </svg>

                            <!--end::Svg Icon-->
                          </span>
                          <p class="text-success font-weight-bold font-size-h6 mt-2">Today</p>
                          <h2 class="pt-5">
                          ' . $todayOrganized . '
                          </h2>
                        </div>
                      </div>

                      <!--end::Row-->

                      <!--begin::Row-->
                      <div class="row m-0">
                        <div class="col bg-light-danger px-6 py-8 rounded-xl mr-7 customCSS">
                          <span class="svg-icon svg-icon-3x svg-icon-danger d-block my-2">

                            <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Layers.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                              width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <polygon points="0 0 24 0 24 24 0 24" />
                                <path
                                  d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z"
                                  fill="#000000" fill-rule="nonzero" />
                                <path
                                  d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z"
                                  fill="#000000" opacity="0.3" />
                              </g>
                            </svg>

                            <!--end::Svg Icon-->
                          </span>
                          <p class="text-danger font-weight-bold font-size-h6 mt-2">This Month</p>
                          <h2 class="pt-5">
                          ' . $monthlyOrganized . '
                          </h2>
                        </div>
                        <div class="col bg-light-primary px-6 py-8 rounded-xl customCSS">
                          <span class="svg-icon svg-icon-3x svg-icon-primary d-block my-2">

                            <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Urgent-mail.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                              width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24" />
                                <path
                                  d="M12.7037037,14 L15.6666667,10 L13.4444444,10 L13.4444444,6 L9,12 L11.2222222,12 L11.2222222,14 L6,14 C5.44771525,14 5,13.5522847 5,13 L5,3 C5,2.44771525 5.44771525,2 6,2 L18,2 C18.5522847,2 19,2.44771525 19,3 L19,13 C19,13.5522847 18.5522847,14 18,14 L12.7037037,14 Z"
                                  fill="#000000" opacity="0.3" />
                                <path
                                  d="M9.80428954,10.9142091 L9,12 L11.2222222,12 L11.2222222,16 L15.6666667,10 L15.4615385,10 L20.2072547,6.57253826 C20.4311176,6.4108595 20.7436609,6.46126971 20.9053396,6.68513259 C20.9668779,6.77033951 21,6.87277228 21,6.97787787 L21,17 C21,18.1045695 20.1045695,19 19,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,6.97787787 C3,6.70173549 3.22385763,6.47787787 3.5,6.47787787 C3.60510559,6.47787787 3.70753836,6.51099993 3.79274528,6.57253826 L9.80428954,10.9142091 Z"
                                  fill="#000000" />
                              </g>
                            </svg>

                            <!--end::Svg Icon-->
                          </span>
                          <p class="text-primary font-weight-bold font-size-h6 mt-2">This Year</p>
                          <h2 class="pt-5">
                          ' . $yearlyOrganized . '
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
                <div class="card card-custom bg-white card-stretch gutter-b">
                  <!--begin::Header-->
                  <div class="card-header border-0 bg-warning py-5">
                    <h3 class="card-title font-weight-bolder text-white">Tickets Sold</h3>
                    
                  </div>

                  <!--end::Header-->

                  <!--begin::Body-->
                  <div class="card-body p-0 position-relative overflow-hidden">

                    <!--begin::Chart-->
                    <div class="card-rounded-bottom bg-light-warning" style="height: 200px"></div>

                    <!--end::Chart-->

                    <!--begin::Stats-->
                    <div class="card-spacer mt-n25">

                      <!--begin::Row-->
                      <div class="row m-0">
                        <div class="col bg-light-danger px-6 py-8 rounded-xl mr-7 mb-7">
                          <span class="svg-icon svg-icon-3x svg-icon-danger d-block my-2">

                            <!--begin::Svg Icon | path:assets/media/svg/icons/Media/Equalizer.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                              width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
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
                          <p class="text-danger font-weight-bold font-size-h6">Total</p>
                          <br>
                          <h2 class="pt-5">
                          ' . $totalTicketsSold . '
                          </h2>
                        </div>
                        <div class="col bg-light-primary px-6 py-8 rounded-xl customCSS mb-7">
                          <span class="svg-icon svg-icon-3x svg-icon-primary d-block my-2">

                            <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Add-user.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                              width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <polygon points="0 0 24 0 24 24 0 24" />
                                <path
                                  d="M18,8 L16,8 C15.4477153,8 15,7.55228475 15,7 C15,6.44771525 15.4477153,6 16,6 L18,6 L18,4 C18,3.44771525 18.4477153,3 19,3 C19.5522847,3 20,3.44771525 20,4 L20,6 L22,6 C22.5522847,6 23,6.44771525 23,7 C23,7.55228475 22.5522847,8 22,8 L20,8 L20,10 C20,10.5522847 19.5522847,11 19,11 C18.4477153,11 18,10.5522847 18,10 L18,8 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z"
                                  fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                <path
                                  d="M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z"
                                  fill="#000000" fill-rule="nonzero" />
                              </g>
                            </svg>

                            <!--end::Svg Icon-->
                          </span>
                          <p class="text-primary font-weight-bold font-size-h6 mt-2">Today</p>
                          <h2 class="pt-5">
                          ' . $todayTicketsSold . '
                          </h2>
                        </div>
                      </div>

                      <!--end::Row-->

                      <!--begin::Row-->
                      <div class="row m-0">
                        <div class="col bg-light-warning px-6 py-8 rounded-xl mr-7 customCSS">
                          <span class="svg-icon svg-icon-3x svg-icon-warning d-block my-2">

                            <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Layers.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                              width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <polygon points="0 0 24 0 24 24 0 24" />
                                <path
                                  d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z"
                                  fill="#000000" fill-rule="nonzero" />
                                <path
                                  d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z"
                                  fill="#000000" opacity="0.3" />
                              </g>
                            </svg>

                            <!--end::Svg Icon-->
                          </span>
                          <p class="text-warning font-weight-bold font-size-h6 mt-2">This Month</p>
                          <h2 class="pt-5">
                          ' . $monthlyTicketsSold . '
                          </h2>
                        </div>
                        <div class="col bg-light-success px-6 py-8 rounded-xl customCSS">
                          <span class="svg-icon svg-icon-3x svg-icon-success d-block my-2">

                            <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Urgent-mail.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                              width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24" />
                                <path
                                  d="M12.7037037,14 L15.6666667,10 L13.4444444,10 L13.4444444,6 L9,12 L11.2222222,12 L11.2222222,14 L6,14 C5.44771525,14 5,13.5522847 5,13 L5,3 C5,2.44771525 5.44771525,2 6,2 L18,2 C18.5522847,2 19,2.44771525 19,3 L19,13 C19,13.5522847 18.5522847,14 18,14 L12.7037037,14 Z"
                                  fill="#000000" opacity="0.3" />
                                <path
                                  d="M9.80428954,10.9142091 L9,12 L11.2222222,12 L11.2222222,16 L15.6666667,10 L15.4615385,10 L20.2072547,6.57253826 C20.4311176,6.4108595 20.7436609,6.46126971 20.9053396,6.68513259 C20.9668779,6.77033951 21,6.87277228 21,6.97787787 L21,17 C21,18.1045695 20.1045695,19 19,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,6.97787787 C3,6.70173549 3.22385763,6.47787787 3.5,6.47787787 C3.60510559,6.47787787 3.70753836,6.51099993 3.79274528,6.57253826 L9.80428954,10.9142091 Z"
                                  fill="#000000" />
                              </g>
                            </svg>

                            <!--end::Svg Icon-->
                          </span>
                          <p class="text-success font-weight-bold font-size-h6 mt-2">This Year</p>
                          <h2 class="pt-5">
                          ' . $yearlyTicketsSold . '

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
            </div>';
            }
            ?>

            <?php
            if ($_SESSION['is_supplier']) {

              //uploaded products data 
              $totalProducts = mysqli_num_rows(
                mysqli_query(
                  $conn,
                  "SELECT id FROM products WHERE supplier_id = $fId;"
                )
              );

              $todayProducts = mysqli_num_rows(
                mysqli_query(
                  $conn,
                  "SELECT id FROM products WHERE supplier_id = $fId AND upload_date LIKE '$today%';"
                )
              );

              $monthlyProducts = mysqli_num_rows(
                mysqli_query(
                  $conn,
                  "SELECT id FROM products WHERE supplier_id = $fId AND upload_date LIKE '$currentMonth%';"
                )
              );

              $yearlyProducts = mysqli_num_rows(
                mysqli_query(
                  $conn,
                  "SELECT id FROM products WHERE supplier_id = $fId AND upload_date LIKE '$currentYear%';"
                )
              );

              // events participated data

              $totalParticipated = mysqli_num_rows(
                mysqli_query(
                  $conn,
                  "SELECT id FROM quotations WHERE supplier_id = $fId AND `status` = 'accepted';"
                )
              );


              echo '<div class="row">
              <div class="col-12">
                <h1 class="w-100 mb-0">Supplier Dashboard</h1>
              </div>
              <div class="col-lg-6">

                <!--begin::Mixed Widget 1-->
                <div class="card card-custom bg-white card-stretch gutter-b">

                  <!--begin::Header-->
                  <div class="card-header border-0 bg-success py-5">
                    <h3 class="card-title font-weight-bolder text-white">Products Uploaded</h3>
                    
                  </div>

                  <!--end::Header-->

                  <!--begin::Body-->
                  <div class="card-body p-0 position-relative overflow-hidden">

                    <!--begin::Chart-->
                    <div class="card-rounded-bottom bg-light-success" style="height: 200px"></div>

                    <!--end::Chart-->

                    <!--begin::Stats-->
                    <div class="card-spacer mt-n25">

                      <!--begin::Row-->
                      <div class="row m-0">
                        <div class="col bg-light-warning px-6 py-8 rounded-xl mr-7 mb-7 customCSS">
                          <span class="svg-icon svg-icon-3x svg-icon-warning d-block my-2">

                            <!--begin::Svg Icon | path:assets/media/svg/icons/Media/Equalizer.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                              width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
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
                          <p class="text-warning font-weight-bold font-size-h6">Total </p>
                          <br>
                          <h2 class="pt-5">
                          ' . $totalProducts . '
                          </h2>
                        </div>
                        <div class="col bg-light-danger px-6 py-8 rounded-xl mb-7">
                          <span class="svg-icon svg-icon-3x svg-icon-danger d-block my-2">

                            <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Add-user.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                              width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <polygon points="0 0 24 0 24 24 0 24" />
                                <path
                                  d="M18,8 L16,8 C15.4477153,8 15,7.55228475 15,7 C15,6.44771525 15.4477153,6 16,6 L18,6 L18,4 C18,3.44771525 18.4477153,3 19,3 C19.5522847,3 20,3.44771525 20,4 L20,6 L22,6 C22.5522847,6 23,6.44771525 23,7 C23,7.55228475 22.5522847,8 22,8 L20,8 L20,10 C20,10.5522847 19.5522847,11 19,11 C18.4477153,11 18,10.5522847 18,10 L18,8 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z"
                                  fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                <path
                                  d="M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z"
                                  fill="#000000" fill-rule="nonzero" />
                              </g>
                            </svg>

                            <!--end::Svg Icon-->
                          </span>
                          <p class="text-danger font-weight-bold font-size-h6 mt-2">Today </p>
                          <h2 class="pt-5">
                          ' . $todayProducts . '
                          </h2>
                        </div>
                      </div>

                      <!--end::Row-->

                      <!--begin::Row-->
                      <div class="row m-0">
                        <div class="col bg-light-primary px-6 py-8 rounded-xl customCSS mr-7">
                          <span class="svg-icon svg-icon-3x svg-icon-primary d-block my-2">

                            <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Layers.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                              width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <polygon points="0 0 24 0 24 24 0 24" />
                                <path
                                  d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z"
                                  fill="#000000" fill-rule="nonzero" />
                                <path
                                  d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z"
                                  fill="#000000" opacity="0.3" />
                              </g>
                            </svg>

                            <!--end::Svg Icon-->
                          </span>
                          <p class="text-primary font-weight-bold font-size-h6 mt-2">This Month </p>
                          <h2 class="pt-5">
                          ' . $monthlyProducts . '
                          </h2>
                        </div>
                        <div class="col bg-light-success px-6 py-8 rounded-xl customCSS">
                          <span class="svg-icon svg-icon-3x svg-icon-success d-block my-2">

                            <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Urgent-mail.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                              width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24" />
                                <path
                                  d="M12.7037037,14 L15.6666667,10 L13.4444444,10 L13.4444444,6 L9,12 L11.2222222,12 L11.2222222,14 L6,14 C5.44771525,14 5,13.5522847 5,13 L5,3 C5,2.44771525 5.44771525,2 6,2 L18,2 C18.5522847,2 19,2.44771525 19,3 L19,13 C19,13.5522847 18.5522847,14 18,14 L12.7037037,14 Z"
                                  fill="#000000" opacity="0.3" />
                                <path
                                  d="M9.80428954,10.9142091 L9,12 L11.2222222,12 L11.2222222,16 L15.6666667,10 L15.4615385,10 L20.2072547,6.57253826 C20.4311176,6.4108595 20.7436609,6.46126971 20.9053396,6.68513259 C20.9668779,6.77033951 21,6.87277228 21,6.97787787 L21,17 C21,18.1045695 20.1045695,19 19,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,6.97787787 C3,6.70173549 3.22385763,6.47787787 3.5,6.47787787 C3.60510559,6.47787787 3.70753836,6.51099993 3.79274528,6.57253826 L9.80428954,10.9142091 Z"
                                  fill="#000000" />
                              </g>
                            </svg>

                            <!--end::Svg Icon-->
                          </span>
                          <p class="text-success font-weight-bold font-size-h6 mt-2">This Year </p>
                          <h2 class="pt-5">
                          ' . $yearlyProducts . '
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
                    <h3 class="card-title font-weight-bolder text-white">Events Participated</h3>
                    
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
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                              width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
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
                          <p class="text-danger font-weight-bold font-size-h6">Total</p>
                          <br>
                          <h2 class="pt-5">
                          2
                          </h2>
                        </div>
                        <div class="col bg-light-primary px-6 py-8 rounded-xl customCSS mb-7">
                          <span class="svg-icon svg-icon-3x svg-icon-primary d-block my-2">

                            <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Add-user.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                              width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <polygon points="0 0 24 0 24 24 0 24" />
                                <path
                                  d="M18,8 L16,8 C15.4477153,8 15,7.55228475 15,7 C15,6.44771525 15.4477153,6 16,6 L18,6 L18,4 C18,3.44771525 18.4477153,3 19,3 C19.5522847,3 20,3.44771525 20,4 L20,6 L22,6 C22.5522847,6 23,6.44771525 23,7 C23,7.55228475 22.5522847,8 22,8 L20,8 L20,10 C20,10.5522847 19.5522847,11 19,11 C18.4477153,11 18,10.5522847 18,10 L18,8 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z"
                                  fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                <path
                                  d="M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z"
                                  fill="#000000" fill-rule="nonzero" />
                              </g>
                            </svg>

                            <!--end::Svg Icon-->
                          </span>
                          <p class="text-primary font-weight-bold font-size-h6 mt-2">Today</p>
                          <h2 class="pt-5">1</h2>
                        </div>
                      </div>

                      <!--end::Row-->

                      <!--begin::Row-->
                      <div class="row m-0">
                        <div class="col bg-light-warning px-6 py-8 rounded-xl mr-7 customCSS">
                          <span class="svg-icon svg-icon-3x svg-icon-warning d-block my-2">

                            <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Layers.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                              width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <polygon points="0 0 24 0 24 24 0 24" />
                                <path
                                  d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z"
                                  fill="#000000" fill-rule="nonzero" />
                                <path
                                  d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z"
                                  fill="#000000" opacity="0.3" />
                              </g>
                            </svg>

                            <!--end::Svg Icon-->
                          </span>
                          <p class="text-warning font-weight-bold font-size-h6 mt-2">This Month</p>
                          <h2 class="pt-5">1</h2>
                        </div>
                        <div class="col bg-light-success px-6 py-8 rounded-xl customCSS">
                          <span class="svg-icon svg-icon-3x svg-icon-success d-block my-2">

                            <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Urgent-mail.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                              width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24" />
                                <path
                                  d="M12.7037037,14 L15.6666667,10 L13.4444444,10 L13.4444444,6 L9,12 L11.2222222,12 L11.2222222,14 L6,14 C5.44771525,14 5,13.5522847 5,13 L5,3 C5,2.44771525 5.44771525,2 6,2 L18,2 C18.5522847,2 19,2.44771525 19,3 L19,13 C19,13.5522847 18.5522847,14 18,14 L12.7037037,14 Z"
                                  fill="#000000" opacity="0.3" />
                                <path
                                  d="M9.80428954,10.9142091 L9,12 L11.2222222,12 L11.2222222,16 L15.6666667,10 L15.4615385,10 L20.2072547,6.57253826 C20.4311176,6.4108595 20.7436609,6.46126971 20.9053396,6.68513259 C20.9668779,6.77033951 21,6.87277228 21,6.97787787 L21,17 C21,18.1045695 20.1045695,19 19,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,6.97787787 C3,6.70173549 3.22385763,6.47787787 3.5,6.47787787 C3.60510559,6.47787787 3.70753836,6.51099993 3.79274528,6.57253826 L9.80428954,10.9142091 Z"
                                  fill="#000000" />
                              </g>
                            </svg>

                            <!--end::Svg Icon-->
                          </span>
                          <p class="text-success font-weight-bold font-size-h6 mt-2">This Year</p>
                          <h2 class="pt-5">1</h2>
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
            </div>';
            }
            ?>

          </div>
        </div>

        <!--end::Content-->

        <?php include("../../partials/_footer.php"); ?>
      </div>

      <!--end::Wrapper-->
    </div>

    <!--end::Page-->
  </div>

  <!--end::Main-->
  <?php include("../../partials/_extras/offcanvas/quick-user.php") ?>
  <?php include("../../partials/_extras/scrolltop.php") ?>
  <?php include("../../partials/jslinks.php"); ?>
</body>

<!--end::Body-->

</html>