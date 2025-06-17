<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
<section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Ajouter une membre</h5>

              <!-- Vertical Form -->
              <form class="row g-3" method="post" name =" " value= "" action="<?php echo base_url().'index.php/vm_controller/membre';?>">
             
                
                <div class="form-floating mb-1">
                    <input type="hidden" class="form-control" placeholder=" " value="add " name="action" id="floatingInput" aria-label="First name">
                    <input type="text" class="form-control" placeholder=" " value=" " name="nom" id="floatingInput" aria-label="First name">
                    <label for="floatingInput">nom</label>
                    <input type="text" class="form-control" placeholder=" " value=" " name="prenom" id="floatingInput" aria-label="First name">
                    <label for="floatingInput">prenom</label>
                    

                </div><br>
                <div alight="right">
                    <button type="submit" id="submit"  name="submit" class="btn btn-primary">Ajouter</button>
                    <a href="<?php ?>" class="btn btn-danger">Annuler</a>
                </div> 
              </form><!-- Vertical Form -->

            </div>
          </div>

          
        </div>
      </div>
    </section>
    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Listes membre</h5>

              <!-- Table with hoverable rows -->
              <table class="table table-striped datatable">
                <thead>
                  <tr>
                    
                    <th scope="col">ID</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Prenom</th>
                    <th scope="col">Actions</th>
                    
                  </tr>
                </thead>
                <tbody>
                <?php foreach($membre as $m):?>
                  <tr>
                    
                    <td><?= $m->ID_membre ?></td>
                    <td><?= $m->nom ?></td>
                    <td><?= $m->prenom ?></td>
                    
                    <td><a href=""><button type="button" class="btn btn-outline-primary"><i class="bi bi-box-arrow-in-down-left"></i></button></a>
                    <a href=""><button type="button" class="btn btn-outline-danger"><i class="bi bi-trash"></i></button></a></td>
                  </tr>
                  <?php endforeach ?>
                  
                </tbody>
              </table>
              <!-- End Table with hoverable rows -->

            </div>
          </div>

          

        </div>
      </div>
    </section>


    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Ajouter une anjara</h5>

              <!-- Vertical Form -->
              <form class="row g-3" method="post" name =" anjara" action="<?php echo base_url().'index.php/vm_controller/anjara';?>">
             
                
                <div class="form-floating mb-1">
                    <input type="text" class="form-control" placeholder=" " value=" " name="Montant" id="floatingInput" aria-label="First name">
                    <label for="floatingInput">Montant</label>
                    
                    

                </div><br>
                <div alight="right">
                    <button type="submit" id="submit"  name="submit" class="btn btn-primary">Ajouter</button>
                    <a href="<?php ?>" class="btn btn-danger">Annuler</a>
                </div> 
              </form><!-- Vertical Form -->

            </div>
          </div>

          
        </div>
      </div>
    </section>
    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Ajouter une mission</h5>

              <!-- Vertical Form -->
              <form class="row g-3" method="post" name =" mission" action="<?php echo base_url().'index.php/vm_controller/mission';?>">
             
                
                <div class="form-floating mb-1">
                    <input type="text" class="form-control" placeholder=" " value=" " name="Nbrjours" id="floatingInput" aria-label="First name">
                    <label for="floatingInput">Nombre jours</label>
                    
                    

                </div><br>
                <div alight="right">
                    <button type="submit" id="submit"  name="submit" class="btn btn-primary">Ajouter</button>
                    <a href="<?php ?>" class="btn btn-danger">Annuler</a>
                </div> 
              </form><!-- Vertical Form -->

            </div>
          </div>

          
        </div>
      </div>
    </section>
    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Ajouter une reunion</h5>

              <!-- Vertical Form -->
              <form class="row g-3" method="post" name =" reunion" action="<?php echo base_url().'index.php/vm_controller/reunion';?>">
             
                
                <div class="form-floating mb-1">
                    <input type="text" class="form-control" placeholder=" " value=" " name="ID_membre" id="floatingInput" aria-label="First name">
                    <label for="floatingInput">membre</label>
                    <input type="text" class="form-control" placeholder=" " value=" " name="ID_anjara" id="floatingInput" aria-label="First name">
                    <label for="floatingInput">anjara</label>
                    <input type="text" class="form-control" placeholder=" " value=" " name="Nbranjara" id="floatingInput" aria-label="First name">
                    <label for="floatingInput">Nombre anjara</label>
                    <input type="date" class="form-control" placeholder=" " value=" " name="Date_reunion" id="floatingInput" aria-label="First name">
                    <label for="floatingInput">Date reunion</label>
                    
                    

                </div><br>
                <div alight="right">
                    <button type="submit" id="submit"  name="submit" class="btn btn-primary">Ajouter</button>
                    <a href="<?php ?>" class="btn btn-danger">Annuler</a>
                </div> 
              </form><!-- Vertical Form -->

            </div>
          </div>

          
        </div>
      </div>
    </section>
</body>
</html>