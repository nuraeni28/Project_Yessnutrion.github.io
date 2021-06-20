<?php
class register extends MY_Controller {
	public function __construct(){ 
		parent::__construct();
		$this->load->library('form_validation');
        $this->load->model('m_register');
	}
	
	function index(){
		$this->load->view('v_register_1');
       
	}

	function add(){
		

		$this->form_validation->set_rules('name', 'Fullname', 'required');
		$this->form_validation->set_rules('gender', 'Gender', 'required|is_unique[user.username]');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('pass', 'Password', 'required|min_length[8]');
		$this->form_validation->set_rules('repeat_pass', 'Repeat Password', 'required|matches[pass]',
			array('matches' => '%s tidak sesuai dengan password')	
	);
		$this->form_validation->set_rules('as', 'Role', 'required');
		$this->form_validation->set_message('required', '<h6 style="color:red;">%s masih kosong, silahkan isi</h6>');
		$this->form_validation->set_message('min_length', '<h6 style="color:red;">%s minimal 8 karakter');
		$this->form_validation->set_message('is_unique', '%s username ini sudah dipakai, silahkan ganti');
		$this->form_validation->set_message('matches', '%s username ini sudah dipakai, silahkan ganti');
		
		if ($this->form_validation->run() == FALSE){
			$this->load->view('v_register');
		}else {
			$post = $this->input->post(null,TRUE);
			$this->m_register->simpan($post);
			redirect('login');
		}
	}
	
	}
