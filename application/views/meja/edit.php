<?php  ?>
 <div class="col-lg-7 offset-md-2">
           <div class="card border-0 shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-success"><?= $title ?></h6>
            </div>
            <div class="card-body">
              <form action="<?= base_url('Meja/update/').$edit['id_meja'] ?>" method="post">
                <input type="hidden" name="Nama">
                <div class="form-group">
                  <label for="">No Meja</label>
                  <input type="number" name="no_meja" class="form-control" value="<?= $edit['no_meja'] ?>"> 
                  <input type="hidden" name="status_meja" value="<?= $edit['status_meja'] ?>">
                </div>               
                <div class="form-group">
                  <input type="submit" class="btn btn-success btn-block" value="Update" id="button">
                </div>
              </form>
            </div>
          </div> 
         </div>