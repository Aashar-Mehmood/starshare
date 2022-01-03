<?php
  include_once("../login_signup/check_session.php");
?>

<!DOCTYPE html>

<html lang="en">

<!--begin::Head-->

<head>
  <base href="../../">
  <meta charset="utf-8" />
  <title>Star Details</title>
  <?php
  include("../../partials/csslinks.php");
  ?>
  <link rel="stylesheet" href="assets/css/custom/responsive_nav.css">
  <style>
  @media screen and (max-width:360px) {
    ul.ml-8 {
      margin-left: 0rem !important;
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

            <ul class="nav nav-tabs nav-tabs-line nav-bold nav-tabs-line-2x d-flex align-items-center ml-8"
              style="border: none; font-size: 1.12rem;">
              <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#kt_tab_pane_1">Overview</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#kt_tab_pane_2">Songs</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#kt_tab_pane_3">Events Performed</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#kt_tab_pane_4">Transactions</a>
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
                  <span class="text-muted font-weight-bold font-size-base d-none d-md-inline mr-1">Hi,</span>
                  <span class="text-dark-50 font-weight-bolder font-size-base d-none d-md-inline mr-3">Sean</span>
                  <span class="symbol symbol-lg-35 symbol-25 symbol-light-success">
                    <span class="symbol-label font-size-h5 font-weight-bold">S</span>
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
            <div class="tab-pane fade show active " id="kt_tab_pane_1" role="tabpanel" aria-labelledby="kt_tab_pane_1">
              <div class="container">
                <div class="row">
                  <div class="col-lg-6 col-xl-4">
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
                              <a href="#"
                                class="card-title font-weight-bolder text-dark-75 text-hover-primary font-size-h4 m-0 pt-7 pb-1">Jerry
                                Kane</a>
                              <!--end::Username-->
                              <!--begin::Info-->
                              <div class="font-weight-bold text-dark-50 font-size-sm pb-6">star related info</div>
                              <!--end::Info-->
                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="pt-1">
                              <!--begin::Text-->
                              <p class="text-dark-75 font-weight-nirmal font-size-lg m-0 pb-7">Lorem ipsum dolor, sit
                                amet consectetur adipisicing elit. Est, laudantium.</p>
                              <!--end::Text-->
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
                                  <a href="#"
                                    class="text-dark-75 text-hover-primary mb-1 font-size-lg font-weight-bolder">
                                    Reviews
                                  </a>
                                </div>
                                <!--end::Text-->
                                <!--begin::label-->
                                <span
                                  class="font-weight-bolder label label-xl label-light-success label-inline px-3 py-5 min-w-45px">60</span>
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
                  <div class="col-lg-6 col-xl-4">
                    <div class="card card-custom bg-gray-100 card-stretch gutter-b">
                      <!--begin::Header-->
                      <div class="card-header border-0 bg-danger py-5">
                        <h2 class="font-weight-bolder text-dark">Total Songs</h2>
                      </div>
                      <!--end::Header-->
                      <!--begin::Body-->
                      <div class="card-body p-0 position-relative overflow-hidden">
                        <!--begin::Chart-->
                        <div class="card-rounded-bottom pt-10 pl-8"
                          style="height:100%; min-height:300px; background-color: #f64e6080;">
                          <h2>100</h2>
                          <h2>Songs uploaded</h2>
                        </div>
                        <!--end::Chart-->
                      </div>
                      <!--end::Body-->
                    </div>
                  </div>
                  <div class="col-lg-6 col-xl-4">
                    <div class="card card-custom bg-gray-100 card-stretch gutter-b">
                      <!--begin::Header-->
                      <div class="card-header border-0 bg-warning py-5">
                        <h2 class="font-weight-bolder text-dark">Events Attended</h2>
                      </div>
                      <!--end::Header-->
                      <!--begin::Body-->
                      <div class="card-body p-0 position-relative overflow-hidden">
                        <!--begin::Chart-->
                        <div class="card-rounded-bottom pt-10 pl-8"
                          style="height:100%; min-height:300px; background-color:#ffa80080">
                          <h2>300</h2>
                          <h2>Total Events Attended</h2>
                        </div>
                        <!--end::Chart-->
                      </div>
                      <!--end::Body-->
                    </div>
                  </div>
                  <div class="col-lg-6 col-xl-4">
                    <div class="card card-custom bg-gray-100 card-stretch gutter-b">
                      <!--begin::Header-->
                      <div class="card-header border-0 bg-success py-5">
                        <h2 class="font-weight-bolder text-dark">Last Month Earning</h2>
                      </div>
                      <!--end::Header-->
                      <!--begin::Body-->
                      <div class="card-body p-0 position-relative overflow-hidden">
                        <!--begin::Chart-->
                        <div class="card-rounded-bottom pt-10 pl-8"
                          style="height:100%; height:100%; min-height:300px; background-color: #1bc5bd80;">
                          <h2>1000$</h2>
                          <h2>Earned in Last month </h2>
                        </div>
                        <!--end::Chart-->
                      </div>
                      <!--end::Body-->
                    </div>
                  </div>
                  <div class="col-lg-6 col-xl-4">
                    <div class="card card-custom bg-gray-100 card-stretch gutter-b">
                      <!--begin::Header-->
                      <div class="card-header border-0 bg-primary py-5">
                        <h2 class="font-weight-bolder text-dark">Last Year Earning</h2>
                      </div>
                      <!--end::Header-->
                      <!--begin::Body-->
                      <div class="card-body p-0 position-relative overflow-hidden">
                        <!--begin::Chart-->
                        <div class="card-rounded-bottom pt-10 pl-8"
                          style="height: 100%; min-height:300px; background-color:#3699ff80 ">
                          <h2>1000$</h2>
                          <h2>Earned in Last year</h2>
                        </div>
                        <!--end::Chart-->
                      </div>
                      <!--end::Body-->
                    </div>
                  </div>
                  <div class="col-lg-6 col-xl-4">
                    <div class="card card-custom bg-gray-100 card-stretch gutter-b">
                      <!--begin::Header-->
                      <div class="card-header border-0 py-5" style="background-color: #3699ff;">
                        <h2 class="font-weight-bolder text-dark">Today Earning</h2>
                      </div>
                      <!--end::Header-->
                      <!--begin::Body-->
                      <div class="card-body p-0 position-relative overflow-hidden">
                        <!--begin::Chart-->
                        <div class="card-rounded-bottom pt-10 pl-8"
                          style="height: 100%; min-height:300px; background-color:#3699ff80 ">
                          <h2>100$</h2>
                          <h2>Earned today</h2>
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
              <div class="container">
                <h2 class="pl-8">Popular Songs</h2>
                <div class="row">
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
                                style="background-image: url(assets/media/stock-600x400/img-16.jpg)"></div>
                              <!--end::Image-->
                              <!--begin::Title-->
                              <a href="#"
                                class="card-title font-weight-bolder text-dark-75 text-hover-primary font-size-h4 m-0 pt-7 pb-1">
                                Song Title
                              </a>
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
                                  <a href="#"
                                    class="text-dark-75 text-hover-primary mb-1 font-size-lg font-weight-bolder">Duration</a>
                                </div>
                                <!--end::Text-->
                                <!--begin::label-->
                                <span
                                  class="font-weight-bolder label label-xl label-light-success label-inline px-3 py-5 min-w-45px">14</span>
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
                                  <a href="#"
                                    class="text-dark-75 text-hover-primary mb-1 font-size-lg font-weight-bolder">Number
                                    of downloads</a>
                                </div>
                                <!--end::Text-->
                                <!--begin::label-->
                                <span
                                  class="font-weight-bolder label label-xl label-light-danger label-inline px-3 py-5 min-w-45px">37</span>
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
                            <button class="btn btn-primary font-weight-bolder font-size-sm py-3 px-14">Play
                              Song
                            </button>
                          </div>
                          <!--end::Footer-->
                        </div>
                        <!--end::Wrapper-->
                      </div>
                      <!--end::Body-->
                    </div>
                  </div>
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
                                style="background-image: url(assets/media/stock-600x400/img-51.jpg)"></div>
                              <!--end::Image-->
                              <!--begin::Title-->
                              <a href="#"
                                class="card-title font-weight-bolder text-dark-75 text-hover-primary font-size-h4 m-0 pt-7 pb-1">
                                Song Title
                              </a>
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
                                  <a href="#"
                                    class="text-dark-75 text-hover-primary mb-1 font-size-lg font-weight-bolder">Duration</a>
                                </div>
                                <!--end::Text-->
                                <!--begin::label-->
                                <span
                                  class="font-weight-bolder label label-xl label-light-success label-inline px-3 py-5 min-w-45px">14</span>
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
                                  <a href="#"
                                    class="text-dark-75 text-hover-primary mb-1 font-size-lg font-weight-bolder">Number
                                    of downloads</a>
                                </div>
                                <!--end::Text-->
                                <!--begin::label-->
                                <span
                                  class="font-weight-bolder label label-xl label-light-danger label-inline px-3 py-5 min-w-45px">37</span>
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
                            <button class="btn btn-primary font-weight-bolder font-size-sm py-3 px-14">Play
                              Song
                            </button>
                          </div>
                          <!--end::Footer-->
                        </div>
                        <!--end::Wrapper-->
                      </div>
                      <!--end::Body-->
                    </div>
                  </div>
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
                                style="background-image: url(assets/media/stock-600x400/img-52.jpg)"></div>
                              <!--end::Image-->
                              <!--begin::Title-->
                              <a href="#"
                                class="card-title font-weight-bolder text-dark-75 text-hover-primary font-size-h4 m-0 pt-7 pb-1">
                                Song Title
                              </a>
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
                                  <a href="#"
                                    class="text-dark-75 text-hover-primary mb-1 font-size-lg font-weight-bolder">Duration</a>
                                </div>
                                <!--end::Text-->
                                <!--begin::label-->
                                <span
                                  class="font-weight-bolder label label-xl label-light-success label-inline px-3 py-5 min-w-45px">14</span>
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
                                  <a href="#"
                                    class="text-dark-75 text-hover-primary mb-1 font-size-lg font-weight-bolder">Number
                                    of downloads</a>
                                </div>
                                <!--end::Text-->
                                <!--begin::label-->
                                <span
                                  class="font-weight-bolder label label-xl label-light-danger label-inline px-3 py-5 min-w-45px">37</span>
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
                            <button class="btn btn-primary font-weight-bolder font-size-sm py-3 px-14">Play
                              Song
                            </button>
                          </div>
                          <!--end::Footer-->
                        </div>
                        <!--end::Wrapper-->
                      </div>
                      <!--end::Body-->
                    </div>
                  </div>
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
                                style="background-image: url(assets/media/stock-600x400/img-72.jpg)"></div>
                              <!--end::Image-->
                              <!--begin::Title-->
                              <a href="#"
                                class="card-title font-weight-bolder text-dark-75 text-hover-primary font-size-h4 m-0 pt-7 pb-1">
                                Song Title
                              </a>
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
                                  <a href="#"
                                    class="text-dark-75 text-hover-primary mb-1 font-size-lg font-weight-bolder">Duration</a>
                                </div>
                                <!--end::Text-->
                                <!--begin::label-->
                                <span
                                  class="font-weight-bolder label label-xl label-light-success label-inline px-3 py-5 min-w-45px">14</span>
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
                                  <a href="#"
                                    class="text-dark-75 text-hover-primary mb-1 font-size-lg font-weight-bolder">Number
                                    of downloads</a>
                                </div>
                                <!--end::Text-->
                                <!--begin::label-->
                                <span
                                  class="font-weight-bolder label label-xl label-light-danger label-inline px-3 py-5 min-w-45px">37</span>
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
                            <button class="btn btn-primary font-weight-bolder font-size-sm py-3 px-14">Play
                              Song
                            </button>
                          </div>
                          <!--end::Footer-->
                        </div>
                        <!--end::Wrapper-->
                      </div>
                      <!--end::Body-->
                    </div>
                  </div>
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
                                style="background-image: url(assets/media/stock-600x400/img-39.jpg)"></div>
                              <!--end::Image-->
                              <!--begin::Title-->
                              <a href="#"
                                class="card-title font-weight-bolder text-dark-75 text-hover-primary font-size-h4 m-0 pt-7 pb-1">
                                Song Title
                              </a>
                              <!--end::Title-->

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
                                  <a href="#"
                                    class="text-dark-75 text-hover-primary mb-1 font-size-lg font-weight-bolder">Duration</a>
                                </div>
                                <!--end::Text-->
                                <!--begin::label-->
                                <span
                                  class="font-weight-bolder label label-xl label-light-success label-inline px-3 py-5 min-w-45px">14</span>
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
                                  <a href="#"
                                    class="text-dark-75 text-hover-primary mb-1 font-size-lg font-weight-bolder">Number
                                    of downloads</a>
                                </div>
                                <!--end::Text-->
                                <!--begin::label-->
                                <span
                                  class="font-weight-bolder label label-xl label-light-danger label-inline px-3 py-5 min-w-45px">37</span>
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
                            <button class="btn btn-primary font-weight-bolder font-size-sm py-3 px-14">Play
                              Song
                            </button>
                          </div>
                          <!--end::Footer-->
                        </div>
                        <!--end::Wrapper-->
                      </div>
                      <!--end::Body-->
                    </div>
                  </div>
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
                                style="background-image: url(assets/media/stock-600x400/img-72.jpg)"></div>
                              <!--end::Image-->
                              <!--begin::Title-->
                              <a href="#"
                                class="card-title font-weight-bolder text-dark-75 text-hover-primary font-size-h4 m-0 pt-7 pb-1">
                                Song Title
                              </a>
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
                                  <a href="#"
                                    class="text-dark-75 text-hover-primary mb-1 font-size-lg font-weight-bolder">Duration</a>
                                </div>
                                <!--end::Text-->
                                <!--begin::label-->
                                <span
                                  class="font-weight-bolder label label-xl label-light-success label-inline px-3 py-5 min-w-45px">14</span>
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
                                  <a href="#"
                                    class="text-dark-75 text-hover-primary mb-1 font-size-lg font-weight-bolder">Number
                                    of downloads</a>
                                </div>
                                <!--end::Text-->
                                <!--begin::label-->
                                <span
                                  class="font-weight-bolder label label-xl label-light-danger label-inline px-3 py-5 min-w-45px">37</span>
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
                            <button class="btn btn-primary font-weight-bolder font-size-sm py-3 px-14">Play
                              Song
                            </button>
                          </div>
                          <!--end::Footer-->
                        </div>
                        <!--end::Wrapper-->
                      </div>
                      <!--end::Body-->
                    </div>
                  </div>
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
                                style="background-image: url(assets/media/stock-600x400/img-16.jpg)"></div>
                              <!--end::Image-->
                              <!--begin::Title-->
                              <a href="#"
                                class="card-title font-weight-bolder text-dark-75 text-hover-primary font-size-h4 m-0 pt-7 pb-1">
                                Song Title
                              </a>
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
                                  <a href="#"
                                    class="text-dark-75 text-hover-primary mb-1 font-size-lg font-weight-bolder">Duration</a>
                                </div>
                                <!--end::Text-->
                                <!--begin::label-->
                                <span
                                  class="font-weight-bolder label label-xl label-light-success label-inline px-3 py-5 min-w-45px">14</span>
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
                                  <a href="#"
                                    class="text-dark-75 text-hover-primary mb-1 font-size-lg font-weight-bolder">Number
                                    of downloads</a>
                                </div>
                                <!--end::Text-->
                                <!--begin::label-->
                                <span
                                  class="font-weight-bolder label label-xl label-light-danger label-inline px-3 py-5 min-w-45px">37</span>
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
                            <button class="btn btn-primary font-weight-bolder font-size-sm py-3 px-14">Play
                              Song
                            </button>
                          </div>
                          <!--end::Footer-->
                        </div>
                        <!--end::Wrapper-->
                      </div>
                      <!--end::Body-->
                    </div>
                  </div>
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
                                style="background-image: url(assets/media/stock-600x400/img-51.jpg)"></div>
                              <!--end::Image-->
                              <!--begin::Title-->
                              <a href="#"
                                class="card-title font-weight-bolder text-dark-75 text-hover-primary font-size-h4 m-0 pt-7 pb-1">
                                Song Title
                              </a>
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
                                  <a href="#"
                                    class="text-dark-75 text-hover-primary mb-1 font-size-lg font-weight-bolder">Duration</a>
                                </div>
                                <!--end::Text-->
                                <!--begin::label-->
                                <span
                                  class="font-weight-bolder label label-xl label-light-success label-inline px-3 py-5 min-w-45px">14</span>
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
                                  <a href="#"
                                    class="text-dark-75 text-hover-primary mb-1 font-size-lg font-weight-bolder">Number
                                    of downloads</a>
                                </div>
                                <!--end::Text-->
                                <!--begin::label-->
                                <span
                                  class="font-weight-bolder label label-xl label-light-danger label-inline px-3 py-5 min-w-45px">37</span>
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
                            <button class="btn btn-primary font-weight-bolder font-size-sm py-3 px-14">Play
                              Song
                            </button>
                          </div>
                          <!--end::Footer-->
                        </div>
                        <!--end::Wrapper-->
                      </div>
                      <!--end::Body-->
                    </div>
                  </div>
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
                                style="background-image: url(assets/media/stock-600x400/img-52.jpg)"></div>
                              <!--end::Image-->
                              <!--begin::Title-->
                              <a href="#"
                                class="card-title font-weight-bolder text-dark-75 text-hover-primary font-size-h4 m-0 pt-7 pb-1">
                                Song Title
                              </a>
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
                                  <a href="#"
                                    class="text-dark-75 text-hover-primary mb-1 font-size-lg font-weight-bolder">Duration</a>
                                </div>
                                <!--end::Text-->
                                <!--begin::label-->
                                <span
                                  class="font-weight-bolder label label-xl label-light-success label-inline px-3 py-5 min-w-45px">14</span>
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
                                  <a href="#"
                                    class="text-dark-75 text-hover-primary mb-1 font-size-lg font-weight-bolder">Number
                                    of downloads</a>
                                </div>
                                <!--end::Text-->
                                <!--begin::label-->
                                <span
                                  class="font-weight-bolder label label-xl label-light-danger label-inline px-3 py-5 min-w-45px">37</span>
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
                            <button class="btn btn-primary font-weight-bolder font-size-sm py-3 px-14">Play
                              Song
                            </button>
                          </div>
                          <!--end::Footer-->
                        </div>
                        <!--end::Wrapper-->
                      </div>
                      <!--end::Body-->
                    </div>
                  </div>
                </div>
              </div>
              <div class="d-flex justify-content-center align-items-center flex-wrap mt-12">
                <div class="d-flex flex-wrap py-2 px-6 justify-content-center"
                  style="background-color: white; border-radius: 10px; width:60%;">

                  <a href="#" class="btn btn-icon btn-sm border-0 btn-hover-primary active mr-2 my-1">1</a>
                  <a href="#" class="btn btn-icon btn-sm border-0 btn-hover-primary  mr-2 my-1">2</a>
                  <a href="#" class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1">3</a>
                  <a href="#" class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1">4</a>
                  <a href="#" class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1">5</a>
                  <a href="#" class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1">6</a>
                  <a href="#" class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1">...</a>
                  <a href="#" class="btn btn-icon btn-sm btn-light-primary mr-2 my-1"><i
                      class="ki ki-bold-arrow-next icon-xs"></i></a>
                </div>
              </div>

            </div>
            <div class="tab-pane fade" id="kt_tab_pane_3" role="tabpanel" aria-labelledby="kt_tab_pane_3">
              <div class="container">
                <h2 class="text-dark pl-md-8">Events History</h2>
                <div class="row">
                  <div class="col-lg-6 col-xl-4">
                    <div class="card card-custom bg-gray-100 card-stretch gutter-b">

                      <!--begin::Header-->
                      <div class="card-header border-0 bg-warning py-5">
                        <h2 class="font-weight-bolder text-dark">Total Events Performed</h2>
                      </div>

                      <!--end::Header-->

                      <!--begin::Body-->
                      <div class="card-body p-0 position-relative overflow-hidden">

                        <!--begin::Chart-->
                        <div class="card-rounded-bottom pt-10 px-8"
                          style="min-height:300px; background-color:#ffa80080">
                          <h2>300</h2>
                          <h2>Total Events Performed</h2>
                        </div>

                        <!--end::Chart-->

                      </div>

                      <!--end::Body-->
                    </div>
                  </div>
                  <div class="col-lg-6 col-xl-4">
                    <div class="card card-custom bg-gray-100 card-stretch gutter-b">

                      <!--begin::Header-->
                      <div class="card-header border-0 bg-success py-5">
                        <h2 class="font-weight-bolder text-dark">Last Month</h2>

                      </div>

                      <!--end::Header-->

                      <!--begin::Body-->
                      <div class="card-body p-0 position-relative overflow-hidden">

                        <!--begin::Chart-->
                        <div class="card-rounded-bottom pt-10 px-8"
                          style="height:100%; min-height:300px; background-color: #1bc5bd80;">
                          <h2>10</h2>
                          <h2>Events Peformed last month</h2>
                        </div>

                        <!--end::Chart-->

                      </div>

                      <!--end::Body-->
                    </div>
                  </div>
                  <div class="col-lg-6 col-xl-4">
                    <div class="card card-custom bg-gray-100 card-stretch gutter-b">

                      <!--begin::Header-->
                      <div class="card-header border-0 bg-primary py-5">
                        <h2 class="font-weight-bolder text-dark">Last Year</h2>

                      </div>

                      <!--end::Header-->

                      <!--begin::Body-->
                      <div class="card-body p-0 position-relative overflow-hidden">

                        <!--begin::Chart-->
                        <div class="card-rounded-bottom pt-10 px-8"
                          style="height: 100%; min-height:300px; background-color:#3699ff80 ">
                          <h2>100</h2>
                          <h2>Events perfomed in last year</h2>
                        </div>

                        <!--end::Chart-->
                      </div>

                      <!--end::Body-->
                    </div>
                  </div>
                </div>
                <h2 class="text-dark pl-md-8 mt-16">Upcoming Events</h2>
                <div class="row">
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
                                style="background-image: url(assets/media/stock-600x400/img-16.jpg)"></div>
                              <!--end::Image-->
                              <!--begin::Title-->
                              <a href="#"
                                class="card-title font-weight-bolder text-center text-dark-75 font-size-h4 m-0 py-6">
                                Event Title </br> By : Organizer Name
                              </a>
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
                                  <a href="#"
                                    class="text-dark-75 text-hover-primary mb-1 font-size-lg font-weight-bolder">Total
                                    Seats</a>

                                </div>
                                <!--end::Text-->
                                <!--begin::label-->
                                <span
                                  class="font-weight-bolder label label-xl label-light-success label-inline px-3 py-5 min-w-45px">34</span>
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
                                  <a href="#"
                                    class="text-dark-75 text-hover-primary mb-1 font-size-lg font-weight-bolder">Reserved
                                    Seats</a>

                                </div>
                                <!--end::Text-->
                                <!--begin::label-->
                                <span
                                  class="font-weight-bolder label label-xl label-light-danger label-inline px-3 py-5 min-w-45px">14</span>
                                <!--end::label-->
                              </div>
                              <!--end::Item-->
                              <!--begin::Item-->
                              <div class="d-flex align-items-center pb-9">
                                <!--begin::Symbol-->
                                <div class="symbol symbol-45 symbol-light mr-4">
                                  <span class="symbol-label">
                                    <span class="svg-icon svg-icon-2x svg-icon-dark-50">
                                      <!--begin::Svg Icon | path:assets/media/svg/icons/Home/Globe.svg-->
                                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                          <rect x="0" y="0" width="24" height="24"></rect>
                                          <path
                                            d="M13,18.9450712 L13,20 L14,20 C15.1045695,20 16,20.8954305 16,22 L8,22 C8,20.8954305 8.8954305,20 10,20 L11,20 L11,18.9448245 C9.02872877,18.7261967 7.20827378,17.866394 5.79372555,16.5182701 L4.73856106,17.6741866 C4.36621808,18.0820826 3.73370941,18.110904 3.32581341,17.7385611 C2.9179174,17.3662181 2.88909597,16.7337094 3.26143894,16.3258134 L5.04940685,14.367122 C5.46150313,13.9156769 6.17860937,13.9363085 6.56406875,14.4106998 C7.88623094,16.037907 9.86320756,17 12,17 C15.8659932,17 19,13.8659932 19,10 C19,7.73468744 17.9175842,5.65198725 16.1214335,4.34123851 C15.6753081,4.01567657 15.5775721,3.39010038 15.903134,2.94397499 C16.228696,2.49784959 16.8542722,2.4001136 17.3003976,2.72567554 C19.6071362,4.40902808 21,7.08906798 21,10 C21,14.6325537 17.4999505,18.4476269 13,18.9450712 Z"
                                            fill="#000000" fill-rule="nonzero"></path>
                                          <circle fill="#000000" opacity="0.3" cx="12" cy="10" r="6"></circle>
                                        </g>
                                      </svg>
                                      <!--end::Svg Icon-->
                                    </span>
                                  </span>
                                </div>
                                <!--end::Symbol-->
                                <!--begin::Text-->
                                <div class="d-flex flex-column flex-grow-1">
                                  <a href="#"
                                    class="text-dark-75 text-hover-primary mb-1 font-size-lg font-weight-bolder">Seats
                                    Available</a>

                                </div>
                                <!--end::Text-->
                                <!--begin::label-->
                                <span
                                  class="font-weight-bolder label label-xl label-light-primary label-inline py-5 min-w-45px">20</span>
                                <!--end::label-->
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
                  </div>
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
                                style="background-image: url(assets/media/stock-600x400/img-51.jpg)"></div>
                              <!--end::Image-->
                              <!--begin::Title-->
                              <a href="#"
                                class="card-title font-weight-bolder text-center text-dark-75 font-size-h4 m-0 py-6">
                                Event Title </br> By : Organizer Name
                              </a>
                              <!--end::Title-->

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
                                  <a href="#"
                                    class="text-dark-75 text-hover-primary mb-1 font-size-lg font-weight-bolder">Total
                                    Seats</a>

                                </div>
                                <!--end::Text-->
                                <!--begin::label-->
                                <span
                                  class="font-weight-bolder label label-xl label-light-success label-inline px-3 py-5 min-w-45px">34</span>
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
                                  <a href="#"
                                    class="text-dark-75 text-hover-primary mb-1 font-size-lg font-weight-bolder">Reserved
                                    Seats</a>

                                </div>
                                <!--end::Text-->
                                <!--begin::label-->
                                <span
                                  class="font-weight-bolder label label-xl label-light-danger label-inline px-3 py-5 min-w-45px">14</span>
                                <!--end::label-->
                              </div>
                              <!--end::Item-->
                              <!--begin::Item-->
                              <div class="d-flex align-items-center pb-9">
                                <!--begin::Symbol-->
                                <div class="symbol symbol-45 symbol-light mr-4">
                                  <span class="symbol-label">
                                    <span class="svg-icon svg-icon-2x svg-icon-dark-50">
                                      <!--begin::Svg Icon | path:assets/media/svg/icons/Home/Globe.svg-->
                                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                          <rect x="0" y="0" width="24" height="24"></rect>
                                          <path
                                            d="M13,18.9450712 L13,20 L14,20 C15.1045695,20 16,20.8954305 16,22 L8,22 C8,20.8954305 8.8954305,20 10,20 L11,20 L11,18.9448245 C9.02872877,18.7261967 7.20827378,17.866394 5.79372555,16.5182701 L4.73856106,17.6741866 C4.36621808,18.0820826 3.73370941,18.110904 3.32581341,17.7385611 C2.9179174,17.3662181 2.88909597,16.7337094 3.26143894,16.3258134 L5.04940685,14.367122 C5.46150313,13.9156769 6.17860937,13.9363085 6.56406875,14.4106998 C7.88623094,16.037907 9.86320756,17 12,17 C15.8659932,17 19,13.8659932 19,10 C19,7.73468744 17.9175842,5.65198725 16.1214335,4.34123851 C15.6753081,4.01567657 15.5775721,3.39010038 15.903134,2.94397499 C16.228696,2.49784959 16.8542722,2.4001136 17.3003976,2.72567554 C19.6071362,4.40902808 21,7.08906798 21,10 C21,14.6325537 17.4999505,18.4476269 13,18.9450712 Z"
                                            fill="#000000" fill-rule="nonzero"></path>
                                          <circle fill="#000000" opacity="0.3" cx="12" cy="10" r="6"></circle>
                                        </g>
                                      </svg>
                                      <!--end::Svg Icon-->
                                    </span>
                                  </span>
                                </div>
                                <!--end::Symbol-->
                                <!--begin::Text-->
                                <div class="d-flex flex-column flex-grow-1">
                                  <a href="#"
                                    class="text-dark-75 text-hover-primary mb-1 font-size-lg font-weight-bolder">Seats
                                    Available</a>
                                </div>
                                <!--end::Text-->
                                <!--begin::label-->
                                <span
                                  class="font-weight-bolder label label-xl label-light-primary label-inline py-5 min-w-45px">20</span>
                                <!--end::label-->
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
                  </div>
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
                                style="background-image: url(assets/media/stock-600x400/img-52.jpg)"></div>
                              <!--end::Image-->
                              <!--begin::Title-->
                              <a href="#"
                                class="card-title text-center font-weight-bolder text-dark-75 font-size-h4 m-0 py-6">
                                Event Title </br> By : Organizer Name
                              </a>
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
                                  <a href="#"
                                    class="text-dark-75 text-hover-primary mb-1 font-size-lg font-weight-bolder">Total
                                    Seats</a>

                                </div>
                                <!--end::Text-->
                                <!--begin::label-->
                                <span
                                  class="font-weight-bolder label label-xl label-light-success label-inline px-3 py-5 min-w-45px">34</span>
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
                                  <a href="#"
                                    class="text-dark-75 text-hover-primary mb-1 font-size-lg font-weight-bolder">Reserved
                                    Seats</a>

                                </div>
                                <!--end::Text-->
                                <!--begin::label-->
                                <span
                                  class="font-weight-bolder label label-xl label-light-danger label-inline px-3 py-5 min-w-45px">14</span>
                                <!--end::label-->
                              </div>
                              <!--end::Item-->
                              <!--begin::Item-->
                              <div class="d-flex align-items-center pb-9">
                                <!--begin::Symbol-->
                                <div class="symbol symbol-45 symbol-light mr-4">
                                  <span class="symbol-label">
                                    <span class="svg-icon svg-icon-2x svg-icon-dark-50">
                                      <!--begin::Svg Icon | path:assets/media/svg/icons/Home/Globe.svg-->
                                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                          <rect x="0" y="0" width="24" height="24"></rect>
                                          <path
                                            d="M13,18.9450712 L13,20 L14,20 C15.1045695,20 16,20.8954305 16,22 L8,22 C8,20.8954305 8.8954305,20 10,20 L11,20 L11,18.9448245 C9.02872877,18.7261967 7.20827378,17.866394 5.79372555,16.5182701 L4.73856106,17.6741866 C4.36621808,18.0820826 3.73370941,18.110904 3.32581341,17.7385611 C2.9179174,17.3662181 2.88909597,16.7337094 3.26143894,16.3258134 L5.04940685,14.367122 C5.46150313,13.9156769 6.17860937,13.9363085 6.56406875,14.4106998 C7.88623094,16.037907 9.86320756,17 12,17 C15.8659932,17 19,13.8659932 19,10 C19,7.73468744 17.9175842,5.65198725 16.1214335,4.34123851 C15.6753081,4.01567657 15.5775721,3.39010038 15.903134,2.94397499 C16.228696,2.49784959 16.8542722,2.4001136 17.3003976,2.72567554 C19.6071362,4.40902808 21,7.08906798 21,10 C21,14.6325537 17.4999505,18.4476269 13,18.9450712 Z"
                                            fill="#000000" fill-rule="nonzero"></path>
                                          <circle fill="#000000" opacity="0.3" cx="12" cy="10" r="6"></circle>
                                        </g>
                                      </svg>
                                      <!--end::Svg Icon-->
                                    </span>
                                  </span>
                                </div>
                                <!--end::Symbol-->
                                <!--begin::Text-->
                                <div class="d-flex flex-column flex-grow-1">
                                  <a href="#"
                                    class="text-dark-75 text-hover-primary mb-1 font-size-lg font-weight-bolder">Seats
                                    Available</a>

                                </div>
                                <!--end::Text-->
                                <!--begin::label-->
                                <span
                                  class="font-weight-bolder label label-xl label-light-primary label-inline py-5 min-w-45px">20</span>
                                <!--end::label-->
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
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="kt_tab_pane_4" role="tabpanel" aria-labelledby="kt_tab_pane_4">
              <div class="container">
                <div class="col-lg-10 col-xl-8 px-md-10 pt-md-8">
                  <div class="card card-custom card-stretch gutter-b w-md-75">
                    <!--begin::Header-->
                    <div class="card-header border-0 pt-5">
                      <h3 class="card-title align-items-start flex-column">
                        <span class="card-label font-weight-bolder text-dark">Transaction Details</span>
                      </h3>
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body pt-2 mt-3">
                      <!--begin::Table-->
                      <div class="table-responsive table-bordered table-hover">
                        <table class="table table-vertical-center mb-0">
                          <thead class="bg-primary text-dark">
                            <tr>
                              <th class=" min-w-100px">Paid By</th>
                              <th class=" min-w-100px">Amount</th>
                              <th class=" min-w-100px">Date</th>
                              <th class=" min-w-100px">Transaction Id</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>
                                <a href="#" class="text-dark  text-hover-primary mb-1 font-size-lg">Brad
                                  Simmons</a>
                              </td>
                              <td>
                                <span class="text-dark-75  d-block font-size-lg">$2,000</span>
                              </td>
                              <td>
                                <span class="">
                                  <date>12-oct-2021</date>
                                </span>
                              </td>
                              <td>
                                <span class="">
                                  112233556
                                </span>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <a href="#" class="text-dark  text-hover-primary mb-1 font-size-lg">
                                  Dany Jons
                                </a>
                              </td>
                              <td>
                                <span class="text-dark-75  d-block font-size-lg">$1,000</span>
                              </td>
                              <td>
                                <span class="">
                                  <date>19-Sep-2021</date>
                                </span>
                              </td>
                              <td>
                                <span class="">
                                  110043533
                                </span>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <a href="#" class="text-dark  text-hover-primary mb-1 font-size-lg">
                                  John Doe
                                </a>
                              </td>
                              <td>
                                <span class="text-dark-75  d-block font-size-lg">$1,200</span>
                              </td>
                              <td>
                                <span class="">
                                  <date>2-Jan-2020</date>
                                </span>
                              </td>
                              <td>
                                <span class="">
                                  005856556
                                </span>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <a href="#" class="text-dark  text-hover-primary mb-1 font-size-lg">Brad
                                  Simmons</a>
                              </td>
                              <td>
                                <span class="text-dark-75  d-block font-size-lg">$2,000</span>
                              </td>
                              <td>
                                <span class="">
                                  <date>12-oct-2021</date>
                                </span>
                              </td>
                              <td>
                                <span class="">
                                  112233556
                                </span>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <a href="#" class="text-dark  text-hover-primary mb-1 font-size-lg">
                                  Dany Jons
                                </a>
                              </td>
                              <td>
                                <span class="text-dark-75  d-block font-size-lg">$1,000</span>
                              </td>
                              <td>
                                <span class="">
                                  <date>19-Sep-2021</date>
                                </span>
                              </td>
                              <td>
                                <span class="">
                                  110043533
                                </span>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <a href="#" class="text-dark  text-hover-primary mb-1 font-size-lg">
                                  John Doe
                                </a>
                              </td>
                              <td>
                                <span class="text-dark-75  d-block font-size-lg">$1,200</span>
                              </td>
                              <td>
                                <span class="">
                                  <date>2-Jan-2020</date>
                                </span>
                              </td>
                              <td>
                                <span class="">
                                  005856556
                                </span>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                        <!--end::Table-->
                      </div>
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
