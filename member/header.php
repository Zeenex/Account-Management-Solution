<?php

include("$_SERVER[DOCUMENT_ROOT]/Coporative/member/scripts/dashboard.php");

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>COBRANET LIMITED STAFF COOPERATIVE SOCIETY</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="../assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="../assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="../assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="../assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../assets/images/favicon.png" />
  </head>
    <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="align-items-center justify-content-center">
     <!--     <a class="sidebar-brand brand-logo" href="index.html"><img src="../images/corp-pic3.jpg" alt="logo" /></a>-->
        </div>
        <ul class="nav">

          <li class="nav-item nav-category">
            <span class="nav-link">Navigation</span>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="index.php">
              <span class="menu-icon">
                <i class="mdi mdi-account-multiple"></i>
              </span>
              <span class="menu-title">My Profile</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="contribution.php">
              <span class="menu-icon">
                <i class="mdi mdi-cash-multiple"></i>
              </span>
              <span class="menu-title">View Contribution</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#ui-loan" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-icon">
                <i class="mdi mdi-cash"></i>
              </span>
              <span class="menu-title">My Loans</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-loan">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="apply-loans.php">Apply for a Loan</a></li>
                <li class="nav-item"> <a class="nav-link" href="view-loans.php">View existing Loan</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#ui-purchase" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-icon">
                <i class="mdi mdi-cash-multiple"></i>
              </span>
              <span class="menu-title">Purchase</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-purchase">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="purchase-elect.php">Puchase Electronics</a></li>
                <li class="nav-item"> <a class="nav-link" href="purchase-prop.php">Puchase Land Property</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="monthlyreports.php">
              <span class="menu-icon">
                <i class="mdi mdi-library-books"></i>
              </span>
              <span class="menu-title">View Financial Report</span>
            </a>
          </li>

          <li class="nav-item menu-items">
            <a class="nav-link" href="pwd-user-reset.php">
              <span class="menu-icon">
                <i class="mdi mdi-account-key"></i>
              </span>
              <span class="menu-title">Reset Password</span>
            </a>
          </li>

        </ul>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar p-0 fixed-top d-flex flex-row">

          <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
              <span class="mdi mdi-menu"></span>
            </button>
            <div class="mt-3" style="text-align: center; width: 100%;">
            <span style="font-weight: bold;">COBRANET LIMITED STAFF COOPERATIVE SOCIETY</span><br>
            
          </div>
            <ul class="navbar-nav navbar-nav-right">
              <li class="nav-item dropdown border-left">
                
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list">
                  
                  <div class="dropdown-divider"></div>

                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">
                  <div class="navbar-profile">
                    <img class="img-xs rounded-circle" src="../images/logo.png" alt="">
                    <p class="mb-0 d-none d-sm-block navbar-profile-name"><?php echo $mName; ?></p>
                    <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">
                  <h6 class="p-3 mb-0">Profile</h6>
                  <div class="dropdown-divider"></div>
                  <a href="profile-edit.php" class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-settings text-success"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Settings</p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a href="../logout.php"class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-logout text-danger"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Log out</p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
 
                </div>
              </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
              <span class="mdi mdi-format-line-spacing"></span>
            </button>
          </div>
        </nav>