<?php
  include_once("../login_signup/check_session.php");
?>
<!DOCTYPE html>

<html lang="en">

<!--begin::Head-->

<head>
  <base href="../../">
  <meta charset="utf-8" />
  <title>Supplier Details</title>
  <?php
  include("../../partials/csslinks.php");
  ?>

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
                <a class="nav-link" data-toggle="tab" href="#kt_tab_pane_2">Products</a>
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
        <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
          <div class="container">
            <div class="tab-content mt-5 px-8" id="myTabContent">
              <div class="tab-pane fade show active" id="kt_tab_pane_1" role="tabpanel" aria-labelledby="kt_tab_pane_1">
                <h1>Products Supplied</h1>
                <div class="row">
                  <div class="col-md-6">
                    <div class="card card-custom bg-gray-100 card-stretch gutter-b">

                      <!--begin::Header-->
                      <div class="card-header border-0 bg-danger py-5">
                        <h2 class="font-weight-bolder text-dark">Last Month</h2>
                      </div>
                      <!--end::Header-->
                      <!--begin::Body-->
                      <div class="card-body p-0 position-relative overflow-hidden">

                        <!--begin::Chart-->
                        <div class="card-rounded-bottom pt-10 pl-8" style="height: 200px; background-color: #f64e6080;">
                          <h3>200 Proudcts Supplied in total.</h3>
                        </div>

                        <!--end::Chart-->


                      </div>

                      <!--end::Body-->
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="card card-custom bg-gray-100 card-stretch gutter-b">

                      <!--begin::Header-->
                      <div class="card-header border-0 bg-warning py-5">
                        <h2 class="font-weight-bolder text-dark">Last Year</h2>
                      </div>

                      <!--end::Header-->

                      <!--begin::Body-->
                      <div class="card-body p-0 position-relative overflow-hidden">

                        <!--begin::Chart-->
                        <div class="card-rounded-bottom pt-10 pl-8" style="height: 200px;background-color:#ffa80080">
                          <h3>700 Proudcts Supplied in total.</h3>
                        </div>

                        <!--end::Chart-->

                      </div>

                      <!--end::Body-->
                    </div>
                  </div>
                </div>
                <h1>Earnings</h1>
                <div class="row">
                  <div class="col-md-6">
                    <div class="card card-custom bg-gray-100 card-stretch gutter-b">

                      <!--begin::Header-->
                      <div class="card-header border-0 bg-success py-5">
                        <h2 class="font-weight-bolder text-dark">Last Month</h2>

                      </div>

                      <!--end::Header-->

                      <!--begin::Body-->
                      <div class="card-body p-0 position-relative overflow-hidden">

                        <!--begin::Chart-->
                        <div class="card-rounded-bottom pt-10 pl-8" style="height: 200px;background-color: #1bc5bd80;">
                          <h3>Earning in Last month : 10000$</h3>
                        </div>

                        <!--end::Chart-->

                      </div>

                      <!--end::Body-->
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="card card-custom bg-gray-100 card-stretch gutter-b">

                      <!--begin::Header-->
                      <div class="card-header border-0 bg-primary py-5">
                        <h2 class="font-weight-bolder text-dark">Last Year</h2>

                      </div>

                      <!--end::Header-->

                      <!--begin::Body-->
                      <div class="card-body p-0 position-relative overflow-hidden">

                        <!--begin::Chart-->
                        <div class="card-rounded-bottom pt-10 pl-8" style="height: 200px; background-color:#3699ff80 ">
                          <h3>Earning in Last year : 23000$</h3>
                        </div>

                        <!--end::Chart-->
                      </div>

                      <!--end::Body-->
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="kt_tab_pane_2" role="tabpanel" aria-labelledby="kt_tab_pane_2">
                <div class="container">
                  <div class="row mt-12">
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
                                  Product Name
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
                                Buy Product
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
                                  Product Name
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
                                Buy Product
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
                                  Product Name
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
                                Buy Product
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
                  <div class="row mt-12">
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
                                  Product Name
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
                                Buy Product
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
                                  Product Name
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
                                Buy Product
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
                                  Product Name
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
                                Buy Product
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
              </div>

              <div class="tab-pane fade" id="kt_tab_pane_3" role="tabpanel" aria-labelledby="kt_tab_pane_3">
                <div class="container mt-16">
                  <h1 class="text-dark mb-8">Recent Transactions</h1>
                  <div class="card card-custom card-stretch gutter-b w-75">
                    <!--begin::Header-->
                    <div class="card-header border-0 pt-5">
                      <h3 class="card-title align-items-start flex-column">
                        <span class="card-label font-weight-bolder text-dark">Transaction Details</span>
                        <span class="text-muted mt-3 font-weight-bold font-size-sm">More than 400+ new members</span>
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
