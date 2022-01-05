<?php
  if(isset($_GET["roleTransaction"])){
    $roleTransaction = $_GET["roleTransaction"];
  }
  else{
    $roleTransaction = "starTransactions";
  }
?>
<!DOCTYPE html>

<html lang="en">

<!--begin::Head-->

<head>
  <base href="../../../">
  <meta charset="utf-8" />
  <title>Transactions</title>
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

        <?php include("../../../partials/_header.php"); ?>

        <!--begin::Content-->
        <div class="content d-flex flex-column flex-column-fluid px-8 py-12" id="kt_content">

          <!--Content area here-->

          <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <?php include_once("./$roleTransaction.php");?>
            <!--end::Container-->
          </div>
          <!--end::Content-->
        </div>
        <?php include("../../../partials/_footer.php"); ?>

      </div>
      <!--end::Wrapper-->

    </div>
    <?php 
      include("../../../partials/_extras/offcanvas/quick-user.php");
      include("../../../partials/jslinks.php");
    ?>

</body>

<!--end::Body-->

</html>
