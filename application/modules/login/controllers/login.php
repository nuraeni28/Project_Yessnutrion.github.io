<?php
class login extends MY_Controller {
	public function __construct(){ 
		parent::__construct();
        //$this->load->model('m_login');
        $this->load->library('form_validation');
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
            $post = $this->input->post(null,TRUE);
        if(isset($_POST['login'])){      
            $this->load->model('m_login');
            $query = $this->m_login->proses_login($post);
            if($query->num_rows() > 0){
                $row = $query->row();
                $params = array(        
                    'user_id' => $row->id,
                    'role' =>$row->role

                );
                $this->session->set_userdata($params);
                    echo "<script>
                        alert('Congratulations, login successfully');
                        window.location='".site_url('halu')."';
                        </script>";
            } else {
                echo "<script>
                        alert('Sorry, login failed');
                        window.location='".site_url('login')."';
                        </script>";
            }
}
}
}
           