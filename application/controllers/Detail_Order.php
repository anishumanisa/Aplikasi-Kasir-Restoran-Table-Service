
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail_Order extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model(['M_Detail_Order','M_Masakan','M_Main']);
	}
	public function index()
	{
		$data['title'] = "Detail Order";
		$status_masakan = array('status_masakan' => "1");
		$id = array('id_order' => $this->session->userdata('sess_id_order'));
		$data['masakan'] = $this->M_Masakan->selectWhere($status_masakan)->result();
		$data['cart'] = $this->M_Main->selectWhere("query_detail_order",$id)->result();
		$this->template->pages('detail_order/index', $data);
	}

	public function add($id)
	{
		$id_masakan = array('id_masakan' => $id);
		$data['title'] = "Detail Order";
		$status_masakan = array('status_masakan' => "1");
		$id = array('id_order' => $this->session->userdata('sess_id_order'));

		$data['masakan'] = $this->M_Masakan->selectWhere($status_masakan)->result();
		$data['detail'] = $this->M_Masakan->selectWhere($id_masakan)->row_array();
		$data['cart'] = $this->M_Main->selectWhere("query_detail_order",$id)->result();

		$this->template->pages('detail_order/index', $data);
	}

	public function tambah(){
		$data = array(
					'id_order' => $this->session->userdata('sess_id_order'),
					'id_masakan' => $this->input->post('id_masakan'),
					'qty' => $this->input->post('qty'),
					'keterangan_detail_order' => $this->input->post('keterangan'),
					'status_detail_order' => "0",
					'total_harga' => $this->input->post('total_harga')
				);
		$query = $this->M_Detail_Order->insert($data);
		$id = array('id_masakan' => $this->input->post('id_masakan'));
		$count = $this->M_Main->selectWhere("query_detail_order",$id)->num_rows();

		$data = array('history' => $count);

		$query_update = $this->M_Masakan->update($id,$data);


		if ($query) {

			// $id_order = array('sess_id_order' => "");
			// $this->session->set_userdata($id_order);
			$this->session->set_flashdata('msg','DiHapus');
			redirect('Detail_Order');
		}else{
			$this->session->set_flashdata('msg','Gagal');
			redirect('Detail_Order','refresh');
		}
	}
	public function delete($id)
	{
		$id = array('id_detail_order' => $id);
		$query = $this->M_Detail_Order->delete($id);
		if ($query) {
			$this->session->set_flashdata('msg','DiHapus');
			redirect('Detail_Order');
		}else{
			$this->session->set_flashdata('msg','Gagal');
			redirect('Detail_Order','refresh');
		}
	}
	public function selesai()
	{
		$id_order = array('sess_id_order' => "");
		$this->session->set_userdata($id_order);
		redirect('Order','refresh');
	}



}

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */
 ?>