<?php session_start();
if (isset($_GET['signUpActive']) && $_GET['signUpActive'] == 'true') {
  $signUpActive = true;
}

?>


<!DOCTYPE html>

<html lang="en">
<!--begin::Head-->

<head>
  <base href="../../">
  <meta charset="utf-8" />
  <title>Login | StarShare</title>
  <meta name="description" content="Login page example" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!--begin::Fonts-->
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Lobster&display=swap');
  </style>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
  <!--end::Fonts-->
  <!--begin::Page Custom Styles(used by this page)-->
  <link href="assets/css/pages/login/login-1.css" rel="stylesheet" type="text/css" />
  <!--begin::Global Theme Styles(used by all pages)-->
  <link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
  <link href="assets/plugins/custom/prismjs/prismjs.bundle.css" rel="stylesheet" type="text/css" />
  <link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
  <link rel="shortcut icon" href="assets/media/myImages/starshare_icon.png" type="image/x-icon">

  <style>
    .form-control.form-control-solid {
      border: 0.2px solid black;
    }
  </style>
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
  <!-- begnin::Alert  -->

  <!-- end::Alert -->
  <!--begin::Main-->
  <div class="d-flex flex-column flex-root">
    <!--begin::Login-->
    <div class="login login-1 <?php echo $signUpActive ? 'login-signup-on' : 'login-signin-on'   ?> d-flex flex-column flex-lg-row flex-column-fluid bg-white" id="kt_login">
      <!--begin::Aside-->
      <div class="login-aside d-flex flex-column flex-row-auto" style="background-color: #F2C98A;">
        <!--begin::Aside Top-->
        <div class="d-flex flex-column-auto flex-column pt-lg-40 pt-15">
          <!--begin::Aside header-->
          <h1 class="text-center mb-5" style="font-family: 'Lobster', cursive; font-size:3.2rem;">StarShare</h1>
          <!--end::Aside header-->
          <!--begin::Aside title-->
          <h3 class="font-weight-bolder text-center font-size-h4 font-size-h1-lg" style="color: #986923;">Listen music,
            Organize events <br>
            hire artists and much more
            <br />on our platform.
          </h3>
          <!--end::Aside title-->
        </div>
        <!--end::Aside Top-->
        <!--begin::Aside Bottom-->
        <div class="aside-img d-flex flex-row-fluid bgi-no-repeat bgi-position-y-bottom bgi-position-x-center" style="background-image: url(assets/media/svg/login-visual-1.svg)"></div>
        <!--end::Aside Bottom-->
      </div>
      <!--begin::Aside-->
      <!--begin::Content-->
      <div class="login-content flex-row-fluid d-flex flex-column justify-content-center pr overflow-hidden p-7 mx-auto">
        <!--begin::Content body-->
        <?php
        if (isset($_SESSION['error_msg']) || isset($_SESSION['success_msg'])) {
          include_once('../../components/Alert.php');
        }


        ?>
        <div class="login-form login-signin">
          <!--begin::Form-->
          <form class="form fv-plugins-bootstrap fv-plugins-framework" id="kt_login_signin_form" action="pages/login_signup/login_check.php" method="POST">
            <!--begin::Title-->
            <div class="pb-13 pt-lg-0 pt-5">
              <h3 class="font-weight-bolder text-dark font-size-h4 font-size-h1-lg">Welcome to StarShare</h3>
              <span class="text-muted font-weight-bold font-size-h4">New Here?
                <a href="javascript:;" id="kt_login_signup" class="text-primary font-weight-bolder">Create an
                  Account</a></span>
            </div>
            <!--begin::Title-->
            <!--begin::Form group-->
            <div class="form-group">
              <label class="font-size-h6 font-weight-bolder text-dark">Email</label>
              <input class="form-control form-control-solid h-auto py-6 px-6 rounded-lg" type="text" name="email" autocomplete="off" value="ali@gmail.com" />
            </div>
            <!--end::Form group-->
            <!--begin::Form group-->
            <div class="form-group">
              <div class="d-flex justify-content-between mt-n5">
                <label class="font-size-h6 font-weight-bolder text-dark pt-5">Password</label>

              </div>
              <input class="form-control form-control-solid h-auto py-6 px-6 rounded-lg" type="password" name="password" autocomplete="off" value="ali" />
            </div>
            <!--end::Form group-->
            <!--begin::Action-->
            <button id="loginBtn" class="btn btn-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mr-3">
              Log in
            </button>
            <!--end::Action-->
          </form>
        </div>
        <!--end::Signin-->
        <!--begin::Signup-->
        <div class="login-form login-signup">
          <!--begin::Form-->
          <form class="form fv-plugins-bootstrap fv-plugins-framework" method="POST" action="pages/login_signup/signup_check.php" id="kt_login_signup_form">
            <!--begin::Title-->
            <div class="pb-13 pt-lg-0 pt-5">
              <h3 class="font-weight-bolder text-dark font-size-h4 font-size-h1-lg">Sign Up</h3>
              <p class="text-muted font-weight-bold font-size-h4">Enter your details to create your account</p>
            </div>
            <!--end::Title-->
            <!--begin::Form group-->
            <div class="form-group">
              <input class="form-control form-control-solid h-auto py-6 px-6 rounded-lg font-size-h6" value="<?php echo htmlspecialchars($_SESSION['form_data']['fullname'] ?? '', ENT_QUOTES); ?>" type="text" placeholder="Fullname" name="fullname" autocomplete="off" id="registerName" />
            </div>
            <!--end::Form group-->
            <!--begin::Form group-->
            <div class="form-group">
              <input class="form-control form-control-solid h-auto py-6 px-6 rounded-lg font-size-h6" value="<?php echo htmlspecialchars($_SESSION['form_data']['email'] ?? '', ENT_QUOTES); ?>" type="email" placeholder="Email" name="email" autocomplete="off" id="registerEmail" />
            </div>
            <!--end::Form group-->
            <!--begin::Form group-->
            <div class="form-group">
              <input class="form-control form-control-solid h-auto py-6 px-6 rounded-lg font-size-h6" value="<?php echo htmlspecialchars($_SESSION['form_data']['password'] ?? '', ENT_QUOTES); ?>" type="password" placeholder="Password" name="password" autocomplete="off" id="registerPassword" />
            </div>
            <!--end::Form group-->
            <!--begin::Form group-->
            <div class="form-group">
              <input class="form-control form-control-solid h-auto py-6 px-6 rounded-lg font-size-h6" value="<?php echo htmlspecialchars($_SESSION['form_data']['cpassword'] ?? '', ENT_QUOTES); ?>" type="password" placeholder="Confirm password" name="cpassword" autocomplete="off" id="registerCPassword" />
            </div>
            <!--end::Form group-->
            <!--begin::Form group-->

            <!--begin::Form group-->
            <div class="form-group d-flex flex-wrap pb-lg-0 pb-3">
              <button id="signupBtn" type="submit" name="signup" class="btn btn-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mr-4">
                Signup
              </button>
              <button type="button" id="kt_login_signup_cancel" class="btn btn-light-primary font-weight-bolder font-size-h6 px-8 py-4 my-3">
                Cancel
              </button>
            </div>
            <!--end::Form group-->
          </form>
          <!--end::Form-->
        </div>
        <!--end::Signup-->
        <!--begin::Forgot-->

        <!--end::Forgot-->
      </div>
      <!--end::Content body-->
    </div>
    <!--end::Content-->
  </div>
  <!--end::Login-->
  </div>
  <!--end::Main-->

  <!--begin::Global Config(global config for global JS scripts)-->
  <script>
    var KTAppSettings = {
      "breakpoints": {
        "sm": 576,
        "md": 768,
        "lg": 992,
        "xl": 1200,
        "xxl": 1400
      },
      "colors": {
        "theme": {
          "base": {
            "white": "#ffffff",
            "primary": "#3699FF",
            "secondary": "#E5EAEE",
            "success": "#1BC5BD",
            "info": "#8950FC",
            "warning": "#FFA800",
            "danger": "#F64E60",
            "light": "#E4E6EF",
            "dark": "#181C32"
          },
          "light": {
            "white": "#ffffff",
            "primary": "#E1F0FF",
            "secondary": "#EBEDF3",
            "success": "#C9F7F5",
            "info": "#EEE5FF",
            "warning": "#FFF4DE",
            "danger": "#FFE2E5",
            "light": "#F3F6F9",
            "dark": "#D6D6E0"
          },
          "inverse": {
            "white": "#ffffff",
            "primary": "#ffffff",
            "secondary": "#3F4254",
            "success": "#ffffff",
            "info": "#ffffff",
            "warning": "#ffffff",
            "danger": "#ffffff",
            "light": "#464E5F",
            "dark": "#ffffff"
          }
        },
        "gray": {
          "gray-100": "#F3F6F9",
          "gray-200": "#EBEDF3",
          "gray-300": "#E4E6EF",
          "gray-400": "#D1D3E0",
          "gray-500": "#B5B5C3",
          "gray-600": "#7E8299",
          "gray-700": "#5E6278",
          "gray-800": "#3F4254",
          "gray-900": "#181C32"
        }
      },
      "font-family": "Poppins"
    };
  </script>
  <!--end::Global Config-->
  <!--begin::Global Theme Bundle(used by all pages)-->
  <script src="assets/plugins/global/plugins.bundle.js"></script>
  <script src="assets/plugins/custom/prismjs/prismjs.bundle.js"></script>
  <script src="assets/js/scripts.bundle.js"></script>
  <!--end::Global Theme Bundle-->
  <!--begin::Page Scripts(used by this page)-->
  <script src="assets/js/pages/custom/login/login-general.js"></script>
  <!--end::Page Scripts-->
  <script>
    const loginBtn = document.getElementById("loginBtn");
    const loginForm = document.getElementById("kt_login_signin_form");
    loginBtn.addEventListener('click', () => {
      loginForm.submit();
    });

    const signupBtn = document.getElementById("signupBtn");
    const signupForm = document.getElementById("kt_login_signup_form");
    signupBtn.addEventListener('click', () => {
      signupForm.submit();
    });



    //hide extra error boxes;
    const nameInput = document.querySelector("#registerName");
    nameInput.addEventListener("keyup", (e) => {
      hideExtraErrors(e);
    });


    const emailInput = document.querySelector("#registerEmail");
    emailInput.addEventListener("keyup", (e) => {
      hideExtraErrors(e);
    });

    const pwdInput = document.querySelector("#registerPassword");
    pwdInput.addEventListener("keyup", (e) => {
      hideExtraErrors(e);
    });

    const cpwdInput = document.querySelector("#registerCPassword");
    cpwdInput.addEventListener("keyup", (e) => {
      hideExtraErrors(e);
    });

    function hideExtraErrors(e) {
      const allChildren = e.target.parentElement.children;
      if (allChildren[2]) {
        allChildren[2].style.display = "none";
        if (allChildren[3]) {
          allChildren[3].style.display = "none";
        }
      }
    }
  </script>
</body>
<!--end::Body-->

</html>