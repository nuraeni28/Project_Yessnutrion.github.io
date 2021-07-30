<?php
class dashboard extends MY_Controller {
	public function __construct(){ 
		parent::__construct();
    $this->load->library('session');
		$this->load->helper('url');
    $this->load->model('register/m_register');
    $this->load->model('m_dashboard');
    $this->load->model('login/m_login');
  }
  
	
	function index(){
       // $this->load->model('login/m_login');
        //$data['row'] = $this->m_login->get();
        $data['user'] = $this->db->get_where('user', ['username' 	=> $this->session->userdata('username')])->row_array(); 
        $data['row'] = $this->m_dashboard->get();  
        $this->load->view('v_dashboard',$data);        
        $this->load->view('v_admin_1');        	
          	
       
    }

    function add(){
      $data['user'] = $this->db->get_where('user', ['username' 	=> $this->session->userdata('username')])->row_array(); 
      $this->load->view('v_dashboard',$data);	
      $this->load->library('form_validation');
      $this->form_validation->set_rules('name', 'Name', 'required');
      $this->form_validation->set_rules('gender', 'Gender', 'required');
      $this->form_validation->set_rules('age', 'Age', 'required');
      $this->form_validation->set_rules('email', 'Email', 'required');
      $this->form_validation->set_rules('username', 'Username', 'required|is_unique[user.username]');
      $this->form_validation->set_rules('pass', 'Password', 'required|min_length[8]');
      $this->form_validation->set_rules('repeat_pass', 'Repeat Password', 'required|matches[pass]',
        array('matches' => '%s tidak sesuai dengan password')	
    );
      $this->form_validation->set_rules('as', 'Role', 'required');
      $this->form_validation->set_message('required', '<h6 style="color:red;">%s masih kosong, silahkan isi</h6>');
      $this->form_validation->set_message('min_length', '<h6 style="color:red;">%s minimal 8 karakter');
      $this->form_validation->set_message('is_unique', '<h6 style="color:red;">%s username ini sudah dipakai, silahkan ganti');
    
      
      if ($this->form_validation->run() == FALSE){
        $this->load->view('v_create');
      }else {
        $post = $this->input->post(null,TRUE);
        $this->m_register->simpan($post);
        $this->session->set_flashdata('Info', '<div class="alert alert-success" role="alert">
        Data Berhasil Disimpan!
          </div>');
        redirect('dashboard');
		}

    }
    function del(){
      $id= $this->input->post('user_id');
      $this->m_dashboard->del($id);
      $this->session->set_flashdata('Info', '<div class="alert alert-danger" role="alert">
        Data Berhasil Dihapus!  
          </div>');
       redirect('dashboard/patient');
      }

  function simpan_edit($id){
     $data['user'] = $this->db->get_where('user', ['username' 	=> $this->session->userdata('username')])->row_array(); 
    $this->load->view('v_dashboard',$data);  
    $this->load->library('form_validation');
    $this->form_validation->set_rules('name', 'Name', 'required');
    $this->form_validation->set_rules('gender', 'Gender', 'required');
    $this->form_validation->set_rules('age', 'Age', 'required');
    $this->form_validation->set_rules('email', 'Email', 'required');
    $this->form_validation->set_rules('username', 'Username', 'required|is_unique[user.username]');
    if($this->input->post('pass')){
    $this->form_validation->set_rules('pass', 'Password', 'required|min_length[8]');
    $this->form_validation->set_rules('repeat_pass', 'Repeat Password', 'required|matches[pass]',
      array('matches' => '%s tidak sesuai dengan password')	
  );
  }
    if($this->input->post('repeat_pass')){
    $this->form_validation->set_rules('repeat_pass', 'Repeat Password', 'required|matches[pass]',
      array('matches' => '%s tidak sesuai dengan password')	
  );
  }
    $this->form_validation->set_rules('as', 'Role', 'required');
    $this->form_validation->set_message('required', '<h6 style="color:red;">%s masih kosong, silahkan isi</h6>');
    $this->form_validation->set_message('min_length', '<h6 style="color:red;">%s minimal 8 karakter');
    $this->form_validation->set_message('is_unique', '<h6 style="color:red;">%s username ini sudah dipakai, silahkan ganti');

    if ($this->form_validation->run() == FALSE){
      $query = $this->m_login->get($id);
      if($query->num_rows() > 0) {
          $data['row'] = $query->row();
          $this->load->view('v_edit', $data);
    }else {
      echo "<script>
              alert('Sorry, Masih ada data yang kosong.Silakah isi terlebih dahulu!');
              window.location='".site_url('dashboard/patient')."';
              </script>";
  }
}
  else{
    $post = $this->input->post(null,TRUE);
    $this->m_dashboard->update($post);
    $this->session->set_flashdata('Info', '<div class="alert alert-success" role="alert">
    Data Berhasil Diedit!
      </div>');
    redirect('dashboard');

  }
  }

  function patient(){
    $data['user'] = $this->db->get_where('user', ['username' 	=> $this->session->userdata('username')])->row_array(); 
    $this->load->view('v_dashboard',$data);  
    $data['row'] = $this->m_dashboard->get();   
    $this->load->view('v_admin_p',$data);
  }

  function seller(){
    // $this->load->model('login/m_login');
     //$data['row'] = $this->m_login->get();
     $data['user'] = $this->db->get_where('user', ['username' 	=> $this->session->userdata('username')])->row_array(); 
     $this->load->view('v_dashboard',$data);  
     $data['row'] = $this->m_dashboard->get1();
     $this->load->view('v_admin_s',$data);	
    
 }
}

       