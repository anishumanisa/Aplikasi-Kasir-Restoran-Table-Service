
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model(['M_Transaksi','M_Meja','M_Main']);
	}
	public function index()
	{
		$data['title'] = "Transaksi";
		if ($this->input->post('meja')) {
			$data['status'] = true;
			
			$status_meja = array('status_meja' => 1);
			$id_order = array('id_order' => $this->input->post('meja'));
			$status_order = array('status_order' => "0");
			// $id_orederr = array('id_order' => $this->input->post('id_order'));

			$data['sum'] = $this->M_Main->sum("query_transaksi",$id_order,'total_harga')->row_array();
			// $data['sum'] = $this->M_Main->sum("query_transaksi",$id_orederr,'total_harga')->row_array();

			$data['result'] = $this->M_Main->Where("query_transaksi",$id_order,$status_order)->result();
			$data['detail_result'] = $this->M_Main->selectWhere("query_transaksi",$id_order)->row_array();

			// $data['meja'] = $this->M_Meja->selectWhere($status_meja)->result();

			$data['meja'] = $this->M_Main->selectWhere("query_order",$status_meja)->result();

			$this->template->pages('transaksi/index', $data);
		}else{
			$data['status'] = false;
			$status_meja = array('status_meja' => 1);
			$status_order = array('status_order' => "0");
			// $data['meja'] = $this->M_Meja->selectWhere($status_meja)->result();
			$data['meja'] = $this->M_Main->selectWhere("query_order",$status_order)->result();
			$this->template->pages('transaksi/index', $data);	
		}
		
	}

	public function insert()
	{
		$data = array(
			          'id_user' => $this->session->userdata('id_user'),
			          'id_order' => $this->input->post('id_order'),
			          'tanggal_transaksi' => $this->input->post('tanggal_transaksi'),
			          'total_bayar' => $this->input->post('grand_total'),
			          'bayar' => $this->input->post('bayar'),
			          'kembali' => $this->input->post('kembali')
			          );
		$query = $this->M_Transaksi->insert($data);


		$id_transaksi = array('id_transaksi' => $this->db->insert_id());
		$this->session->set_userdata($id_transaksi);

			$status_order = array('status_order' => "1");
			$where = array('id_order' => $this->input->post('id_order'));
			$query_order = $this->M_Main->update("tbl_order",$where,$status_order);

		if ($query) {

			$status_meja = array('status_meja' => "0");
			$no_meja = array('no_meja' => $this->input->post('no_meja'));
			$query_meja = $this->M_Meja->update($no_meja,$status_meja);

			// $status_order = array('status_order' => "1");
			// $where = array('id_order' => $this->input->post('id_order'));
			// $query_order = $this->M_Main->update("tbl_order",$where,$status_order);
			
			echo "<script>window.open('http://localhost:81/lsp_final/Transaksi/struk/','_blank')</script>";
			redirect('Transaksi','refresh');

		}else{
			redirect('Transaksi','refresh');
			echo "<script>alert('Gagal')</script>";
		}
	}

	public function struk($id='')
	{
		$id = array('id_transaksi' => $this->session->userdata('id_transaksi'));

		$data['result'] = $this->M_Main->selectWhere("query_result",$id)->result();

		$data['detail_result'] = $this->M_Main->selectWhere("query_result",$id)->row_array();

		$no_meja = array('no_meja' => $this->input->post('meja'));

		$data['sum'] = $this->M_Main->sum("query_transaksi",$no_meja,'total_harga')->row_array();
		// $data['sum'] = $this->M_Main->Where("query_transaksi",$no_meja,$id)->row_array();

		$this->load->view('struk/index',$data);
	}

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */
 ?>