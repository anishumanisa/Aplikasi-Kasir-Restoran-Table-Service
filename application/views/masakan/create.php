<?php  ?>
 <div class="col-lg-7 offset-md-2">
           <div class="card border-0 shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-success"><?= $title ?></h6>
            </div>
            <div class="card-body">
              <form action="<?= base_url('Masakan/insert') ?>" method="post">
                <input type="hidden" name="Nama Masakan">
                <div class="form-group">
                  <label for="">Nama Masakan</label>
                  <input type="text" name="nama_masakan" class="form-control"> 
                </div>
                <div class="form-group">
                  <label for="">Harga Masakan</label>
                  <input type="number" name="harga_masakan" class="form-control" value="">
                </div>
                <div class="form-group">
                	<label for="Status">Status Masakan</label>
                  <select name="status_masakan" id="" class="form-control">
                  	<option value="1">Tersedia</option>
                    <option value="0">Tidak Tersedia</option>
                  </select>
                </div>
                <div class="form-group">
                  <input type="submit" class="btn btn-success btn-block" value="Add" id="button">
                </div>
              </form>
            </div>
          </div> 
         </div>