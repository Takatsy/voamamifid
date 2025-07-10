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
      
      <li class="breadcrumb-item active">Sazy</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section">
  
    

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Nouvelle sazy</h5>

          <!-- General Form Elements -->
          <form id="form" class="form-material" method="POST" action="<?php echo base_url().'index.php/vm_controller/sazy'; ?>">
            <div class="row mb-3">
              <input type="hidden" name="action" value="add">
              <label for="inputText" class="col-sm-3 col-form-label">Membre</label>
              <div class="col-sm-12">
                <select name="ID_membre" class="form-control" required>
                  <option value=""> Sélectionner un membre </option>
                  <?php foreach ($membre as $m): ?>
                      <option value="<?= $m->ID_membre ?>">
                          <?= $m->Nom ?> <?= $m->Prenom ?>
                      </option>
                  <?php endforeach; ?>
              </select>
            </div>
            </div>
                <div class="row mb-3">
                    <label for="inputNumber" class="col-sm-4 col-form-label">Montant (Ar)</label>
                    <div class="col-sm-12">
                    <input type="number" name="Montant"  class="form-control" placeholder ="Montant d'un sazy">
                    </div>
                </div>
              
                <div class="row mb-3">
                    <label for="inputNumber" class="col-sm-4 col-form-label">Observation</label>
                    <div class="col-sm-12">
                    <input type="text" name="Observation"  class="form-control" placeholder ="Observation">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputNumber" class="col-sm-4 col-form-label">Date </label>
                    <div class="col-sm-12">
                    <input type="date" name="Date"  class="form-control" placeholder ="nombre">
                    </div>
                </div>
    
 
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label"></label>
              <div class="col-sm-12">
              <button type="submit" id="submit"  name="submit" class="btn btn-primary">Ajouter</button>
                    <a href="<?php echo base_url().'index.php/vm_controller/sazy';?>" class="btn btn-danger">Annuler</a>
              </div>
            </div>

          </form><!-- End General Form Elements -->
        
        </div>
      </div>

    

    <!-- autre  -->
    

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Liste des sazy</h5>
              <!-- table -->
              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Prénom</th>
                    <th scope="col">Montant (Ar)</th>
                    <th scope="col">Observation</th>
                    <th scope="col">Date</th>
                    <th scope="col">Actions</th>
                  </tr>
                </thead>
                <tbody>
                <?php foreach($sazy as $m):?>
                  <tr>
                    
                    <td><?= $m->ID_sazy ?></td>
                    <td><?= $m->Nom?></td>
                    <td><?= $m->Prenom?></td>
                    <td><?= $m->Montant ?> Ar</td>
                    <td><?= $m->Observation ?></td>
                    <td><?= $m->Date?></td>
                    
                    
                    <td>
                    <a href="<?php echo base_url().'index.php/vm_controller/sazy/modifier/'.$m->ID_sazy;?>"><button type="button" class="btn btn-outline-primary"><i class="bi bi-box-arrow-in-down-left"></i></button></a>
                    <a href="<?php echo base_url().'index.php/vm_controller/sazy/supprimer/'.$m->ID_sazy;?>" onclick="return confirm('Confirmez-vous la suppression ?')"><button type="button" class="btn btn-outline-danger"><i class="bi bi-trash"></i></button></a></td>
                  </tr>
                  <?php endforeach ?>
                  
                </tbody>
              </table>

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