
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Main extends CI_Model {
	public function selectAll($table)
	{
		return $this->db->get($table);
	}
	public function selectWhere($table,$id)
	{
		$this->db->where($id);
		return $this->db->get($table);
	}
	public function insert($table,$data)
	{
		return $this->db->insert($table,$data);
	}
	public function delete($table,$id)
	{
		$this->db->where($id);
		return $this->db->delete($table);
	}
	public function edit($table,$id)
	{
		$this->db->where($id);
		return $this->db->get($table);
	}
	public function update($table,$id,$data)
	{
		$this->db->where($id);
		return $this->db->update($table,$data);
	}
	
	public function sum($table,$id,$field){
		$this->db->where($id);
		$this->db->select_sum($field);
		return $this->db->get($table);
	}
	public function sumOne($table,$field){
		$this->db->select_sum($field);
		return $this->db->get($table);
	}
	public function select_sum(){
		$this->db->select_sum('age');
		$query = $this->db->get('members');
	}

	public function Where($table,$satu,$dua)
	{
		$this->db->where($satu);
		$this->db->where($dua);
		return $this->db->get($table);
	}
}

/* End of file M_User.php */
/* Location: ./application/models/M_User.php */
 ?>