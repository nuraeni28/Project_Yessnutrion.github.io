<?php
class m_register extends CI_Model{
	
	function simpan($post){
       $params['fullname'] = $post['name'];
       $params['gender'] = $post['gender'];
       $params['age'] = $post['age'];
       $params['email'] = $post['email'];
       $params['username'] = $post['username'];
       $params['password'] = sha1($post['pass']);
       $params['role'] = $post['as'];
	   $this->db->insert('user', $params);
    }
}