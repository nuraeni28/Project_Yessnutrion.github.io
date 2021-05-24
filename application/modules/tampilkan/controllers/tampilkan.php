<?php
defined('BASEPATH') or exit('No direct script access allowed');

class tampilkan extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_tampilkan');
    }

    public function index()
    {
        $data['member'] = $this->M_tampilkan->getAllUser();
        $this->load->view('V_tampilkan', $data);
    }
}