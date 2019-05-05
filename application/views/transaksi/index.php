<div class="container-fluid">

  <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <!-- <h1 class="h3 mb-0 text-gray-800">Title</h1> -->
          </div>
  <!-- End Page Heading -->

  <!-- DataTales Example -->
        <form action="<?= base_url('Transaksi') ?>" method="post">
          <div class="col-md-5">
            <div class="card shadow mb-4">
              <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-success">Choose</h6>
              </div>
              <div class="card-body">
                <div class="form-group">
                  <select name="meja" id="" class="form-control">
                    <?php foreach ($meja as $row) { ?>
                    	<option value="<?= $row->id_order ?>"><?= $row->no_meja ?></option>
                    <?php } ?>
                  </select>
                </div>
                <input type="submit" class="btn btn-success btn-block" value="Pilih">

              </div>
            </div>
          </div>
        </form>

        <form action="<?= base_url('Transaksi/insert') ?>" method="post">
          <input type="hidden" readonly="" name="id_order" value="<?= @$detail_result['id_order'] ?>">
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-success">Transaksi</h6>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Kode Transaksi</label>
                    <input type="text" class="form-control col-md-10" readonly="">
                  </div>
                  <div class="form-group">
                    <label for="">User</label>
                    <input type="text" class="form-control col-md-10" readonly="" value="<?= @$detail_result['nama_user'] ?>">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Tanggal</label>
                    <input type="text" name="tanggal_transaksi" class="form-control col-md-10" readonly="" value="<?= Date('Y-m-d H:i:s'); ?>">
                  </div>
                  <div class="form-group">
                    <label for="">No Meja</label>
                    <input type="text" name="no_meja" class="form-control col-md-10" readonly="" value="<?= @$detail_result['no_meja'] ?>">
                  </div>
                </div>
              </div>
              
              <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">

                  <thead class="text-center">
                    <tr>
                   <th>No</th>
                   <th>Nama</th>
                   <th>Qty</th>
                   <th>Harga</th>
                   
                      
                    </tr>
                  </thead>
                 <?php if ($status) { ?>
                  <tbody class="text-center">
                   <?php
                    $no = 1;
                    foreach ($result as $row) { ?>
                  <tr>
                   <td><?= $no++ ?></td>
                   <td><?= $row->nama_masakan ?></td>
                   <td><?= $row->qty ?></td>
                   <td><?= $row->total_harga ?></td>
                  </tr>
                  <?php } ?>

                  
                  <tr>
                      <td colspan="2"></td>
                      <td>Total</td>
                      <td><input type="number" name="grand_total" class="form-control text-center" id="grand_total" readonly value="<?= @$sum['total_harga'] ?>"></td>
                  </tr>
                  <tr>
                    <td colspan="2"></td>
                    <td>Bayar</td>
                    <td><input type="number" class="form-control" name="bayar" id="bayar" onkeyup="pay()"></td>
                  </tr>
                  <tr id="test">
                    <td colspan="2"></td>
                    <td>Kembalian</td>
                    <td><input type="number" class="form-control" name="kembali" id="kembali" readonly=""></td>
                  </tr>
                  <tr>
                    <td colspan="3"></td>
                    <td>
                      <input type="submit" class="btn btn-success btn-block" value="Bayar" id="btn_bayar">
                    </td>
                  </tr>
                  </tbody>
                <?php }else{ ?>
                  <tbody>
                    <tr>
                      <td colspan="4"></td>
                    </tr>
                  </tbody>
                <?php } ?>
                
                 
                </table>
              </div>
            </div>
          </div>
        </form>  
        
</div>