<?php
class halu extends MY_Controller {
	public function __construct(){ 
		parent::__construct();
		$this->load->model('seller/m_barang');
        $this->load->model('seller/m_invoice');
        $this->load->model('halu/m_kategori');
	}
	
	function index(){
		$this->load->view('header');
		$this->load->view('v_halu');
		$this->load->view('footer');
    }

	
	function nutrion_konsul(){
		$this->load->view('header');
		$this->load->view('v_nutrion_konsul');
		$this->load->view('footer');
	}

	function nutrishop(){
		$data['barang'] = $this->m_barang->tampil_data()->result();
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('v_nutrishop', $data);
		$this->load->view('footer');
	} 
	function tambah_ke_keranjang($id)
    {
        $barang = $this->m_barang->find($id);

        $data = array(
            'id'      => $barang->id_barang,
            'qty'     => 1,
            'price'   => $barang->harga,
            'name'    => $barang->nama_barang
    );
    
    $this->cart->insert($data);
    redirect('/halu/nutrishop');
    }
   
    function detail_keranjang()
    {
        $this->load->view('header');
        $this->load->view('v_keranjang');
        $this->load->view('footer');
    }
   
    function hapus_keranjang()
    {
        $this->cart->destroy();
        redirect('halu/nutrishop');
    }
    function pembayaran()
    {
        $this->load->view('header');
        $this->load->view('v_pembayaran');
        $this->load->view('footer');
    }
    
    function proses_pesanan()
    {
        $is_processed = $this->m_invoice->index();
        if($is_processed){
        $this->cart->destroy();
        $this->load->view('header');
        $this->load->view('v_proses_pesanan');
        $this->load->view('footer');
        }else{
            echo "Maaaf, Pesanan Anda Gagal diproses";
        }
    }
    public function detail($id_barang)
    {
        $data['barang'] = $this->m_barang->detail_barang($id_barang);
        $this->load->view('header');
        $this->load->view('v_detail_barang', $data);
        $this->load->view('footer');
    }
    function Alat_Masak()
    {
        $data['Alat_Masak'] = $this->m_kategori->data_Alat_Masak()->result();
        $this->load->view('header');
        $this->load->view('sidebar');
        $this->load->view('v_alat_masak', $data);
        $this->load->view('footer');
    }

    function Alat_Laboratorium()
    {
        $data['Alat_Laboratorium'] = $this->m_kategori->data_Alat_Laboratorium()->result();
        $this->load->view('header');
        $this->load->view('sidebar');
        $this->load->view('v_alat_laboratorium', $data);
        $this->load->view('footer');
    }

    function Makanan()
    {
        $data['Makanan'] = $this->m_kategori->data_Makanan()->result();
        $this->load->view('header');
        $this->load->view('sidebar');
        $this->load->view('v_makanan', $data);
        $this->load->view('footer');
    }
    function Buah_Buahan()
    {
        $data['Buah_Buahan'] = $this->m_kategori->data_Buah_Buahan()->result();
        $this->load->view('header');
        $this->load->view('sidebar');
        $this->load->view('v_buah_buahan', $data);
        $this->load->view('footer');
    }

    function Aksesoris()
    {
        $data['Aksesoris'] = $this->m_kategori->data_Aksesoris()->result();
        $this->load->view('header');
        $this->load->view('sidebar');
        $this->load->view('v_aksesoris', $data);
        $this->load->view('footer');
    }
    function home(){
        $this->load->view('header_1');
		$this->load->view('v_halu');
		$this->load->view('footer');
    }
  
  
}

       
