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
      
      <li class="breadcrumb-item active">Remboursement</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section">
  

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Historique remboursement</h5>

          <!-- General Form Elements -->
          <form id="form" class="form-material" method="POST" action="<?php echo base_url().'index.php/vm_controller/remboursement'; ?>">
          <div class="row mb-3">
                      <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Nom et Prénom</label>
                      <div class="col-md-8 col-lg-9">
                        <p name="fullName" type="text" class="form-control" id="fullName" value=""> <?= $remboursement->Nom.' '.$remboursement->Prenom ?> </p>
                      </div>
                    </div>

                                       
                    <div class="row mb-3">
                      <label for="Job" class="col-md-4 col-lg-3 col-form-label">Prêt</label>
                      <div class="col-md-8 col-lg-9">
                      <p name="fullName" type="text" class="form-control" id="fullName" value=""> <?= $remboursement->Montantpret ?> Ar</p>
                      </div>
                    </div>

                    

                    <div class="row mb-3">
                      <label for="Address" class="col-md-4 col-lg-3 col-form-label">Date prêt</label>
                      <div class="col-md-8 col-lg-9">
                      <p name="fullName" type="text" class="form-control" id="fullName" value=""> <?= $remboursement->Date_pret ?> </p>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Remboursement</label>
                      <div class="col-md-8 col-lg-9">
                      <p name="fullName" type="text" class="form-control" id="fullName" value=""> <?= $remboursement->Montant ?> Ar</p>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Email" class="col-md-4 col-lg-3 col-form-label">Date remboursement</label>
                      <div class="col-md-8 col-lg-9">
                      <p name="fullName" type="text" class="form-control" id="fullName" value=""> <?= $remboursement->Date_remboursement ?></p>
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label for="Email" class="col-md-4 col-lg-3 col-form-label">Reste à payer</label>
                      <div class="col-md-8 col-lg-9">
                      <p name="fullName" type="text" class="form-control" id="fullName" value=""> <?= number_format($reste, 0, ',', ' ') ?> Ar </p>
                      <?php if ($reste <= 0): ?>
                            <p style="color: green;"><strong>✅ Prêt remboursé</strong></p>
                        <?php else: ?>
                            <p style="color: red;"><strong>⚠️ Il reste <?= number_format($reste, 0, ',', ' ') ?> Ar à payer</strong></p>
                        <?php endif; ?>
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label class="col-sm-2 col-form-label"></label>
                      <div class="col-sm-12">
                      <a href="<?php echo base_url().'index.php/vm_controller/remboursement'; ?>" class="btn btn-primary">Retour</a>
                            
                      </div>
                    </div>

          </form><!-- End General Form Elements -->
        
        </div>
      </div>

    

    <!-- autre  -->
   

          
        
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