<?php
class M_ud extends CI_Model{
    public function getUserById($id)
    {
        return $this->db->get_where('member', ['id' => $id])->row_array(); 
    }
    public function updateData()
    {
        $data = [
            "id" => $this->input->post('id', true), //mengamankan data dengan parameter true, pake XSS filter seperti binding
            "username" => $this->input->post('username', true), //mengamankan data dengan parameter true, pake XSS filter seperti binding
            "password" => $this->input->post('password', true),
            "nama" => $this->input->post('nama', true),
            "no" => $this->input->post('no', true), 
            "asal" => $this->input->post('asal', true)
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('member', $data);
    }
    public function hapusData($id)
    {
        $this->db->delete('member', ['id' => $id]);
    }
}