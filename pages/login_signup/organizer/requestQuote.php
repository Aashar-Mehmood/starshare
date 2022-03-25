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
  <title>Request a Quote</title>
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

        <!--begin::Header-->
        <div id="kt_header" class="header header-fixed">

          <!--begin::Container-->
          <div class="container-fluid d-flex align-items-stretch justify-content-between">

            <!--begin::Header Menu Wrapper-->
            <div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">

              <!--begin::Header Menu-->


              <!--end::Header Menu-->
            </div>

            <!--end::Header Menu Wrapper-->

            <!--begin::Topbar-->
            <div class="topbar">

              <!--begin::Search-->

              <!--end::Search-->

              <!--begin::User-->
              <div class="topbar-item">
                <div class="btn btn-icon btn-icon-mobile w-auto btn-clean d-flex align-items-center btn-lg px-2"
                  id="kt_quick_user_toggle">
                  <span class="text-muted font-weight-bold font-size-base d-none d-md-inline mr-1">Hi,</span>
                  <span class="text-dark-50 font-weight-bolder font-size-base d-none d-md-inline mr-3">
                    <?php echo $_SESSION["organizer_name"]; ?>
                  </span>
                  <span class="symbol symbol-lg-35 symbol-25 symbol-light-success">
                    <span class="symbol-label font-size-h5 font-weight-bold">
                      <?php echo substr($_SESSION["organizer_name"], 0, 1) ?>
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

        <!--end::Header-->


        <!--begin::Content-->
        <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-md-8 col-xl-6">
                <div class="card card-custom">
                  <div class="card-header">
                    <h2 class="card-title">
                      Send a Quote
                    </h2>
                  </div>
                  <!--begin::Form-->
                  <form>
                    <div class="card-body">
                      <div class="form-group">
                        <label>Select Organizer</label>
                        <select class="form-control form-control-solid" id="selectOrganizer">
                          <option style="visibility: hidden;"></option>
                          <option>Organizer 1 &nbsp;&nbsp;&nbsp; Rating : 4 stars &nbsp;&nbsp;&nbsp; Total Reviews : 12
                          </option>
                          <option>Organizer 2 &nbsp;&nbsp;&nbsp; Rating : 3 stars &nbsp;&nbsp;&nbsp; Total Reviews : 20
                          </option>
                          <option>Organizer 3 &nbsp;&nbsp;&nbsp; Rating : 5 stars &nbsp;&nbsp;&nbsp; Total Reviews : 10
                          </option>
                          <option>Organizer 4 &nbsp;&nbsp;&nbsp; Rating : 4 stars &nbsp;&nbsp;&nbsp; Total Reviews : 34
                          </option>
                          <option>Organizer 5 &nbsp;&nbsp;&nbsp; Rating : 3 stars &nbsp;&nbsp;&nbsp; Total Reviews : 20
                          </option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label>Quote Amount :</label>
                        <input type="number" class="form-control" placeholder="Enter quote Amount" />
                      </div>
                      <div class="form-group">
                        <label for="description">Description :</label>
                        <textarea class="form-control" id="description" rows="3"></textarea>
                      </div>

                    </div>
                  </form>
                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary mr-2">Send</button>
                    <button type="reset" class="btn btn-secondary">Cancel</button>
                  </div>
                  </form>
                  <!--end::Form-->
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
  <?php include("../../../partials/_extras/offcanvas/quick-organizer.php") ?>
  <?php include("../../../partials/jslinks.php"); ?>
</body>

<!--end::Body-->

</html>
