
	<?php if ($this->session->flashdata('msg')) { ?>
        	<div class="row">
	          <div class="col-md-12">
	            <div class="alert alert-success alert-dismissible fade show" role="alert">
	             <?= $this->session->flashdata('msg'); ?> <strong> <?= $this->session->userdata('nama_user') ?></strong>
	            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	              <span aria-hidden="true">&times;</span>
	            </button>
	      	  </div>
	          </div>
          	</div>
  <?php } ?>

<!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
          </div>
          <!-- Content Row -->
          <div class="row">

                <div class="col-lg-4 mb-4">
                  <div class="card bg-primary text-white shadow">
                    <div class="card-body">
                      TOTAL TRANSAKSI HARI INI
                      <div class="h5 mb-0 font-weight-bold text-white-800">Rp. <?= number_format($sum['total_bayar'],0,',','.') ?></div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 mb-4">
                  <div class="card bg-success text-white shadow">
                    <div class="card-body">
                      JUMLAH TRANSAKSI
                      <div class="h5 mb-0 font-weight-bold text-white-800"><?= $transaksi ?></div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 mb-4">
                  <div class="card bg-info text-white shadow">
                    <div class="card-body">
                      USER
                      <div class="h5 mb-0 mr-3 font-weight-bold text-white-800"><?= $user ?></div>
                    </div>
                  </div>
                </div>
                
                <!-- Masakan -->
                <!-- <div class="col-lg-4 mb-4">
                  <a href="<?= base_url('Masakan/laporan') ?>">
                  <div class="card bg-warning text-white shadow">
                    <div class="card-body">
                      Masakan
                      <div class="h5 mb-0 font-weight-bold text-white-800"><?= $masakan ?></div>
                    </div>
                  </div>
                  </a>
                </div> -->
                

              </div>


          <!-- Content Row -->
          <!-- <div class="row">

            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total Transaksi Hari Ini</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">Rp. <?= number_format($sum['total_bayar'],0,',','.') ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

             
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Jumlah Transaksi</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $transaksi ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">User</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?= $user ?></div>
                        </div>
                        <div class="col-auto">
	                    </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                 <a href="<?= base_url('Masakan/laporan') ?>">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Masakan</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $masakan ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-comments fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
                  </a>
              </div>

            </div>
            

          </div> -->


		<!-- Area Chart -->

		<!-- <div class="row">
			   <div class="col-xl-8 col-lg-7">
              <div class="card shadow mb-4">
                
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-success">Earnings Overview</h6>
                  <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                      <div class="dropdown-header">Dropdown Header:</div>
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                  </div>
                </div>
                
                <div class="card-body">
                  <div class="chart-area">
                    <canvas id="myAreaChart"></canvas>
                  </div>
                </div>
              </div>
            </div>	
		</div> -->
    <iframe width="1075" height="660" src="https://www.youtube.com/embed/R20pCYqa_3M" frameborder="5" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>