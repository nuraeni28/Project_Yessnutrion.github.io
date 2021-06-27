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
			$this->db->where('user_id',$id);
	}
	$query = $this->db->get();
	return $query;
	}
}
	
	
