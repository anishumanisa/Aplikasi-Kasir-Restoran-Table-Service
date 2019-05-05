
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_User extends CI_Model {
	public function selectAll()
	{
		return $this->db->get('query_user');
	}
	public function selectWhere($id)
	{
		$this->db->where($id);
		return $this->db->get('tbl_user');
	}
	public function insert($data)
	{
		return $this->db->insert("tbl_user",$data);
	}
	public function delete($id)
	{
		$this->db->where($id);
		return $this->db->delete('tbl_user');
	}
	public function edit($id)
	{
		$this->db->where($id);
		return $this->db->get('tbl_user');
	}
	public function update($id,$data)
	{
		$this->db->where($id);
		return $this->db->update('tbl_user',$data);
	}
	

}

/* End of file M_User.php */
/* Location: ./application/models/M_User.php */
 ?>