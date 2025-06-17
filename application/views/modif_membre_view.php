<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!-- ======= Header ======= -->
<?php 
  $this->load->view('navbar');?>
  <!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <?php 
  $this->load->view('sidebar');?>
  <!-- End Sidebar-->

<main id="main" class="main">

<div class="pagetitle">
  <h1>Form Elements</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Membre</a></li>
      <li class="breadcrumb-item">Formulaire</li>
      <li class="breadcrumb-item active">Membre</li>
    </ol>
  </nav>
</div><!-- End Page Title -->
  <main id="main" class="main">

    <div class="pagetitle">

      
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Modifier le membre</h5>

              <!-- Vertical Form -->
              <form method="post" action="<?= base_url('index.php/vm_controller/membre') ?>">
                <input type="hidden" name="action" value="update">
                <input type="hidden" name="id" value="<?= $membre->ID_membre ?>">
                
                <div class="row mb-3">
                <label for="inputText" class="col-sm-3 col-form-label">Nom</label>
                <div class="col-sm-12">
                    <input type="text" name="Nom" value="<?= $membre->Nom ?>"  class="form-control" placeholder="Nom" required>
                </div>
                </div>
                <div class="row mb-3">
                <label for="inputText" class="col-sm-3 col-form-label">Prenom</label>
                <div class="col-sm-12">
                    <input type="text" name="Prenom" value="<?= $membre->Prenom ?>" class="form-control" placeholder="Prenom" required>
                </div>
                </div>
                <button type="submit" class="btn btn-primary">Modifier</button>
                <a href="<?= base_url('index.php/vm_controller/membre') ?>" class="btn btn-danger">Annuler</a>
            </form>

            </div>
          </div>

          
        </div>
      </div>
    </section>

  </main><!-- End #main -->

  

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
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