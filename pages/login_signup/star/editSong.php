<?php
include_once('../checkUsersSession.php');
include_once('../db_connection.php');

$songId = $_GET['songId'];
$songData = mysqli_query($conn, "SELECT * FROM `songs` WHERE `id` = $songId");
$dataArr = mysqli_fetch_assoc($songData);
$prevTitle = $dataArr['title'];
$prevOriginal = $dataArr['original'];
$prevSample = $dataArr['sample'];
$prevBanner = $dataArr['banner'];

?>

<!DOCTYPE html>

<html lang="en">

<!--begin::Head-->

<head>
    <base href="../../../">
    <meta charset="utf-8" />
    <title>
        Edit Song
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
    include_once("../../../partials/_header-mobile.php");

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
                                        <?php echo $_SESSION['star_name'] ?>
                                    </span>
                                    <span class="symbol symbol-lg-35 symbol-25 symbol-light-success">
                                        <span class="symbol-label font-size-h5 font-weight-bold">
                                            <?php echo substr($_SESSION['star_name'], 0, 1)  ?>
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

                <!-- Modals to play previous song and demo -->

                <!-- play original song modal -->
                <div class="modal fade" id="previousOriginal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">
                                    Previous Song
                                </h5>
                                <h1 aria-hidden="true" data-dismiss="modal" style="cursor: pointer;">
                                    &times;
                                </h1>
                            </div>
                            <div class="modal-body">
                                <audio controls>
                                    <source src="<?php echo $prevOriginal ?>" type="<?php echo mime_content_type("../../../" . $prevOriginal) ?>">
                                    Your browser does not support the audio element.
                                </audio>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End play original song modal -->

                <!-- play demo song modal -->
                <div class="modal fade" id="previousSample" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Previous Sample</h5>
                                <h1 aria-hidden="true" data-dismiss="modal" style="cursor: pointer;">
                                    &times;
                                </h1>
                            </div>
                            <div class="modal-body">
                                <audio controls>
                                    <source src="<?php echo $prevSample ?>" type="<?php echo mime_content_type("../../../" . $prevSample) ?>">
                                    Your browser does not support the audio element.
                                </audio>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- End play demo song modal -->

                <!-- View Previous Banner -->
                <div class="modal fade" id="previousBanner" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Previous Banner</h5>
                                <h1 aria-hidden="true" data-dismiss="modal" style="cursor: pointer;">
                                    &times;
                                </h1>
                            </div>
                            <div class="modal-body p-4">
                                <img class="w-100" src="<?php echo $prevBanner ?>" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End play demo song modal -->
                <!--      end modals to play previous      -->

                <!--begin::Content-->
                <div class="content d-flex flex-column flex-column-fluid" id="kt_content">

                    <div class="container">
                        <div class="row flex flex-center">
                            <div class="col-md-6 ">

                                <div class="card card-rounded">
                                    <?php
                                    if (isset($_SESSION['success_msg']) || isset($_SESSION['error_msg'])) {
                                        include_once("../../../components/Alert.php");
                                    }
                                    ?>
                                    <div class="card-header">
                                        <h2 class="card-title">Edit Song</h2>
                                    </div>
                                    <div class="card-body">
                                        <?php $action = "pages/login_signup/star/editSongDb.php?songId=" . $songId ?>
                                        <form class="form" action="<?php echo $action ?>" method="POST" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label>Change Title :</label>
                                                <input placeholder="<?php echo $prevTitle; ?>" type="text" name="title" class="form-control form-control-solid" />
                                            </div>

                                            <div class="form-group">
                                                <label class="d-flex justify-content-between pr-2">
                                                    Change Song
                                                    <span><a href="javascript;" data-target="#previousOriginal" data-toggle="modal">
                                                            Play Previous Song
                                                        </a></span>
                                                </label>
                                                <div></div>
                                                <div class="custom-file">
                                                    <input name="original" type="file" class="custom-file-input" id="customFile" />
                                                    <label class="custom-file-label" for="customFile">Choose
                                                        Song</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="d-flex justify-content-between pr-2">
                                                    Change Sample
                                                    <span><a href="javascript;" data-target="#previousSample" data-toggle="modal">
                                                            Play Previous Sample
                                                        </a></span>
                                                </label>
                                                <div></div>
                                                <div class="custom-file">
                                                    <input name="sample" type="file" class="custom-file-input" id="customFile" />
                                                    <label class="custom-file-label" for="customFile">Choose
                                                        Sample</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="d-flex justify-content-between pr-2">
                                                    Change Banner
                                                    <span><a href="javascript;" data-target="#previousBanner" data-toggle="modal">
                                                            View Previous Banner
                                                        </a></span>
                                                </label>
                                                <div></div>
                                                <div class="custom-file">
                                                    <input name="banner" type="file" class="custom-file-input" id="customFile" />
                                                    <label class="custom-file-label" for="customFile">Choose
                                                        Banner</label>
                                                </div>
                                            </div>
                                            <div class="d-flex w-md-50 justify-content-between mt-12">
                                                <input type="submit" name="editSong" value="Update" class="btn btn-primary">
                                                <a href="pages/login_signup/star/details.php?parentId=star&activeTab=2">
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
    <?php include("../../../partials/_extras/offcanvas/quick-star.php") ?>
    <?php
    include("../../../partials/jslinks.php");
    ?>



</body>

<!--end::Body-->

</html>