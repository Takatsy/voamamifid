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
  <h1>VOAMAMY</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?php echo base_url().'index.php/vm_controller/index'; ?>">Accueil</a></li>
      
      <li class="breadcrumb-item active">Engalia</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section">
  

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Modification Engalia</h5>

          <!-- General Form Elements -->
          <form id="form" class="form-material" method="POST" action="<?php echo base_url().'index.php/vm_controller/engalia'; ?>">
            <div class="row mb-3">
                <input type="hidden" name="action" value="update">
                <input type="hidden" name="id" value="<?= $engalia->ID_engalia ?>">
              <label for="inputText" class="col-sm-2 col-form-label">Membre</label>
              <div class="col-sm-12">
                <select name="ID_membre" class="form-control" required>
                  <option value="<?= $engalia->ID_membre ?>"><?= $engalia->Nom.' '.$engalia->Prenom  ?></option>
                  <?php foreach ($membre as $m): ?>
                      <option value="<?= $m->ID_membre ?>">
                          <?= $m->Nom.' '.$m->Prenom  ?>
                      </option>
                  <?php endforeach; ?>
              </select>
            </div>
            </div>
              
            <div class="row mb-3">
                <label for="inputNumber" class="col-sm-4 col-form-label">Montant (Ar)</label>
                <div class="col-sm-12">
                  <input type="number" name ="Montant" class="form-control" value="<?= $engalia->Montant ?>" placeholder ="Montant à payer">
                </div>
              </div>
              <div class="row mb-3">
                <label for="inputNumber" class="col-sm-4 col-form-label">Date paiement</label>
                <div class="col-sm-12">
                  <input type="date" name="Date"class="form-control" value="<?= $engalia->Date ?>" placeholder ="Montant à payer">
                </div>
              </div>
 
 
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label"></label>
              <div class="col-sm-12">
              <button type="submit" id="submit"  name="submit" class="btn btn-primary">Modifier</button>
                    <a href="<?php echo base_url().'index.php/vm_controller/engalia'; ?>" class="btn btn-danger">Annuler</a>
              </div>
            </div>

          </form><!-- End General Form Elements -->
        
        </div>
      </div>

    
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