<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Order extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model(['M_Order','M_Meja','M_Main']);
	}
	public function index()
	{
		$data['title'] = "Order";
		$where = array('status_meja' => "0");
		$data['meja'] = $this->M_Meja->selectWhere($where)->result();
		$this->template->pages('order/index',$data);
	}
	public function insert()
	{
		$data = array(
					'id_meja' => $this->input->post('id_meja'),
					'tanggal_order' => date('Y-m-d H:i'),
					'id_user' => $this->input->post('id_user'),
					'keterangan_order' => $this->input->post('keterangan'),
					'status_order' => "0"
				);
		$query = $this->M_Order->insert($data);

		$id_order = $this->db->insert_id();
		$sess = array('sess_id_order' => $id_order);
		$this->session->set_userdata($sess);

		if ($query) {

			$status_meja = array('status_meja' => "1");
			$no_meja = array('id_meja' => $this->input->post('id_meja'));
			$query = $this->M_Meja->update($no_meja,$status_meja);
			// $this->session->set_userdata($no_meja);
			// echo "<script>alert('Success')</script>";
			$this->session->set_flashdata('msg','DiTambah');
			redirect('Detail_Order','refresh');
		}else{
			$this->session->set_flashdata('msg','DiTambah');
			redirect('Order/create','refresh');
		}
	}
	
	public function list()
	{
		$data['Title'] = "List Order";
		$data['list'] = $this->M_Main->selectAll("query_order")->result();
		$this->template->pages('order/list_order',$data);
	}

}
	
	/* End of file User.php */
	/* Location: ./application/controllers/User.php */
 ?>