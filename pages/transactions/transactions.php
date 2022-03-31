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
                <div class="card-header py-5">
                  <h3 class="card-title align-items-start flex-column">
                    <span class="card-label font-weight-bolder text-dark">Transactions</span>
                    <span class="text-muted mt-3 font-weight-bold font-size-lg">Lastest transactions performed</span>
                  </h3>

                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="card-body">
                  <!--begin::Table-->
                  <div class="table-responsive">
                    <table class="table table-bordered table-head-custom table-vertical-center"
                      id="kt_advance_table_widget_4">
                      <thead class="bg-primary">
                        <tr class="text-left">
                          <th style="min-width: 120px">
                            <span class="text-dark">transaction id</span>
                          </th>
                          <th style="min-width: 110px">
                            <span class="text-dark">Agent</span>
                          </th>
                          <th style="min-width: 110px">
                            <span class="text-dark">Date</span>
                          </th>
                          <th style="min-width: 120px">
                            <span class="text-dark">Amount withdraw Req</span>
                          </th>
                          
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            <a href="#" class="text-dark-75 font-weight-bolder  font-size-lg">56037-XDER</a>
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
                        </tr>
                        <tr>
                          <td>
                            <a href="#" class="text-dark-75 font-weight-bolder font-size-lg">05822-FXSP</a>
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
                        </tr>
                        <tr>
                          <td>
                            <a href="#" class="text-dark-75 font-weight-bolder  ont-size-lg">00347-BCLQ</a>
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
                        </tr>
                        <tr>
                          <td>
                            <a href="#" class="text-dark-75 font-weight-bolder  font-size-lg">4472-QREX</a>
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
                        </tr>

                        <tr>
                          <td>
                            <a href="#" class="text-dark-75 font-weight-bolder  font-size-lg">56037-XDER</a>
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
                        </tr>
                        <tr>

                          <td>
                            <a href="#" class="text-dark-75 font-weight-bolder  font-size-lg">05822-FXSP</a>
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
                        </tr>
                        <tr>
                          <td>
                            <a href="#" class="text-dark-75 font-weight-bolder  ont-size-lg">00347-BCLQ</a>
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

                        </tr>
                        <tr>
                          <td>
                            <a href="#" class="text-dark-75 font-weight-bolder  font-size-lg">4472-QREX</a>
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
