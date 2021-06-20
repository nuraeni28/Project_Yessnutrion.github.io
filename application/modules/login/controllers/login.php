<?php
class login extends MY_Controller {
	public function __construct(){ 
		parent::__construct();
        $this->load->model('m_login');
	}
	
	function index(){
		$this->load->view('v_login');
       
	}
    function cek_login(){
       
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        if($this->form_validation->run() != false){
            $where = array(
                'username' => $username,  
                'password' => $password  
            );
            if(isset($POST['login'])){
            $username = $this->input->post('username',true);
            $password = $this->input->post('password',true);
            
            
}}
           