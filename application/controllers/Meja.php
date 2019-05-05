<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Meja extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model(['M_Meja','M_Main']);
	}
	public function index()
	{
		$data['title'] = "Meja";
		$data['meja'] = $this->M_Meja->selectAll()->result();
		$this->template->pages('meja/index',$data);
	}
	public function create()
	{
		$data['title'] = "Tambah Data";
		$this->template->pages('Meja/create',$data);
	}
	public function insert()
	{
		$data = array(
					'no_meja' => $this->input->post('no_meja'),
					'status_meja' => "0"
				);
		$query = $this->M_Meja->insert($data);
		if ($query) {
			// echo "<script>alert('Success')</script>";
			$this->session->set_flashdata('msg','DiTambah');
			redirect('Meja','refresh');
		}else{
			$this->session->set_flashdata('msg','DiTambah');
			redirect('Meja/create','refresh');
		}
	}
	public function delete($id)
	{
		$id = array('id_meja' => $id);
		$query = $this->M_Meja->delete($id);

		if ($query) {
			$this->session->set_flashdata('msg','DiHapus');
			redirect('Meja','refresh');
		}else{
			$this->session->set_flashdata('msg','Gagal');
			redirect('Meja','refresh');
		}
	}
	public function edit($id)
	{
		$data['title'] = "Ubah Meja";
		$id = array('id_meja' => $id);
		$data['edit'] = $this->M_Meja->selectWhere()->row_array();

		$this->template->pages('Meja/edit',$data);
	}

	public function update($id)
	{
		$id = array('id_meja' => $id);
		$data = array(
					'no_meja' => $this->input->post('no_meja'),
					'status_meja' => $this->input->post('status_meja')
				);
		$query = $this->M_Meja->update($id,$data);
		if ($query) {
			$this->session->set_flashdata('msg','DiUbah');
			redirect('Meja','refresh');
		}else{
			$this->session->set_flashdata('msg','Gagal');
			redirect('Meja','refresh');
		}
	
	}

}
	
	/* End of file User.php */
	/* Location: ./application/controllers/User.php */
 ?>