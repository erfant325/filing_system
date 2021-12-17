<?php
include_once "../../model/config/config.php";
session_start();
if (!isset($_SESSION['username'])) {
    header('location:'.BASE_URL.'login');
}
?>
<!DOCTYPE html>
<html class="loading" lang="fa" data-textdirection="rtl" dir="rtl">
  <!-- BEGIN: Head-->
  <?php include_once "common/header.php"; ?>
  <!-- END: Head-->

  <!-- BEGIN: Body-->
  <body class="horizontal-layout horizontal-menu navbar-sticky 2-columns   footer-static  " data-open="hover" data-menu="horizontal-menu" data-col="2-columns">

    <!-- BEGIN: Header-->
    <?php include_once "common/navbar.php"; ?>
    <!-- END: Header-->

    <!-- BEGIN: Main Menu-->
    <?php include_once "common/navmenu.php"; ?>
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <?php include_once "load/load_page.php"; ?>
            </div>
        </div>
    </div>
    <!-- END: Content-->

    <!-- BEGIN: Customizer-->
    <?php include_once "common/customizer.php"; ?>
    <!-- End: Customizer-->

    <!-- BEGIN: Footer-->
    <?php include_once "common/footer.php"; ?>
    <!-- END: Footer-->

    <?php include_once "common/script_attach.php"; ?>
  </body>
  <!-- END: Body-->
</html>