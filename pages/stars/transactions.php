<?php
include_once("../login_signup/check_session.php");
include_once("../login_signup/db_connection.php");
if (!isset($_GET['starId'])) {
  header("location:./stars.php");
} else {
  $id = $_GET['starId'];
}

$data1 = mysqli_query(
  $conn,
  "SELECT * FROM `transactions` 
  WHERE `seller_id` = $id AND product_name = 'song';"
);


?>

<!DOCTYPE html>

<html lang="en">

<!--begin::Head-->

<head>
  <base href="../../">
  <meta charset="utf-8" />
  <title>Star Details | transactions</title>
  <?php
  include("../../partials/csslinks.php");
  ?>
  <link rel="stylesheet" href="assets/css/custom/user_details.css">
  <style>
    @media screen and (max-width: 355px) {

      ul.nav li:nth-child(4),
      ul.nav li:nth-child(4) a {
        margin-left: 0 !important;
      }
    }
  </style>
</head>

<!--end::Head-->

<!--begin::Body-->

<body id="kt_body" class="header-fixed header-mobile-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
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

            <ul class="nav nav-tabs nav-tabs-line nav-bold nav-tabs-line-2x d-flex align-items-center ml-2 ml-md-8" style="border: none; font-size: 1.12rem;">
              <li class="nav-item">
                <a class="nav-link " href="pages/stars/star_details.php?activeLinkId=stars&starId=<?php echo $id ?>">Overview</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="pages/stars/allSongs.php?activeLinkId=stars&starId=<?php echo $id ?>">Songs</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="pages/stars/eventsPerformed.php?activeLinkId=stars&starId=<?php echo $id ?>">Events Performed</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="pages/stars/transactions.php?activeLinkId=stars&starId=<?php echo $id ?>">Transactions</a>
              </li>
            </ul>
            <!--end::Header Menu-->

            <!--end::Header Menu Wrapper-->

            <!--begin::Topbar-->
            <div class="topbar">
              <!--begin::User-->
              <div class="topbar-item">
                <div class="btn btn-icon btn-icon-mobile w-auto btn-clean d-flex align-items-center btn-lg px-2" id="kt_quick_user_toggle">
                  <span class="text-muted font-weight-bold font-size-base d-none d-md-inline mr-1">Hi,</span>
                  <span class="text-dark-50 font-weight-bolder font-size-base d-none d-md-inline mr-3">
                    <?php echo $_SESSION['name'] ?>
                  </span>
                  <span class="symbol symbol-lg-35 symbol-25 symbol-light-success">
                    <span class="symbol-label font-size-h5 font-weight-bold">
                      <?php echo substr($_SESSION['name'], 0, 1)  ?>
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

        <!--begin::Content-->
        <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
          <div class="tab-content mt-5" id="myTabContent" style="overflow-x: hidden;">

            <div class="tab-pane fade show active" id="kt_tab_pane_4" role="tabpanel" aria-labelledby="kt_tab_pane_4">
              <div class="container">

                <div class="card card-custom gutter-b">
                  <!--begin::Header-->
                  <div class="card-header py-5">
                    <h3 class="card-title align-items-start flex-column">
                      <span class="card-label font-weight-bolder text-dark">Transactions</span>
                      <span class="text-muted mt-3 font-weight-bold font-size-lg">
                        Lastest transactions performed
                      </span>
                    </h3>
                  </div>
                  <!--end::Header-->
                  <!--begin::Body-->
                  <div class="card-body">
                    <!--begin::Table-->
                    <div class="table-responsive ">
                      <table class="table table-bordered table-head-custom table-vertical-center" id="kt_advance_table_widget_4">
                        <thead class="bg-primary">
                          <th class="pl-10" style="min-width: 120px">
                            <span class="text-dark">Transaction id</span>
                          </th>
                          <th style="min-width: 110px">
                            <span class="text-dark">Type</span>
                          </th>
                          <th style="min-width: 120px">
                            <span class="text-dark">Product</span>
                          </th>
                          <th style="min-width: 120px">
                            <span class="text-dark">Amount</span>
                          </th>
                          <th style="min-width: 110px">
                            <span class="text-dark">Date</span>
                          </th>
                        </thead>
                        <tbody>
                          <?php
                          // transactions as seller
                          if (mysqli_num_rows($data1) > 0) {

                            while ($row1 = mysqli_fetch_assoc($data1)) {
                              echo '<tr>
                                  <td class="pl-10">
                                      <span
                                          class="text-dark-75 font-weight-bolder text-hover-primary font-size-lg">
                                          ' . $row1['id'] . '
                                        </span>
                                  </td>
                                  <td>
                                      <span class="text-dark-75 font-weight-bolder d-block font-size-lg">Received</span>
                                  </td>
                                  <td>
                                      <span class="text-dark-75 font-weight-bolder d-block font-size-lg">
                                      ' . $row1['product_name'] . '
                                      </span>
                                  </td>
                                  <td>
                                      <span class="text-info font-weight-bolder d-block font-size-lg">
                                      ' . $row1['amount'] . '&nbsp;&dollar;
                                      </span>
                                  </td>
                                  <td>
                                      <span class="text-dark-75 font-weight-bolder d-block font-size-lg">
                                      ' . $row1['date'] . '
                                      </span>
                                  </td>

                              </tr>';
                            }
                          }

                          ?>

                        </tbody>
                      </table>
                    </div>
                    <!--end::Table-->
                  </div>
                  <!--end::Body-->
                </div>
              </div>
            </div>

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
  <?php include("../../partials/_extras/offcanvas/quick-user.php") ?>
  <?php
  include("../../partials/jslinks.php");
  ?>


</body>

<!--end::Body-->

</html>