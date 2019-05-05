<?php  ?>

<!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <!-- <span class="m-0 font-weight-bold text-primary">Data User</span>
              <span class="m-0 font-weight-bold text-right">Data User</span> -->
               <div class="row justify-content-between">
                  <div class="col-6">Data User</div>
                  
                </div>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead class="text-center">
                    <tr>
                      <th>No Meja</th>
                      <th>Nama User</th>
                      <th>Status Order</th>
                      
                      
                    </tr>
                  </thead>
                  <tbody class="text-center">
                  	<?php foreach ($list as $row) { ?>
                    <tr>
                      <td><?= $row->no_meja ?></td>
                      <td><?= $row->nama_user ?></td>
                      <td>
                      	<?php if ($row->status_order == "1") { ?>
                      		<span class="badge badge-success">Sudah Bayar</span>
                      	<?php }else{ ?>
							           <span class="badge badge-primary">Belum Bayar</span>
                      	<?php } ?>
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