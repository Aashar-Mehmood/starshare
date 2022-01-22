<?php
  include_once("../login_signup/check_session.php");
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
                <a class="nav-link active" data-toggle="tab" href="#kt_tab_pane_1">Overview</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#kt_tab_pane_2">Events</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#kt_tab_pane_3">Transactions</a>
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
                  <div class="col-md-6 col-xl-4">
                    <div class="card card-custom bg-gray-100 card-stretch-half gutter-b">
                      <!--begin::Header-->
                      <div class="card-header border-0 py-5" style="background-color: #24bd76;">
                        <h2 class="font-weight-bolder text-dark">Total Events</h2>
                      </div>
                      <!--end::Header-->
                      <!--begin::Body-->
                      <div class="card-body p-0 position-relative overflow-hidden">
                        <!--begin::Chart-->
                        <div class="card-rounded-bottom pt-10 pl-8" style="background-color: #24bd7680;">
                          <h2>100</h2>
                          <h2>Events Organized</h2>
                        </div>
                        <!--end::Chart-->
                      </div>
                      <!--end::Body-->
                    </div>
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
                          <h2>30 Suppliers</h2>
                        </div>
                        <!--end::Chart-->
                      </div>
                      <!--end::Body-->
                    </div>
                  </div>

                  <div class="col-md-6 col-xl-4">
                    <div class="card card-custom bg-gray-100 card-stretch-half gutter-b">
                      <!--begin::Header-->
                      <div class="card-header border-0 bg-success py-5">
                        <h2 class="font-weight-bolder text-dark">Today Earning</h2>
                      </div>

                      <div class="card-body p-0 position-relative overflow-hidden">
                        <!--begin::Chart-->
                        <div class="card-rounded-bottom pt-10 pl-8" style="background-color: #1bc5bd80;">
                          <h2>600$</h2>
                        </div>
                        <!--end::Chart-->
                      </div>
                    </div>
                    <div class="card card-custom bg-gray-100 card-stretch-half gutter-b">
                      <!--begin::Header-->
                      <div class="card-header border-0 bg-primary py-5">
                        <h2 class="font-weight-bolder text-dark">Last Month Earning</h2>
                      </div>
                      <!--end::Header-->
                      <!--begin::Body-->
                      <div class="card-body p-0 position-relative overflow-hidden">
                        <!--begin::Chart-->
                        <div class="card-rounded-bottom pt-10 pl-8" style="background-color:#3699ff80 ">
                          <h2>1000$</h2>
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
                        <h2 class="font-weight-bolder text-dark">Today Earning</h2>
                      </div>
                      <!--end::Header-->
                      <!--begin::Body-->
                      <div class="card-body p-0 position-relative overflow-hidden">
                        <!--begin::Chart-->
                        <div class="card-rounded-bottom pt-10 pl-8" style="background-color:#e52a6f80; ">
                          <h2>100$</h2>
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
                                Event Title
                              </a>
                              <!--end::Title-->
                              <!--begin::Text-->
                              <div class="font-weight-bold text-dark-50 text-center pb-7">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id rerum suscipit non
                                  molestias? Voluptas alias dolorem, maxime sapiente sed aperiam</p>
                              </div>
                              <!--end::Text-->
                            </div>
                            <!--end::Header-->

                          </div>
                          <!--eng::Container-->
                          <!--begin::Footer-->
                          <div class="d-flex flex-center">
                            <button class="btn btn-primary font-weight-bolder font-size-sm py-3 px-14">
                              View Event
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
                                Event Title
                              </a>
                              <!--end::Title-->
                              <!--begin::Text-->
                              <div class="font-weight-bold text-dark-50 text-center pb-7">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id rerum suscipit non
                                  molestias? Voluptas alias dolorem, maxime sapiente sed aperiam</p>
                              </div>
                              <!--end::Text-->
                            </div>
                            <!--end::Header-->

                          </div>
                          <!--eng::Container-->
                          <!--begin::Footer-->
                          <div class="d-flex flex-center">
                            <button class="btn btn-primary font-weight-bolder font-size-sm py-3 px-14">
                              View Event
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
                                Event Title
                              </a>
                              <!--end::Title-->
                              <!--begin::Text-->
                              <div class="font-weight-bold text-dark-50 text-center pb-7">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id rerum suscipit non
                                  molestias? Voluptas alias dolorem, maxime sapiente sed aperiam</p>
                              </div>
                              <!--end::Text-->
                            </div>
                            <!--end::Header-->

                          </div>
                          <!--eng::Container-->
                          <!--begin::Footer-->
                          <div class="d-flex flex-center">
                            <button class="btn btn-primary font-weight-bolder font-size-sm py-3 px-14">
                              View Event
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
                                Event Title
                              </a>
                              <!--end::Title-->
                              <!--begin::Text-->
                              <div class="font-weight-bold text-dark-50 text-center pb-7">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id rerum suscipit non
                                  molestias? Voluptas alias dolorem, maxime sapiente sed aperiam</p>
                              </div>
                              <!--end::Text-->
                            </div>
                            <!--end::Header-->

                          </div>
                          <!--eng::Container-->
                          <!--begin::Footer-->
                          <div class="d-flex flex-center">
                            <button class="btn btn-primary font-weight-bolder font-size-sm py-3 px-14">
                              View Event
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
                                Event Title
                              </a>
                              <!--end::Title-->
                              <!--begin::Text-->
                              <div class="font-weight-bold text-dark-50 text-center pb-7">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id rerum suscipit non
                                  molestias? Voluptas alias dolorem, maxime sapiente sed aperiam</p>
                              </div>
                              <!--end::Text-->
                            </div>
                            <!--end::Header-->

                          </div>
                          <!--eng::Container-->
                          <!--begin::Footer-->
                          <div class="d-flex flex-center">
                            <button class="btn btn-primary font-weight-bolder font-size-sm py-3 px-14">
                              View Event
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
                                Event Title
                              </a>
                              <!--end::Title-->
                              <!--begin::Text-->
                              <div class="font-weight-bold text-dark-50 text-center pb-7">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id rerum suscipit non
                                  molestias? Voluptas alias dolorem, maxime sapiente sed aperiam</p>
                              </div>
                              <!--end::Text-->
                            </div>
                            <!--end::Header-->

                          </div>
                          <!--eng::Container-->
                          <!--begin::Footer-->

                          <div class="d-flex flex-center">
                            <button class="btn btn-primary font-weight-bolder font-size-sm py-3 px-14">
                              View Event
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
                                Event Title
                              </a>
                              <!--end::Title-->
                              <!--begin::Text-->
                              <div class="font-weight-bold text-dark-50 text-center pb-7">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id rerum suscipit non
                                  molestias? Voluptas alias dolorem, maxime sapiente sed aperiam</p>
                              </div>
                              <!--end::Text-->
                            </div>
                            <!--end::Header-->

                          </div>
                          <!--eng::Container-->
                          <!--begin::Footer-->
                          <div class="d-flex flex-center">
                            <button class="btn btn-primary font-weight-bolder font-size-sm py-3 px-14">View
                              Events</button>
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
                                Event Title
                              </a>
                              <!--end::Title-->
                              <!--begin::Text-->
                              <div class="font-weight-bold text-dark-50 text-center pb-7">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id rerum suscipit non
                                  molestias? Voluptas alias dolorem, maxime sapiente sed aperiam</p>
                              </div>
                              <!--end::Text-->
                            </div>
                            <!--end::Header-->

                          </div>
                          <!--eng::Container-->
                          <!--begin::Footer-->
                          <div class="d-flex flex-center">
                            <button class="btn btn-primary font-weight-bolder font-size-sm py-3 px-14">View
                              Events</button>
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
                                Event Title
                              </a>
                              <!--end::Title-->
                              <!--begin::Text-->
                              <div class="font-weight-bold text-dark-50 text-center pb-7">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id rerum suscipit non
                                  molestias? Voluptas alias dolorem, maxime sapiente sed aperiam</p>
                              </div>
                              <!--end::Text-->
                            </div>
                            <!--end::Header-->

                          </div>
                          <!--eng::Container-->
                          <!--begin::Footer-->
                          <div class="d-flex flex-center">
                            <button class="btn btn-primary font-weight-bolder font-size-sm py-3 px-14">View
                              Events</button>
                          </div>
                          <!--end::Footer-->
                        </div>
                        <!--end::Wrapper-->
                      </div>
                      <!--end::Body-->
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
            </div>
            <div class="tab-pane fade" id="kt_tab_pane_3" role="tabpanel" aria-labelledby="kt_tab_pane_3">
              <div class="container">
                <div class="col-lg-10 col-xl-12 px-md-10 pt-md-8">
                  <h1 class="text-dark mb-8">Recent Transactions</h1>
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
