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
  

      
    

    <!-- autre  -->
   

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Liste des remboursements</h5>
              <!-- table -->
              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Prénom</th>
                    <th scope="col">Montant</th>
                    <th scope="col">Date</th>
                    <th scope="col">Actions</th>
                  </tr>
                </thead>
                <tbody>
                <?php foreach($remboursement as $m):?>
                  <tr>
                    
                    <td><?= $m->ID_remboursement ?></td>
                    <td><?= $m->Nom?></td>
                    <td><?= $m->Prenom?></td>
                    <td><?= $m->Montant ?> Ar</td>
                    <td><?= $m->Date_remboursement?></td>
                    
                    
                    <td>
                    <a href="<?php echo base_url().'index.php/vm_controller/remboursement/historique/'.$m->ID_remboursement;?>"><button type="button" class="btn btn-warning"><i class="bx bx-list-ul"></i></button></a>
                    <a href="<?php echo base_url().'index.php/vm_controller/remboursement/modifier/'.$m->ID_remboursement;?>"><button type="button" class="btn btn-outline-primary"><i class="bi bi-box-arrow-in-down-left"></i></button></a>
                    <a href="<?php echo base_url().'index.php/vm_controller/remboursement/supprimer/'.$m->ID_remboursement;?>" onclick="return confirm('Confirmez-vous la suppression ?')"><button type="button" class="btn btn-outline-danger"><i class="bi bi-trash"></i></button></a></td>
                  </tr>
                  <?php endforeach ?>
                  
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