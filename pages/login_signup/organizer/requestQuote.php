<?php
  include_once('../checkUsersSession.php');
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

        <?php include("../../../partials/_header.php"); ?>

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
  <?php include("../../../partials/_extras/offcanvas/quick-user.php") ?>
  <?php include("../../../partials/jslinks.php"); ?>
</body>

<!--end::Body-->

</html>
