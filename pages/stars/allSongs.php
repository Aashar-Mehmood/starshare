<?php
include_once("../login_signup/check_session.php");
include_once("../login_signup/db_connection.php");
if (!isset($_GET['starId'])) {
  header("location:./stars.php");
} else {
  $id = $_GET['starId'];
  if (isset($_GET['page'])) {
    $page = $_GET['page'];
  } else {
    $page = 1;
  }

  $songQuery = "SELECT `id` FROM songs WHERE star_id = $id AND `status` = 'published';";
  $totalsongs = mysqli_num_rows(mysqli_query($conn, $songQuery));

  $songPerPage = 6;
  $totalPages = ceil($totalsongs / $songPerPage);
  $offset = ($page - 1) * $songPerPage;

  $limitSelect = "SELECT * FROM `songs` WHERE star_id = $id AND `status` = 'published' LIMIT  $songPerPage OFFSET $offset;";
  $songData = mysqli_query($conn, $limitSelect);
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

<body id="kt_body"
    class="header-fixed header-mobile-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
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

                        <ul class="nav nav-tabs nav-tabs-line nav-bold nav-tabs-line-2x d-flex align-items-center ml-2 ml-md-8"
                            style="border: none; font-size: 1.12rem;">
                            <li class="nav-item">
                                <a class="nav-link "
                                    href="pages/stars/star_details.php?starId=<?php echo $id ?>">Overview</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active"
                                    href="pages/stars/allSongs.php?starId=<?php echo $id ?>">Songs</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link "
                                    href="pages/stars/eventsPerformed.php?starId=<?php echo $id ?>">Events Performed</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link"
                                    href="pages/stars/transactions.php?starId=<?php echo $id ?>">Transactions</a>
                            </li>
                        </ul>
                        <!--end::Header Menu-->

                        <!--end::Header Menu Wrapper-->

                        <!--begin::Topbar-->
                        <div class="topbar">
                            <!--begin::User-->
                            <div class="topbar-item">
                                <div class="btn btn-icon btn-icon-mobile w-auto btn-clean d-flex align-items-center btn-lg px-2"
                                    id="kt_quick_user_toggle">
                                    <span
                                        class="text-muted font-weight-bold font-size-base d-none d-md-inline mr-1">Hi,</span>
                                    <span
                                        class="text-dark-50 font-weight-bolder font-size-base d-none d-md-inline mr-3">
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

                        <div class="tab-pane fade show active" id="kt_tab_pane_2" role="tabpanel"
                            aria-labelledby="kt_tab_pane_2">
                            <div class="container">
                                <?php
                if (mysqli_num_rows($songData) == 0) {
                  echo  '<div class="row">
                            <h2 class="text-align-center">No Songs Uploaded by this Artist</h2>
                          </div>';
                } else {
                  echo '<h2 class="pl-8">Latest Songs</h2>';
                  while ($songArr = mysqli_fetch_assoc($songData)) {
                    $songId =   "playSong" . $songArr['id'];
                    echo '<div class="modal fade" id="' . $songId . '" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
                              aria-hidden="true">
                              <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">
                                    ' . $songArr["title"] . '
                                    </h5>
                                    <h1 style = "cursor: pointer;" data-dismiss="modal">
                                      &times;
                                    </h1>
                                  </div>
                                  <div class="modal-body">
                                    <audio controls>
                                      <source src="' . $songArr["sample"] . '"
                                        >
                                      Your browser does not support the audio element.
                                    </audio>
                                  </div>
                                </div>
                              </div>
                            </div>';
                    $banner = $songArr['banner'];
                    echo '<div class="row">
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
                                            style="background-image: url(' . $banner . ')"></div>
                                          <!--end::Image-->
                                          <!--begin::Title-->
                                          <p
                                            class="card-title font-weight-bolder text-dark-75 font-size-h4 m-0 pt-7 pb-1">
                                            ' . $songArr['title'] . '
                                          </p>
                                          <!--end::Title-->
                                          <!--begin::Text-->
                                          <!--end::Text-->
                                        </div>
                                        <!--end::Header-->
                                        <!--begin::Body-->
                                        <div class="pt-1">
                                          <!--begin::Item-->
                                          <div class="d-flex align-items-center pb-9">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-45 symbol-light mr-4">
                                              <span class="symbol-label">
                                                <span class="svg-icon svg-icon-2x svg-icon-dark-50">
                                                  <!--begin::Svg Icon | path:assets/media/svg/icons/Media/Equalizer.svg-->
                                                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                                    width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                      <rect x="0" y="0" width="24" height="24"></rect>
                                                      <rect fill="#000000" opacity="0.3" x="13" y="4" width="3" height="16"
                                                        rx="1.5">
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
                                              <p
                                                class="text-dark-75 mb-1 font-size-lg font-weight-bolder">
                                                Upload Date
                                              </p>
                                            </div>
                                            <!--end::Text-->
                                            <!--begin::label-->
                                            <span
                                              class="font-weight-bolder label label-xl label-light-success label-inline px-3 py-5 min-w-45px">
                                              ' . $songArr['upload_date'] . '
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
                                                  <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Group.svg-->
                                                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                                    width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                      <polygon points="0 0 24 0 24 24 0 24"></polygon>
                                                      <path
                                                        d="M18,14 C16.3431458,14 15,12.6568542 15,11 C15,9.34314575 16.3431458,8 18,8 C19.6568542,8 21,9.34314575 21,11 C21,12.6568542 19.6568542,14 18,14 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z"
                                                        fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                                                      <path
                                                        d="M17.6011961,15.0006174 C21.0077043,15.0378534 23.7891749,16.7601418 23.9984937,20.4 C24.0069246,20.5466056 23.9984937,21 23.4559499,21 L19.6,21 C19.6,18.7490654 18.8562935,16.6718327 17.6011961,15.0006174 Z M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z"
                                                        fill="#000000" fill-rule="nonzero"></path>
                                                    </g>
                                                  </svg>
                                                  <!--end::Svg Icon-->
                                                </span>
                                              </span>
                                            </div>
                                            <!--end::Symbol-->
                                            <!--begin::Text-->
                                            <div class="d-flex flex-column flex-grow-1">
                                              <p
                                                class="text-dark-75 mb-1 font-size-lg font-weight-bolder">
                                                Downloads
                                              </p>
                                            </div>
                                            <!--end::Text-->
                                            <!--begin::label-->
                                            <span
                                              class="font-weight-bolder label label-xl label-light-danger label-inline px-3 py-5 min-w-45px">
                                              ' . $songArr['downloads'] . '
                                              </span>
                                            <!--end::label-->
                                          </div>
                                          <!--end::Item-->
                                          <!--begin::Item-->
                                          <!--end::Item-->
                                        </div>
                                        <!--end::Body-->
                                      </div>
                                      <!--eng::Container-->
                                      <!--begin::Footer-->
                                      <div class="d-flex flex-center">
                                        <a href="javascript;" data-target="#' . $songId . '" data-toggle="modal" class="btn btn-primary font-weight-bolder font-size-sm py-3 px-14">Play
                                          Song
                                        </a >
                                      </div>
                                      <!--end::Footer-->
                                    </div>

                                    <!--end::Wrapper-->
                                  </div>
                                  <!--end::Body-->
                                </div>
                              </div>                 
                            </div>';
                  }
                }
                ?>

                            </div>
                            <?php
              if (mysqli_num_rows($songData) > 0) {
                echo '<div class="d-flex justify-content-center align-items-center flex-wrap mt-12">
                  <div class="d-flex flex-wrap py-2 px-6 justify-content-center"
                    style="background-color: white; border-radius: 10px; width:60%;">';
                if ($page == 1) {
                  $prev = $page;
                } else {
                  $prev = $page - 1;
                }
                echo "<a href='pages/stars/allSongs.php?starId=$id&page=$prev' class='btn btn-icon btn-sm btn-light-primary mr-2 my-1'><i
                    class='ki ki-bold-arrow-back icon-xs'></i></a>";
                for ($i = 1; $i <= $totalPages; $i++) {
                  echo "<a href='pages/stars/allSongs.php?starId=$id&page=$i'
                    class='paginationBtn btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1'>$i</a>";
                }
                if ($page == $totalPages) {
                  $next = $page;
                } else {
                  $next = $page + 1;
                }
                echo "<a href='pages/stars/allSongs.php?starId=$id&page=$next' class='btn btn-icon btn-sm btn-light-primary mr-2 my-1'><i
                    class='ki ki-bold-arrow-next icon-xs'></i></a>";
              }
              ?>
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