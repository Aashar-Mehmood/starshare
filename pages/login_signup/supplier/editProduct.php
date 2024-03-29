<?php
include_once('../checkUsersSession.php');
include_once('../db_connection.php');
$productId = $_GET['pId'];
$supplierId = $_SESSION['id'];

$prevData = mysqli_query($conn, "SELECT * FROM `products` WHERE `id` = $productId AND `supplier_id` = $supplierId;");
$dataArr = mysqli_fetch_assoc($prevData);
$prevName = $dataArr['name'];
$prevPrice = $dataArr['price'];
?>

<!DOCTYPE html>

<html lang="en">

<!--begin::Head-->

<head>
    <base href="../../../">
    <meta charset="utf-8" />
    <title>
        Edit Product
    </title>
    <?php
    include("../../../partials/csslinks.php");
    ?>
    <link rel="stylesheet" href="assets/css/custom/bordered_inputs.css">
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
    include("../../../partials/_header-mobile.php");
    ?>

    <div class="d-flex flex-column flex-root">

        <div class="d-flex flex-row flex-column-fluid page">

            <?php include("../../../partials/_asideForRoles.php"); ?>

            <!--begin::Wrapper-->
            <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">

                <div id="kt_header" class="header header-fixed">

                    <!--begin::Container-->
                    <div class="container-fluid d-flex align-items-stretch justify-content-between">

                        <!--begin::Header Menu Wrapper-->
                        <!--begin::Header Menu-->

                        <ul class="nav nav-tabs nav-tabs-line nav-bold nav-tabs-line-2x d-flex align-items-center ml-2 ml-md-8" style="border: none; font-size: 1.12rem;">

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
                                        <?php echo $_SESSION['supplier_name'] ?>
                                    </span>
                                    <span class="symbol symbol-lg-35 symbol-25 symbol-light-success">
                                        <span class="symbol-label font-size-h5 font-weight-bold">
                                            <?php echo substr($_SESSION['supplier_name'], 0, 1)  ?>
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

                    <div class="container">
                        <div class="row flex flex-center pr">
                            <?php
                            if (isset($_SESSION['error_msg']) || isset($_SESSION['success_msg'])) {
                                include_once('../../../components/Alert.php');
                            }
                            ?>
                            <div class="col-md-6 ">
                                <div class="card card-rounded">
                                    <div class="card-header">
                                        <h2 class="card-title">Edit Product</h2>
                                    </div>
                                    <div class="card-body">
                                        <form class="form" action="pages/login_signup/supplier/editProductDb.php?pId=<?php echo "$productId" ?>" method="POST">
                                            <div class="form-group">
                                                <label>Change Name :</label>
                                                <input placeholder="<?php echo $prevName; ?>" type="text" name="name" class="form-control form-control-solid" />
                                            </div>

                                            <div class="form-group">
                                                <label>
                                                    Change Price
                                                </label>
                                                <input placeholder="<?php echo $prevPrice; ?>" type="number" name="price" class="form-control form-control-solid" />

                                            </div>

                                            <div class="d-flex w-md-50 justify-content-between mt-12">
                                                <input type="submit" name="editProduct" value="Update" class="btn btn-primary">
                                                <a href="pages/login_signup/supplier/details.php?parentId=supplier&activeTab=2">
                                                    <button type="button" class="btn btn-secondary">Cancel</button>
                                                </a>
                                            </div>

                                        </form>
                                    </div>
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

    <?php include("../../../partials/_footer.php"); ?>
    </div>

    <!--end::Wrapper-->
    </div>

    </div>
    <?php include("../../../partials/_extras/offcanvas/quick-supplier.php") ?>
    <?php
    include("../../../partials/jslinks.php");
    ?>



</body>

<!--end::Body-->

</html>