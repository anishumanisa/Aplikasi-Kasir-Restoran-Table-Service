<?php  ?>
 <div class="col-lg-7 offset-md-2">
           <div class="card border-0 shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-success"><?= $title ?></h6>
            </div>
            <div class="card-body">
              <form action="<?= base_url('User/update/').$edit['id_user'] ?>" method="post">
                <input type="hidden" name="Nama">
                <div class="form-group">
                  <label for="">Nama User</label>
                  <input type="text" name="nama_user" class="form-control" value="<?= @$edit['nama_user'] ?>"> 
                </div>
                <div class="form-group">
                  <label for="">Username</label>
                  <input type="text" name="username" id="username" class="form-control" value="<?= @$edit['username'] ?>">
                </div>
                <div class="form-group">
                  <label for="">Password</label>
                  <input type="password" class="form-control" id="password" name="password" value="<?= @$edit['password'] ?>">
                </div>
                <div class="form-group">
                  <select name="id_level" id="" class="form-control">
                    <option value="<?= $edit['id_level'] ?>"><?= $edit['nama_level'] ?></option>
                  	<?php foreach ($level as $row) { ?>
                    <option value="<?= $row->id_level ?>"><?= $row->nama_level ?></option>
                	   <?php } ?>
                  </select>
                </div>
                <div class="form-group">
                  <input type="submit" class="btn btn-success btn-block" value="Update" id="button">
                </div>
              </form>
            </div>
          </div> 
         </div>