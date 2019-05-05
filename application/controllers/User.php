<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class User extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model(['M_User','M_Main']);
	}
	public function index()
	{
		$data['title'] = "User";
		$data['user'] = $this->M_User->selectAll()->result();
		$this->template->pages('user/index',$data);
	}
	public function create()
	{
		$data['title'] = "Tambah Data";
		$data['level'] = $this->M_Main->selectAll("tbl_level")->result();

		$this->template->pages('user/create',$data);
	}
	public function insert()
	{
		$data = array(
					'nama_user' => $this->input->post('nama_user'),
					'username' => $this->input->post('username'),
					'password' => md5($this->input->post('password')),
					'id_level' => $this->input->post('id_level')
				);
		$query = $this->M_User->insert($data);
		if ($query) {
			// echo "<script>alert('Success')</script>";
			$this->session->set_flashdata('msg','DiTambah');
			redirect('User','refresh');
		}else{
			$this->session->set_flashdata('msg','DiTambah');
			redirect('User/create','refresh');
		}
	}
	public function delete($id)
	{
		$id = array('id_user' => $id);
		$query = $this->M_User->delete($id);

		if ($query) {
			$this->session->set_flashdata('msg','DiHapus');
			redirect('User','refresh');
		}else{
			$this->session->set_flashdata('msg','Gagal');
			redirect('User','refresh');
		}
	}
	public function edit($id)
	{
		$data['title'] = "Ubah User";
		$id = array('id_user' => $id);
		$data['level'] = $this->M_Main->selectAll("tbl_level")->result();
		$data['edit'] = $this->M_Main->selectWhere("query_user",$id)->row_array();

		$this->template->pages('user/edit',$data);
	}

	public function update($id)
	{
		$id = array('id_user' => $id);
		$data = $data = array(
					'nama_user' => $this->input->post('nama_user'),
					'username' => $this->input->post('username'),
					'password' => $this->input->post('password'),
					'id_level' => $this->input->post('id_level')
				);
		$query = $this->M_User->update($id,$data);
		if ($query) {
			$this->session->set_flashdata('msg','DiUbah');
			redirect('User','refresh');
		}else{
			$this->session->set_flashdata('msg','Gagal');
			redirect('User','refresh');
		}
	
	}

}
	
	/* End of file User.php */
	/* Location: ./application/controllers/User.php */
 ?>