<?php
include_once("../login_signup/check_session.php");
include_once("../login_signup/db_connection.php");

if (!isset($_GET['organizerId'])) {
  header("location:./organizers.php");
  exit();
} else {
  // get events 
  $id = $_GET['organizerId'];
  if (isset($_GET['page'])) {
    $page = $_GET['page'];
  } else {
    $page = 1;
  }

  $eventQuery = "SELECT `id` FROM events WHERE organizer_id = $id;";
  $totalEvents = mysqli_num_rows(mysqli_query($conn, $eventQuery));

  $eventPerPage = 6;
  $totalPages = ceil($totalEvents / $eventPerPage);
  $offset = ($page - 1) * $eventPerPage;

  $limitSelect = "SELECT * FROM `events` WHERE organizer_id = $id LIMIT $eventPerPage OFFSET $offset;";
  $eventData = mysqli_query($conn, $limitSelect);
}

?>
<!DOCTYPE html>

<html lang="en">

<!--begin::Head-->

<head>
  <base href="../../">
  <meta charset="utf-8" />
  <title>Organizer Details | All Events</title>
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
                <a class="nav-link" href="pages/organizers/organizer_details.php?activeLinkId=organizers&organizerId=<?php echo $id ?>">Overview</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="pages/organizers/allEvents.php?activeLinkId=organizers&organizerId=<?php echo $id ?>">Events</a>
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

            <div class="tab-pane fade show active" id="kt_tab_pane_2" role="tabpanel" aria-labelledby="kt_tab_pane_2">
              <div class="container">
                <div class="row">
                  <?php
                  if (mysqli_num_rows($eventData) == 0) {
                    echo '
                    <div class="w-60 mx-auto py-10">
                      <h2>No Events Added by this Organizer</h2>
                    </div>
                    ';
                  } else {
                    while ($eventArr = mysqli_fetch_assoc($eventData)) {
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
                                    Date : ' . date('d-M-Y', strtotime($eventArr['date'])) . ' <br>
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
                <?php
                if (mysqli_num_rows($eventData) > 0) {
                  echo '<div class="d-flex justify-content-center align-items-center flex-wrap mt-12">
                  <div class="d-flex flex-wrap py-2 px-6 justify-content-center"
                    style="background-color: white; border-radius: 10px; width:60%;">';
                  if ($page == 1) {
                    $prev = $page;
                  } else {
                    $prev = $page - 1;
                  }
                  echo "<a href='pages/organizers/allEvents.php?page=$prev&organizerId=$id' class='btn btn-icon btn-sm btn-light-primary mr-2 my-1'><i
                    class='ki ki-bold-arrow-back icon-xs'></i></a>";
                  for ($i = 1; $i <= $totalPages; $i++) {
                    echo "<a href='pages/organizers/allEvents.php?page=$i&organizerId=$id' id = 'page$i'
                    class='paginationBtn btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1'>$i</a>";
                  }
                  if ($page == $totalPages) {
                    $next = $page;
                  } else {
                    $next = $page + 1;
                  }
                  echo "<a href='pages/organizers/allEvents.php?page=$next&organizerId=$id' class='btn btn-icon btn-sm btn-light-primary mr-2 my-1'><i
                    class='ki ki-bold-arrow-next icon-xs'></i></a>";
                }
                ?>
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
  <script>
    const pageNum = document.URL.split('page=')[1];
    var activePage = document.getElementById(`page${pageNum}`);
    if (!activePage) {
      activePage = document.querySelectorAll('a.paginationBtn')[0];
    }
    activePage.classList.add('active');
  </script>

</body>

<!--end::Body-->

</html>