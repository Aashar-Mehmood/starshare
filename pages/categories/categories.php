<?php
session_start();
if (!isset($_SESSION["email"])) {
  header("location: pages/login_signup/login_signup.php");
}
?>

<!DOCTYPE html>

<html lang="en">

<!--begin::Head-->

<head>
  <base href="../../">
  <meta charset="utf-8" />
  <title>Categories</title>
  <?php include("../../partials/csslinks.php"); ?>
</head>
<!--end::Head-->

<!--begin::Body-->

<body id="kt_body"
  class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
  <!--begin::Main-->

  <?php include("../../partials/_header-mobile.php"); ?>
  <div class="d-flex flex-column flex-root">

    <!--begin::Page-->
    <div class="d-flex flex-row flex-column-fluid page">

      <?php include("../../partials/_aside.php"); ?>

      <!--begin::Wrapper-->
      <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">

        <?php include("../../partials/_header.php"); ?>

        <!--begin::Content-->
        <div class="content d-flex flex-column flex-column-fluid" id="kt_content">

          <div class="modal fade" id="newStarCategory" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle">Create a new category/subcategory</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form class="form">
                    <div class="form-group">
                      <label>Name :</label>
                      <input type="text" class="form-control form-control-solid" placeholder="Star" />
                    </div>
                    <div class="form-group">
                      <div class="radio-inline">
                        <label class="radio radio-success">
                          <input type="radio" name="radios5" id="parentRadioBtn" />
                          <span></span>
                          Parent
                        </label>
                        <label class="radio radio-success">
                          <input type="radio" name="radios5" id="childRadioBtn" />
                          <span></span>
                          Child
                        </label>
                      </div>
                    </div>
                    <div class="form-group">
                      <label>Select Parent :</label>
                      <select id="parentCategory" disabled class="form-control form-control-solid">
                        <option>Star</option>
                        <option>Organizer</option>
                        <option>Supplier</option>
                      </select>
                    </div>
                    <div class="d-flex w-50 justify-content-between mt-12">
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
            <div class="row justify-content-center">
              <div class="col-6">
                <div class="card card-custom gutter-b">
                  <!--begin::Header-->
                  <div class="card-header d-flex align-items-center">
                    <h2 class="card-title">Stars</h2>
                    <button class="btn btn-primary btn-large" data-target="#newStarCategory" data-toggle="modal">
                      Add Category
                    </button>
                  </div>
                  <!--end::Header-->
                  <!--begin::Body-->
                  <div class="card-body pt-2 pb-0 mt-n3">
                    <div class="tab-content mt-5" id="myTabTables11">
                      <table class="table table-vertical-center table-bordered" style="table-layout:fixed;">
                        <thead class="thead-dark">
                          <tr>
                            <th class="">Category Name</th>
                            <th class="">Parent Category</th>
                            <th style="padding-left:3rem">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td class="">
                              <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">
                                Jazz</a>
                            </td>
                            <td>
                              <span class="text-dark-75 font-weight-bolder d-block font-size-lg">Star</span>
                            </td>
                            <td>
                              <a href="#" title="Edit" class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">
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
                              <a href="#" title="Delete" class="btn btn-icon btn-light btn-hover-primary btn-sm">
                                <span class="svg-icon svg-icon-md svg-icon-primary">
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
                                class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">Rock</a>
                            </td>
                            <td>
                              <span class="text-dark-75 font-weight-bolder d-block font-size-lg">Star</span>
                            </td>
                            <td class=" ">
                              <a href="#" title="Edit" class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">
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
                              <a href="#" title="Delete" class="btn btn-icon btn-light btn-hover-primary btn-sm">
                                <span class="svg-icon svg-icon-md svg-icon-primary">
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
                                class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">Pop</a>

                            </td>
                            <td>
                              <span class="text-dark-75 font-weight-bolder d-block font-size-lg">Star</span>
                            </td>


                            <td class=" ">

                              <a href="#" title="Edit" class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">
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
                              <a href="#" title="Delete" class="btn btn-icon btn-light btn-hover-primary btn-sm">
                                <span class="svg-icon svg-icon-md svg-icon-primary">
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
                    <!--end::Table-->
                  </div>
                  <!--end::Tap pane-->
                </div>
              </div>
              <!--end::Body-->
            </div>
          </div>
          <!-- End Main Container -->

        </div>
        <!--end::Content-->

        <?php include("../../partials/_footer.php"); ?>
      </div>

      <!--end::Wrapper-->
    </div>

    <!--end::Page-->
  </div>

  <!--end::Main-->
  <?php include("../../partials/_extras/offcanvas/quick-user.php") ?>
  <?php include("../../partials/jslinks.php"); ?>
  <script>
  const childRadionBtn = document.getElementById("childRadioBtn");
  const parentRadioBtn = document.getElementById("parentRadioBtn");
  const dropdown = document.getElementById("parentCategory");
  childRadionBtn.addEventListener('click', () => {
    dropdown.removeAttribute("disabled");
  });
  parentRadioBtn.addEventListener('click', () => {
    dropdown.setAttribute("disabled", "true");
  });
  </script>
</body>

<!--end::Body-->

</html>
