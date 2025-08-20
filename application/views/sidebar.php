<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>voamamy</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

 <!-- Favicons -->
 <link href="<?php echo base_url().'assets/img/fid.jpg.png';?>" rel="icon">
  <link href="<?php echo base_url().'assets/img/apple-touch-icon.png';?>" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <!-- Vendor CSS Files -->
  <link href="<?php echo base_url().'assets/vendor/bootstrap/css/bootstrap.min.css';?>" rel="stylesheet">
  <link href="<?php echo base_url().'assets/vendor/bootstrap-icons/bootstrap-icons.css';?>" rel="stylesheet">
  <link href="<?php echo base_url().'assets/vendor/boxicons/css/boxicons.min.css';?>" rel="stylesheet">
  <link href="<?php echo base_url().'assets/vendor/quill/quill.snow.css';?>" rel="stylesheet">
  <link href="<?php echo base_url().'assets/vendor/quill/quill.bubble.css';?>" rel="stylesheet">
  <link href="<?php echo base_url().'assets/vendor/remixicon/remixicon.css';?>" rel="stylesheet">
  <link href="<?php echo base_url().'assets/vendor/simple-datatables/style.css';?>" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo base_url().'assets/css/style.css';?>" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.5.0
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url().'index.php/vm_controller/dashboard/';?>">
          <i class="bi bi-grid"></i>
          <span>Accueil</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="<?php echo base_url().'index.php/vm_controller/membre/';?>">
          <i class="bx bxs-group"></i><span>Membre</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="<?php echo base_url().'index.php/vm_controller/cotisation';?>">
          <i class="bx bx-command"></i><span>Cotisation</span>
        </a>
      </li>
      <!-- <li class="nav-item">
        <a class="nav-link collapsed" href="<?php echo base_url().'index.php/vm_controller/engalia';?>">
          <i class="bx bx-accessibility bx-accessibility"></i><span>Engalia</span>
        </a>
      </li> -->
       <li class="nav-item">
        <a class="nav-link collapsed" href="<?php echo base_url().'index.php/vm_controller/anjara';?>">
          <i class="ri-open-arm-fill"></i><span>Anjara</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="<?php echo base_url().'index.php/vm_controller/sazy';?>">
          <i class="bx bx-shield-x"></i><span>Sazy</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="<?php echo base_url().'index.php/vm_controller/pret';?>">
          <i class="bx bx-euro"></i><span>Prêt</span>
        </a>
      </li><!-- End Components Nav -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="<?php echo base_url().'index.php/vm_controller/remboursement';?>">
          <i class="bx bx-been-here"></i><span>Remboursement</span>
        </a>
      </li><!-- End Components Nav -->

      <!-- End Forms Nav -->

      <!-- End Tables Nav -->

      <!-- End Charts Nav -->

      

      <!-- <li class="nav-heading">Paramettre</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="<?php echo base_url().'index.php/vm_controller/profil';?>">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li>End Profile Page Nav -->
<!-- End Contact Page Nav -->

      <!-- <li class="nav-item">
        <a class="nav-link collapsed" href="<?php echo base_url().'index.php/vm_controller/register';?>">
          <i class="bi bi-card-list"></i>
          <span>Register</span>
        </a>
      </li>End Register Page Nav -->

      <!-- <li class="nav-item">
        <a class="nav-link collapsed" href="<?php echo base_url().'index.php/vm_controller/login';?>">
          <i class="bi bi-box-arrow-in-right"></i>
          <span>Login</span>
        </a>
      </li>End Login Page Nav -->


    </ul>

  </aside><!-- End Sidebar-->

  

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <script src="<?php echo base_url().'assets/vendor/apexcharts/apexcharts.min.js';?>"></script>
  <script src="<?php echo base_url().'assets/vendor/bootstrap/js/bootstrap.bundle.min.js';?>"></script>
  <script src="<?php echo base_url().'assets/vendor/chart.js/chart.umd.js';?>"></script>
  <script src="<?php echo base_url().'assets/vendor/echarts/echarts.min.js';?>"></script>
  <script src="<?php echo base_url().'assets/vendor/quill/quill.min.js';?>"></script>
  <script src="<?php echo base_url().'assets/vendor/simple-datatables/simple-datatables.js';?>"></script>
  <script src="<?php echo base_url().'assets/vendor/tinymce/tinymce.min.js';?>"></script>
  <script src="<?php echo base_url().'assets/vendor/php-email-form/validate.js';?>"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo base_url().'assets/js/main.js';?>"></script>