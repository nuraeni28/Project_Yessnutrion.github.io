<?php
class login extends MY_Controller {
	public function __construct(){ 
		parent::__construct();
     
        $this->load->library('form_validation');
        $this->load->model('m_login');
	}
	
	function index(){
        
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('pass', 'Password', 'required');
        if($this->form_validation->run() == false){
            $this->load->view('v_login');
        } else{
            $this->cek_login();
        }
       
	}
    function cek_login(){
        $username = $this->input->post('username');
        $password =  sha1($this->input->post('pass'));
        $user = $this->db->get_where('user', ['username' => $username])->row_array();
            if($user){
                if($password == $user['password']){
                    $params = [
                        'username' => $user['username'],
                        'role'  => $user['role']
                    ];
                    if($user['role']=='0'){
                        $this->session->set_userdata($params);
                        redirect('dashboard');

                    }elseif($user['role']=='1'){
                            $this->session->set_userdata($params);
                            redirect('halu/home');
                        }
                    else{
                        $this->session->set_userdata($params);
                        redirect('seller/product');
                    }
                }else{
                   
                        echo "<script>
                                alert('Sorry, Password is wrong');
                                window.location='".site_url('login')."';
                                </script>";
                    } 
            } else {
                echo "<script>
                        alert('Sorry, Your account is not found');
                        window.location='".site_url('login')."';
                        </script>";
        }
    }
    


    function logout(){
        $params = array('user_id', 'role');
        $this->session->unset_userdata($params);
        $this->session->sess_destroy();
        redirect('login');

    }
}
           