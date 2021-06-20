<?php
class halu extends MY_Controller {
	public function __construct(){ 
		parent::__construct();
	}
	
	function index(){
		$this->load->view('header');
		$this->load->view('v_halu');
		$this->load->view('footer');
		
		
       
    }
}
       