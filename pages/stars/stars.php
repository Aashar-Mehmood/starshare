<?php
include_once("../login_signup/check_session.php");
include_once('../login_signup/db_connection.php');

if (isset($_GET['page'])) {
  $page = $_GET['page'];
} else {
  $page = 1;
}


$countQuery = "SELECT * FROM `stars`;";


if (isset($_POST['search']) && !empty($_POST['searchedCountry'])) {
  $country = $_POST['searchedCountry'];
  $countQuery = "SELECT * FROM `stars` WHERE `address` LIKE '%$country';";
}

$result = mysqli_query($conn, $countQuery);
$totalRows = mysqli_num_rows($result);
$recordPerPage = 5;
$totalPages = ceil($totalRows / $recordPerPage);
$offset = ($page - 1) * $recordPerPage;

$limitSelect = "SELECT * FROM `stars` LIMIT $recordPerPage OFFSET $offset;";

if (isset($_POST['search']) && !empty($_POST['searchedCountry'])) {
  $country = $_POST['searchedCountry'];
  $limitSelect = "SELECT * FROM `stars` WHERE `address` LIKE '%$country' LIMIT $recordPerPage OFFSET $offset;";
}

$limitResult = mysqli_query($conn, $limitSelect);
?>

<!DOCTYPE html>

<html lang="en">

<!--begin::Head-->

<head>
  <base href="../../">
  <meta charset="utf-8" />
  <title>Stars</title>
  <?php
  include("../../partials/csslinks.php");
  ?>
  <style>
  @media screen and (max-width:1024px) {
    a.btn-light-success {
      margin-left: 2rem;
      margin-bottom: 0.75rem;
    }
  }

  </style>
</head>

<?php
include_once("../login_signup/check_session.php");
?>

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

        <?php include("../../partials/_header.php"); ?>

        <!--begin::Content-->
        <div class="content d-flex flex-column flex-column-fluid px-8 py-12" id="kt_content">

          <!--Content area here-->

          <div class="container">
            <div class="row flex flex-center my-8">
              <div class="col-lg-12">
                <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
                  <div class="input-group input-group-sm input-group-solid bg-white"
                    style="height: 46px; box-shadow:0 1px 6px 0 rgb(32 33 36 / 70%)">
                    <input required type="text" name="searchedCountry" class="form-control pl-4"
                      placeholder="Search by City, Country">
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <span class="svg-icon svg-icon-lg">
                          <!--begin::Svg Icon | path:assets/media/svg/icons/General/Search.svg-->
                          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                              <rect x="0" y="0" width="24" height="24"></rect>
                              <path
                                d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z"
                                fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                              <path
                                d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z"
                                fill="#000000" fill-rule="nonzero"></path>
                            </g>
                          </svg>
                          <!--end::Svg Icon-->
                        </span>
                      </span>
                    </div>
                  </div>
                  <input type="submit" name="search" value="Search" class="btn btn-primary btn-lg my-8">
                  <a href="<?php echo $_SERVER['PHP_SELF'] ?>" class="btn btn-primary btn-lg ml-8">Display All</a>
                </form>

              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <!--begin::Advance Table Widget 4-->
                <div class="card card-custom card-stretch gutter-b">
                  <!--begin::Header-->
                  <div class="card-header border-0 py-5">
                    <h3 class="card-title align-items-start flex-column">
                      <span class="card-label font-weight-bolder text-dark">All Stars</span>
                      <span class="text-muted mt-3 font-weight-bold font-size-sm">List of all registered stars on the
                        website</span>
                    </h3>
                    <div class="card-toolbar">
                      <div class="btn-group">
                        <button type="button" class="btn btn-info  dropdown-toggle" data-toggle="dropdown"
                          aria-haspopup="true" aria-expanded="false">Filter by category</button>
                        <div class="dropdown-menu">

                          <ul class="navi navi-accent navi-hover navi-bold">
                            <li class="navi-item">
                              <a class="navi-link" href="#">
                                <span class="navi-text font-size-lg">Jazz</span>
                              </a>
                            </li>
                            <li class="navi-item">
                              <a class="navi-link" href="#">
                                <span class="navi-text font-size-lg">Rock</span>
                              </a>
                            </li>
                            <li class="navi-item">
                              <a class="navi-link" href="#">
                                <span class="navi-text font-size-lg">Pop</span>
                              </a>
                            </li>
                            <li class="navi-item">
                              <a class="navi-link" href="#">
                                <span class="navi-text font-weight-bold font-size-lg">Top Performing</span>
                              </a>
                            </li>
                          </ul>


                        </div>
                      </div>
                    </div>
                  </div>
                  <!--end::Header-->
                  <!--begin::Body-->
                  <div class="card-body pt-0 pb-3">
                    <div class="tab-content">
                      <!--begin::Table-->
                      <div class="table-responsive">
                        <table class="table table-head-bg table-vertical-center">
                          <thead>
                            <tr class="text-left">
                              <th style="min-width: 200px" class="pl-7">Name</th>
                              <th style="min-width: 100px;">Email</th>
                              <th style="min-width: 100px;">Contact</th>
                              <th style="min-width: 100px;">Address</th>
                              <th style="min-width: 130px;">Total Songs</th>
                              <th style="min-width: 130px;">Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php
                            while ($record = mysqli_fetch_assoc($limitResult)) {
                              $sId = $record['u_id'];
                              $name = $record['name'];
                              $email = $record['email'];
                              $contact = $record['contact'];
                              $address = $record['address'];
                              $profile = $record['profile_img'];
                              $countSongs = mysqli_query($conn, "SELECT * FROM `songs` WHERE `star_id` = $sId AND `status`= 'published';");
                              $totalSongs = mysqli_num_rows($countSongs);
                              echo '
                              <tr>
                              <td class="pl-0 py-8">
                                <div class="d-flex align-items-center">
                                  <div class="symbol symbol-50 symbol-light mr-4">
                                    <span class="symbol-label">
                                      ' . "<img src='$profile' class='w-100 h-100 align-self-end'>" . '
                                    </span>
                                  </div>
                                  <div>
                                    <p 
                                      class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">
                                      ' . $name . '
                                    </p>
                                  </div>
                                </div>
                              </td>
                              <td>
                                <span class="text-dark-75 font-weight-bolder d-block font-size-lg">
                                ' . $email . '
                                </span>
                              </td>
                              <td>
                                <span class="text-dark-75 font-weight-bolder d-block font-size-lg">
                                ' . $contact . '
                                </span>

                              </td>
                              <td>
                                <span class="text-dark-75 font-weight-bolder d-block font-size-lg">
                                ' . $address . '
                                </span>
                              </td>
                              <td>
                                <span class="text-dark-75 font-weight-bolder d-block font-size-lg">
                                ' . $totalSongs . '
                                </span>
                              </td>
                              
                              <td class="pr-0 justify-content-between">
                                ' . "<a href='pages/stars/star_details.php?starId=$sId'
                                  class='btn btn-light-success font-weight-bolder font-size-sm'>" . '
                                  View
                                </a>
                                ' . "<a href='pages/stars/deleteStar.php?starId=$sId' class='btn btn-danger ml-8 font-weight-bolder font-size-sm'>
                                  Remove
                                </a>" . '
                              </td>
                            </tr>
                              ';
                            }
                            ?>
                          </tbody>
                        </table>
                      </div>
                      <!--end::Table-->
                    </div>
                  </div>
                  <!--end::Body-->
                </div>
                <!--end::Advance Table Widget 4-->
              </div>


            </div>
            <div class="d-flex justify-content-center align-items-center flex-wrap mt-12">
              <div class="d-flex flex-wrap py-2 px-6 justify-content-center"
                style="background-color: white; border-radius: 10px; width:60%;">
                <?php
                if ($page == 1) {
                  $prev = $page;
                } else {
                  $prev = $page - 1;
                }
                echo "<a href='pages/stars/stars.php?page=$prev' class='btn btn-icon btn-sm btn-light-primary mr-2 my-1'><i
                class='ki ki-bold-arrow-back icon-xs'></i></a>";
                for ($i = 1; $i <= $totalPages; $i++) {
                  echo "<a href='pages/stars/stars.php?page=$i' id = 'page$i'
                class='paginationBtn btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1'>$i</a>";
                }
                if ($page == $totalPages) {
                  $next = $page;
                } else {
                  $next = $page + 1;
                }
                echo "<a href='pages/stars/stars.php?page=$next' class='btn btn-icon btn-sm btn-light-primary mr-2 my-1'><i
                class='ki ki-bold-arrow-next icon-xs'></i></a>";

                ?>

              </div>
            </div>
          </div>

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
  <script>
  const pageNum = document.URL.split('page=')[1];
  var activePage = document.getElementById(`page${pageNum}`);
  if (!activePage) {
    activePage = document.querySelectorAll('a.paginationBtn')[0];
  }
  activePage.classList.add('active');
  </script>
</body>

<!--end::Body-->

</html>
