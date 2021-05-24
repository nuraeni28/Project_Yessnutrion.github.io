<?php
class Register extends MY_Controller{
     function __construct(){
         parent::__construct();
         $this->load->model('M_Register');
        
     }
     function index(){
         $data['judul']= 'BIODATA';
         $this->load->view('Template/Header_login', $data);
         $this->load->view('V_register');
         $this->load->view('Template/Footer_login');
     }

     function add(){
         $this->M_Register->input();
         redirect('login');
     }
}