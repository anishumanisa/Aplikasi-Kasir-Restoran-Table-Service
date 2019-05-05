
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Auth extends CI_Model {

	public function login($username,$password){
		$this->db->where('username',$username);
		$this->db->where('password',md5($password));
		$row = $this->db->get("query_user");

		if ($row->num_rows() > 0) {
			$field = $row->row_array();
			$session = array(
						'auth' => true,
						'id_user' => $field['id_user'],
						'nama_user' => $field['nama_user'],
						'nama_level' => $field['nama_level'],
						);
			$this->session->set_userdata($session);
			return true;
		}else{
			return false;
		}
	}


	

}

/* End of file M_Auth.php */
/* Location: ./application/models/M_Auth.php */
 ?>