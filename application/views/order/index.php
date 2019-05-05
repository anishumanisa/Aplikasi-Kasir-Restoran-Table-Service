<?php if ($this->session->userdata('nama_level') == "pelanggan") {
  redirect('Pelanggan/result','refresh');
} ?>
 <div class="col-lg-7 offset-md-2">
           <div class="card border-0 shadow mb-4">
            <div class="card-header py-3">
               <div class="row justify-content-between">
                  <div class="col-6">Order</div>
                  <div class="col-6 text-right"><?= date('Y-m-d H:i:s') ?></div>
                </div>
            </div>
            <div class="card-body">
              <form action="<?= base_url('Order/insert') ?>" method="post">
                <input type="hidden" readonly="" class="form-control" name="id_user" value="<?= $this->session->userdata('id_user') ?>">
                <div class="form-group">
                  <label for="">Nama</label>
                  <input type="text" name="nama_user" readonly="" class="form-control" value="<?= $this->session->userdata('nama_user') ?>"> 
                </div>
                <div class="form-group">
                	<label for="meja">No Meja</label>
                  <select name="id_meja" id="" class="form-control">
                  	<?php foreach ($meja as $row) { ?>
                  	<option value="<?= $row->id_meja ?>"><?= $row->no_meja ?></option>
                  	<?php } ?>
                  </select>
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