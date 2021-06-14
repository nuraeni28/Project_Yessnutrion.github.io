<?php
class login extends MY_Controller {
	public function __construct(){ 
		parent::__construct();
        $this->load->model('m_login');
	}
	
	function index(){
		$this->load->view('v_login');
       
	}
    function login_aksi(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $sebagai = $this->input->post('sebagai');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        if($this->form_validation->run() != false){
            $where = array(
                'username' => $username,  
                'password' => $password  
            );
            if($sebagai == 'admin'){
                $cek = $this->m_login->cek_login('admin', $where)->num_rows();
               
                if($cek > 0){
                    $data_session = array(
                        'id' => $data->id,
                        'username' => $data->username,
                        'status' => 'admin_login'
                    );
                    $this->session->set_userdata($data_session);
                    redirect('halu');
                }
                else{
                    redirect('Login?alert=gagal');
                }
			}
		}
	}
}
           