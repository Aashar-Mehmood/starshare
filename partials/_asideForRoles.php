<!--begin::Aside-->
<div class="aside aside-left aside-fixed d-flex flex-column flex-row-auto" id="kt_aside">

  <!--begin::Brand-->
  <div class="brand flex-column-auto" id="kt_brand">

    <!--begin::Logo-->
    <a href="pages/login_signup/dashboard.php" target="_" class="brand-logo">
      <img alt="Logo" src="assets/media/myImages/starshare.png" style="max-width:100%;" />
    </a>

    <!--end::Logo-->

    <!--begin::Toggle-->
    <button class="brand-toggle btn btn-sm px-0" id="kt_aside_toggle">
      <span class="svg-icon svg-icon svg-icon-xl">

        <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Angle-double-left.svg-->
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
            <polygon points="0 0 24 0 24 24 0 24" />
            <path d="M5.29288961,6.70710318 C4.90236532,6.31657888 4.90236532,5.68341391 5.29288961,5.29288961 C5.68341391,4.90236532 6.31657888,4.90236532 6.70710318,5.29288961 L12.7071032,11.2928896 C13.0856821,11.6714686 13.0989277,12.281055 12.7371505,12.675721 L7.23715054,18.675721 C6.86395813,19.08284 6.23139076,19.1103429 5.82427177,18.7371505 C5.41715278,18.3639581 5.38964985,17.7313908 5.76284226,17.3242718 L10.6158586,12.0300721 L5.29288961,6.70710318 Z" fill="#000000" fill-rule="nonzero" transform="translate(8.999997, 11.999999) scale(-1, 1) translate(-8.999997, -11.999999)" />
            <path d="M10.7071009,15.7071068 C10.3165766,16.0976311 9.68341162,16.0976311 9.29288733,15.7071068 C8.90236304,15.3165825 8.90236304,14.6834175 9.29288733,14.2928932 L15.2928873,8.29289322 C15.6714663,7.91431428 16.2810527,7.90106866 16.6757187,8.26284586 L22.6757187,13.7628459 C23.0828377,14.1360383 23.1103407,14.7686056 22.7371482,15.1757246 C22.3639558,15.5828436 21.7313885,15.6103465 21.3242695,15.2371541 L16.0300699,10.3841378 L10.7071009,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(15.999997, 11.999999) scale(-1, 1) rotate(-270.000000) translate(-15.999997, -11.999999)" />
          </g>
        </svg>

        <!--end::Svg Icon-->
      </span>
    </button>

    <!--end::Toolbar-->
  </div>

  <!--end::Brand-->

  <!--begin::Aside Menu-->
  <div class="aside-menu-wrapper flex-column-fluid" id="kt_aside_menu_wrapper">
    <!--begin::Menu Container-->
    <div id="kt_aside_menu" class="aside-menu scroll ps ps--active-y" data-menu-vertical="1" data-menu-scroll="1" data-menu-dropdown-timeout="500" style="overflow: hidden;">
      <!--begin::Menu Nav-->
      <ul class="menu-nav">
        <li id="dashboard" class="menu-item" aria-haspopup="true">
          <a href="pages/login_signup/dashboard.php?parentId=dashboard" class="menu-link">
            <i class="menu-icon flaticon2-architecture-and-city"></i>
            <span class="menu-text">Dashboard</span>
          </a>
        </li>
        <li id="star" class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
          <a href="javascript:;" class="menu-link menu-toggle">
            <i class="fas fa-music menu-icon"></i>
            <span class="menu-text">Stars</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="menu-submenu" kt-hidden-height="80">
            <i class="menu-arrow"></i>
            <ul class="menu-subnav">
              <li class="menu-item menu-item-parent" aria-haspopup="true">
                <span class="menu-link">
                  <span class="menu-text">Stars</span>
                </span>
              </li>
              <?php
              if ($_SESSION['is_star']) {
                echo "<li class='menu-item' aria-haspopup='true'>
                  <a href='pages/login_signup/star/details.php?parentId=star' class='menu-link'>
                    <i class='menu-bullet menu-bullet-dot'>
                      <span></span>
                    </i>
                    <span class='menu-text'>Private Profile</span>
                  </a>
                </li>";
              }
              ?>

              <li class="menu-item" aria-haspopup="true">
                <a href="pages/login_signup/star/allStars.php?parentId=star" class="menu-link">
                  <i class="menu-bullet menu-bullet-dot">
                    <span></span>
                  </i>
                  <span class="menu-text">Search Stars</span>
                </a>
              </li>
              <?php
              if (!$_SESSION['is_star']) {
                echo '<li class="menu-item" aria-haspopup="true">
                  <a href="pages/login_signup/signupForRole.php?role=star&parentId=star" class="menu-link">
                    <i class="menu-bullet menu-bullet-dot">
                      <span></span>
                    </i>
                    <span class="menu-text">Become Star</span>
                  </a>
                </li>';
              }
              ?>

            </ul>
          </div>
        </li>
        <li id="organizer" class="menu-item menu-item-submenu " aria-haspopup="true" data-menu-toggle="hover">
          <a href="javascript:;" class="menu-link menu-toggle">
            <i class="fab fa-elementor menu-icon"></i>
            <span class="menu-text">Organizers</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="menu-submenu" kt-hidden-height="80">
            <i class="menu-arrow"></i>
            <ul class="menu-subnav">
              <li class="menu-item menu-item-parent" aria-haspopup="true">
                <span class="menu-link">
                  <span class="menu-text">Organizers</span>
                </span>
              </li>
              <?php
              if ($_SESSION['is_organizer']) {
                echo '<li class="menu-item" aria-haspopup="true">
                  <a href="pages/login_signup/organizer/details.php?parentId=organizer" class="menu-link">
                    <i class="menu-bullet menu-bullet-dot">
                      <span></span>
                    </i>
                    <span class="menu-text">Private Profile</span>
                  </a>
                </li>';
              }
              ?>

              <li class="menu-item" aria-haspopup="true">
                <a href="pages/login_signup/organizer/allOrganizers.php?parentId=organizer" class="menu-link">
                  <i class="menu-bullet menu-bullet-dot">
                    <span></span>
                  </i>
                  <span class="menu-text">Search Organizers</span>
                </a>
              </li>
              <?php
              if (!$_SESSION['is_organizer']) {
                echo '<li class="menu-item" aria-haspopup="true">
                  <a href="pages/login_signup/signupForRole.php?role=organizer&parentId=organizer" class="menu-link">
                    <i class="menu-bullet menu-bullet-dot">
                      <span></span>
                    </i>
                    <span class="menu-text">Become Organizer</span>
                  </a>
                </li>';
              }
              ?>

            </ul>
          </div>
        </li>
        <li id="supplier" class="menu-item menu-item-submenu " aria-haspopup="true" data-menu-toggle="hover">
          <a href="javascript:;" class="menu-link menu-toggle">
            <i class="fa fa-fill-drip menu-icon"></i>
            <span class="menu-text">Suppliers</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="menu-submenu" kt-hidden-height="80">
            <i class="menu-arrow"></i>
            <ul class="menu-subnav">
              <li class="menu-item menu-item-parent" aria-haspopup="true">
                <span class="menu-link">
                  <span class="menu-text">Suppliers</span>
                </span>
              </li>
              <?php
              if ($_SESSION['is_supplier']) {
                echo '<li class="menu-item" aria-haspopup="true">
                <a href="pages/login_signup/supplier/details.php?parentId=supplier" class="menu-link">
                  <i class="menu-bullet menu-bullet-dot">
                    <span></span>
                  </i>
                  <span class="menu-text">Private Profile</span>
                </a>
              </li>';
              }
              ?>

              <li class="menu-item" aria-haspopup="true">
                <a href="pages/login_signup/supplier/allSuppliers.php?parentId=supplier" class="menu-link">
                  <i class="menu-bullet menu-bullet-dot">
                    <span></span>
                  </i>
                  <span class="menu-text">Search Suppliers</span>
                </a>
              </li>
              <?php
              if (!$_SESSION['is_supplier']) {
                echo '<li class="menu-item" aria-haspopup="true">
                <a href="pages/login_signup/signupForRole.php?role=supplier&parentId=supplier" class="menu-link">
                  <i class="menu-bullet menu-bullet-dot">
                    <span></span>
                  </i>
                  <span class="menu-text">Become Supplier</span>
                </a>
              </li>';
              }
              ?>

            </ul>
          </div>
        </li>
        <li id="transactions" class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
          <a href="javascript:;" class="menu-link menu-toggle">
            <i class="fas fa-th-list menu-icon"></i>
            <span class="menu-text">Transactions</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="menu-submenu" kt-hidden-height="80">
            <i class="menu-arrow"></i>
            <ul class="menu-subnav">

              <li class="menu-item menu-item-parent" aria-haspopup="true">
                <span class="menu-link">
                  <span class="menu-text">Transactions</span>
                </span>
              </li>
              <?php
              if ($_SESSION['is_star']) {
                echo '<li class="menu-item" aria-haspopup="true">
                  <a href="pages/login_signup/transactions/main.php?roleTransaction=starTransactions&parentId=transactions"
                    class="menu-link">
                    <i class="menu-bullet menu-bullet-dot">
                      <span></span>
                    </i>
                    <span class="menu-text">As a Star</span>
                  </a>
                </li>';
              }
              ?>

              <?php
              if ($_SESSION['is_organizer']) {
                echo '<li class="menu-item" aria-haspopup="true">
                  <a href="pages/login_signup/transactions/main.php?roleTransaction=organizerTransactions&parentId=transactions"
                    class="menu-link">
                    <i class="menu-bullet menu-bullet-dot">
                      <span></span>
                    </i>
                    <span class="menu-text">As an Organizer</span>
                  </a>
                </li>';
              }
              ?>
              <?php
              if ($_SESSION['is_supplier']) {
                echo '<li class="menu-item" aria-haspopup="true">
                <a href="pages/login_signup/transactions/main.php?roleTransaction=supplierTransactions&parentId=transactions"
                  class="menu-link">
                  <i class="menu-bullet menu-bullet-dot">
                    <span></span>
                  </i>
                  <span class="menu-text">As a Supplier</span>
                </a>
              </li>';
              }
              ?>

            </ul>
          </div>
        </li>
        <li id="library" class="menu-item" aria-haspopup="true">
          <a href="pages/login_signup/library/library.php?parentId=library" class="menu-link">
            <i class="far fa-folder-open menu-icon"></i>
            <span class="menu-text">Music Library</span>
          </a>
        </li>
        <li id="events" class="menu-item" aria-haspopup="true">
          <a href="pages/login_signup/events/events.php?parentId=events" class="menu-link">
            <i class="fa fa-calendar menu-icon"></i>
            <span class="menu-text">My Events</span>
          </a>
        </li>
        <li id="settings" class="menu-item" aria-haspopup="true">
          <a href="pages/login_signup/settings/settings.php?parentId=settings" class="menu-link">
            <i class="fas fa-cogs menu-icon"></i>
            <span class="menu-text">Settings</span>
          </a>
        </li>
        <li id="logout" class="menu-item" aria-haspopup="true">
          <a href="pages/login_signup/logout.php?parentId=logout" class="menu-link">
            <i class="far fa-user-circle menu-icon"></i>
            <span class="menu-text">Logout</span>
          </a>
        </li>
      </ul>
      <!--end::Menu Nav-->
    </div>

    <!--end::Menu Container-->
  </div>

  <!--end::Aside Menu-->
</div>

<!--end::Aside-->
<script>
  window.addEventListener('load', () => {
    var activeLink = document.URL.split("starshare/")[1];
    var parentId = document.URL.split('parentId=')[1];
    var activeItem = document.querySelector(String('a[href="' + `${activeLink}` + '"]'));
    var parentItem = document.getElementById(`${parentId}`);
    if (parentItem) {
      parentItem.classList.add("menu-item-active");
      if (parentItem.classList.contains("menu-item-submenu")) {
        parentItem.classList.add("menu-item-open");
      }
    }
    activeItem.parentElement.classList.add("menu-item-active");

  });
</script>