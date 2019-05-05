
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Order extends CI_Model {
	public function selectAll()
	{
		return $this->db->get('tbl_order');
	}
	public function selectWhere($id)
	{
		$this->db->where($id);
		return $this->db->get('tbl_order');
	}
	public function insert($data)
	{
		return $this->db->insert('tbl_order',$data);
	}
	public function delete($id)
	{
		$this->db->where($id);
		return $this->db->delete('tbl_order');
	}
	public function edit($id)
	{
		$this->db->where($id);
		return $this->db->get('tbl_order');
	}
	public function update($id,$data)
	{
		$this->db->where($id);
		return $this->db->update('tbl_order',$data);
	}
	

}

/* End of file M_User.php */
/* Location: ./application/models/M_User.php */
 ?>