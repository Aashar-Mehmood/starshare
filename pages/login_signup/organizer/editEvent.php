<?php
  include_once('../checkUsersSession.php');
  ?>
<!DOCTYPE html>

<html lang="en">

<!--begin::Head-->

<head>
  <base href="../../../">
  <meta charset="utf-8" />
  <title>Edit Event</title>
  <?php include("../../../partials/csslinks.php"); ?>
  <link rel="stylesheet" href="assets/css/custom/bordered_inputs.css">

</head>
<style>
@media screen and (max-width:425px) {
  .form-group.row {
    margin-bottom: 0 !important;
  }

  div.col-lg-6 {
    padding: 1rem;
  }
}

</style>
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

        <div id="kt_header" class="header header-fixed">

          <!--begin::Container-->
          <div class="container-fluid d-flex align-items-stretch justify-content-between">

            <!--begin::Header Menu Wrapper-->
            <!--begin::Header Menu-->

            <ul class="nav nav-tabs nav-tabs-line nav-bold nav-tabs-line-2x d-flex align-items-center ml-2 ml-md-8"
              style="border: none; font-size: 1.12rem;">
              <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#kt_tab_pane_1">Edit Event</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#kt_tab_pane_2">Quotes</a>
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
                <div class="row justify-content-center">
                  <div class="col-12">
                    <div class="card card-custom">
                      <div class="card-header">
                        <h2 class="card-title">
                          Edit Event
                        </h2>
                      </div>
                      <!--begin::Form-->
                      <form class="form">

                        <div class="card-body">
                          <div class="form-group row">
                            <div class="col-lg-6">
                              <label>Title :</label>
                              <input type="text" class="form-control form-control-solid" value="Old Title" />
                            </div>
                            <div class="col-lg-6">
                              <label>Description :</label>
                              <textarea class="form-control form-control-solid" rows="3">
                        </textarea>
                            </div>
                          </div>
                          <div class="form-group row">
                            <div class="col-lg-6">
                              <label>Address :</label>
                              <input type="text" class="form-control form-control-solid" value="Previous Address" />
                            </div>
                            <div class="col-lg-6">
                              <label>Number of Seats :</label>
                              <input type="text" class="form-control form-control-solid" value="20" disabled />
                            </div>
                          </div>
                          <div class="form-group row">
                            <div class="col-lg-6">
                              <label>Seats Booked :</label>
                              <input type="text" class="form-control form-control-solid" value="5" />
                            </div>
                            <div class="col-lg-6">
                              <label>Remaining Seats :</label>
                              <input type="text" class="form-control form-control-solid" value="15" />
                            </div>
                          </div>
                          <div class="form-group row">
                            <div class="col-lg-6">
                              <label for="eventTime">Time :</label>
                              <input class="form-control form-control-solid" type="time" id="eventTime" />
                            </div>
                            <div class="col-lg-6">
                              <label for="eventDate">Date :</label>
                              <input class="form-control form-control-solid" type="date" id="eventDate" />
                            </div>
                          </div>
                          <div class="form-group row">
                            <div class="col-lg-6">
                              <label for="selectArtists">
                                Select Star
                              </label>
                              <select class="form-control form-control-solid" id="selectArtists">
                                <option>Star 1 &nbsp;&nbsp;&nbsp; Rating : 4 stars &nbsp;&nbsp;&nbsp; Total Reviews : 12
                                </option>
                                <option>Star 2 &nbsp;&nbsp;&nbsp; Rating : 3 stars &nbsp;&nbsp;&nbsp; Total Reviews : 20
                                </option>
                                <option>Star 3 &nbsp;&nbsp;&nbsp; Rating : 5 stars &nbsp;&nbsp;&nbsp; Total Reviews : 10
                                </option>
                                <option>Star 4 &nbsp;&nbsp;&nbsp; Rating : 4 stars &nbsp;&nbsp;&nbsp; Total Reviews : 34
                                </option>
                                <option>Star 5 &nbsp;&nbsp;&nbsp; Rating : 3 stars &nbsp;&nbsp;&nbsp; Total Reviews : 20
                                </option>
                              </select>
                            </div>
                            <div class="col-lg-6">
                              <label>Banner Image</label>
                              <div></div>
                              <div class="custom-file">
                                <input type="file" class="custom-file-input" id="customFile" />
                                <label class="custom-file-label" for="customFile">Choose Image</label>
                              </div>
                            </div>
                          </div>
                        </div>

                      </form>
                      <div class="card-footer ml-6">
                        <button type="reset" class="btn btn-primary">Submit</button>
                        <button type="reset" class="btn btn-secondary ml-10">Cancel</button>
                      </div>
                      </form>
                      <!--end::Form-->
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="kt_tab_pane_2" role="tabpanel" aria-labelledby="kt_tab_pane_2">
              <div class="container">
                <div class="row">
                  <div class="col-xl-10">

                    <div class="card card-custom gutter-b">
                      <!--begin::Header-->
                      <div class="card-header d-flex align-items-center">
                        <h2 class="card-title">
                          Sent Quotes
                        </h2>
                        <a href="pages/login_signup/organizer/requestQuote.php">
                          <button class="btn btn-primary btn-large" data-target="#newProduct" data-toggle="modal">
                            Request a Quote
                          </button>
                        </a>
                      </div>
                      <!--end::Header-->
                      <!--begin::Body-->
                      <div class="card-body pt-2 pb-0 mt-n3">
                        <div class="tab-content mt-5" id="myTabTables11">
                          <div class="table-responsive">
                            <table class="table table-vertical-center table-bordered">
                              <thead class="thead-dark">
                                <tr>
                                  <th style="min-width: 150px;">Supplier Name</th>
                                  <th style="min-width: 150px;">Quote Amount</th>
                                  <th style="min-width:200px; padding-left:1.75rem">Status</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td class="">
                                    <a href="#"
                                      class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">
                                      John</a>
                                  </td>
                                  <td>
                                    <span class="text-dark-75 font-weight-bolder d-block font-size-lg">200$</span>
                                  </td>
                                  <td>
                                    <span class="text-dark-75 font-weight-bolder d-block font-size-lg">Accepted</span>
                                  </td>
                                </tr>
                                <tr>
                                  <td class="">
                                    <a href="#"
                                      class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">
                                      Alice
                                    </a>
                                  </td>
                                  <td>
                                    <span class="text-dark-75 font-weight-bolder d-block font-size-lg">150$</span>
                                  </td>
                                  <td>
                                    <span class="text-dark-75 font-weight-bolder d-block font-size-lg">Rejected</span>
                                  </td>

                                </tr>
                                <tr>
                                  <td class="">
                                    <a href="#"
                                      class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">
                                      David
                                    </a>
                                  </td>
                                  <td>
                                    <span class="text-dark-75 font-weight-bolder d-block font-size-lg">
                                      200$
                                    </span>
                                  </td>
                                  <td>
                                    <span class="text-dark-75 font-weight-bolder d-block font-size-lg">
                                      Rejected
                                    </span>
                                  </td>

                                </tr>
                                <tr>
                                  <td class="">
                                    <a href="#"
                                      class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">
                                      Anna
                                    </a>
                                  </td>
                                  <td>
                                    <span class="text-dark-75 font-weight-bolder d-block font-size-lg">
                                      400$
                                    </span>
                                  </td>
                                  <td>
                                    <span class="text-dark-75 font-weight-bolder d-block font-size-lg">
                                      Accepted
                                    </span>
                                  </td>
                                </tr>
                                <tr>
                                  <td class="">
                                    <a href="#"
                                      class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">
                                      Bob
                                    </a>
                                  </td>
                                  <td>
                                    <span class="text-dark-75 font-weight-bolder d-block font-size-lg">
                                      100$
                                    </span>
                                  </td>
                                  <td>
                                    <span class="text-dark-75 font-weight-bolder d-block font-size-lg">
                                      Rejected
                                    </span>
                                  </td>

                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                        <!--end::Table-->
                      </div>
                      <!--end::Tap pane-->
                    </div>
                  </div>
                </div>
              </div>
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
