<?php
include_once('../checkUsersSession.php');
include_once('../db_connection.php');

$eventId = $_GET['eventId'];
$eventData = mysqli_query($conn, "SELECT * FROM events WHERE id = $eventId;");
$eventArr = mysqli_fetch_assoc($eventData);
$eventTitle = $eventArr['title'];
$eventDate = $eventArr['date'];


$supplierData = mysqli_query($conn, "SELECT `u_id`, `name` FROM suppliers LIMIT 20 OFFSET 0");


?>
<!DOCTYPE html>

<html lang="en">

<!--begin::Head-->

<head>
    <base href="../../../">
    <meta charset="utf-8" />
    <title>Request a Quote</title>
    <?php include("../../../partials/csslinks.php"); ?>
    <link rel="stylesheet" href="assets/css/custom/bordered_inputs.css">
    <script src="https://cdn.ckeditor.com/ckeditor5/34.1.0/classic/ckeditor.js"></script>

</head>
<style>
@media screen and (max-width:425px) {
    .form-group.row {
        margin-bottom: 0 !important;
    }

    div.col-lg-6 {
        padding: 1rem;
    }
}
</style>
<!--end::Head-->

<!--begin::Body-->

<body id="kt_body"
    class="header-fixed header-mobile-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
    <!--begin::Main-->

    <?php include("../../../partials/_header-mobile.php"); ?>
    <div class="d-flex flex-column flex-root">

        <!--begin::Page-->
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
                                        <?php echo $_SESSION["organizer_name"]; ?>
                                    </span>
                                    <span class="symbol symbol-lg-35 symbol-25 symbol-light-success">
                                        <span class="symbol-label font-size-h5 font-weight-bold">
                                            <?php echo substr($_SESSION["organizer_name"], 0, 1) ?>
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
                <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-8 col-xl-6">
                                <div class="card card-custom">
                                    <div class="card-header">
                                        <h2 class="card-title">
                                            Send a Quote
                                        </h2>
                                    </div>
                                    <!--begin::Form-->
                                    <form id="quoteForm" action="pages/login_signup/organizer/processQuote.php"
                                        method="POST">
                                        <div class="card-body">
                                            <input type="hidden" name="event_id" value="<?php echo $eventId ?>">
                                            <div class="form-group">
                                                <label>Event Title</label>
                                                <input type="text" name="event_title" class="form-control" disabled
                                                    value="<?php echo $eventTitle; ?>">
                                            </div>
                                            <div class="form-group">
                                                <label>Date</label>
                                                <input type="text" name="event_date" class="form-control" disabled
                                                    value="<?php echo $eventDate; ?>">
                                            </div>
                                            <div class="form-group">
                                                <label>Select Supplier</label>
                                                <select class="form-control form-control-solid" name="supplier_id">
                                                    <option style="visibility: hidden;"></option>
                                                    <?php
                                                    while ($supplierArr = mysqli_fetch_assoc($supplierData)) {
                                                        $supplierName = $supplierArr["name"];
                                                        $supplierId = $supplierArr['u_id'];
                                                        // check if a quote is already sent to supplier
                                                        $quotesData = mysqli_query($conn, "SELECT id FROM quotations WHERE supplier_id = $supplierId AND event_id = $eventId;");
                                                        if (mysqli_num_rows($quotesData) < 1) {
                                                            echo "<option value = '$supplierId' >" .
                                                                $supplierName .
                                                                '</option>';
                                                        }
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Quote Amount :</label>
                                                <input name="amount" type="number" class="form-control"
                                                    placeholder="Enter quote Amount" />
                                            </div>
                                            <div class="form-group">
                                                <label for="description">Description :</label>
                                                <textarea name="description" id="editor" class="form-control"
                                                    id="description" rows="6"></textarea>
                                            </div>

                                        </div>
                                    </form>
                                    <div class="card-footer">
                                        <button type="submit" id="submit"
                                            class="btn btn-primary mr-2 px-12">Send</button>
                                        <a href="pages/login_signup/organizer/editEvent.php?eventId=<?php echo $eventId; ?>"
                                            class="btn btn-secondary">
                                            Cancel
                                        </a>
                                    </div>
                                    </form>
                                    <!--end::Form-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--end::Content-->

                <?php include("../../../partials/_footer.php"); ?>
            </div>

            <!--end::Wrapper-->
        </div>

        <!--end::Page-->
    </div>

    <!--end::Main-->
    <?php include("../../../partials/_extras/offcanvas/quick-organizer.php") ?>
    <?php include("../../../partials/jslinks.php"); ?>
    <script>
    document.getElementById('submit').addEventListener('click', () => {
        document.getElementById('quoteForm').submit();
    });
    ClassicEditor
        .create(document.querySelector('#editor'))
    </script>
</body>

<!--end::Body-->

</html>