<?php
include_once("../login_signup/check_session.php");
include_once("../login_signup/db_connection.php");
if (!isset($_GET['supplierId'])) {
    header("location:./suppliers.php");
} else {
    $id = $_GET['supplierId'];
    $supplierData = mysqli_query($conn, "SELECT * FROM `suppliers` WHERE `u_id` = $id");
    $arr = mysqli_fetch_array($supplierData);
    $name = $arr['name'];
    $email = $arr['email'];
    $contact = $arr['contact'];
    $address = $arr['address'];
    $description = $arr['description'];
    $profile_img = $arr['profile_img'];

    $productData = mysqli_query($conn, "SELECT * FROM `products` WHERE `supplier_id` = $id;");
    $totalProducts = mysqli_num_rows($productData);

    $currentMonth = date('Y-m');
    $currentYear = date('Y');

    $totalProducts = mysqli_num_rows(
        mysqli_query(
            $conn,
            "SELECT id FROM products WHERE supplier_id = $id;"
        )
    );

    $monthlyProducts = mysqli_num_rows(
        mysqli_query(
            $conn,
            "SELECT id FROM products WHERE supplier_id = $id AND upload_date LIKE '$currentMonth%';"
        )
    );
    $yearlyProducts = mysqli_num_rows(
        mysqli_query(
            $conn,
            "SELECT id FROM products WHERE supplier_id = $id AND upload_date LIKE '$currentYear%';"
        )
    );

    $totalEvents = mysqli_num_rows(
        mysqli_query(
            $conn,
            "SELECT id FROM quotations WHERE supplier_id = $id AND status = 'accepted';"
        )
    );
}
?>

<!DOCTYPE html>

<html lang="en">

<!--begin::Head-->

<head>
    <base href="../../">
    <meta charset="utf-8" />
    <title>Supplier Details</title>
    <?php
    include("../../partials/csslinks.php");
    ?>
    <link rel="stylesheet" href="assets/css/custom/user_details.css">

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
                                <a class="nav-link active" href="pages/suppliers/supplier_details.php?activeLinkId=suppliers&supplierId=<?php echo $id ?>">Overview</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="pages/suppliers/products.php?activeLinkId=suppliers&supplierId=<?php echo $id ?>">Products</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="pages/suppliers/transactions.php?activeLinkId=suppliers&supplierId=<?php echo $id ?>">Transactions</a>
                            </li>

                        </ul>
                        <!--end::Header Menu-->

                        <!--end::Header Menu Wrapper-->
                        <!--begin::Topbar-->
                        <div class="topbar">
                            <!--begin::User-->
                            <div class="topbar-item">
                                <div class="btn btn-icon btn-icon-mobile w-auto btn-clean d-flex align-items-center btn-lg px-2" id="kt_quick_user_toggle">
                                    <span class="text-muted font-weight-bold font-size-base d-none d-md-inline mr-1">
                                        Hi,
                                    </span>
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
                        <div class="tab-pane fade show active " id="kt_tab_pane_1" role="tabpanel" aria-labelledby="kt_tab_pane_1">
                            <div class="container">
                                <div class="row align-items-center">
                                    <div class="col-md-6 col-xl-4">
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
                                                                <span class="symbol-label">
                                                                    <img src="<?php echo $profile_img ?>" class="h-75 align-self-end" alt="">
                                                                </span>
                                                            </div>
                                                            <!--end::Symbol-->
                                                            <!--begin::Username-->
                                                            <p class="card-title font-weight-bolder text-dark-75  font-size-h4 m-0 pt-7 pb-1">
                                                                <?php echo $name ?>
                                                            </p>
                                                            <!--end::Username-->
                                                            <!--begin::Info-->
                                                            <div class="font-weight-bold text-dark-50 font-size-sm pb-6">
                                                                <?php echo $email ?>
                                                            </div>
                                                            <!--end::Info-->
                                                        </div>
                                                        <!--end::Header-->
                                                        <!--begin::Body-->
                                                        <div class="pt-1">
                                                            <!--begin::Text-->
                                                            <p class="text-dark-75 font-weight-nirmal font-size-lg m-0 pb-7">
                                                                <?php echo $description ?>
                                                            </p>
                                                            <!--end::Text-->
                                                            <!--begin::Item-->
                                                            <div class="d-flex align-items-center pb-9">
                                                                <!--begin::Symbol-->
                                                                <div class="symbol symbol-45 symbol-light mr-4">
                                                                    <span class="symbol-label">
                                                                        <span class="svg-icon svg-icon-2x svg-icon-dark-50">
                                                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Media/Equalizer.svg-->
                                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                    <rect x="0" y="0" width="24" height="24"></rect>
                                                                                    <rect fill="#000000" opacity="0.3" x="13" y="4" width="3" height="16" rx="1.5">
                                                                                    </rect>
                                                                                    <rect fill="#000000" x="8" y="9" width="3" height="11" rx="1.5">
                                                                                    </rect>
                                                                                    <rect fill="#000000" x="18" y="11" width="3" height="9" rx="1.5">
                                                                                    </rect>
                                                                                    <rect fill="#000000" x="3" y="13" width="3" height="7" rx="1.5">
                                                                                    </rect>
                                                                                </g>
                                                                            </svg>
                                                                            <!--end::Svg Icon-->
                                                                        </span>
                                                                    </span>
                                                                </div>
                                                                <!--end::Symbol-->
                                                                <!--begin::Text-->
                                                                <div class="d-flex flex-column flex-grow-1">
                                                                    <a class="text-dark-75  mb-1 font-size-lg font-weight-bolder">
                                                                        Total Events
                                                                    </a>
                                                                </div>
                                                                <!--end::Text-->
                                                                <!--begin::label-->
                                                                <span class="font-weight-bolder label label-xl label-light-success label-inline px-3 py-5 min-w-45px">
                                                                    <?php
                                                                    echo $totalEvents;
                                                                    ?>
                                                                </span>
                                                                <!--end::label-->
                                                            </div>
                                                            <!--end::Item-->
                                                            <!--begin::Item-->
                                                            <div class="d-flex align-items-center pb-9">
                                                                <!--begin::Symbol-->
                                                                <div class="symbol symbol-45 symbol-light mr-4">
                                                                    <span class="symbol-label">
                                                                        <i class="fab fa-shopify svg-icon svg-icon-2x svg-icon-dark-50"></i>
                                                                    </span>
                                                                </div>
                                                                <!--end::Symbol-->
                                                                <!--begin::Text-->
                                                                <div class="d-flex flex-column flex-grow-1">
                                                                    <a class="text-dark-75  mb-1 font-size-lg font-weight-bolder">
                                                                        Total Products
                                                                    </a>
                                                                </div>
                                                                <!--end::Text-->
                                                                <!--begin::label-->
                                                                <span class="font-weight-bolder label label-xl label-light-success label-inline px-3 py-5 min-w-45px">
                                                                    <?php
                                                                    echo $totalProducts;
                                                                    ?>
                                                                </span>
                                                                <!--end::label-->
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
                                    </div>
                                    <div class="col-md-6 col-xl-4">
                                        <div class="card card-custom bg-gray-100 card-stretch-half gutter-b">
                                            <!--begin::Header-->
                                            <div class="card-header border-0 bg-danger py-5">
                                                <h2 class="font-weight-bolder text-dark">
                                                    Total
                                                </h2>
                                            </div>
                                            <!--end::Header-->
                                            <!--begin::Body-->
                                            <div class="card-body p-0 position-relative overflow-hidden">
                                                <!--begin::Chart-->
                                                <div class="card-rounded-bottom pt-10 pl-8" style=" background-color: #f64e6080;">
                                                    <h1>
                                                        <?php
                                                        echo $totalProducts;
                                                        ?>
                                                    </h1>
                                                    <h2>Products uploaded</h2>
                                                </div>
                                                <!--end::Chart-->
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <div class="card card-custom bg-gray-100 card-stretch-half gutter-b">
                                            <!--begin::Header-->
                                            <div class="card-header border-0 py-5" style="background-color: #3699ff;">
                                                <h2 class="font-weight-bolder text-dark">
                                                    This year
                                                </h2>
                                            </div>
                                            <!--end::Header-->
                                            <!--begin::Body-->
                                            <div class="card-body p-0 position-relative overflow-hidden">
                                                <!--begin::Chart-->
                                                <div class="card-rounded-bottom pt-10 pl-8" style=" background-color:#3699ff80 ">
                                                    <h1>
                                                        <?php
                                                        echo $yearlyProducts;
                                                        ?>
                                                    </h1>
                                                    <h2>Products uploaded</h2>
                                                </div>
                                                <!--end::Chart-->
                                            </div>
                                            <!--end::Body-->
                                        </div>

                                    </div>

                                    <div class="col-md-6 col-xl-4">
                                        <div class="card card-custom bg-gray-100 card-stretch-half gutter-b">
                                            <!--begin::Header-->
                                            <div class="card-header border-0 bg-warning py-5">
                                                <h2 class="font-weight-bolder text-dark">
                                                    This month
                                                </h2>
                                            </div>
                                            <!--end::Header-->
                                            <!--begin::Body-->
                                            <div class="card-body p-0 position-relative overflow-hidden">
                                                <!--begin::Chart-->
                                                <div class="card-rounded-bottom pt-10 pl-8" style=" background-color:#ffa80080">
                                                    <h1>
                                                        <?php
                                                        echo $monthlyProducts;
                                                        ?>
                                                    </h1>
                                                    <h2>Products uploaded</h2>
                                                </div>
                                                <!--end::Chart-->
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <div class="card card-custom bg-gray-100 card-stretch-half gutter-b">
                                            <!--begin::Header-->
                                            <div class="card-header border-0 bg-success py-5">
                                                <h2 class="font-weight-bolder text-dark">
                                                    Total
                                                </h2>
                                            </div>
                                            <!--end::Header-->
                                            <!--begin::Body-->
                                            <div class="card-body p-0 position-relative overflow-hidden">
                                                <!--begin::Chart-->
                                                <div class="card-rounded-bottom pt-10 pl-8" style="background-color: #1bc5bd80;">
                                                    <h1>
                                                        <?php
                                                        echo $totalEvents;
                                                        ?>

                                                    </h1>
                                                    <h2>Events Participated</h2>
                                                </div>
                                                <!--end::Chart-->
                                            </div>
                                            <!--end::Body-->
                                        </div>

                                    </div>


                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- end::Content -->
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