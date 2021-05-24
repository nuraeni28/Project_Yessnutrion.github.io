<?php
class Dashboard extends MY_Controller{
    function __construct(){
        parent::__construct();
    }
    function index(){
        $this->load->view('V_Dashboard');
    }
}