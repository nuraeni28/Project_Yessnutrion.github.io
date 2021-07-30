<?php

class product extends CI_Controller{

    public function __construct(){ 
		parent::__construct();
        $this->load->library('session');
		$this->load->helper('url');
        $this->load->model('m_barang');
        $this->load->model('register/m_register');
        $this->load->model('login/m_login');
        $this->load->model('dashboard/m_dashboard');
      
	}
    public function index(){ 
        $data['user'] = $this->db->get_where('user', ['username' 	=> $this->session->userdata('username')])->row_array(); 
        $this->load->view('v_seller', $data);
    }
    public function detail()
    {
        $data['user'] = $this->db->get_where('user', ['username' 	=> $this->session->userdata('username')])->row_array(); 
        $this->load->view('v_seller',$data);
        $data['barang'] = $this->m_barang->tampil_data()->result();
        $this->load->view('v_seller_b', $data);
    }


    public function tambah_aksi()
    {
        $data['user'] = $this->db->get_where('user', ['username' 	=> $this->session->userdata('username')])->row_array(); 
        $this->load->view('v_seller',$data);
        $nama_barang        = $this->input->post('nama_barang');
        $keterangan         = $this->input->post('keterangan');
        $kategori           = $this->input->post('kategori');
        $harga              = $this->input->post('harga');
        $stok               = $this->input->post('stok');
        $gambar             = $_FILES['gambar']['nama'];
        if ($gambar=''){}else{
            $config ['upload_path'] = './upload';
            $config ['allowed_types'] = 'jpg|jpeg|png|gif';

            $this->load->library('upload', $config);
            if(!$this->upload->do_upload('gambar')){
                echo "gambar gagal diupload!";
            } else {
                $gambar=$this->upload->data('file_name');
            }
        }
        $data = array(
            'nama_barang'           => $nama_barang,
            'keterangan'            => $keterangan,
            'kategori'              => $kategori,
            'harga'                 => $harga,
            'stok'                  => $stok,
            'gambar'                => $gambar

        );
       
        $this->m_barang->tambah_barang($data, 'tb_barang');
        redirect('seller/product/detail');

    }

    public function edit($id)
    {
        $where = array('id_barang' =>$id);
        $data['user'] = $this->db->get_where('user', ['username' 	=> $this->session->userdata('username')])->row_array(); 
        $this->load->view('v_seller',$data);
        $data ['barang'] = $this->m_barang->edit_barang($where, 'tb_barang')->result();
        $this->load->view('v_seller_edit',$data);
    }

    public function update(){
        $id                     = $this->input->post('id_barang');
        $nama_barang             = $this->input->post('nama_barang');
        $keterangan              = $this->input->post('keterangan');
        $kategori                = $this->input->post('kategori');
        $harga                   = $this->input->post('harga');
        $stok                    = $this->input->post('stok');

        $data  = array(
            'nama_barang'       => $nama_barang,
            'keterangan'        => $keterangan,
            'kategori'          => $kategori,
            'harga'             => $harga,
            'stok'              => $stok
        );

        $where = array(
            'id_barang'         => $id
        );
        $data['user'] = $this->db->get_where('user', ['username' 	=> $this->session->userdata('username')])->row_array(); 
        $this->load->view('v_seller',$data);
        $this->m_barang->update_data($where, $data, 'tb_barang');
        redirect('seller/product/detail');
    }
    public function hapus($id)
    {
        $data['user'] = $this->db->get_where('user', ['username' 	=> $this->session->userdata('username')])->row_array(); 
        $this->load->view('v_seller',$data);
        $where = array('id_barang' => $id);
        $this->m_barang->hapus_data($where, 'tb_barang');
        redirect('seller/product/detail');
        
    }
}