<?php
class m_barang extends CI_Model{
    public function __construct(){
		parent::__construct();  
		$this->db2 = $this->load->database('db2', TRUE);
	}
    public function tampil_data(){
        return $this->db2->get('tb_barang');
       
    }

    public function tambah_barang($data, $table){
       $this->db2->insert($table,$data);
    }

    public function edit_barang($where,$table){
       
       return $this->db2->get_where($table,$where);
    }

    public function update_data($where,$data,$table)
    {
        $this->db2->where($where);
        $this->db2->update($table,$data);
    }
    public function hapus_data($where,$table)
    {
        $this->db2->where($where);
        $this->db2->delete($table);
    }
    public function find($id)
    {
        $result = $this->db2->where('id_barang', $id)
                            ->get('tb_barang');
        if($result->num_rows() > 0){
            return $result->row();
        }else{
            return array();
        }
    }
    public function detail_barang($id_barang)
    {
        $result = $this->db2->where('id_barang',$id_barang)->get('tb_barang');
        if($result->num_rows() > 0){
            return $result->result();
        }else {
            return false;
        }
    }
}