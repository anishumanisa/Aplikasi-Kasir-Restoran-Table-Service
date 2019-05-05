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
          <!-- <h1 class="h3 mb-2 text-gray-800">Tables</h1> -->
         <!--  <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p> -->

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <!-- <span class="m-0 font-weight-bold text-success">Data User</span>
              <span class="m-0 font-weight-bold text-right">Data User</span> -->
               <div class="row justify-content-between">
                  <div class="col-6">Data User</div>
                  <div class="col-6 text-right"><a href="<?= base_url('Masakan/create') ?>" class="btn btn-success">Tambah Data</a></div>
                </div>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead class="text-center">
                    <tr>
                      <th>Nama Masakan</th>
                      <th>Harga</th>
                      <th>Status Masakan</th>
                      <th>Aksi</th>
                      
                    </tr>
                  </thead>
                  <tbody class="text-center">
                  	<?php foreach ($masakan as $row) { ?>
                    <tr>
                      <td><?= $row->nama_masakan ?></td>
                      <td><?= $row->harga_masakan ?></td>
                      <td>
                          <?php if ($row->status_masakan == 1) { ?>
                            <span class="badge badge-success">Tersedia</span>
                          <?php }else{ ?>
                            <span class="badge badge-warning">Tidak Tersedia</span>
                          <?php } ?>
                      </td>
                      <td>
                      	<div class="btn-group">
                      		<a href="<?= base_url('Masakan/edit/').$row->id_masakan ?>" class="btn btn-success"><i class="fa fa-edit"></i></a>
                      		<a href="<?= base_url('Masakan/delete/').$row->id_masakan ?>" class="btn btn-warning"><i class="fa fa-trash"></i></a>
                      	</div>
                      </td>
                    </tr>
                   <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->