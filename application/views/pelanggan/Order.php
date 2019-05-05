<?php  ?>
 <div class="col-lg-7 offset-md-2">
           <div class="card border-0 shadow mb-4">
            <div class="card-header py-3">
               <div class="row justify-content-between">
                  <div class="col-6">Order</div>
                  <div class="col-6 text-right"><?= date('Y-m-d H:i') ?></div>
                </div>
            </div>
            <div class="card-body">
              <form action="<?= base_url('Order/insert') ?>" method="post">
                <input type="text" readonly="" class="form-control" name="id_user" value="<?= $this->session->userdata('id_user') ?>">
                <div class="form-group">
                  <label for="">Nama</label>
                  <input type="text" name="nama_user" readonly="" class="form-control" value="<?= $this->session->userdata('nama_user') ?>"> 
                </div>
                <div class="form-group">
                	<label for="meja">No Meja</label>
                  	<input type="text" name="id_meja" value="<?= $this->session->userdata('sess_no_meja') ?>" class="form-control" readonly="">
                </div>
                <div class="form-group">
                  <label for="">Keterangan</label>
                  <input type="text" name="keterangan" class="form-control" value="">
                </div>
                <div class="form-group">
                  <input type="submit" class="btn btn-success btn-block" value="Add" id="btn_order">
                </div>
              </form>
            </div>
          </div> 
         </div>