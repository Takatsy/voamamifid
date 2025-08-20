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
  <!-- SweetAlert2 CDN -->
  


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
<body>

  <main>
  <div class="container">
  <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

          <div class="d-flex justify-content-center py-4">
            <a href="index.html" class="logo d-flex align-items-center w-auto">
              <img src="<?php echo base_url('assets/img/fid.jpg'); ?>" alt="">
              <span class="d-none d-lg-block">FID</span>
            </a>
          </div><!-- End Logo -->

          <div class="card mb-4">
            <div class="card-body">

              <div class="pt-4 pb-2">
                <h5 class="card-title text-center pb-0 fs-4">Connexion</h5>
                <p class="text-center small">Entrez votre nom d'utilisateur et mot de passe</p>
              </div>

              <?php if ($this->session->flashdata('error')): ?>
              <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
              <script>
                Swal.fire({
                  icon: 'error',
                  title: 'Erreur',
                  text: '<?= $this->session->flashdata('error'); ?>',
                  confirmButtonText: 'OK'
                });
              </script>
              <?php endif; ?>



              <!-- ✅ FORMULAIRE DE CONNEXION -->
              <form class="row g-3 needs-validation" action="<?= site_url('vm_controller/login') ?>" method="post" novalidate>
                <div class="col-12">
                  <label for="yourUsername" class="form-label">Email</label>
                  <div class="input-group has-validation">
               
                    <input type="text" name="email" class="form-control" id="yourUsername" required>
                    <div class="invalid-feedback">Veuillez entrer votre nom d'utilisateur.</div>
                  </div>
                </div>

                <div class="col-12">
                  <label for="yourPassword" class="form-label">Mot de passe</label>
                  <input type="password" name="password" class="form-control" id="yourPassword" required>
                  <div class="invalid-feedback">Veuillez entrer votre mot de passe !</div>
                </div>

                <div class="col-12">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" value="true" id="rememberMe">
                    <label class="form-check-label" for="rememberMe">Se souvenir de moi</label>
                  </div>
                </div>

                <div class="col-12">
                  <button class="btn btn-primary w-100" type="submit">Se connecter</button>
                </div>

                <div class="col-12">
                  <p class="small mb-0">Pas encore de compte ? <a href="<?= site_url('vm_controller/register') ?>">Créer un compte</a></p>
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