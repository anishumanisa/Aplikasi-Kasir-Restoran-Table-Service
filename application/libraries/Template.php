<?php 

Class Template 
{
	function __construct(){
		$this->_ci = get_instance();
	}

	function pages($content, $data=NULL){
		$data['content'] = $this->_ci->load->view($content,$data,TRUE);
		$this->_ci->load->view('template/index', $data);
	}

	function auth($content, $data=NULL){
		$data['content'] = $this->_ci->load->view($content,$data,TRUE);
		$this->_ci->load->view('template/auth', $data);
	}

}


 ?>
