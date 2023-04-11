<?php
include_once("../login_signup/check_session.php");
include_once("../login_signup/db_connection.php");

if (!isset($_GET['organizerId'])) {
  header("location:./organizers.php");
  exit();
} else {
  $id = $_GET['organizerId'];
  $organizerQuery = "SELECT * FROM organizers WHERE u_id = $id;";
  $organizerData = mysqli_query($conn, $organizerQuery);
  $arr = mysqli_fetch_assoc($organizerData);
  $name = $arr['name'];
  $email = $arr['email'];
  $contact = $arr['contact'];
  $address = $arr['address'];
  $description = $arr['description'];
  $profile_img = $arr['profile_img'];

  $totalEvents = mysqli_num_rows(
    mysqli_query(
      $conn,
      "SELECT id FROM events WHERE organizer_id = $id;"
    )
  );

  $suppliersHired = mysqli_num_rows(
    mysqli_query(
      $conn,
      "SELECT id FROM quotations 
      WHERE organizer_id = $id AND status = 'accepted';"
    )
  );

  $totalEarningsData = mysqli_query(
    $conn,
    "SELECT SUM(amount) AS total_earnings  FROM transactions 
    WHERE seller_id = $id AND product_name = 'ticket';"
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
    WHERE seller_id = $id AND product_name = 'ticket' AND date LIKE '$currentMonth%';"
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
    WHERE seller_id = $id AND product_name = 'ticket' AND date LIKE '$currentYear%';"
  );
  $yearlyEarningsArr = mysqli_fetch_assoc($yearlyEarningsData);
  $yearlyEarnings = $yearlyEarningsArr['yearly_earnings'];
  if (empty($yearlyEarnings)) {
    $yearlyEarnings = '0';
  }
}

?>
<!DOCTYPE html>

<html lang="en">

<!--begin::Head-->

<head>
  <base href="../../">
  <meta charset="utf-8" />
  <title>Organizer Details</title>
  <?php
  include("../../partials/csslinks.php");
  ?>
  <link rel="stylesheet" href="assets/css/custom/user_details.css">

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
                <a class="nav-link active" href="pages/organizers/organizer_details.php?activeLinkId=organizers&organizerId=<?php echo $id ?>">Overview</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="pages/organizers/allEvents.php?activeLinkId=organizers&organizerId=<?php echo $id ?>">Events</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="pages/organizers/transactions.php?activeLinkId=organizers&organizerId=<?php echo $id ?>">Transactions</a>
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
        <div class="pt-0 content d-flex flex-column flex-column-fluid" id="kt_content">
          <div class="tab-content mt-5" id="myTabContent">
            <div class="tab-pane fade show active " id="kt_tab_pane_1" role="tabpanel" aria-labelledby="kt_tab_pane_1">
              <div class="container ">
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
                                  <img src="<?php echo $profile_img ?>" class="h-100 align-self-end" alt="">
                                </span>
                              </div>
                              <!--end::Symbol-->
                              <!--begin::Username-->
                              <p class="card-title font-weight-bolder text-dark-75  font-size-h4 m-0 pt-7 pb-1">
                                <?php echo $name ?>
                              </p>
                              <!--end::Username-->
                              <!--begin::Info-->
                              <div class="font-weight-bold text-dark-50 font-size-sm pb-6">
                                <?php echo $email ?>
                              </div>
                              <!--end::Info-->
                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="pt-1">
                              <!--begin::Text-->
                              <p class="text-dark-75 font-weight-nirmal font-size-lg m-0 pb-7">
                                <?php echo $description ?>
                              </p>
                              <!--end::Text-->
                              <!--begin::Item-->
                              <div class="d-flex align-items-center pb-9">
                                <!--begin::Symbol-->
                                <div class="symbol symbol-45 symbol-light mr-4">
                                  <span class="symbol-label">
                                    <i class="fas fa-dollar-sign svg-icon svg-icon-2x svg-icon-dark-50">

                                    </i>
                                  </span>
                                </div>
                                <!--end::Symbol-->
                                <!--begin::Text-->
                                <div class="d-flex flex-column flex-grow-1">
                                  <a class="text-dark-75  mb-1 font-size-lg font-weight-bolder">
                                    Earnings
                                  </a>
                                </div>
                                <!--end::Text-->
                                <!--begin::label-->
                                <span class="font-weight-bolder label label-xl label-light-success label-inline px-3 py-5 min-w-45px">
                                  <?php
                                  echo $totalEarnings . " &dollar;";
                                  ?>
                                </span>
                                <!--end::label-->
                              </div>
                              <!--end::Item-->
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
                                          <rect fill="#000000" x="8" y="9" width="3" height="11" rx="1.5"></rect>
                                          <rect fill="#000000" x="18" y="11" width="3" height="9" rx="1.5"></rect>
                                          <rect fill="#000000" x="3" y="13" width="3" height="7" rx="1.5"></rect>
                                        </g>
                                      </svg>
                                      <!--end::Svg Icon-->
                                    </span>
                                  </span>
                                </div>
                                <!--end::Symbol-->
                                <!--begin::Text-->
                                <div class="d-flex flex-column flex-grow-1">
                                  <a class="text-dark-75  mb-1 font-size-lg font-weight-bolder">
                                    Events Organized
                                  </a>
                                </div>
                                <!--end::Text-->
                                <!--begin::label-->
                                <span class="font-weight-bolder label label-xl label-light-success label-inline px-3 py-5 min-w-45px">
                                  <?php
                                  echo $totalEvents;
                                  ?>
                                </span>
                                <!--end::label-->
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
                        <div class="card-rounded-bottom pt-10 pl-8" style="background-color: #24bd7680;">
                          <h1>
                            <?php echo $totalEvents ?>
                          </h1>
                        </div>
                        <!--end::Chart-->
                      </div>
                      <!--end::Body-->
                    </div>
                    <div class="card card-custom bg-gray-100 card-stretch-half gutter-b">
                      <!--begin::Header-->
                      <div class="card-header border-0 bg-success py-5">
                        <h2 class="font-weight-bolder text-dark">Total Earnings</h2>
                      </div>

                      <div class="card-body p-0 position-relative overflow-hidden">
                        <!--begin::Chart-->
                        <div class="card-rounded-bottom pt-10 pl-8" style="background-color: #1bc5bd80;">
                          <h1>
                            <?php
                            echo $totalEarnings . ' &dollar;';
                            ?>
                          </h1>
                        </div>
                        <!--end::Chart-->
                      </div>
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
                        <div class="card-rounded-bottom pt-10 pl-8" style="background-color:#ffa80080">
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
                      <div class="card-header border-0 bg-primary py-5">
                        <h2 class="font-weight-bolder text-dark">This Month Earning</h2>
                      </div>
                      <!--end::Header-->
                      <!--begin::Body-->
                      <div class="card-body p-0 position-relative overflow-hidden">
                        <!--begin::Chart-->
                        <div class="card-rounded-bottom pt-10 pl-8" style="background-color:#3699ff80 ">
                          <h1>
                            <?php
                            echo $monthlyEarnings . ' &dollar;';
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
                      <div class="card-header border-0 py-5" style="background-color: #e52a6f;">
                        <h2 class="font-weight-bolder text-dark">This year earnings</h2>
                      </div>
                      <!--end::Header-->
                      <!--begin::Body-->
                      <div class="card-body p-0 position-relative overflow-hidden">
                        <!--begin::Chart-->
                        <div class="card-rounded-bottom pt-10 pl-8" style="background-color:#e52a6f80; ">
                          <h1>
                            <?php
                            echo $yearlyEarnings . ' &dollar;';
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
  <?php
  include("../../partials/_extras/offcanvas/quick-user.php");
  include("../../partials/jslinks.php");
  ?>

</body>

<!--end::Body-->

</html>