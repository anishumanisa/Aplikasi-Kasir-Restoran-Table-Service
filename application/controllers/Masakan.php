<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Masakan extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model(['M_Masakan','M_Main']);
	}
	public function index()
	{
		$data['title'] = "Masakan";
		$data['masakan'] = $this->M_Masakan->selectAll()->result();
		$this->template->pages('masakan/index',$data);
	}
	public function create()
	{
		$data['title'] = "Tambah Data";

		$this->template->pages('masakan/create',$data);
	}
	public function insert()
	{
		$data = array(
					'nama_masakan' => $this->input->post('nama_masakan'),
					'harga_masakan' => $this->input->post('harga_masakan'),
					'status_masakan' => $this->input->post('status_masakan'),
				);
		$query = $this->M_Masakan->insert($data);
		if ($query) {
			// echo "<script>alert('Success')</script>";
			$this->session->set_flashdata('msg','DiTambah');
			redirect('Masakan','refresh');
		}else{
			$this->session->set_flashdata('msg','DiTambah');
			redirect('Masakan/create','refresh');
		}
	}
	public function delete($id)
	{
		$id = array('id_masakan' => $id);
		$query = $this->M_Masakan->delete($id);

		if ($query) {
			$this->session->set_flashdata('msg','DiHapus');
			redirect('Masakan','refresh');
		}else{
			$this->session->set_flashdata('msg','Gagal');
			redirect('Masakan','refresh');
		}
	}
	public function edit($id)
	{
		$data['title'] = "Ubah Masakan";
		$id = array('id_masakan' => $id);
		$data['edit'] = $this->M_Masakan->selectWhere($id)->row_array();

		$this->template->pages('masakan/edit',$data);
	}

	public function update($id)
	{
		$id = array('id_masakan' => $id);
		$data = $data = array(
					'nama_masakan' => $this->input->post('nama_masakan'),
					'harga_masakan' => $this->input->post('harga_masakan'),
					'status_masakan' => $this->input->post('status_masakan'),
				);
		$query = $this->M_Masakan->update($id,$data);
		if ($query) {
			$this->session->set_flashdata('msg','DiUbah');
			redirect('Masakan','refresh');
		}else{
			$this->session->set_flashdata('msg','Gagal');
			redirect('Masakan','refresh');
		}
	
	}

	public function laporan()
	{
		$data['title'] = "Masakan";
		$where = array('status_masakan' => 1);
		// $data['masakan'] = $this->M_Main->selectAll("tbl_masakan")->result();
		$data['masakan'] = $this->M_Masakan->selectAsc()->result();
		$this->template->pages('masakan/laporan_item',$data);
	}

	public function result($id)
	{
		$data['title'] = "Detail Masakan";
		$id_masakan = array("id_masakan" => $id);
		$data['masakan'] = $this->M_Masakan->selectWhere($id_masakan)->row_array();
		$data['jumlah'] = $this->M_Main->selectWhere("query_detail_order",$id_masakan)->num_rows();
		$this->template->pages('masakan/result',$data);
	}

}
	
	/* End of file User.php */
	/* Location: ./application/controllers/User.php */
 ?>