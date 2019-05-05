<?php  ?>

<!-- Begin Page Content -->
        <div class="container-fluid">

        	<?php if ($this->session->flashdata('msg')) { ?>
        	<div class="row">
	          <div class="col-md-12">
	            <div class="alert alert-success alert-dismissible fade show" role="alert">
	            Data Berhasil <strong> <?= $this->session->flashdata('msg'); ?> </strong>
	            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	              <span aria-hidden="true">&times;</span>
	            </button>
	      	  </div>
	          </div>
          	</div>
           <?php } ?>

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Tables</h1>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <!-- <span class="m-0 font-weight-bold text-primary">Data User</span>
              <span class="m-0 font-weight-bold text-right">Data User</span> -->
               <div class="row justify-content-between">
                  <div class="col-6">Nama Pelanggan : <?= $this->session->userdata('nama_user'); ?></div>
                  <div class="col-6 text-right">No Meja : <?= $this->session->userdata('sess_no_meja') ?></div>
                </div>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead class="text-center">
                    <tr>
                      <th>No</th>
                      <th>Nama Masakan</th>
                      <th>Harga Masakan</th>
                      <th>qty</th>
                      <th>Total Harga</th>
                      
                    </tr>
                  </thead>
                  <tbody class="text-center">
                  	<?php
                    $no = 1;
                     foreach ($result as $row) { ?>
                    <tr>
                      <td><?= $no++ ?></td>
                      <td><?= $row->nama_masakan ?></td>
                      <td><?= number_format($row->harga_masakan,'0',',','.') ?></td>
                      <td><?= $row->qty ?></td>
                      <td><?= number_format($row->total_harga,'0',',','.') ?></td>
                    </tr>
                   <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->