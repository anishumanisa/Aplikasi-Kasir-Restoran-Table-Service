<?= "<script>window.print()</script>"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Struk</title>
	<link href="<?= base_url('assets/') ?>css/sb-admin-2.min.css" rel="stylesheet">

</head>
<body>
	<div class="container">
		<div class="row py-4">
			<div class="col-md-6 offset-md-3">

          <div class="card shadow mb-4">
            <div class="card-body">
              <div class="row">
                <div class="col-md-8">
                  <span><h3>Farmiga's Coffee</h3></span>
                  <span>Jl.Raya Wangun No.17</span><br>
                  <span>Id Transaksi : <?= $detail_result['id_transaksi'] ?></span> <br>
                  <span>No Meja : Meja <?= $detail_result['no_meja'] ?></span> <br>
                  <span>Kasir   :  <?= $this->session->userdata('nama_user');  ?></span>
                </div>
                <div class="col-md-4">
                  <span><?= $detail_result['tanggal_transaksi'] ?></span>
                </div>
              </div>
              <br>
              <div class="table-responsive">
                <table class="table" width="100%" cellspacing="0">

                  <thead class="text-center">
                    <tr>
                   <th>No</th>
                   <th>Nama Menu</th>
                   <th>Qty</th>
                   <th>Harga</th>
                    </tr>
                  </thead>
                  <tbody class="text-center">
                   <?php
                    $no = 1;
                    foreach ($result as $row) { ?>
                  <tr>
                   <td><?= $no++ ?></td>
                   <td><?= $row->nama_masakan ?></td>
                   <td><?= $row->qty ?></td>
                   <td><?= number_format($row->total_harga,0,',','.') ?></td>
                  </tr>
                  <?php } ?>

                  
                  <tr>
                      <td colspan="2"></td>
                      <td>Total</td>
                      <td><?= number_format($detail_result['total_bayar'],'0',',','.') ?></td>
                  </tr>
                   <tr>
                      <td colspan="2"></td>
                      <td>Bayar</td>
                      <td><?= number_format($detail_result['bayar'],'0',',','.') ?></td>
                  </tr>
                   <tr>
                      <td colspan="2"></td>
                      <td>Kembali</td>
                      <td><?= number_format($detail_result['kembali'],'0',',','.') ?></td>
                  </tr>
                 <!--  <tr>
                    <td colspan="2"></td>
                    <td>Bayar</td>
                    <td><input type="number" class="form-control" name="bayar" id="bayar" onkeyup="pay()"></td>
                  </tr>
                  <tr id="test">
                    <td colspan="2"></td>
                    <td>Kembalian</td>
                    <td><input type="number" class="form-control" name="kembali" id="kembali" readonly=""></td>
                  </tr> -->
                  </tbody>
                
                
                 
                </table>
              </div>
              <h4 class="text-center">==Terima Kasih==</h4>
              <h5 class="text-center">Silahkan Datang Kembali</h5>
            </div>
          </div>
        
			
			</div>
		</div>
 </div>
</body>
</html>