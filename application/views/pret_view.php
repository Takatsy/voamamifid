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
      
      <li class="breadcrumb-item active">Prêt</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section">
  

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Nouvelle prêt</h5>
          
          <?php if ($this->session->flashdata('error')): ?>
            <script>
            Swal.fire({
                icon: 'error',
                title: 'Erreur',
                text: '<?php echo $this->session->flashdata('error'); ?>',
                confirmButtonText: 'OK'
            });
            </script>
            <?php endif; ?>

            <?php if ($this->session->flashdata('add_success')): ?>
            <script>
            Swal.fire({
                icon: 'success',
                title: 'Succès',
                text: '<?php echo $this->session->flashdata('add_success'); ?>',
                confirmButtonText: 'OK'
            });
            </script>
            <?php endif; ?>
          <!-- General Form Elements -->
          <form id="form" class="form-material" method="POST" action="<?php echo base_url().'index.php/vm_controller/pret'; ?>">
            <div class="row mb-3">
              <input type="hidden" name="action" value="add">
              <label for="inputText" class="col-sm-2 col-form-label">Membre</label>
              <div class="col-sm-12">
                <select name="ID_membre" class="form-control" required>
                  <option value="">Sélectionner un membre </option>
                  <?php foreach ($membre as $m): ?>
                      <option value="<?= $m->ID_membre ?>">
                          <?= $m->Nom ?> <?= $m->Prenom ?>
                      </option>
                  <?php endforeach; ?>
              </select>
            </div>
            </div>
            
            <div class="row mb-3">
                <label for="inputNumber" class="col-sm-4 col-form-label">Montant</label>
                <div class="col-sm-12">
                  <input type="number" name="Montant" class="form-control" placeholder="Montant à prêter" required>
                </div>
                <?php if(isset($error)): ?>
                <div style="color:red; margin-top:10px;">
                    <?= $error ?>
                </div>
            <?php endif; ?>
              </div>
              <div class="row mb-3">
                <label for="inputNumber" class="col-sm-4 col-form-label">Date du prêt</label>
                <div class="col-sm-12">
                  <input type="date"  name="Date_pret" class="form-control" required>
                </div>
              </div>
 
 
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label"></label>
              <div class="col-sm-12">
              <button type="submit" id="submit"  name="submit" class="btn btn-primary">Ajouter</button>
                    <a href="<?php echo base_url().'index.php/vm_controller/pret'; ?>" class="btn btn-danger">Annuler</a>
              </div>
            </div>

          </form><!-- End General Form Elements -->
        
        </div>
      </div>

      

    <!-- autre  -->
   

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Liste des prêt</h5>
              <!-- table -->
              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Prénom</th>
                    <th scope="col">Montant</th>
                    <th scope="col">Date prêt</th>
                    <th scope="col">status</th>
                    <th scope="col">Actions</th>
                  </tr>
                </thead>
                <tbody>
                <?php foreach($pret as $m):?>
                  <tr>
                    
                    <td><?= $m->ID_pret ?></td>
                    <td><?= $m->Nom?></td>
                    <td><?= $m->Prenom?></td>
                    <td><?= $m->Montant ?> Ar</td>
                    <td><?= $m->Date_pret?></td>
                    <td>
                      <?php if ($m->Statut == 'Payé'): ?>
                        <span class="badge bg-success">Remboursé</span>
                      <?php else: ?>
                        <span class="badge bg-warning text-dark">En cours</span>
                      <?php endif; ?>
                    </td>
                    <td>

                   
                    <a href="<?php echo base_url().'index.php/vm_controller/pret/historique/'.$m->ID_pret;?>"><button type="button" class="btn btn-warning"><i class="bx bx-list-ul"></i></button></a>
                    <a href="<?php echo base_url().'index.php/vm_controller/pret/modifier/'.$m->ID_pret;?>"><button type="button" class="btn btn-outline-primary"><i class="bi bi-box-arrow-in-down-left"></i></button></a>
                    <a href="<?php echo base_url().'index.php/vm_controller/pret/supprimer/'.$m->ID_pret;?>" onclick="return confirm('Confirmez-vous la suppression ?')"><button type="button" class="btn btn-outline-danger"><i class="bi bi-trash"></i></button></a></td>
                  </td>

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










