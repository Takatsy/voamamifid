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
      <li class="breadcrumb-item"><a href="<?php echo base_url().'index.php/vm_controller/dashboard'; ?>">Accueil</a></li>
      
      <li class="breadcrumb-item active">Notification</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section">
  

      
    

    <!-- autre  -->
   

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Prêts en retard</h5>
              <!-- table -->
              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Prénom</th>
                    <th scope="col">Retard</th>
                    <th scope="col">Date prêt</th>
                    
                  </tr>
                </thead>
                <tbody>
                <?php foreach($prets_en_retard as $pret): ?>
                    <tr>
                        <td><?= htmlspecialchars($pret->ID_pret) ?></td>
                        <td><?= htmlspecialchars($pret->nom) ?></td>
                        <td><?= htmlspecialchars($pret->prenom) ?></td>
                        <td><?= $pret->mois_retard ?> mois</td>
                        <td><?= date('d/m/Y', strtotime($pret->Date_pret)) ?></td>
                    </tr>
                <?php endforeach; ?>
                  
                </tbody>
              </table>

            </div>
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