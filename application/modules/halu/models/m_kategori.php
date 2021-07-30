<?php
class m_kategori extends CI_Model{
    public function __construct(){
		parent::__construct();  
		$this->db2 = $this->load->database('db2', TRUE);
	}
    public function data_Alat_Masak(){
   return $this->db2->get_where("tb_barang",array('kategori' => 'Alat Masak'));
    }

    public function data_Alat_Laboratorium(){
    return $this->db2->get_where("tb_barang",array('kategori' => 'Alat Laboratorium'));
    }

    public function data_Makanan(){
    return $this->db2->get_where("tb_barang",array('kategori' => 'Makanan'));
    }
    public function data_Buah_Buahan(){
    return $this->db2->get_where("tb_barang",array('kategori' => 'Buah Buahan'));      
    }
    public function data_Aksesoris(){
    return $this->db2->get_where("tb_barang",array('kategori' => 'Aksesoris'));
    }

} 