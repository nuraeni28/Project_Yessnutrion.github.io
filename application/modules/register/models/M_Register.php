<?php
class M_Register extends CI_Model{
    function input(){
        $data = [
            
            "id" => $this->input->post('id', true), //mengamankan data dengan parameter true, pake XSS filter seperti binding
            "username" => $this->input->post('username', true), //mengamankan data dengan parameter true, pake XSS filter seperti binding
            "password" => $this->input->post('password', true),
            "nama" => $this->input->post('nama', true),
            "no" => $this->input->post('no', true),
            "asal" => $this->input->post('asal', true)
        ];
        $this->db->insert('member', $data);
    }
}