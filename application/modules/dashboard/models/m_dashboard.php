<?php
class m_dashboard extends CI_Model{
	public function __construct(){
		parent::__construct();  
		$this->load->database(); 
	}

function del($id){
    $this->db->where('id',$id);
    $this->db->delete('user'); //user merupakan nama tabel di database
    }

function edit($id){
	$this->db->where('id',$id);
	$query = $this->db->get('user');
	return $query->result();
}

function update($post){
	$params['fullname'] = $post['name'];
	$params['gender'] = $post['gender'];
	$params['age'] = $post['age'];
	$params['email'] = $post['email'];
	$params['username'] = $post['username'];
	$params['password'] = sha1($post['pass']);
	$params['role'] = $post['as'];

	$this->db->where('id',$post['id_patient']);
	$this->db->update('user', $params);
 }

 function get($role = 1)
	{
		$this->db->from('user');
		if($role == 1){
			$this->db->where('role', $role);
	}
	$query = $this->db->get();
	return $query;
	}

	function get1($role = 3)
	{
		$this->db->from('user');
		if($role == 3){
			$this->db->where('role', $role);
	}
	$query = $this->db->get();
	return $query;
	}
	function tampil_data(){
		return $this->db->get('user');
	}
}