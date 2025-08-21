<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title></title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo base_url().'assets/img/fid.jpg';?>" rel="icon">
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
  <!-- =======================================================
  * Template Name: NiceAdmin - v2.5.0
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>


<!-- ======= Header ======= -->
<header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="" class="logo d-flex align-items-center">
        <img src="<?php echo base_url('/assets/img/fid.jpg') ?>" alt="homepage">
        <span class="d-none d-lg-block">FID</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->



    <nav class="header-nav ms-auto">
  <ul class="d-flex align-items-center">

    <!-- Notification Dropdown -->
    <li class="nav-item dropdown" id="notificationDropdown">
      <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown" id="notif_bell">
        <i class="bi bi-bell"></i>
        <span class="badge bg-primary badge-number">
          <?= isset($count_prets_en_retard) && $count_prets_en_retard > 0 ? $count_prets_en_retard : 0 ?>
      </span>
      </a>

      <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
        <li class="dropdown-header">
          <span id="notif_header_text">
            <?= isset($count_prets_en_retard) && $count_prets_en_retard > 0 ? 'Prêts en retard' : 'Tout est à jour ✅' ?>
          </span>
        <a href="<?= base_url('index.php/vm_controller/notification') ?>">
            <span class="badge rounded-pill bg-primary p-2 ms-2">Voir tout</span>
        </a>
        </li>

        <li><hr class="dropdown-divider"></li>

        <!-- Liste des notifications -->
        <div id="notif_badges" class="mt-1">
          <?php if (!empty($prets_en_retard)): ?>
            <?php foreach($prets_en_retard as $pret): ?>
              <div class="notif-item px-3 py-2 border-bottom">
                <div> <?= htmlspecialchars($pret->nom.' '.$pret->prenom) ?></div>
                <div>Retard : <?= $pret->mois_retard ?> mois</div>
                <div>Prêt :</strong> <?= date('d/m/Y', strtotime($pret->Date_pret)) ?></div>
            </div>
            <?php endforeach; ?>
          <?php else: ?>
            <div class="notif-item px-3 py-2">
              Tout est à jour ✅
            </div>
          <?php endif; ?>
        </div>

      </ul>
    </li>
    <!-- End Notification Dropdown -->

    <!-- Profile Nav -->
    <li class="nav-item dropdown pe-3">
      <?php if ($this->session->userdata('prenom')): ?>
      <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
        <img src="<?= base_url('assets/img/profile-img.jpg') ?>" alt="Profile" class="rounded-circle">
        <span class="d-none d-md-block dropdown-toggle ps-2">
          <?= htmlspecialchars($this->session->userdata('prenom')) ?>
        </span>
      </a>

      <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
        <li class="dropdown-header">
          <h6><?= htmlspecialchars($this->session->userdata('nom').' '.$this->session->userdata('prenom')) ?></h6>
          <span><?= htmlspecialchars($this->session->userdata('email')) ?></span>
        </li>
        <li><hr class="dropdown-divider"></li>
        <li>
          <a class="dropdown-item d-flex align-items-center" href="<?= base_url('index.php/vm_controller/profil') ?>">
            <i class="bi bi-person"></i>
            <span>Mon Profil</span>
          </a>
        </li>
        <li><hr class="dropdown-divider"></li>
        <li>
          <a class="dropdown-item d-flex align-items-center" href="<?= base_url('index.php/vm_controller/logout') ?>">
            <i class="bi bi-box-arrow-right"></i>
            <span>Déconnecter</span>
          </a>
        </li>
      </ul>
      <?php endif; ?>
    </li>
    <!-- End Profile Nav -->

  </ul>
</nav>



  </header><!-- End Header -->
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
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <script>
function loadNotifications() {
    // Compter notifications non lues
    $.getJSON("<?= base_url('vm_controller/count_notifications') ?>", function(data) {
        $("#notif_count").text(data.count);
    });

    // Charger la liste des notifications
    $.getJSON("<?= base_url('vm_controller/get_notifications') ?>", function(data) {
        let listHTML = "";

        if(data.length > 0) {
            data.forEach(function(notif) {
                listHTML += `
                    <li>
                        <a href="#" class="dropdown-item d-flex align-items-center">
                            <i class="bi bi-exclamation-circle text-danger me-2"></i>
                            <div>
                                <p class="mb-0">${notif.message}</p>
                                <small class="text-muted">${notif.date}</small>
                            </div>
                        </a>
                        <hr class="dropdown-divider">
                    </li>
                `;
            });
        } else {
            // Si aucune notification
            listHTML = `
                <li class="text-center p-2">
                    <i class="bi bi-check-circle me-1"></i> Aucune notification
                </li>
            `;
        }

        $("#notif_list").html(listHTML);
    });
}

$(document).ready(function() {
    // Charger notifications au départ
    loadNotifications();

    // Rafraîchir toutes les 10 secondes
    setInterval(loadNotifications, 10000);

    // Marquer toutes comme lues quand on clique sur la cloche
    $("#notif_bell").on("click", function() {
        $.getJSON("<?= base_url('vm_controller/mark_as_read') ?>", function() {
            $("#notif_count").text("0");
        });
    });
});
</script>
