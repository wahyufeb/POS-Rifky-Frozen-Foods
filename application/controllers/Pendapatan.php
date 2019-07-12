<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Pendapatan extends CI_Controller {
    
    public function __construct(){
        parent::__construct();
        //Do your magic here
        $this->load->model('M_Pendapatan');
        
    }
    
    public function header(){
        $this->load->view('home/header');
    }

    public function index(){
        $data['tPendapatan'] = $this->M_Pendapatan->getTotal();
        $data['tTerjual'] = $this->M_Pendapatan->getSoldOut();
        $this->header();
        $this->load->view('pendapatan/pendapatan', $data);
    }

}

/* End of file Pendapatan.php */
