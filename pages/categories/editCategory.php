<?php
include_once("../login_signup/check_session.php");
include_once("../login_signup/db_connection.php");
$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM `ss_categories` WHERE `id` = '$id';");
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>

<html lang="en">

<!--begin::Head-->

<head>
  <base href="../../">
  <meta charset="utf-8" />
  <title>Edit Category</title>
  <?php include("../../partials/csslinks.php"); ?>
  <style>
    @media screen and (max-width:768px) {
      div.container {
        margin-top: 8rem;
      }
    }

    @media screen and (max-width:375px) {
      div.w-50 {
        width: 75% !important;
      }
    }
  </style>
</head>
<!--end::Head-->

<!--begin::Body-->

<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
  <!--begin::Main-->

  <?php include("../../partials/_header-mobile.php"); ?>
  <div class="d-flex flex-column flex-root">

    <!--begin::Page-->
    <div class="d-flex flex-row flex-column-fluid page">

      <?php include("../../partials/_aside.php"); ?>

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
                      Edit Category
                    </h3>
                  </div>
                  <!--begin::Form-->
                  <form method="POST" action='<?php echo "pages/categories/edited.php?id=" . $id ?>'>
                    <div class="card-body">
                      <div class="form-group">
                        <label>Update Name :</label>
                        <input name="newName" type="text" class="form-control form-control-solid" placeholder="Star" value="<?php echo $row['child'] ?>" />
                      </div>

                      <div class="form-group">
                        <label>Update Parent :</label>
                        <select name="parentCategory" id="parentCategory" class="form-control form-control-solid">
                          <option <?php
                                  if ($row['parent_category'] == "Star") echo 'selected';
                                  ?>>
                            Star
                          </option>
                          <option <?php
                                  if ($row['parent_category'] == "Organizer") echo 'selected';
                                  ?>>
                            Organizer
                          </option>
                          <option <?php
                                  if ($row['parent_category'] == "Supplier") echo 'selected';
                                  ?>>
                            Supplier
                          </option>
                        </select>
                      </div>
                    </div>
                    <div class="card-footer">
                      <input type="submit" value="Submit" name="submit" class="btn btn-primary mr-4" />
                      <a href="pages/categories/categories.php?activeLinkId=categories" class="btn btn-secondary">Cancel</a>
                    </div>
                  </form>
                  <!--end::Form-->
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- End::Content -->
        <?php include("../../partials/_footer.php"); ?>

      </div>
      <!--end::Content-->

    </div>

    <!--end::Wrapper-->
  </div>

  <!--end::Page-->
  </div>

  <!--end::Main-->
  <?php include("../../partials/_extras/offcanvas/quick-user.php") ?>
  <?php include("../../partials/jslinks.php"); ?>
</body>

<!--end::Body-->

</html>