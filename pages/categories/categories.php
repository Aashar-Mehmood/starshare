<?php
include_once("../login_signup/check_session.php");
include_once("../login_signup/db_connection.php");
?>
<!DOCTYPE html>

<html lang="en">

<!--begin::Head-->

<head>
  <base href="../../">
  <meta charset="utf-8" />
  <title>Categories</title>
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

<body id="kt_body"
  class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
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
          <!-- Start New Star Category Form -->
          <div class="modal fade" id="newCategory" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle">Create a new Sub Category</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form class="form" action="pages/categories/addCategory.php" method="POST"
                    enctype="multipart/form-data">
                    <div class="form-group">
                      <label>Name :</label>
                      <input type="text" name="child" class="form-control form-control-solid" />
                    </div>

                    <div class="form-group">
                      <label>Select Parent :</label>
                      <select name="parent" class="form-control form-control-solid">
                        <option>Star</option>
                        <option>Organizer</option>
                        <option>Supplier</option>
                      </select>
                    </div>
                    <div class="d-flex w-50 justify-content-between mt-12">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <input type="submit" name="addNew" class="btn btn-primary" />
                    </div>

                  </form>
                </div>

              </div>
            </div>
          </div>
          <!-- End New Star Category Form -->

          <!-- Start Main Container -->
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-xl-8">
                <div class="card card-custom gutter-b">
                  <!--begin::Header-->
                  <div class="card-header d-flex align-items-center">
                    <h2 class="card-title">Categories</h2>
                    <button class="btn btn-primary btn-large" data-target="#newCategory" data-toggle="modal">
                      Add Category
                    </button>
                  </div>
                  <!--end::Header-->
                  <!--begin::Body-->
                  <div class="card-body pt-2 pb-0 mt-n3">
                    <div class="tab-content mt-5" id="myTabTables11">
                      <div class="table-responsive">
                        <table class="table table-vertical-center table-bordered">
                          <thead class="thead-dark">
                            <tr>
                              <th style="min-width: 150px;">Parent Category</th>
                              <th style="min-width: 150px;">Sub Category</th>
                              <th style="min-width: 200px; padding-left: 1.75rem;">Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php
                            $query = "SELECT * FROM `ss_categories`;";
                            $result = mysqli_query($conn, $query);

                            while ($row = mysqli_fetch_assoc($result)) {
                              $categoryId = $row['id'];
                              echo "
                                <tr>
                                  <td>
                                    <a href='#'
                                      class='text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg'>" .
                                $row['parent_category'] .
                                "</a>
                                  </td>
                                  <td>
                                    <span class='text-dark-75 font-weight-bolder d-block font-size-lg'>" .
                                $row['child'] .
                                "</span>
                                  </td>" .
                                "<td>
                                    <a href='pages/categories/editCategory.php?id=$categoryId' title='Edit'
                                      class='btn btn-icon btn-light btn-hover-primary btn-sm ml-5 mr-10'>
                                      <i class='
                                        fas fa-edit text-primary' aria-hidden='true'></i>
                                    </a>
                                    <a href='pages/categories/deleteCategory.php?id=$categoryId' title='Delete' class='btn btn-icon btn-light btn-hover-danger btn-sm'>
                                    <i class='
                                      fas fa-trash text-danger' aria-hidden='true'></i>
                                    </a>
                                  </td>
                                </tr>
                                ";
                            }

                            ?>

                          </tbody>
                        </table>
                      </div>
                    </div>
                    <!--end::Table-->
                  </div>
                  <!--end::Tap pane-->
                </div>
              </div>
              <!--end::Body-->
            </div>
          </div>
          <!-- End Main Container -->

        </div>
        <!--end::Content-->

        <?php include("../../partials/_footer.php"); ?>
      </div>

      <!--end::Wrapper-->
    </div>

    <!--end::Page-->
  </div>

  <!--end::Main-->
  <?php
  include("../../partials/_extras/offcanvas/quick-user.php");
  include("../../partials/jslinks.php");
  if (isset($_GET['message'])) {
    $alert = $_GET['message'];
    echo "<script>alert('$alert')</script>";
  }
  ?>
</body>

<!--end::Body-->

</html>
