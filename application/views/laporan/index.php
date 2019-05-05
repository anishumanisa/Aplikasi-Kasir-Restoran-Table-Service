<?php  ?>

<!-- Begin Page Content -->
        <div class="container-fluid">


          <!-- Page Heading -->
          <!-- <h1 class="h3 mb-2 text-gray-800">Laporan</h1> -->

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <!-- <span class="m-0 font-weight-bold text-primary">Data User</span>
              <span class="m-0 font-weight-bold text-right">Data User</span> -->
               <div class="row justify-content-between">
                  <div class="col-6"><h2>Laporan</h2></div>
                  <!-- <div class="col-6 text-right"><a href="<?= base_url('Meja/create') ?>" class="btn btn-primary">Tambah Data</a></div> -->
                </div>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="example23" width="100%" cellspacing="0">
                  <thead class="text-center">
                    <tr>
                      <th>No</th>
                      <th>No Meja</th>
                      <th>Nama User</th>
                      <th>Total Harga</th>
                      <th>Tanggal</th>
                      
                      
                    </tr>
                  </thead>
                  <tbody class="text-center">
                  	<?php $no=1;
                     foreach ($laporan as $row) { ?>
                    <tr>
                      <td><?= $no++ ?></td>
                      <td><?= $row->no_meja ?></td>
                      <td><?= $row->nama_user ?></td>
                      <td><?= $row->total_bayar ?></td>
                      <td><?= $row->tanggal_transaksi ?></td>
                    </tr>
                   <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->