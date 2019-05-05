
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model(['M_Auth']);
	}
	public function index()
	{
		$data['title'] = "Auth";
		$this->template->auth('auth/index', $data);
	}

	public function auth(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$query = $this->M_Auth->login($username,$password);

		if ($query) {
			$this->session->set_flashdata('msg', 'Selamat Datang');
			echo "<script>alert('Berhasil')</script>";
			redirect('Dashboard','refresh');
		}else{
			// $this->session->set_flashdata('msg', 'Gagal');
			echo "<script>alert('Gagal')</script>";
			redirect('Auth','refresh');
		}
	}
	public function logout(){
		$this->session->sess_destroy();
		redirect('Auth','refresh');
	}
}

/* End of file Auth.php */
/* Location: ./application/controllers/Auth.php */
 ?>