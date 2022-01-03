<?php
  include_once("../login_signup/check_session.php");
?>
<!DOCTYPE html>

<html lang="en">

<!--begin::Head-->

<head>
  <base href="./../../">
  <meta charset="utf-8" />
  <title>Transactions</title>
  <?php
  include("./../../partials/csslinks.php");
  ?>
  <style>
  div.col-xl-6 {
    padding: 5rem 3rem;
  }

  div.col-xl-6:nth-child(3) {
    padding-top: 0;
  }

  @media screen and (min-width:700px) {
    div.table-responsive {
      overflow-x: hidden;
    }
  }

  </style>
</head>

<!--end::Head-->

<!--begin::Body-->

<body id="kt_body"
  class="header-fixed header-mobile-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
  <?php 
    include("./../../partials/_header-mobile.php"); 
  ?>

  <div class="d-flex flex-column flex-root">

    <div class="d-flex flex-row flex-column-fluid page">

      <?php include("../../partials/_aside.php"); ?>

      <!--begin::Wrapper-->
      <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">

        <?php include("../../partials/_header.php"); ?>

        <!--begin::Content-->
        <div class="content d-flex flex-column flex-column-fluid px-8 py-12" id="kt_content">

          <!--Content area here-->

          <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class="container">


              <div class="card card-custom gutter-b">
                <!--begin::Header-->
                <div class="card-header border-0 py-5">
                  <h3 class="card-title align-items-start flex-column">
                    <span class="card-label font-weight-bolder text-dark">Transactions</span>
                    <span class="text-muted mt-3 font-weight-bold font-size-sm">Lastest transactions performed</span>
                  </h3>

                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="card-body py-0">
                  <!--begin::Table-->
                  <div class="table-responsive">
                    <table class="table table-head-custom table-vertical-center" id="kt_advance_table_widget_4">
                      <thead>
                        <tr class="text-left">
                          <th class="pl-0" style="min-width: 120px">transaction id</th>
                          <th style="min-width: 110px">Agent</th>
                          <th style="min-width: 110px">
                            <span class="text-info">Date</span>

                          </th>
                          <th style="min-width: 120px">Amount withdraw Req</th>
                          <th class="pr-0 " style="min-width: 160px">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td class="pl-0">
                            <a href="#"
                              class="text-dark-75 font-weight-bolder text-hover-primary font-size-lg">56037-XDER</a>
                          </td>
                          <td>
                            <span class="text-dark-75 font-weight-bolder d-block font-size-lg">Ahmed Khan</span>
                            <span class="text-muted font-weight-bold">Star</span>
                          </td>
                          <td>
                            <span class="text-info font-weight-bolder d-block font-size-lg">05/28/2020</span>
                          </td>
                          <td>
                            <span class="text-dark-75 font-weight-bolder d-block font-size-lg">$900</span>
                          </td>

                          <td class="pr-0 ">
                            <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">
                              <span class="svg-icon svg-icon-md svg-icon-primary">
                                <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg-->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                  width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                  <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24"></rect>
                                    <path
                                      d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z"
                                      fill="#000000" fill-rule="nonzero"
                                      transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)">
                                    </path>
                                    <path
                                      d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z"
                                      fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                                  </g>
                                </svg>
                                <!--end::Svg Icon-->
                              </span>
                            </a>
                            <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
                              <span class="svg-icon svg-icon-md svg-icon-primary">
                                <!--begin::Svg Icon | path:assets/media/svg/icons/General/Trash.svg-->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                  width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                  <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24"></rect>
                                    <path
                                      d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z"
                                      fill="#000000" fill-rule="nonzero"></path>
                                    <path
                                      d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z"
                                      fill="#000000" opacity="0.3"></path>
                                  </g>
                                </svg>
                                <!--end::Svg Icon-->
                              </span>
                            </a>
                          </td>
                        </tr>
                        <tr>

                          <td class="pl-0">
                            <a href="#"
                              class="text-dark-75 font-weight-bolder text-hover-primary font-size-lg">05822-FXSP</a>
                          </td>
                          <td>
                            <span class="text-dark-75 font-weight-bolder d-block font-size-lg">Belarus</span>
                            <span class="text-muted font-weight-bold">Supplier</span>
                          </td>
                          <td>
                            <span class="text-info font-weight-bolder d-block font-size-lg">02/04/2020</span>
                          </td>
                          <td>
                            <span class="text-dark-75 font-weight-bolder d-block font-size-lg">$560</span>
                          </td>

                          <td class="pr-0 ">
                            <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">
                              <span class="svg-icon svg-icon-md svg-icon-primary">
                                <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg-->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                  width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                  <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24"></rect>
                                    <path
                                      d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z"
                                      fill="#000000" fill-rule="nonzero"
                                      transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)">
                                    </path>
                                    <path
                                      d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z"
                                      fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                                  </g>
                                </svg>
                                <!--end::Svg Icon-->
                              </span>
                            </a>
                            <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
                              <span class="svg-icon svg-icon-md svg-icon-primary">
                                <!--begin::Svg Icon | path:assets/media/svg/icons/General/Trash.svg-->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                  width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                  <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24"></rect>
                                    <path
                                      d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z"
                                      fill="#000000" fill-rule="nonzero"></path>
                                    <path
                                      d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z"
                                      fill="#000000" opacity="0.3"></path>
                                  </g>
                                </svg>
                                <!--end::Svg Icon-->
                              </span>
                            </a>
                          </td>
                        </tr>
                        <tr>
                          <td class="pl-0">
                            <a href="#"
                              class="text-dark-75 font-weight-bolder text-hover-primary ont-size-lg">00347-BCLQ</a>
                          </td>
                          <td>
                            <span class="text-dark-75 font-weight-bolder d-block font-size-lg">Phillipines</span>
                            <span class="text-muted font-weight-bold">Event Organizer</span>
                          </td>
                          <td>
                            <span class="text-info font-weight-bolder d-block font-size-lg">23/12/2020</span>
                          </td>
                          <td>
                            <span class="text-dark-75 font-weight-bolder d-block font-size-lg">$155</span>
                          </td>

                          <td class="pr-0 ">

                            <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">
                              <span class="svg-icon svg-icon-md svg-icon-primary">
                                <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg-->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                  width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                  <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24"></rect>
                                    <path
                                      d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z"
                                      fill="#000000" fill-rule="nonzero"
                                      transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)">
                                    </path>
                                    <path
                                      d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z"
                                      fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                                  </g>
                                </svg>
                                <!--end::Svg Icon-->
                              </span>
                            </a>
                            <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
                              <span class="svg-icon svg-icon-md svg-icon-primary">
                                <!--begin::Svg Icon | path:assets/media/svg/icons/General/Trash.svg-->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                  width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                  <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24"></rect>
                                    <path
                                      d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z"
                                      fill="#000000" fill-rule="nonzero"></path>
                                    <path
                                      d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z"
                                      fill="#000000" opacity="0.3"></path>
                                  </g>
                                </svg>
                                <!--end::Svg Icon-->
                              </span>
                            </a>
                          </td>
                        </tr>
                        <tr>
                          <td class="pl-0">
                            <a href="#"
                              class="text-dark font-weight-bolder text-hover-primary font-size-lg">4472-QREX</a>
                          </td>
                          <td>
                            <span class="text-dark-75 font-weight-bolder d-block font-size-lg">Argentina</span>
                            <span class="text-muted font-weight-bold">Supplier</span>
                          </td>
                          <td>
                            <span class="text-info font-weight-bolder d-block font-size-lg">17/09/2021</span>

                          </td>
                          <td>
                            <span class="text-dark-75 font-weight-bolder d-block font-size-lg">$200</span>
                          </td>

                          <td class="pr-0 ">
                            <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">
                              <span class="svg-icon svg-icon-md svg-icon-primary">
                                <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg-->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                  width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                  <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24"></rect>
                                    <path
                                      d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z"
                                      fill="#000000" fill-rule="nonzero"
                                      transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)">
                                    </path>
                                    <path
                                      d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z"
                                      fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                                  </g>
                                </svg>
                                <!--end::Svg Icon-->
                              </span>
                            </a>
                            <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
                              <span class="svg-icon svg-icon-md svg-icon-primary">
                                <!--begin::Svg Icon | path:assets/media/svg/icons/General/Trash.svg-->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                  width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                  <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24"></rect>
                                    <path
                                      d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z"
                                      fill="#000000" fill-rule="nonzero"></path>
                                    <path
                                      d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z"
                                      fill="#000000" opacity="0.3"></path>
                                  </g>
                                </svg>
                                <!--end::Svg Icon-->
                              </span>
                            </a>
                          </td>
                        </tr>

                        <tr>
                          <td class="pl-0">
                            <a href="#"
                              class="text-dark-75 font-weight-bolder text-hover-primary font-size-lg">56037-XDER</a>
                          </td>
                          <td>
                            <span class="text-dark-75 font-weight-bolder d-block font-size-lg">Ahmed Khan</span>
                            <span class="text-muted font-weight-bold">Star</span>
                          </td>
                          <td>
                            <span class="text-info font-weight-bolder d-block font-size-lg">05/28/2020</span>
                          </td>
                          <td>
                            <span class="text-dark-75 font-weight-bolder d-block font-size-lg">$900</span>
                          </td>

                          <td class="pr-0 ">
                            <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">
                              <span class="svg-icon svg-icon-md svg-icon-primary">
                                <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg-->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                  width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                  <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24"></rect>
                                    <path
                                      d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z"
                                      fill="#000000" fill-rule="nonzero"
                                      transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)">
                                    </path>
                                    <path
                                      d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z"
                                      fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                                  </g>
                                </svg>
                                <!--end::Svg Icon-->
                              </span>
                            </a>
                            <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
                              <span class="svg-icon svg-icon-md svg-icon-primary">
                                <!--begin::Svg Icon | path:assets/media/svg/icons/General/Trash.svg-->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                  width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                  <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24"></rect>
                                    <path
                                      d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z"
                                      fill="#000000" fill-rule="nonzero"></path>
                                    <path
                                      d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z"
                                      fill="#000000" opacity="0.3"></path>
                                  </g>
                                </svg>
                                <!--end::Svg Icon-->
                              </span>
                            </a>
                          </td>
                        </tr>
                        <tr>

                          <td class="pl-0">
                            <a href="#"
                              class="text-dark-75 font-weight-bolder text-hover-primary font-size-lg">05822-FXSP</a>
                          </td>
                          <td>
                            <span class="text-dark-75 font-weight-bolder d-block font-size-lg">Belarus</span>
                            <span class="text-muted font-weight-bold">Supplier</span>
                          </td>
                          <td>
                            <span class="text-info font-weight-bolder d-block font-size-lg">02/04/2020</span>
                          </td>
                          <td>
                            <span class="text-dark-75 font-weight-bolder d-block font-size-lg">$560</span>
                          </td>

                          <td class="pr-0 ">
                            <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">
                              <span class="svg-icon svg-icon-md svg-icon-primary">
                                <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg-->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                  width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                  <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24"></rect>
                                    <path
                                      d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z"
                                      fill="#000000" fill-rule="nonzero"
                                      transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)">
                                    </path>
                                    <path
                                      d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z"
                                      fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                                  </g>
                                </svg>
                                <!--end::Svg Icon-->
                              </span>
                            </a>
                            <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
                              <span class="svg-icon svg-icon-md svg-icon-primary">
                                <!--begin::Svg Icon | path:assets/media/svg/icons/General/Trash.svg-->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                  width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                  <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24"></rect>
                                    <path
                                      d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z"
                                      fill="#000000" fill-rule="nonzero"></path>
                                    <path
                                      d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z"
                                      fill="#000000" opacity="0.3"></path>
                                  </g>
                                </svg>
                                <!--end::Svg Icon-->
                              </span>
                            </a>
                          </td>
                        </tr>
                        <tr>
                          <td class="pl-0">
                            <a href="#"
                              class="text-dark-75 font-weight-bolder text-hover-primary ont-size-lg">00347-BCLQ</a>
                          </td>
                          <td>
                            <span class="text-dark-75 font-weight-bolder d-block font-size-lg">Phillipines</span>
                            <span class="text-muted font-weight-bold">Event Organizer</span>
                          </td>
                          <td>
                            <span class="text-info font-weight-bolder d-block font-size-lg">23/12/2020</span>
                          </td>
                          <td>
                            <span class="text-dark-75 font-weight-bolder d-block font-size-lg">$155</span>
                          </td>

                          <td class="pr-0 ">

                            <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">
                              <span class="svg-icon svg-icon-md svg-icon-primary">
                                <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg-->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                  width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                  <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24"></rect>
                                    <path
                                      d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z"
                                      fill="#000000" fill-rule="nonzero"
                                      transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)">
                                    </path>
                                    <path
                                      d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z"
                                      fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                                  </g>
                                </svg>
                                <!--end::Svg Icon-->
                              </span>
                            </a>
                            <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
                              <span class="svg-icon svg-icon-md svg-icon-primary">
                                <!--begin::Svg Icon | path:assets/media/svg/icons/General/Trash.svg-->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                  width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                  <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24"></rect>
                                    <path
                                      d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z"
                                      fill="#000000" fill-rule="nonzero"></path>
                                    <path
                                      d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z"
                                      fill="#000000" opacity="0.3"></path>
                                  </g>
                                </svg>
                                <!--end::Svg Icon-->
                              </span>
                            </a>
                          </td>
                        </tr>
                        <tr>
                          <td class="pl-0">
                            <a href="#"
                              class="text-dark font-weight-bolder text-hover-primary font-size-lg">4472-QREX</a>
                          </td>
                          <td>
                            <span class="text-dark-75 font-weight-bolder d-block font-size-lg">Argentina</span>
                            <span class="text-muted font-weight-bold">Supplier</span>
                          </td>
                          <td>
                            <span class="text-info font-weight-bolder d-block font-size-lg">17/09/2021</span>

                          </td>
                          <td>
                            <span class="text-dark-75 font-weight-bolder d-block font-size-lg">$200</span>
                          </td>

                          <td class="pr-0 ">
                            <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">
                              <span class="svg-icon svg-icon-md svg-icon-primary">
                                <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg-->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                  width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                  <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24"></rect>
                                    <path
                                      d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z"
                                      fill="#000000" fill-rule="nonzero"
                                      transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)">
                                    </path>
                                    <path
                                      d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z"
                                      fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                                  </g>
                                </svg>
                                <!--end::Svg Icon-->
                              </span>
                            </a>
                            <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
                              <span class="svg-icon svg-icon-md svg-icon-primary">
                                <!--begin::Svg Icon | path:assets/media/svg/icons/General/Trash.svg-->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                  width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                  <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24"></rect>
                                    <path
                                      d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z"
                                      fill="#000000" fill-rule="nonzero"></path>
                                    <path
                                      d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z"
                                      fill="#000000" opacity="0.3"></path>
                                  </g>
                                </svg>
                                <!--end::Svg Icon-->
                              </span>
                            </a>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <!--end::Table-->
                </div>
                <!--end::Body-->
              </div>
            </div>
            <!--end::Container-->
          </div>
          <!--end::Content-->
        </div>
        <?php include("../../partials/_footer.php"); ?>

      </div>
      <!--end::Wrapper-->

    </div>
    <?php 
      include("../../partials/_extras/offcanvas/quick-user.php");
      include("../../partials/jslinks.php");
    ?>

</body>

<!--end::Body-->

</html>
