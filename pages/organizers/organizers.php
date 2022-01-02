<?php
  include_once("../login_signup/check_session.php");
?>

<!DOCTYPE html>

<html lang="en">

<!--begin::Head-->

<head>
  <base href="../../">
  <meta charset="utf-8" />
  <title>Organizers</title>
  <?php
  include("../../partials/csslinks.php");
  ?>
  <style>
  div.col-xl-6 {
    padding: 5rem 3rem;
  }

  div.col-xl-6:nth-child(3) {
    padding-top: 0;
  }

  div.table-responsive {
    overflow-x: hidden;
  }

  table tr td:nth-child(3) {
    padding-left: 3rem;
  }

  </style>
</head>

<!--end::Head-->

<!--begin::Body-->

<body id="kt_body"
  class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
  <?php 
  include("../../partials/_header-mobile.php"); 
?>

  <div class="d-flex flex-column flex-root">

    <div class="d-flex flex-row flex-column-fluid page">

      <?php include("../../partials/_aside.php"); ?>

      <!--begin::Wrapper-->
      <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">

        <?php include("../../partials/_header.php"); ?>

        <!--begin::Content-->
        <div class="content d-flex flex-column flex-column-fluid" id="kt_content">


          <!--Content area here-->

          <div class="container" id="dynamicContent">
            <div class="row">
              <div class="col-lg-12">
                <!--begin::Advance Table Widget 4-->
                <div class="card card-custom card-stretch gutter-b">
                  <!--begin::Header-->
                  <div class="card-header border-0 py-5">
                    <h3 class="card-title align-items-start flex-column">
                      <span class="card-label font-weight-bolder text-dark">Event Organizers</span>
                      <span class="text-muted mt-3 font-weight-bold font-size-sm">List of all registered organizers on
                        the website</span>
                    </h3>
                    <div class="card-toolbar">
                      <div class="btn-group">
                        <button type="button" class="btn btn-info  dropdown-toggle" data-toggle="dropdown"
                          aria-haspopup="true" aria-expanded="false">Sort by</button>
                        <div class="dropdown-menu">

                          <ul class="navi navi-accent navi-hover navi-bold">
                            <li class="navi-item">
                              <a class="navi-link" href="#">
                                <span class="navi-text font-size-lg">Name</span>
                              </a>
                            </li>
                            <li class="navi-item">
                              <a class="navi-link" href="#">
                                <span class="navi-text font-size-lg">Earnings</span>
                              </a>
                            </li>
                            <li class="navi-item">
                              <a class="navi-link" href="#">
                                <span class="navi-text font-size-lg">Events Organized</span>
                              </a>
                            </li>
                          </ul>

                        </div>
                      </div>
                    </div>
                  </div>
                  <!--end::Header-->
                  <!--begin::Body-->
                  <div class="card-body pt-0 pb-3">
                    <div class="tab-content">
                      <!--begin::Table-->
                      <div class="table-responsive">
                        <table class="table table-head-custom table-head-bg table-borderless table-vertical-center">
                          <thead>
                            <tr class="text-left text-uppercase">
                              <th style="min-width: 200px" class="pl-7">
                                Event Organizers
                              </th>
                              <th style="min-width: 100px">Earnings</th>
                              <th style="min-width: 80px; padding-left:2rem">Events Organized</th>
                              <th style="min-width: 100px">Rating</th>
                              <th style="min-width: 200px">Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td class="pl-0 py-8">
                                <div class="d-flex align-items-center">
                                  <div class="symbol symbol-50 symbol-light mr-4">
                                    <span class="symbol-label">
                                      <img src="assets/media/svg/avatars/001-boy.svg" class="h-75 align-self-end"
                                        alt="">
                                    </span>
                                  </div>
                                  <div>
                                    <a href="#"
                                      class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">Brad
                                      Simmons</a>
                                    <span class="text-muted font-weight-bold d-block">Location</span>
                                  </div>
                                </div>
                              </td>
                              <td>
                                <span class="text-dark-75 font-weight-bolder d-block font-size-lg">$8000</span>
                              </td>
                              <td>
                                <span class="text-dark-75 font-weight-bolder d-block font-size-lg">20</span>

                              </td>

                              <td>
                                <img src="assets/media/logos/stars.png" alt="image" style="width: 5.5rem">
                                <span class="text-muted font-weight-bold d-block font-size-sm">Best Rated</span>
                              </td>
                              <td class="pr-0 ">
                                <a href="pages/organizers/organizer_details.php"
                                  class="mr-8 btn btn-light-success font-weight-bolder font-size-sm">
                                  View
                                </a>
                                <a href="#" class="btn btn-danger font-weight-bolder font-size-sm">Remove</a>
                              </td>
                            </tr>
                            <tr>
                              <td class="pl-0 py-0">
                                <div class="d-flex align-items-center">
                                  <div class="symbol symbol-50 symbol-light mr-4">
                                    <span class="symbol-label">
                                      <img src="assets/media/svg/avatars/018-girl-9.svg" class="h-75 align-self-end"
                                        alt="">
                                    </span>
                                  </div>
                                  <div>
                                    <a href="#"
                                      class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">Jessie
                                      Clarcson</a>
                                    <span class="text-muted font-weight-bold d-block">Location</span>
                                  </div>
                                </div>
                              </td>
                              <td>
                                <span class="text-dark-75 font-weight-bolder d-block font-size-lg">$230</span>
                              </td>
                              <td>
                                <span class="text-dark-75 font-weight-bolder d-block font-size-lg">55</span>
                              </td>

                              <td>
                                <img src="assets/media/logos/stars.png" alt="image" style="width: 5.5rem">
                                <span class="text-muted font-weight-bold d-block font-size-sm">Above Avarage</span>
                              </td>
                              <td class="pr-0 ">
                                <a href="pages/organizers/organizer_details.php"
                                  class="mr-8 btn btn-light-success font-weight-bolder font-size-sm">
                                  View
                                </a>
                                <a href="#" class="btn btn-danger font-weight-bolder font-size-sm">Remove</a>
                              </td>
                            </tr>
                            <tr>
                              <td class="pl-0 py-8">
                                <div class="d-flex align-items-center">
                                  <div class="symbol symbol-50 symbol-light mr-4">
                                    <span class="symbol-label">
                                      <img src="assets/media/svg/avatars/047-girl-25.svg" class="h-75 align-self-end"
                                        alt="">
                                    </span>
                                  </div>
                                  <div>
                                    <a href="#"
                                      class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">Lebron
                                      Wayde</a>
                                    <span class="text-muted font-weight-bold d-block">Location</span>
                                  </div>
                                </div>
                              </td>
                              <td>
                                <span class="text-dark-75 font-weight-bolder d-block font-size-lg">$34,000</span>
                              </td>
                              <td>
                                <span class="text-dark-75 font-weight-bolder d-block font-size-lg">10</span>
                              </td>
                              <td>
                                <img src="assets/media/logos/stars.png" alt="image" style="width: 5.5rem">
                                <span class="text-muted font-weight-bold d-block font-size-sm">Best Rated</span>
                              </td>
                              <td class="pr-0 ">
                                <a href="pages/organizers/organizer_details.php"
                                  class="mr-8 btn btn-light-success font-weight-bolder font-size-sm">View
                                </a>
                                <a href="#" class="btn btn-danger font-weight-bolder font-size-sm">Remove</a>
                              </td>
                            </tr>
                            <tr>
                              <td class="pl-0 py-0">
                                <div class="d-flex align-items-center">
                                  <div class="symbol symbol-50 symbol-light mr-4">
                                    <span class="symbol-label">
                                      <img src="assets/media/svg/avatars/047-girl-25.svg" class="h-75 align-self-end"
                                        alt="">
                                    </span>
                                  </div>
                                  <div>
                                    <a href="#"
                                      class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">Natali
                                      Trump</a>
                                    <span class="text-muted font-weight-bold d-block">Location</span>
                                  </div>
                                </div>
                              </td>
                              <td class="text-left pr-0">
                                <span class="text-dark-75 font-weight-bolder d-block font-size-lg">$2000</span>
                              </td>
                              <td>
                                <span class="text-dark-75 font-weight-bolder d-block font-size-lg">14</span>
                              </td>
                              <td>
                                <img src="assets/media/logos/stars.png" style="width: 5.5rem" alt="">
                                <span class="text-muted font-weight-bold d-block font-size-sm">Avarage</span>
                              </td>
                              <td class="pr-0 ">
                                <a href="pages/organizers/organizer_details.php"
                                  class="mr-8 btn btn-light-success font-weight-bolder font-size-sm">
                                  View
                                </a>
                                <a href="#" class="btn btn-danger font-weight-bolder font-size-sm">Remove</a>
                              </td>
                            </tr>
                            <tr>
                              <td class="pl-0 py-8">
                                <div class="d-flex align-items-center">
                                  <div class="symbol symbol-50 symbol-light mr-4">
                                    <span class="symbol-label">
                                      <img src="assets/media/svg/avatars/001-boy.svg" class="h-75 align-self-end"
                                        alt="">
                                    </span>
                                  </div>
                                  <div>
                                    <a href="#"
                                      class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">Brad
                                      Simmons</a>
                                    <span class="text-muted font-weight-bold d-block">Location</span>
                                  </div>
                                </div>
                              </td>
                              <td>
                                <span class="text-dark-75 font-weight-bolder d-block font-size-lg">$8000</span>
                              </td>
                              <td>
                                <span class="text-dark-75 font-weight-bolder d-block font-size-lg">20</span>

                              </td>

                              <td>
                                <img src="assets/media/logos/stars.png" alt="image" style="width: 5.5rem">
                                <span class="text-muted font-weight-bold d-block font-size-sm">Best Rated</span>
                              </td>
                              <td class="pr-0 ">
                                <a href="pages/organizers/organizer_details.php"
                                  class="mr-8 btn btn-light-success font-weight-bolder font-size-sm">
                                  View
                                </a>
                                <a href="#" class="btn btn-danger font-weight-bolder font-size-sm">Remove</a>
                              </td>
                            </tr>
                            <tr>
                              <td class="pl-0 py-0">
                                <div class="d-flex align-items-center">
                                  <div class="symbol symbol-50 symbol-light mr-4">
                                    <span class="symbol-label">
                                      <img src="assets/media/svg/avatars/018-girl-9.svg" class="h-75 align-self-end"
                                        alt="">
                                    </span>
                                  </div>
                                  <div>
                                    <a href="#"
                                      class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">Jessie
                                      Clarcson</a>
                                    <span class="text-muted font-weight-bold d-block">Location</span>
                                  </div>
                                </div>
                              </td>
                              <td>
                                <span class="text-dark-75 font-weight-bolder d-block font-size-lg">$230</span>
                              </td>
                              <td>
                                <span class="text-dark-75 font-weight-bolder d-block font-size-lg">55</span>
                              </td>
                              <td>
                                <img src="assets/media/logos/stars.png" alt="image" style="width: 5.5rem">
                                <span class="text-muted font-weight-bold d-block font-size-sm">Above Avarage</span>
                              </td>
                              <td class="pr-0 ">
                                <a href="pages/organizers/organizer_details.php"
                                  class="mr-8 btn btn-light-success font-weight-bolder font-size-sm">
                                  View
                                </a>
                                <a href="#" class="btn btn-danger font-weight-bolder font-size-sm">Remove</a>
                              </td>
                            </tr>
                            <tr>
                              <td class="pl-0 py-8">
                                <div class="d-flex align-items-center">
                                  <div class="symbol symbol-50 symbol-light mr-4">
                                    <span class="symbol-label">
                                      <img src="assets/media/svg/avatars/047-girl-25.svg" class="h-75 align-self-end"
                                        alt="">
                                    </span>
                                  </div>
                                  <div>
                                    <a href="#"
                                      class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">Lebron
                                      Wayde</a>
                                    <span class="text-muted font-weight-bold d-block">Location</span>
                                  </div>
                                </div>
                              </td>
                              <td>
                                <span class="text-dark-75 font-weight-bolder d-block font-size-lg">$34,000</span>
                              </td>
                              <td>
                                <span class="text-dark-75 font-weight-bolder d-block font-size-lg">10</span>
                              </td>
                              <td>
                                <img src="assets/media/logos/stars.png" alt="image" style="width: 5.5rem">
                                <span class="text-muted font-weight-bold d-block font-size-sm">Best Rated</span>
                              </td>
                              <td class="pr-0 ">
                                <a href="pages/organizers/organizer_details.php"
                                  class="mr-8 btn btn-light-success font-weight-bolder font-size-sm">
                                  View
                                </a>
                                <a href="#" class="btn btn-danger font-weight-bolder font-size-sm">Remove</a>
                              </td>
                            </tr>
                            <tr>
                              <td class="pl-0 py-0">
                                <div class="d-flex align-items-center">
                                  <div class="symbol symbol-50 symbol-light mr-4">
                                    <span class="symbol-label">
                                      <img src="assets/media/svg/avatars/047-girl-25.svg" class="h-75 align-self-end"
                                        alt="">
                                    </span>
                                  </div>
                                  <div>
                                    <a href="#"
                                      class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">Natali
                                      Trump</a>
                                    <span class="text-muted font-weight-bold d-block">Location</span>
                                  </div>
                                </div>
                              </td>
                              <td class="text-left pr-0">
                                <span class="text-dark-75 font-weight-bolder d-block font-size-lg">$2000</span>
                              </td>
                              <td>
                                <span class="text-dark-75 font-weight-bolder d-block font-size-lg">14</span>
                              </td>
                              <td>
                                <img src="assets/media/logos/stars.png" style="width: 5.5rem" alt="">
                                <span class="text-muted font-weight-bold d-block font-size-sm">Avarage</span>
                              </td>
                              <td class="pr-0 ">
                                <a href="pages/organizers/organizer_details.php"
                                  class="mr-8 btn btn-light-success font-weight-bolder font-size-sm">
                                  View
                                </a>
                                <a href="#" class="btn btn-danger font-weight-bolder font-size-sm">Remove</a>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                      <!--end::Table-->
                    </div>
                  </div>
                  <!--end::Body-->
                </div>
                <!--end::Advance Table Widget 4-->
              </div>


            </div>
          </div>

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
  <script src="../../assets/js/myJs/dynamic_content.js"></script>


</body>

<!--end::Body-->

</html>
