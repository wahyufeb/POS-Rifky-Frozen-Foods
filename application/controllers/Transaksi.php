<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {
    
    public function __construct(){
        parent::__construct();
        $this->load->model('M_Transaksi');
    }
    // templating
    function header(){
        $this->load->view('home/header');
    }
    public function index(){
        $this->header();
        $this->load->view('transaksi/transaksi  ');
    }

}

/* End of file Transaksi.php */
