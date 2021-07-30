<?php
class m_login extends CI_Model{
	public function __construct(){
		parent::__construct();  
		$this->load->database(); 
	}
	
	 function proses_login($post){
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('username', $post['username']);
		$this->db->where('password', sha1($post['pass']));
		$query = $this->db->get();
		return $query;
	}


	function get($id = null)
	{
		$this->db->from('user');
		if($id != null){
			$this->db->where('id',$id);
	}
	$query = $this->db->get();
	return $query;
	}

	function get1($username = null)
	{
		$this->db->from('user');
		if($username != null){
			$this->db->where('username',$username);
	}
	$query = $this->db->get();
	return $query;
	}
}
	
	
