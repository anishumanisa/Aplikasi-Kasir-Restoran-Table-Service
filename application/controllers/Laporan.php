
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model(['M_Main']);
	}
	public function index()
	{
		$data['title'] = "Laporan";
		
		$data['laporan'] =  $this->db->query("SELECT `tbl_transaksi`.`id_transaksi`, `query_order`.`no_meja`, `query_order`.`id_user`, `query_order`.`nama_user`, `tbl_transaksi`.`total_bayar`, `tbl_transaksi`.`tanggal_transaksi` FROM `query_order` INNER JOIN `tbl_transaksi` ON `tbl_transaksi`.`id_order` = `query_order`.`id_order`")->result();
		$this->template->pages('laporan/index', $data);
	}

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */
 ?>