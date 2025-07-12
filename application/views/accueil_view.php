<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<body>

  <!-- ======= Header ======= -->
  <?php 
  $this->load->view('navbar');?>
  <!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <?php 
  $this->load->view('sidebar');?>
  <!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Accueil</h1>
      
    </div><!-- End Page Title -->

    <section class="section dashboard">
      
        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">

            <!-- Sales Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Membre <span>| Total membres</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-cart"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?= $total_membre ?></h6>
                      

                    </div>
                  </div>
                </div>

              </div>
            
            </div><!-- End Revenue Card -->
           
           <div class="col-xxl-4 col-md-6">
             <div class="card info-card revenue-card">

               <div class="filter">
                 <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                 <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                   <li class="dropdown-header text-start">
                     <h6>Filter</h6>
                   </li>

                   <li><a class="dropdown-item" href="#">Today</a></li>
                   <li><a class="dropdown-item" href="#">This Month</a></li>
                   <li><a class="dropdown-item" href="#">This Year</a></li>
                 </ul>
               </div>

               <div class="card-body">
                 <h5 class="card-title">Cotisation <span>| Total cotisation</span></h5>

                 <div class="d-flex align-items-center">
                   <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                     <i class="bi bi-currency-dollar"></i>
                   </div>
                   <div class="ps-3">
                     <h6><?= $total_cotisation ?> Ar</h6>
                     

                   </div>
                 </div>
               </div>

             </div>
           </div><!-- End Revenue Card -->

            <!-- Revenue Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card revenue-card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Anjara <span>| Total anjara</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-currency-dollar"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?= $total_part?> Ar</h6>
                      

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Revenue Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card revenue-card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Prêt <span>| Prêt Total </span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-currency-dollar"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?= $total_pret ?> Ar</h6>
                      

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Revenue Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card revenue-card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Sazy <span>| Total sazy</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-currency-dollar"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?= $total_sazy ?> Ar</h6>
                      

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Revenue Card -->
           
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card revenue-card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Solde actuel <span> | Total solde</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-currency-dollar"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?= $solde_total ?> Ar</h6>
                      

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Revenue Card -->

            


            <!-- Reports -->
            <div class="col-12">
              <div class="card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Rapport  <span>/Graphique</span></h5>

                  <!-- Line Chart -->
                  <div id="reportsChart"></div>

                  <script>
                  document.addEventListener("DOMContentLoaded", () => {
                          const options = {
                            series: [{
                              name: 'Montants',
                              data: [
                                <?= $total_part ?>,
                                <?= $total_cotisation ?>,
                                <?= $total_sazy ?>,
                                <?= $total_pret ?>,
                                <?= $solde_total ?>
                              ]
                            }],
                            chart: {
                              height: 350,
                              type: 'bar'
                            },
                            plotOptions: {
                              bar: {
                                distributed: true,
                                horizontal: false,
                                columnWidth: '55%'
                              }
                            },
                            colors: ['#00E396', '#FEB019', '#FF4560', '#775DD0', '#546E7A'], // une couleur en moins
                            dataLabels: {
                              enabled: true
                            },
                            xaxis: {
                              categories: ['Anjara', 'Cotisations', 'Sazy', 'Prêts', 'Solde'], // sans 'Membres'
                            },
                            tooltip: {
                              y: {
                                formatter: function (val) {
                                  return val.toLocaleString('fr-FR') + " Ar";
                                }
                              }
                            }
                          };

                          new ApexCharts(document.querySelector("#reportsChart"), options).render();
                        });
                </script>
                  <!-- End Line Chart -->
                  

                </div>

              </div>
            </div><!-- End Reports -->

          

          </div>
        </div><!-- End Left side columns -->

        <!-- Right side columns -->
        <!-- End Right side columns -->

      
    </section>

  </main><!-- End #main -->

  

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
