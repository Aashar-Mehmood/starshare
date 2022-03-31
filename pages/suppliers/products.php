<?php
  include_once("../login_signup/check_session.php");
  include_once("../login_signup/db_connection.php");
  if(!isset($_GET['supplierId'])){
    header("location:./suppliers.php");
  }
  else{
    $id = $_GET['supplierId'];
    $supplierData = mysqli_query($conn, "SELECT * FROM `suppliers` WHERE `u_id` = $id");
    $arr = mysqli_fetch_array($supplierData);
    $name = $arr['name'];
    $email = $arr['email'];
    $contact = $arr['contact'];
    $address = $arr['address'];
    $description = $arr['description'];
    $profile_img = $arr['profile_img'];
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

        <div id="kt_header" class="header header-fixed">

          <!--begin::Container-->
          <div class="container-fluid d-flex align-items-stretch justify-content-between">

            <!--begin::Header Menu Wrapper-->
            <!--begin::Header Menu-->

            <ul class="nav nav-tabs nav-tabs-line nav-bold nav-tabs-line-2x d-flex align-items-center ml-2 ml-md-8"
              style="border: none; font-size: 1.12rem;">
              <li class="nav-item">
                <a class="nav-link "  href="pages/suppliers/supplier_details.php?supplierId=<?php echo $id ?>">Overview</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="pages/suppliers/products.php?supplierId=<?php echo $id ?>">Products</a>
              </li>
              <li class="nav-item">
                <a class="nav-link"  href="pages/suppliers/transactions.php?supplierId=<?php echo $id ?>">Transactions</a>
              </li>

            </ul>
            <!--end::Header Menu-->

            <!--end::Header Menu Wrapper-->
            <!--begin::Topbar-->
            <div class="topbar">
              <!--begin::User-->
              <div class="topbar-item">
                <div class="btn btn-icon btn-icon-mobile w-auto btn-clean d-flex align-items-center btn-lg px-2"
                  id="kt_quick_user_toggle">
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
            
            <div class="tab-pane fade show active" id="kt_tab_pane_2" role="tabpanel" aria-labelledby="kt_tab_pane_2">
              <div class="modal fade" id="newStarCategory" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLongTitle">Create a new product</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <form class="form">
                        <div class="form-group">
                          <label>Product Id :</label>
                          <input type="text" class="form-control form-control-solid" />
                        </div>
                        <div class="form-group">
                          <label>Product Name :</label>
                          <input type="text" class="form-control form-control-solid" />
                        </div>
                        <div class="d-flex w-md-50 justify-content-between mt-12">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <button type="button" class="btn btn-primary" data->Save changes</button>
                        </div>

                      </form>
                    </div>

                  </div>
                </div>
              </div>
              <!-- End New Star Category Form -->

              <!-- Start Main Container -->
              <div class="container">
                <div class="col-lg-10 col-xl-8 px-md-10 pt-md-8">
                  <div class="card card-custom gutter-b">
                    <!--begin::Header-->
                    <div class="card-header d-flex align-items-center">
                      <h2 class="card-title">Products</h2>
                      <button class="btn btn-primary btn-large" data-target="#newStarCategory" data-toggle="modal">
                        Add Product
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
                                <th style="min-width: 150px;">Product Id</th>
                                <th style="min-width: 150px;">Product Name</th>
                                <th style="min-width:200px; padding-left:1.75rem">Action</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td class="">
                                  <a href="#"
                                    class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">
                                    124t456cf5</a>
                                </td>
                                <td>
                                  <span class="text-dark-75 font-weight-bolder d-block font-size-lg">Violin</span>
                                </td>
                                <td>
                                  <a href="javascript:void(0)" title="Edit" data-target="#newStarCategory"
                                    data-toggle="modal" class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">
                                    <span class="svg-icon svg-icon-md svg-icon-primary">
                                      <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg-->
                                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                          <rect x="0" y="0" width="24" height="24"></rect>
                                          <path
                                            d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z"
                                            fill="#000000" fill-rule="nonzero"
                                            transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)">
                                          </path>
                                          <path
                                            d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z"
                                            fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                                        </g>
                                      </svg>
                                      <!--end::Svg Icon-->
                                    </span>
                                  </a>
                                  <a href="#" title="Delete" class="btn btn-icon btn-light btn-hover-danger btn-sm">
                                    <span class="svg-icon svg-icon-md svg-icon-danger">
                                      <!--begin::Svg Icon | path:assets/media/svg/icons/General/Trash.svg-->
                                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                          <rect x="0" y="0" width="24" height="24"></rect>
                                          <path
                                            d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z"
                                            fill="#000000" fill-rule="nonzero"></path>
                                          <path
                                            d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z"
                                            fill="#000000" opacity="0.3"></path>
                                        </g>
                                      </svg>
                                      <!--end::Svg Icon-->
                                    </span>
                                  </a>
                                </td>
                              </tr>
                              <tr>
                                <td class="">
                                  <a href="#"
                                    class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">
                                    445400458
                                  </a>
                                </td>
                                <td>
                                  <span class="text-dark-75 font-weight-bolder d-block font-size-lg">Piano</span>
                                </td>
                                <td class=" ">
                                  <a href="javascript:void(0)" title="Edit" data-target="#newStarCategory"
                                    data-toggle="modal" class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">
                                    <span class="svg-icon svg-icon-md svg-icon-primary">
                                      <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg-->
                                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                          <rect x="0" y="0" width="24" height="24"></rect>
                                          <path
                                            d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z"
                                            fill="#000000" fill-rule="nonzero"
                                            transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)">
                                          </path>
                                          <path
                                            d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z"
                                            fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                                        </g>
                                      </svg>
                                      <!--end::Svg Icon-->
                                    </span>
                                  </a>
                                  <a href="#" title="Delete" class="btn btn-icon btn-light btn-hover-danger btn-sm">
                                    <span class="svg-icon svg-icon-md svg-icon-danger">
                                      <!--begin::Svg Icon | path:assets/media/svg/icons/General/Trash.svg-->
                                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                          <rect x="0" y="0" width="24" height="24"></rect>
                                          <path
                                            d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z"
                                            fill="#000000" fill-rule="nonzero"></path>
                                          <path
                                            d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z"
                                            fill="#000000" opacity="0.3"></path>
                                        </g>
                                      </svg>
                                      <!--end::Svg Icon-->
                                    </span>
                                  </a>
                                </td>
                              </tr>
                              <tr>
                                <td class="">
                                  <a href="#"
                                    class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">
                                    3544443f4
                                  </a>
                                </td>
                                <td>
                                  <span class="text-dark-75 font-weight-bolder d-block font-size-lg">
                                    Guitar
                                  </span>
                                </td>
                                <td class=" ">
                                  <a href="javascript:void(0)" title="Edit" data-target="#newStarCategory"
                                    data-toggle="modal" class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">
                                    <span class="svg-icon svg-icon-md svg-icon-primary">
                                      <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg-->
                                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                          <rect x="0" y="0" width="24" height="24"></rect>
                                          <path
                                            d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z"
                                            fill="#000000" fill-rule="nonzero"
                                            transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)">
                                          </path>
                                          <path
                                            d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z"
                                            fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                                        </g>
                                      </svg>
                                      <!--end::Svg Icon-->
                                    </span>
                                  </a>
                                  <a href="#" title="Delete" class="btn btn-icon btn-light btn-hover-danger btn-sm">
                                    <span class="svg-icon svg-icon-md svg-icon-danger">
                                      <!--begin::Svg Icon | path:assets/media/svg/icons/General/Trash.svg-->
                                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                          <rect x="0" y="0" width="24" height="24"></rect>
                                          <path
                                            d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z"
                                            fill="#000000" fill-rule="nonzero"></path>
                                          <path
                                            d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z"
                                            fill="#000000" opacity="0.3"></path>
                                        </g>
                                      </svg>
                                      <!--end::Svg Icon-->
                                    </span>
                                  </a>
                                </td>
                              </tr>
                              <tr>
                                <td class="">
                                  <a href="#"
                                    class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">
                                    355633355
                                  </a>
                                </td>
                                <td>
                                  <span class="text-dark-75 font-weight-bolder d-block font-size-lg">
                                    Trumpet</span>
                                </td>
                                <td class=" ">
                                  <a href="javascript:void(0)" title="Edit" data-target="#newStarCategory"
                                    data-toggle="modal" class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">
                                    <span class="svg-icon svg-icon-md svg-icon-primary">
                                      <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg-->
                                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                          <rect x="0" y="0" width="24" height="24"></rect>
                                          <path
                                            d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z"
                                            fill="#000000" fill-rule="nonzero"
                                            transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)">
                                          </path>
                                          <path
                                            d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z"
                                            fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                                        </g>
                                      </svg>
                                      <!--end::Svg Icon-->
                                    </span>
                                  </a>
                                  <a href="#" title="Delete" class="btn btn-icon btn-light btn-hover-danger btn-sm">
                                    <span class="svg-icon svg-icon-md svg-icon-danger">
                                      <!--begin::Svg Icon | path:assets/media/svg/icons/General/Trash.svg-->
                                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                          <rect x="0" y="0" width="24" height="24"></rect>
                                          <path
                                            d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z"
                                            fill="#000000" fill-rule="nonzero"></path>
                                          <path
                                            d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z"
                                            fill="#000000" opacity="0.3"></path>
                                        </g>
                                      </svg>
                                      <!--end::Svg Icon-->
                                    </span>
                                  </a>
                                </td>
                              </tr>
                              <tr>
                                <td class="">
                                  <a href="#"
                                    class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">
                                    454454ffs
                                  </a>
                                </td>
                                <td>
                                  <span class="text-dark-75 font-weight-bolder d-block font-size-lg">
                                    Drum</span>
                                </td>
                                <td class=" ">
                                  <a href="javascript:void(0)" title="Edit" data-target="#newStarCategory"
                                    data-toggle="modal" class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">
                                    <span class="svg-icon svg-icon-md svg-icon-primary">
                                      <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg-->
                                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                          <rect x="0" y="0" width="24" height="24"></rect>
                                          <path
                                            d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z"
                                            fill="#000000" fill-rule="nonzero"
                                            transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)">
                                          </path>
                                          <path
                                            d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z"
                                            fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                                        </g>
                                      </svg>
                                      <!--end::Svg Icon-->
                                    </span>
                                  </a>
                                  <a href="#" title="Delete" class="btn btn-icon btn-light btn-hover-danger btn-sm">
                                    <span class="svg-icon svg-icon-md svg-icon-danger">
                                      <!--begin::Svg Icon | path:assets/media/svg/icons/General/Trash.svg-->
                                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                          <rect x="0" y="0" width="24" height="24"></rect>
                                          <path
                                            d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z"
                                            fill="#000000" fill-rule="nonzero"></path>
                                          <path
                                            d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z"
                                            fill="#000000" opacity="0.3"></path>
                                        </g>
                                      </svg>
                                      <!--end::Svg Icon-->
                                    </span>
                                  </a>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                      <!--end::Table-->
                    </div>
                    <!--end::Tap pane-->
                  </div>
                </div>
              </div>
              <!-- End Main Container -->

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
