<?php

    class invoice extends CI_Controller{
        public function __construct(){ 
            parent::__construct();
            $this->load->library('session');
            $this->load->helper('url');
            $this->load->model('m_invoice');
          
        }
        public function index()
        {
            $data['user'] = $this->db->get_where('user', ['username' 	=> $this->session->userdata('username')])->row_array(); 
            $this->load->view('v_seller',$data);
            $data['invoice'] = $this->m_invoice->tampil_data();
            $this->load->view('v_invoice', $data);
        }
}