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
      <li class="breadcrumb-item"><a href="index.html">cotisation</a></li>
      <li class="breadcrumb-item">Formulaire</li>
      <li class="active">Mission</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section">
  <div class="row">
    <div class="col-lg-6">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Tous les cotisations</h5>

          <!-- General Form Elements -->
          <form id="form" class="form-material" method="POST" action="<?php echo base_url().'index.php/vm_controller/cotisation'; ?>">
            <div class="row mb-3">
                <input type="hidden" name="action" value="update">
                <input type="hidden" name="id" value="<?= $cotisation->ID_cotisation ?>">
              <label for="inputText" class="col-sm-2 col-form-label">Membre</label>
              <div class="col-sm-12">
                <select name="ID_membre" class="form-control" required>
                  <option value="<?= $cotisation->ID_membre ?>"><?= $cotisation->Nom.' '.$cotisation->Prenom  ?></option>
                  <?php foreach ($membre as $m): ?>
                      <option value="<?= $m->ID_membre ?>">
                          <?= $m->Nom.' '.$m->Prenom  ?>
                      </option>
                  <?php endforeach; ?>
              </select>
            </div>
            </div>
              
            <div class="row mb-3">
                <label for="inputNumber" class="col-sm-4 col-form-label">Montant</label>
                <div class="col-sm-12">
                  <input type="number" name ="Montant" class="form-control" value="<?= $cotisation->Montant ?>" placeholder ="Montant à payer">
                </div>
              </div>
              <div class="row mb-3">
                <label for="inputNumber" class="col-sm-4 col-form-label">Date paiement</label>
                <div class="col-sm-12">
                  <input type="date" name="Date"class="form-control" value="<?= $cotisation->Date ?>" placeholder ="Montant à payer">
                </div>
              </div>
 
 
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label"></label>
              <div class="col-sm-12">
              <button type="submit" id="submit"  name="submit" class="btn btn-primary">Modifier</button>
                    <a href="<?php echo base_url().'index.php/vm_controller/cotisation'; ?>" class="btn btn-danger">Annuler</a>
              </div>
            </div>

          </form><!-- End General Form Elements -->
        
        </div>
      </div>

    </div>

    <!-- autre  -->
   
</section>

</main><!-- End #main -->

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