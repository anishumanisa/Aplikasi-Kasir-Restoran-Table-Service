
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model(['M_Main']);
	}
	public function index()
	{
		$data['title'] = "Dashboard";
		$data['transaksi'] = $this->M_Main->selectAll("tbl_transaksi")->num_rows();
		$data['user'] = $this->M_Main->selectAll("tbl_user")->num_rows();
		$data['masakan'] = $this->M_Main->selectAll("tbl_masakan")->num_rows();
		$data['sum'] = $this->M_Main->sumOne("tbl_transaksi",'total_bayar')->row_array();
		$this->template->pages('dashboard/index', $data);
	}

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */
 ?>