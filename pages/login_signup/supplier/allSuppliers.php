<?php
include_once('../checkUsersSession.php');
include_once('../db_connection.php');

if (isset($_GET['page'])) {
  $page = $_GET['page'];
} else {
  $page = 1;
}


$countQuery = "SELECT * FROM `suppliers`;";


if (isset($_POST['search']) && !empty($_POST['searchedText'])) {
  $searchedText = $_POST['searchedText'];
  $countQuery = "SELECT * FROM `suppliers` WHERE `name` LIKE '%$searchedText%' OR `address` LIKE '%$searchedText%' ;";
}

$result = mysqli_query($conn, $countQuery);
$totalRows = mysqli_num_rows($result);
$recordPerPage = 9;
$totalPages = ceil($totalRows / $recordPerPage);
$offset = ($page - 1) * $recordPerPage;

$limitSelect = "SELECT * FROM `suppliers` LIMIT $recordPerPage OFFSET $offset;";

if (isset($_POST['search']) && !empty($_POST['searchedText'])) {
  $searchedText = $_POST['searchedText'];
  $limitSelect = "SELECT * FROM `suppliers` WHERE `name` LIKE '%$searchedText%' OR `address` LIKE '%$searchedText%' LIMIT $recordPerPage OFFSET $offset;";
}

$limitResult = mysqli_query($conn, $limitSelect);
?>

<!DOCTYPE html>

<html lang="en">

<!--begin::Head-->

<head>
  <base href="../../../">
  <meta charset="utf-8" />
  <title>Supplier Public Profile</title>
  <?php include("../../../partials/csslinks.php"); ?>

</head>

<!--end::Head-->

<!--begin::Body-->

<body id="kt_body" class="header-fixed header-mobile-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
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
            <div class="row flex flex-center my-8">
              <div class="col-md-10">
                <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
                  <div class="input-group input-group-sm input-group-solid bg-white" style="height: 46px; box-shadow:0 1px 6px 0 rgb(32 33 36 / 70%)">
                    <input required type="text" name="searchedText" class="form-control pl-4" placeholder="Search by Name, City or Country">
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <span class="svg-icon svg-icon-lg">
                          <!--begin::Svg Icon | path:assets/media/svg/icons/General/Search.svg-->
                          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                              <rect x="0" y="0" width="24" height="24"></rect>
                              <path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                              <path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero"></path>
                            </g>
                          </svg>
                          <!--end::Svg Icon-->
                        </span>
                      </span>
                    </div>
                  </div>
                  <input type="submit" name="search" value="Search" class="btn btn-primary btn-lg my-8">
                  <a href="<?php echo $_SERVER['PHP_SELF'] ?>" class="btn btn-primary btn-lg ml-8">
                    Reset Filter
                  </a>
                </form>

              </div>
            </div>
            <div class="row">
              <?php
              while ($record = mysqli_fetch_assoc($limitResult)) {
                $id = $record['u_id'];
                $name = $record['name'];
                $email = $record['email'];
                $address = $record['address'];
                $desc = $record['description'];
                $profile = $record['profile_img'];
                $countProducts = mysqli_query($conn, "SELECT * FROM `products` WHERE `supplier_id` = $id;");
                $totalProducts = mysqli_num_rows($countProducts);
                $eventsParticipated = mysqli_num_rows(
                  mysqli_query(
                    $conn,
                    "SELECT id FROM quotations WHERE supplier_id = $id AND `status` = 'accepted';"
                  )
                );
                echo '<div class="col-md-6 col-xl-4">
                <div class="card card-custom gutter-b">
                  <!--begin::Body-->
                  <div class="card-body">
                    <!--begin::Wrapper-->
                    <div class="d-flex justify-content-between flex-column pt-4 h-100">
                      <!--begin::Container-->
                      <div class="pb-5">
                        <!--begin::Header-->
                        <div class="d-flex flex-column flex-center">
                          <!--begin::Symbol-->
                          <div class="symbol symbol-120 symbol-circle symbol-success overflow-hidden">
                            <span class="symbol-label">'
                  . "<img src='$profile' class='h-100 align-self-end' alt='$name profile'>" .
                  '</span>
                          </div>
                          <!--end::Symbol-->
                          <!--begin::Username-->
                          <p
                            class="card-title font-weight-bolder text-dark-75 text-hover-primary font-size-h4 m-0 pt-7 pb-1">
                            ' . $name . '
                          </p>
                          <!--end::Username-->
                          <!--begin::Info-->
                          <div class="font-weight-bold text-dark-50 font-size-sm pb-6">
                          ' . $address . '
                          </div>
                          <!--end::Info-->
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="pt-1">
                          <!--begin::Text-->
                          <p class="text-dark-75 font-weight-normal font-size-lg m-0 pb-7">
                          ' . $desc . '
                          </p>
                          <!--end::Text-->
                          <!--begin::Item-->
                          <div class="d-flex align-items-center justify-content-between pb-7">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-45 symbol-light">
                              <span class="symbol-label">
                                <i class="fas fa-music menu-icon"></i>
                              </span>
                            </div>
                            <!--end::Symbol-->
                            <p class="text-dark font-size-lg">Total Products</p>
                            <!--begin::label-->
                            <span
                              class="font-weight-bolder label label-xl label-light-success label-inline px-3 py-5 min-w-45px">
                              ' . $totalProducts . '
                              </span>
                            <!--end::label-->
                          </div>
                          <div class="d-flex align-items-center justify-content-between pb-9">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-45 symbol-light">
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
                            <div class="d-flex align-items-center justify-content-center">
                              <!--begin::Symbol-->
                              Events Participated
                              <!--end::Symbol-->
                            </div>
                            <!--end::Text-->
                            <!--begin::label-->
                            <span
                              class="font-weight-bolder label label-xl label-light-success label-inline px-3 py-5 min-w-45px">
                              ' . $eventsParticipated . '
                              </span>
                            <!--end::label-->
                          </div>
                          <!--end::Item-->
                          <!--begin::Item-->
                          <div class="d-flex justify-content-center">' .
                  "<a href='pages/login_signup/organizer/quoteFromProfile.php?supplierId=$id'>" .
                  '<button class="btn btn-primary">
                                Send Quote
                              </button>
                            </a>
                          </div>
                          <!--end::Item-->
                        </div>
                        <!--end::Body-->
                      </div>
                      <!--end::Container-->
                    </div>
                    <!--end::Wrapper-->
                  </div>
                  <!--end::Body-->
                </div>
              </div>';
              }
              ?>

            </div>
            <div class="d-flex justify-content-center align-items-center flex-wrap mt-12">
              <div class="d-flex flex-wrap py-2 px-6 justify-content-center" style="background-color: white; border-radius: 10px; width:60%;">
                <?php
                if ($page == 1) {
                  $prev = $page;
                } else {
                  $prev = $page - 1;
                }
                echo "<a href='pages/login_signup/supplier/allSuppliers.php?page=$prev' class='btn btn-icon btn-sm btn-light-primary mr-2 my-1'><i
                class='ki ki-bold-arrow-back icon-xs'></i></a>";
                for ($i = 1; $i <= $totalPages; $i++) {
                  echo "<a href='pages/login_signup/supplier/allSuppliers.php?page=$i' id = 'page$i'
                class='paginationBtn btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1'>$i</a>";
                }
                if ($page == $totalPages) {
                  $next = $page;
                } else {
                  $next = $page + 1;
                }
                echo "<a href='pages/login_signup/supplier/allSuppliers.php?page=$next' class='btn btn-icon btn-sm btn-light-primary mr-2 my-1'><i
                class='ki ki-bold-arrow-next icon-xs'></i></a>";

                ?>

              </div>
            </div>
          </div>

        </div>

        <!--end::Content-->

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