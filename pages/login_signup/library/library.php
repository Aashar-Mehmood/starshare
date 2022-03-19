<?php
  include_once('../checkUsersSession.php');
  ?>
<!DOCTYPE html>

<html lang="en">

<!--begin::Head-->

<head>
  <base href="../../../">
  <meta charset="utf-8" />
  <title>Music Library</title>
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
                          <p class="card-title font-weight-bolder text-dark-75  font-size-h4 m-0 pt-7 pb-1">
                            Song Title : By ( Artist Name )
                          </p>
                          <!--end::Title-->
                          <!--begin::Text-->
                          <!--end::Text-->
                        </div>
                        <!--end::Header-->
                        <div class="d-flex align-items-center pb-9 pt-6">
                          <!--begin::Symbol-->
                          <div class="symbol symbol-45 symbol-light mr-4">
                            <span class="symbol-label">
                              <span class="svg-icon svg-icon-2x svg-icon-dark-50">
                                <!--begin::Svg Icon | path:assets/media/svg/icons/Media/Equalizer.svg-->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                  width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
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
                            <p class="text-dark-75  mb-1 font-size-lg font-weight-bolder">Duration</p>
                          </div>
                          <!--end::Text-->
                          <!--begin::label-->
                          <span
                            class="font-weight-bolder label label-xl label-light-success label-inline px-3 py-5 min-w-45px">14
                            min</span>
                          <!--end::label-->
                        </div>
                      </div>
                      <!--eng::Container-->
                      <div class="d-flex flex-center">
                        <a href="">
                          <button class="btn btn-primary font-weight-bolder font-size-sm py-3 px-8">
                            Play Song
                          </button>
                        </a>

                      </div>
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
                          <p class="card-title font-weight-bolder text-dark-75  font-size-h4 m-0 pt-7 pb-1">
                            Song Title : By ( Artist Name )
                          </p>

                        </div>
                        <!--end::Header-->
                        <div class="d-flex align-items-center pb-9 pt-6">
                          <!--begin::Symbol-->
                          <div class="symbol symbol-45 symbol-light mr-4">
                            <span class="symbol-label">
                              <span class="svg-icon svg-icon-2x svg-icon-dark-50">
                                <!--begin::Svg Icon | path:assets/media/svg/icons/Media/Equalizer.svg-->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                  width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
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
                            <p class="text-dark-75  mb-1 font-size-lg font-weight-bolder">Duration</p>
                          </div>
                          <!--end::Text-->
                          <!--begin::label-->
                          <span
                            class="font-weight-bolder label label-xl label-light-success label-inline px-3 py-5 min-w-45px">14
                            min</span>
                          <!--end::label-->
                        </div>
                      </div>
                      <!--eng::Container-->
                      <div class="d-flex flex-center">
                        <a href="">
                          <button class="btn btn-primary font-weight-bolder font-size-sm py-3 px-8">
                            Play Song
                          </button>
                        </a>

                      </div>
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
                          <p class="card-title font-weight-bolder text-dark-75  font-size-h4 m-0 pt-7 pb-1">
                            Song Title : By ( Artist Name )
                          </p>
                          <!--end::Title-->
                          <!--begin::Text-->
                          <!--end::Text-->
                        </div>
                        <!--end::Header-->
                        <div class="d-flex align-items-center pb-9 pt-6">
                          <!--begin::Symbol-->
                          <div class="symbol symbol-45 symbol-light mr-4">
                            <span class="symbol-label">
                              <span class="svg-icon svg-icon-2x svg-icon-dark-50">
                                <!--begin::Svg Icon | path:assets/media/svg/icons/Media/Equalizer.svg-->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                  width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
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
                            <p class="text-dark-75  mb-1 font-size-lg font-weight-bolder">Duration</p>
                          </div>
                          <!--end::Text-->
                          <!--begin::label-->
                          <span
                            class="font-weight-bolder label label-xl label-light-success label-inline px-3 py-5 min-w-45px">14
                            min</span>
                          <!--end::label-->
                        </div>
                      </div>
                      <!--eng::Container-->
                      <div class="d-flex flex-center">
                        <a href="">
                          <button class="btn btn-primary font-weight-bolder font-size-sm py-3 px-8">
                            Play Song
                          </button>
                        </a>

                      </div>
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
                          <p class="card-title font-weight-bolder text-dark-75  font-size-h4 m-0 pt-7 pb-1">
                            Song Title : By ( Artist Name )
                          </p>
                          <!--end::Title-->
                          <!--begin::Text-->
                          <!--end::Text-->
                        </div>
                        <!--end::Header-->
                        <div class="d-flex align-items-center pb-9 pt-6">
                          <!--begin::Symbol-->
                          <div class="symbol symbol-45 symbol-light mr-4">
                            <span class="symbol-label">
                              <span class="svg-icon svg-icon-2x svg-icon-dark-50">
                                <!--begin::Svg Icon | path:assets/media/svg/icons/Media/Equalizer.svg-->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                  width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
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
                            <p class="text-dark-75  mb-1 font-size-lg font-weight-bolder">Duration</p>
                          </div>
                          <!--end::Text-->
                          <!--begin::label-->
                          <span
                            class="font-weight-bolder label label-xl label-light-success label-inline px-3 py-5 min-w-45px">14
                            min</span>
                          <!--end::label-->
                        </div>
                      </div>
                      <!--eng::Container-->
                      <!--begin::Footer-->
                      <div class="d-flex flex-center">
                        <a href="">
                          <button class="btn btn-primary font-weight-bolder font-size-sm py-3 px-8">
                            Play Song
                          </button>
                        </a>

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
                          <p class="card-title font-weight-bolder text-dark-75  font-size-h4 m-0 pt-7 pb-1">
                            Song Title : By ( Artist Name )
                          </p>
                          <!--end::Title-->

                        </div>
                        <!--end::Header-->
                        <div class="d-flex align-items-center pb-9 pt-6">
                          <!--begin::Symbol-->
                          <div class="symbol symbol-45 symbol-light mr-4">
                            <span class="symbol-label">
                              <span class="svg-icon svg-icon-2x svg-icon-dark-50">
                                <!--begin::Svg Icon | path:assets/media/svg/icons/Media/Equalizer.svg-->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                  width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
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
                            <p class="text-dark-75  mb-1 font-size-lg font-weight-bolder">Duration</p>
                          </div>
                          <!--end::Text-->
                          <!--begin::label-->
                          <span
                            class="font-weight-bolder label label-xl label-light-success label-inline px-3 py-5 min-w-45px">14
                            min</span>
                          <!--end::label-->
                        </div>
                      </div>
                      <!--eng::Container-->
                      <div class="d-flex flex-center">
                        <a href="">
                          <button class="btn btn-primary font-weight-bolder font-size-sm py-3 px-8">
                            Play Song
                          </button>
                        </a>
                      </div>
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
                          <p class="card-title font-weight-bolder text-dark-75  font-size-h4 m-0 pt-7 pb-1">
                            Song Title : By ( Artist Name )
                          </p>
                          <!--end::Title-->
                          <!--begin::Text-->
                          <!--end::Text-->
                        </div>
                        <!--end::Header-->
                        <div class="d-flex align-items-center pb-9 pt-6">
                          <!--begin::Symbol-->
                          <div class="symbol symbol-45 symbol-light mr-4">
                            <span class="symbol-label">
                              <span class="svg-icon svg-icon-2x svg-icon-dark-50">
                                <!--begin::Svg Icon | path:assets/media/svg/icons/Media/Equalizer.svg-->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                  width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
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
                            <p class="text-dark-75  mb-1 font-size-lg font-weight-bolder">Duration</p>
                          </div>
                          <!--end::Text-->
                          <!--begin::label-->
                          <span
                            class="font-weight-bolder label label-xl label-light-success label-inline px-3 py-5 min-w-45px">14
                            min</span>
                          <!--end::label-->
                        </div>
                      </div>
                      <!--eng::Container-->
                      <div class="d-flex flex-center">
                        <a href="">
                          <button class="btn btn-primary font-weight-bolder font-size-sm py-3 px-8">
                            Play Song
                          </button>
                        </a>

                      </div>
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
                          <p class="card-title font-weight-bolder text-dark-75  font-size-h4 m-0 pt-7 pb-1">
                            Song Title : By ( Artist Name )
                          </p>
                          <!--end::Title-->
                          <!--begin::Text-->
                          <!--end::Text-->
                        </div>
                        <!--end::Header-->
                        <div class="d-flex align-items-center pb-9 pt-6">
                          <!--begin::Symbol-->
                          <div class="symbol symbol-45 symbol-light mr-4">
                            <span class="symbol-label">
                              <span class="svg-icon svg-icon-2x svg-icon-dark-50">
                                <!--begin::Svg Icon | path:assets/media/svg/icons/Media/Equalizer.svg-->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                  width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
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
                            <p class="text-dark-75  mb-1 font-size-lg font-weight-bolder">Duration</p>
                          </div>
                          <!--end::Text-->
                          <!--begin::label-->
                          <span
                            class="font-weight-bolder label label-xl label-light-success label-inline px-3 py-5 min-w-45px">14
                            min</span>
                          <!--end::label-->
                        </div>
                      </div>
                      <!--eng::Container-->
                      <div class="d-flex flex-center">
                        <a href="">
                          <button class="btn btn-primary font-weight-bolder font-size-sm py-3 px-8">
                            Play Song
                          </button>
                        </a>

                      </div>
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
                          <p class="card-title font-weight-bolder text-dark-75  font-size-h4 m-0 pt-7 pb-1">
                            Song Title : By ( Artist Name )
                          </p>
                          <!--end::Title-->
                          <!--begin::Text-->
                          <!--end::Text-->
                        </div>
                        <!--end::Header-->
                        <div class="d-flex align-items-center pb-9 pt-6">
                          <!--begin::Symbol-->
                          <div class="symbol symbol-45 symbol-light mr-4">
                            <span class="symbol-label">
                              <span class="svg-icon svg-icon-2x svg-icon-dark-50">
                                <!--begin::Svg Icon | path:assets/media/svg/icons/Media/Equalizer.svg-->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                  width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
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
                            <p class="text-dark-75  mb-1 font-size-lg font-weight-bolder">Duration</p>
                          </div>
                          <!--end::Text-->
                          <!--begin::label-->
                          <span
                            class="font-weight-bolder label label-xl label-light-success label-inline px-3 py-5 min-w-45px">14
                            min</span>
                          <!--end::label-->
                        </div>
                      </div>
                      <!--eng::Container-->
                      <!--begin::Footer-->
                      <div class="d-flex flex-center">
                        <a href="">
                          <button class="btn btn-primary font-weight-bolder font-size-sm py-3 px-8">
                            Play Song
                          </button>
                        </a>
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
                          <p class="card-title font-weight-bolder text-dark-75  font-size-h4 m-0 pt-7 pb-1">
                            Song Title : By ( Artist Name )
                          </p>
                          <!--end::Title-->
                          <!--begin::Text-->
                          <!--end::Text-->
                        </div>
                        <!--end::Header-->
                        <div class="d-flex align-items-center pb-9 pt-6">
                          <!--begin::Symbol-->
                          <div class="symbol symbol-45 symbol-light mr-4">
                            <span class="symbol-label">
                              <span class="svg-icon svg-icon-2x svg-icon-dark-50">
                                <!--begin::Svg Icon | path:assets/media/svg/icons/Media/Equalizer.svg-->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                  width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
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
                            <p class="text-dark-75  mb-1 font-size-lg font-weight-bolder">Duration</p>
                          </div>
                          <!--end::Text-->
                          <!--begin::label-->
                          <span
                            class="font-weight-bolder label label-xl label-light-success label-inline px-3 py-5 min-w-45px">14
                            min</span>
                          <!--end::label-->
                        </div>
                      </div>
                      <!--eng::Container-->
                      <div class="d-flex flex-center">
                        <a href="">
                          <button class="btn btn-primary font-weight-bolder font-size-sm py-3 px-8">
                            Play Song
                          </button>
                        </a>

                      </div>
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