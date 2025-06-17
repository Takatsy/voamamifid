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
      <li class="breadcrumb-item"><a href="index.html">Accueil</a></li>
      <li class="breadcrumb-item">Formulaire</li>
      <li class="breadcrumb-item active">Membre</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section">
  <div class="row">
    <div class="col-lg-6">

          <!-- General Form Elements -->
             <!-- Basic Modal -->
          <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#basicModal">
           ajouter les membres
          </button>
          <br>
          <br>
            <div class="modal fade" id="basicModal" tabindex="-1">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title t" id="scrollmodalLabel" style="font-weight;">Nouvelle membres</h3>
                        <button class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>   
                        
                    </div>
                    <div class="modal-body">
                        <div class="modal-body form">
                            <form id="form" class="form-material" method="POST" action="<?php echo base_url().'index.php/vm_controller/membre'; ?>">
                              <div class="form-body">
                                  <!-- Champ caché pour l'action -->
                                  <input type="hidden" name="action" value="add">
                                  <div class="row mb-3">
                                    <label for="inputText" class="col-sm-3 col-form-label">Nom</label>
                                    <div class="col-sm-12">
                                      <input type="text" name="Nom" class="form-control" placeholder="Nom" required>
                                    </div>
                                  </div>
                                  <div class="row mb-3">
                                    <label for="inputText" class="col-sm-3 col-form-label">Prenom</label>
                                    <div class="col-sm-12">
                                      <input type="text" name="Prenom" class="form-control" placeholder="Prenom" required>
                                    </div>
                                  </div>


                                  <!-- Bouton d'envoi -->
                                  <div class="modal-footer">
                                    <button id="" onClick="save()" type="submit" class="btn btn-primary"><i class="fa-solid fa-check"></i> Enregistrer</button>
                                    <button type="submit" class="btn btn-danger" data-bs-dismiss="modal"><i class="fas fa-times"></i> Annuler</button>
                                </div>
                              </div>
                          </form>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>

  
    </div>

    <!-- 🔧 MODAL MODIFIER -->
<div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="updateModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <form method="POST" action="<?= base_url('index.php/vm_controller/membre') ?>">
      <input type="hidden" name="action" value="update">
      <input type="hidden" name="id" id="update-id">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Modifier le membre</h5>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label>Nom</label>
            <input type="text" class="form-control" name="Nom" id="update-nom" required>
          </div>
          <div class="form-group">
            <label>Prénom</label>
            <input type="text" class="form-control" name="Prenom" id="update-prenom" required>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-success">Enregistrer</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
        </div>
      </div>
    </form>
  </div>
</div>

    <!-- autre  -->
<br>

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Liste des membres</h5>
              <!-- table -->
              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    
                    <th scope="col">ID</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Prénom</th>
                    <th scope="col">Actions </th>
                  </tr>
                </thead>
                <tbody>
                <?php foreach($membre as $m):?>
                  <tr>
                    
                    <td><?= $m->ID_membre ?></td>
                    <td><?= $m->Nom ?></td>
                    <td><?= $m->Prenom ?></td>
                    
                    <td>
                    <a href="<?php echo base_url().'index.php/vm_controller/membre/modifier/'.$m->ID_membre;?>"><button type="button" class="btn btn-outline-primary"><i class="bi bi-box-arrow-in-down-left"></i></button></a>
                    <a href="<?php echo base_url().'index.php/vm_controller/membre/supprimer/'.$m->ID_membre;?>" onclick="return confirm('Confirmez-vous la suppression ?')"><button type="button" class="btn btn-outline-danger"><i class="bi bi-trash"></i></button></a></td>
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
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.6.2/js/bootstrap.bundle.min.js"></script>

<script>
$(document).ready(function () {
  $('#updateModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget)
    var id = button.data('id')
    var nom = button.data('nom')
    var prenom = button.data('prenom')

    var modal = $(this)
    modal.find('#update-id').val(id)
    modal.find('#update-nom').val(nom)
    modal.find('#update-prenom').val(prenom)
  })
});
</script>