<?php
include_once('../checkUsersSession.php');
include_once('../db_connection.php');

if (isset($_GET["roleTransaction"])) {
  $roleTransaction = $_GET["roleTransaction"];
  $title = substr($roleTransaction, 0,  strpos($roleTransaction, "Transaction"));
} else {
  $roleTransaction = "starTransactions";
}
$uName = $title . "_name";

// select transactions as a seller
$id = $_SESSION['id'];
$data1 = mysqli_query($conn, "SELECT * FROM `transactions` WHERE `seller_id` = $id;");

// select transaction as a buyer
$data2 = mysqli_query($conn, "SELECT * FROM `transactions` WHERE `buyer_id` = $id;");


?>
<!DOCTYPE html>

<html lang="en">

<!--begin::Head-->

<head>
    <base href="../../../">
    <meta charset="utf-8" />
    <title><?php echo "$title transactions" ?></title>
    <?php
  include("../../../partials/csslinks.php");
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
  include("../../../partials/_header-mobile.php");
  ?>

    <div class="d-flex flex-column flex-root">

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
                                    <span
                                        class="text-muted font-weight-bold font-size-base d-none d-md-inline mr-1">Hi,</span>
                                    <span
                                        class="text-dark-50 font-weight-bolder font-size-base d-none d-md-inline mr-3">
                                        <?php echo $_SESSION["$uName"]; ?>
                                    </span>
                                    <span class="symbol symbol-lg-35 symbol-25 symbol-light-success">
                                        <span class="symbol-label font-size-h5 font-weight-bold">
                                            <?php echo substr($_SESSION["$uName"], 0, 1) ?>
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
                <div class="content d-flex flex-column flex-column-fluid px-8 py-12" id="kt_content">

                    <!--Content area here-->

                    <div class="d-flex flex-column-fluid">
                        <!--begin::Container-->
                        <?php include_once("./$roleTransaction.php"); ?>
                        <!--end::Container-->
                    </div>
                    <!--end::Content-->
                </div>
                <?php include("../../../partials/_footer.php"); ?>

            </div>
            <!--end::Wrapper-->

        </div>
        <?php
    include("../../../partials/_extras/offcanvas/quick-" . $title . ".php");
    include("../../../partials/jslinks.php");
    ?>

</body>

<!--end::Body-->

</html>