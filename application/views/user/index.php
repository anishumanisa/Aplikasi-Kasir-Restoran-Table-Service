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


          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <!-- <span class="m-0 font-weight-bold text-success">Data User</span>
              <span class="m-0 font-weight-bold text-right">Data User</span> -->
               <div class="row justify-content-between">
                  <div class="col-6">Data User</div>
                  <div class="col-6 text-right"><a href="<?= base_url('User/create') ?>" class="btn btn-success">Tambah Data</a></div>
                </div>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead class="text-center">
                    <tr>
                      <th>Name</th>
                      <th>Username</th>
                      <th>Level</th>
                      <th>Aksi</th>
                      
                    </tr>
                  </thead>
                  <tbody class="text-center">
                  	<?php foreach ($user as $row) { ?>
                    <tr>
                      <td><?= $row->nama_user ?></td>
                      <td><?= $row->username ?></td>
                      <td><?= $row->nama_level ?></td>
                      <td>
                      	<div class="btn-group">
                      		<a href="<?= base_url('User/edit/').$row->id_user ?>" class="btn btn-success"><i class="fa fa-edit"></i></a>
                      		<a href="<?= base_url('User/delete/').$row->id_user ?>" class="btn btn-warning"><i class="fa fa-trash"></i></a>
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