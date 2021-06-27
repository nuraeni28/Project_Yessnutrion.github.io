<?php
class dashboard extends MY_Controller {
	public function __construct(){ 
		parent::__construct();
	}
	
	function index(){
       // $this->load->model('login/m_login');
        //$data['row'] = $this->m_login->get();

		$this->load->view('v_admin');	
       
    }
    function patient(){
         $this->load->model('login/m_login');
        $data['row'] = $this->m_login->get();

		$this->load->view('v_admin_p',$data);	
       
    }
}
       