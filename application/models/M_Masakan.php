
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Masakan extends CI_Model {
	public function selectAll()
	{
		return $this->db->get('tbl_masakan');
	}
	public function selectAsc()
	{
		$this->db->order_by('history', 'DESC');
		return $this->db->get('tbl_masakan');
	}
	
	public function selectWhere($id)
	{
		$this->db->where($id);
		return $this->db->get('tbl_masakan');
	}
	public function insert($data)
	{
		return $this->db->insert("tbl_masakan",$data);
	}
	public function delete($id)
	{
		$this->db->where($id);
		return $this->db->delete('tbl_masakan');
	}
	public function edit($id)
	{
		$this->db->where($id);
		return $this->db->get('tbl_masakan');
	}
	public function update($id,$data)
	{
		$this->db->where($id);
		return $this->db->update('tbl_masakan',$data);
	}
	

}

/* End of file M_User.php */
/* Location: ./application/models/M_User.php */
 ?>