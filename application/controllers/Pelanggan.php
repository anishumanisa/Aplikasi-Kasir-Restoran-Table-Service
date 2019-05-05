
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelanggan extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model(['M_Main','M_User']);
	}
	public function index()
	{
		$data['title'] = "Pelanggan";
		$this->template->auth('pelanggan/index', $data);
	}

	public function no_meja($no)
	{
		$data['title'] = "Pelanggan";
		$data['no_meja'] = $no;
		$no_meja = array('sess_no_meja' => $no);
		$this->session->set_userdata($no_meja);
		$this->template->auth('pelanggan/index', $data);
	}

	public function login(){


		if ($this->input->post('no_meja') == $this->session->userdata('sess_no_meja')) {

			// $level = $this->M_Level->selectWhere();
			$data = array(
					'nama_user' => $this->input->post('username'),
					'username' => $this->input->post('username'),
					'password' => "",
					'id_level' => 6
				);
			$query = $this->M_User->insert($data);
			$insert_id = $this->db->insert_id();
			$id_user = array('id_user' => $insert_id);
			$this->session->set_userdata($id_user);

			$session = array(
						'auth' => true,
						'nama_user' => $this->input->post('username'),
						'nama_level' => "pelanggan"
						);
			$this->session->set_userdata($session);
			redirect('Pelanggan/order','refresh');
		}else{
			redirect('Pelanggan/no_meja/'.@$this->session->userdata(sess_no_meja),'refresh');
		}
	}

	public function order(){
		$data['title'] = "Order";
		$this->template->pages('pelanggan/order', $data);
	}
	public function result()
	{
		$data['title'] = "Order";
		$id = array('nama_user' => $this->session->userdata('nama_user'));
		// $id = array('status_order' => "0");
		$data['result'] = $this->M_Main->selectWhere("query_transaksi",$id)->result();
		$this->template->pages('pelanggan/result', $data);
	}

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */
 ?>