<?php  ?>
 <div class="col-lg-7 offset-md-2">
           <div class="card border-0 shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-success"><?= $title ?></h6>
            </div>
            <div class="card-body">
              <form action="<?= base_url('Meja/insert') ?>" method="post">
                <input type="hidden" name="Nama">
                <div class="form-group">
                  <label for="">No Meja</label>
                  <input type="number" name="no_meja" class="form-control"> 
                </div>               
                <div class="form-group">
                  <input type="submit" class="btn btn-success btn-block" value="Add" id="button">
                </div>
              </form>
            </div>
          </div> 
         </div>