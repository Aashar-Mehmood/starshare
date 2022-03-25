<?php
include_once('../checkUsersSession.php');
include_once('../db_connection.php');
?>

<!DOCTYPE html>

<html lang="en">

<!--begin::Head-->

<head>
  <base href="../../../">
  <meta charset="utf-8" />
  <title>My Events</title>
  <?php include("../../../partials/csslinks.php"); ?>

</head>

<!--end::Head-->

<!--begin::Body-->

<body id="kt_body"
  class="header-fixed header-mobile-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
  <!--begin::Main-->

  <?php include("../../../partials/_header-mobile.php"); ?>
  <div class="d-flex flex-column flex-root">

    <!--begin::Page-->
    <div class="d-flex flex-row flex-column-fluid page">

      <?php include("../../../partials/_asideForRoles.php"); ?>

      <!--begin::Wrapper-->
      <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">

        <?php include("../../../partials/_header.php"); ?>

        <!--begin::Content-->
        <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
          <div class="container">
            <h2 class="pl-8">My Events</h2>
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
                          <p
                            class="card-title font-weight-bolder text-dark-75 text-hover-primary font-size-h4 m-0 pt-7 pb-1">
                            Event Title
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
                              <a href="#"
                                class="text-dark-75 text-hover-primary mb-1 font-size-lg font-weight-bolder">Location</a>
                            </div>
                            <!--end::Text-->

                          </div>
                          <!--end::Item-->


                        </div>
                        <div class="pt-1">
                          <!--begin::Item-->
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
                              <a href="#"
                                class="text-dark-75 text-hover-primary mb-1 font-size-lg font-weight-bolder">Timing :
                                7PM</a>
                            </div>
                            <!--end::Text-->

                          </div>
                          <!--end::Item-->


                        </div>
                        <div class="pt-1">
                          <!--begin::Item-->
                          <div class="d-flex flex-center pb-9">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-45 symbol-light mr-4">
                              <span class="symbol-label">
                                <i class="fas fa-chair"></i>
                              </span>
                            </div>
                            <!--end::Symbol-->
                            <!--begin::Text-->
                            <div class="d-flex flex-column flex-grow-1">
                              <a href="#" class="text-dark-75 text-hover-primary mb-1 font-size-lg font-weight-bolder">
                                Seats Bought: 12-15
                              </a>
                            </div>
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
                          <p
                            class="card-title font-weight-bolder text-dark-75 text-hover-primary font-size-h4 m-0 pt-7 pb-1">
                            Event Title
                          </p>

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
                              <a href="#"
                                class="text-dark-75 text-hover-primary mb-1 font-size-lg font-weight-bolder">Location</a>
                            </div>
                            <!--end::Text-->

                          </div>
                          <!--end::Item-->
                        </div>
                        <div class="pt-1">
                          <!--begin::Item-->
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
                              <a href="#" class="text-dark-75 text-hover-primary mb-1 font-size-lg font-weight-bolder">
                                Timing : 4PM
                              </a>
                            </div>
                            <!--end::Text-->
                          </div>
                          <!--end::Item-->
                        </div>
                        <div class="pt-1">
                          <!--begin::Item-->
                          <div class="d-flex flex-center pb-9">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-45 symbol-light mr-4">
                              <span class="symbol-label">
                                <i class="fas fa-chair"></i>
                              </span>
                            </div>
                            <!--end::Symbol-->
                            <!--begin::Text-->
                            <div class="d-flex flex-column flex-grow-1">
                              <a href="#" class="text-dark-75 text-hover-primary mb-1 font-size-lg font-weight-bolder">
                                Seats Bought: 12-15
                              </a>
                            </div>
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
                          <p
                            class="card-title font-weight-bolder text-dark-75 text-hover-primary font-size-h4 m-0 pt-7 pb-1">
                            Event Title
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
                              <a href="#"
                                class="text-dark-75 text-hover-primary mb-1 font-size-lg font-weight-bolder">Location</a>
                            </div>
                            <!--end::Text-->
                            <!--begin::label-->

                          </div>
                          <!--end::Item-->


                        </div>
                        <div class="pt-1">
                          <!--begin::Item-->
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
                              <a href="#"
                                class="text-dark-75 text-hover-primary mb-1 font-size-lg font-weight-bolder">Timing :
                                10PM</a>
                            </div>
                            <!--end::Text-->
                            <!--begin::label-->

                          </div>
                          <!--end::Item-->


                        </div>
                        <div class="pt-1">
                          <!--begin::Item-->
                          <div class="d-flex flex-center pb-9">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-45 symbol-light mr-4">
                              <span class="symbol-label">
                                <i class="fas fa-chair"></i>
                              </span>
                            </div>
                            <!--end::Symbol-->
                            <!--begin::Text-->
                            <div class="d-flex flex-column flex-grow-1">
                              <a href="#" class="text-dark-75 text-hover-primary mb-1 font-size-lg font-weight-bolder">
                                Seats Bought: 12-15
                              </a>
                            </div>
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
                            style="background-image: url(assets/media/stock-600x400/img-72.jpg)"></div>
                          <!--end::Image-->
                          <!--begin::Title-->
                          <p
                            class="card-title font-weight-bolder text-dark-75 text-hover-primary font-size-h4 m-0 pt-7 pb-1">
                            Event Title
                          </p>

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
                              <a href="#"
                                class="text-dark-75 text-hover-primary mb-1 font-size-lg font-weight-bolder">Location</a>
                            </div>
                            <!--end::Text-->

                          </div>
                          <!--end::Item-->


                        </div>
                        <div class="pt-1">
                          <!--begin::Item-->
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
                              <a href="#"
                                class="text-dark-75 text-hover-primary mb-1 font-size-lg font-weight-bolder">Timing :
                                5PM</a>
                            </div>
                            <!--end::Text-->

                          </div>
                          <!--end::Item-->


                        </div>
                        <div class="pt-1">
                          <!--begin::Item-->
                          <div class="d-flex flex-center pb-9">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-45 symbol-light mr-4">
                              <span class="symbol-label">
                                <i class="fas fa-chair"></i>
                              </span>
                            </div>
                            <!--end::Symbol-->
                            <!--begin::Text-->
                            <div class="d-flex flex-column flex-grow-1">
                              <a href="#" class="text-dark-75 text-hover-primary mb-1 font-size-lg font-weight-bolder">
                                Seats Bought: 12-15
                              </a>
                            </div>
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
                            style="background-image: url(assets/media/stock-600x400/img-39.jpg)"></div>
                          <!--end::Image-->
                          <!--begin::Title-->
                          <p
                            class="card-title font-weight-bolder text-dark-75 text-hover-primary font-size-h4 m-0 pt-7 pb-1">
                            Event Title
                          </p>
                          <!--end::Title-->

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
                              <a href="#"
                                class="text-dark-75 text-hover-primary mb-1 font-size-lg font-weight-bolder">Location</a>
                            </div>
                            <!--end::Text-->
                            <!--begin::label-->

                          </div>
                          <!--end::Item-->


                        </div>
                        <div class="pt-1">
                          <!--begin::Item-->
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
                              <a href="#" class="text-dark-75 text-hover-primary mb-1 font-size-lg font-weight-bolder">
                                Timing : 10PM
                              </a>
                            </div>
                            <!--end::Text-->
                            <!--begin::label-->

                          </div>
                          <!--end::Item-->
                        </div>
                        <div class="pt-1">
                          <!--begin::Item-->
                          <div class="d-flex flex-center pb-9">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-45 symbol-light mr-4">
                              <span class="symbol-label">
                                <i class="fas fa-chair"></i>
                              </span>
                            </div>
                            <!--end::Symbol-->
                            <!--begin::Text-->
                            <div class="d-flex flex-column flex-grow-1">
                              <a href="#" class="text-dark-75 text-hover-primary mb-1 font-size-lg font-weight-bolder">
                                Seats Bought: 12-15
                              </a>
                            </div>
                            <!--end::Text-->
                            <!--begin::label-->

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
                            style="background-image: url(assets/media/stock-600x400/img-72.jpg)"></div>
                          <!--end::Image-->
                          <!--begin::Title-->
                          <p
                            class="card-title font-weight-bolder text-dark-75 text-hover-primary font-size-h4 m-0 pt-7 pb-1">
                            Event Title
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
                              <a href="#"
                                class="text-dark-75 text-hover-primary mb-1 font-size-lg font-weight-bolder">Location</a>
                            </div>
                            <!--end::Text-->
                            <!--begin::label-->
                          </div>

                        </div>
                        <div class="pt-1">
                          <!--begin::Item-->
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
                              <a href="#" class="text-dark-75 text-hover-primary mb-1 font-size-lg font-weight-bolder">
                                Timing: 6PM
                              </a>
                            </div>
                            <!--end::Text-->
                            <!--begin::label-->
                          </div>

                        </div>
                        <div class="pt-1">
                          <!--begin::Item-->
                          <div class="d-flex flex-center pb-9">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-45 symbol-light mr-4">
                              <span class="symbol-label">
                                <i class="fas fa-chair"></i>
                              </span>
                            </div>
                            <!--end::Symbol-->
                            <!--begin::Text-->
                            <div class="d-flex flex-column flex-grow-1">
                              <a href="#" class="text-dark-75 text-hover-primary mb-1 font-size-lg font-weight-bolder">
                                Seats Bought: 12-15
                              </a>
                            </div>
                            <!--end::Text-->
                            <!--begin::label-->

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
                            style="background-image: url(assets/media/stock-600x400/img-16.jpg)"></div>
                          <!--end::Image-->
                          <!--begin::Title-->
                          <p
                            class="card-title font-weight-bolder text-dark-75 text-hover-primary font-size-h4 m-0 pt-7 pb-1">
                            Event Title
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
                              <a href="#"
                                class="text-dark-75 text-hover-primary mb-1 font-size-lg font-weight-bolder">Location</a>
                            </div>
                            <!--end::Text-->
                            <!--begin::label-->

                          </div>
                          <!--end::Item-->


                        </div>
                        <div class="pt-1">
                          <!--begin::Item-->
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
                              <a href="#" class="text-dark-75 text-hover-primary mb-1 font-size-lg font-weight-bolder">
                                Timing : 2PM
                              </a>
                            </div>
                            <!--end::Text-->
                            <!--begin::label-->

                          </div>
                          <!--end::Item-->


                        </div>
                        <div class="pt-1">
                          <!--begin::Item-->
                          <div class="d-flex flex-center pb-9">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-45 symbol-light mr-4">
                              <span class="symbol-label">
                                <i class="fas fa-chair"></i>
                              </span>
                            </div>
                            <!--end::Symbol-->
                            <!--begin::Text-->
                            <div class="d-flex flex-column flex-grow-1">
                              <a href="#" class="text-dark-75 text-hover-primary mb-1 font-size-lg font-weight-bolder">
                                Seats Bought: 12-15
                              </a>
                            </div>
                            <!--end::Text-->
                            <!--begin::label-->

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
                          <p
                            class="card-title font-weight-bolder text-dark-75 text-hover-primary font-size-h4 m-0 pt-7 pb-1">
                            Event Title
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
                              <a href="#"
                                class="text-dark-75 text-hover-primary mb-1 font-size-lg font-weight-bolder">Location</a>
                            </div>
                            <!--end::Text-->

                          </div>
                          <!--end::Item-->


                        </div>
                        <div class="pt-1">
                          <!--begin::Item-->
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
                              <a href="#" class="text-dark-75 text-hover-primary mb-1 font-size-lg font-weight-bolder">
                                Timing : 7PM
                              </a>
                            </div>
                            <!--end::Text-->

                          </div>
                          <!--end::Item-->


                        </div>
                        <div class="pt-1">
                          <!--begin::Item-->
                          <div class="d-flex flex-center pb-9">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-45 symbol-light mr-4">
                              <span class="symbol-label">
                                <i class="fas fa-chair"></i>
                              </span>
                            </div>
                            <!--end::Symbol-->
                            <!--begin::Text-->
                            <div class="d-flex flex-column flex-grow-1">
                              <a href="#" class="text-dark-75 text-hover-primary mb-1 font-size-lg font-weight-bolder">
                                Seats Bought: 12-15
                              </a>
                            </div>
                            <!--end::Text-->
                            <!--begin::label-->

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

        <!--end::Content-->

        <?php include("../../../partials/_footer.php"); ?>
      </div>

      <!--end::Wrapper-->
    </div>

    <!--end::Page-->
  </div>

  <!--end::Main-->
  <?php include("../../../partials/_extras/offcanvas/quick-user.php") ?>
  <?php include("../../../partials/jslinks.php"); ?>
</body>

<!--end::Body-->

</html>
