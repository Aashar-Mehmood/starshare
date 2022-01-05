<?php
  if(isset($_GET["loginRole"])){
    $role = $_GET["loginRole"];
  }
  else{
    $role = "star";
  }
?>
<!DOCTYPE html>

<html lang="en">

<!--begin::Head-->

<head>
  <base href="../../">
  <meta charset="utf-8" />
  <title>Login As a <?php echo $role ?></title>
  <?php include("../../partials/csslinks.php"); ?>

</head>
<style>
.form-group input,
.form-group textarea,
.form-group .custom-file label {
  border: 0.2px solid black;
}

.form-group .custom-file input {
  border: none;
}

</style>

<!--end::Head-->

<!--begin::Body-->

<body id="kt_body"
  class="header-fixed header-mobile-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
  <!--begin::Main-->

  <?php include("../../partials/_header-mobile.php"); ?>
  <div class="d-flex flex-column flex-root">

    <!--begin::Page-->
    <div class="d-flex flex-row flex-column-fluid page">

      <?php include("../../partials/_asideForRoles.php"); ?>

      <!--begin::Wrapper-->
      <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">

        <?php include("../../partials/_header.php"); ?>

        <!--begin::Content-->
        <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-md-8 col-xl-6">
                <div class="card card-custom">
                  <div class="card-header">
                    <h3 class="card-title">
                      Login to your private profile
                    </h3>
                  </div>
                  <!--begin::Form-->
                  <form>
                    <div class="card-body">
                      <div class="form-group">
                        <label>Email <span class="text-danger">*</span></label>
                        <input type="email" class="form-control" placeholder="Enter email" />
                      </div>
                      <div class="form-group">
                        <label for="password">Password <span class="text-danger">*</span></label>
                        <input type="password" class="form-control" id="password" placeholder="Password" />
                      </div>
                    </div>
                  </form>
                  <div class="card-footer">
                    <a href="pages/login_signup/<?php echo $role?>/details.php">
                      <button class="btn btn-primary mr-2">Submit</button>
                    </a>
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

        <?php include("../../partials/_footer.php"); ?>
      </div>

      <!--end::Wrapper-->
    </div>

    <!--end::Page-->
  </div>

  <!--end::Main-->
  <?php include("../../partials/_extras/offcanvas/quick-user.php")?>
  <?php include("../../partials/jslinks.php"); ?>
</body>

<!--end::Body-->

</html>
