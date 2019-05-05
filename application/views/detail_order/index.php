<?php  ?>
<div class="row py-3">
          <div class="col-md-12 py-3">
            <div class="card border-0 shadow">
              <div class="card-body">
                <div class="row justify-content-between">
                  <div class="col-6">Nama : <?= $this->session->userdata('nama_user'); ?></div>
                  <div class="col-6 text-right"> </div>
                </div>
              </div>
            </div>
          </div> 
         

         <div class="col-lg-7">
            <div class="card border-0 shadow mb-4">
            <div class="card-header py-3">
              <h6 class="font-weight-bold text-success">Daftar Menu</h6>
            </div>
            <div class="card-body">
              <div class="row">
              <div class="col-md-12">
                <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" >
                  <thead class="text-center">
                    <tr>
                      <th>Masakan</th>
                      <th>Harga</th>
                      <th></th>
                    </tr>
                  </thead>
                 
                  <tbody class="text-center">
                   <?php foreach ($masakan as $row) { ?>
                    <tr>
                   <td><?= $row->nama_masakan ?></td>
                   <td><?= $row->harga_masakan ?></td>
                      <td>
                         <a href="<?= base_url('Detail_Order/add/').$row->id_masakan ?>" class="btn btn-success"><i class="fa fa-plus"></i></a>
                      </td>
                    </tr>
                	<?php } ?>
                 
                  </tbody>
                </table>
              </div>
              </div>
             </div>
            </div>
          </div> 
         </div>

         <div class="col-lg-5">
           <div class="card border-0 shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-success">Detail Menu</h6>
            </div>
            <div class="card-body">
              <form action="<?= base_url('Detail_Order/tambah') ?>" method="post">
                <input type="hidden" name="id_masakan" value="<?= @$detail['id_masakan'] ?>">
                <div class="form-group">
                  <label for="">Nama Masakan</label>
                  <input type="text" name="nama_masakan" readonly class="form-control" value="<?= @$detail['nama_masakan'] ?>"> 
                </div>
                <div class="form-group">
                  <label for="">Harga Masakan</label>
                  <input type="text" readonly="" name="harga_masakan" id="harga_masakan" class="form-control" value="<?= @$detail['harga_masakan'] ?>">
                </div>
                <div class="form-group">
                  <label for="">Jumlah</label>
                  <input type="number" class="form-control" id="qty" name="qty" onkeyup="sum()">
                </div>
                <div class="form-group">
                  <label for="">Sub Total</label>
                  <input type="text" readonly="" class="form-control" name="total_harga" id="total_harga">
                </div>
                <div class="form-group">
                  <label for="">Keterangan</label>
                  <input type="text" class="form-control" name="keterangan">
                </div>
                <div class="form-group">
                  <input type="submit" class="btn btn-success btn-block" value="Tambahkan" id="btn_add">
                </div>
              </form>
            </div>
          </div> 
         </div>
          
          

         <div class="col-md"> 
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-success">Daftar Pesanan</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                  <thead class="text-center">
                    <tr>
                      <th>No</th>
                      <th>Masakan</th>
                      <th>Harga</th>
                      <th>qty</th>
                      <th>Total Harga</th>
                      <th>#</th>
                    </tr>
                  </thead>
                 
                  <tbody class="text-center">
                  	<?php
                  		$no=1;
                  	 foreach ($cart as $row) { ?>
                    <tr>
                      <td><?= $no++ ?></td>
                      <td><?= $row->nama_masakan ?></td>
                      <td><?= $row->harga_masakan ?></td>
                      <td><?= $row->qty ?></td>
                      <td><?= $row->total_harga ?></td>
                      <td>
                        <a href="<?= base_url('Detail_Order/delete/').$row->id_detail_order ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                      </td>
                    </tr>
                	<?php } ?>
                  </tbody>
                  <tfoot class="text-center">
                    <th colspan="5"></th>
                    <th><a href="<?= base_url('Detail_Order/selesai') ?>" class="btn btn-success">Finish</a></th>
                  </tfoot>
                </table>
              </div>
            </div>
          </div>
         </div>       
         </div>
          <!-- End Transaction -->