<?php
class Login extends MY_Controller {
	public function __construct(){ 
		parent::__construct();
        $this->load->model('M_login');
	}
	
	function index(){
        $data['judul'] = 'Login Page';
        $this->load->view('Template/Header_login',$data);
		$this->load->view('V_login');
        $this->load->view('Template/Footer_login',$data);
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
                $cek = $this->M_login->cek_login('admin', $where)->num_rows();
                $data = $this->M_login->cek_login('admin', $where)->row();
                if($cek > 0){
                    $data_session = array(
                        'id' => $data->id,
                        'username' => $data->username,
                        'status' => 'admin_login'
                    );
                    $this->session->set_userdata($data_session);
                    redirect('tampilkan');
                }
                else{
                    redirect('Login?alert=gagal');
                }
            }else if ($sebagai == 'member'){
                $cek = $this->M_login->cek_login('member', $where)->num_rows();
                $data = $this->M_login->cek_login('member', $where)->row();
                if($cek > 0){
                    $data_session = array(
                        'id' => $data->id,
                        'username' =>$data->username,
                        'status' => 'member_login'
                    );
                    $this->session->set_userdata($data_session);
                    redirect('home');
                }
                else{
                    redirect('Login?alert=gagal');
                }
            }else{
                redirect('login');
            }
        
        }
    }
}
