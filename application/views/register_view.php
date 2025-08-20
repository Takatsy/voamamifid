<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!-- ======= Header ======= -->
 <!-- Favicons -->
 <link href="<?php echo base_url().'assets/img/favicon.png';?>" rel="icon">
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
  <!-- End Sidebar-->

<body>

  <main>
  <div class="container">
  <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

          <div class="d-flex justify-content-center py-4">
            <a href="<?= site_url() ?>" class="logo d-flex align-items-center w-auto">
              <img src="<?= base_url('assets/img/fid.jpg') ?>" alt="">
              <span class="d-none d-lg-block">FID</span>
            </a>
          </div><!-- End Logo -->

          <div class="card mb-3">

            <div class="card-body">

              <div class="pt-4 pb-2">
                <h5 class="card-title text-center pb-0 fs-4">Créer un compte</h5>
                <p class="text-center small">Entrer vos informations personnelles</p>
              </div>

              <!-- ✅ Adaptation importante : formulaire vers vm_controller/register -->
              <form class="row g-3 needs-validation" action="<?= site_url('vm_controller/register') ?>" method="post" novalidate>

                <div class="col-12">
                  <label for="yourName" class="form-label">Votre nom</label>
                  <input type="text" name="name" class="form-control" id="yourName" value="<?= set_value('name') ?>" required>
                  <?= form_error('name', '<div class="text-danger small">', '</div>') ?>
                </div>
                <div class="col-12">
                  <label for="yourUsername" class="form-label">Votre prénom</label>
                  <div class="input-group has-validation">
                   
                    <input type="text" name="prenom" class="form-control" id="yourUsername" value="<?= set_value('prenom') ?>" required>
                  </div>
                  <?= form_error('username', '<div class="text-danger small">', '</div>') ?>
                </div>

                <div class="col-12">
                  <label for="yourEmail" class="form-label">Votre Email</label>
                  <input type="email" name="email" class="form-control" id="yourEmail" value="<?= set_value('email') ?>" required>
                  <?= form_error('email', '<div class="text-danger small">', '</div>') ?>
                </div>

                

                <div class="col-12">
                  <label for="yourPassword" class="form-label">Mot de passe</label>
                  <input type="password" name="password" class="form-control" id="yourPassword" required>
                  <?= form_error('password', '<div class="text-danger small">', '</div>') ?>
                </div>

                <div class="col-12">
                  <div class="form-check">
                    <input class="form-check-input" name="terms" type="checkbox" id="acceptTerms" required>
                    <label class="form-check-label" for="acceptTerms">J'accepte les <a href="#">conditions d'utilisation</a></label>
                  </div>
                </div>

                <div class="col-12">
                  <button class="btn btn-primary w-100" type="submit">Créer un compte</button>
                </div>
                <div class="col-12">
                  <p class="small mb-0">Déjà inscrit ? <a href="<?= site_url('vm_controller/login') ?>">Connexion</a></p>
                </div>
              </form>

            </div>
          </div>

          

        </div>
      </div>
    </div>
  </section>
</div>

  </main><!-- End #main -->

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

</body>

</html>