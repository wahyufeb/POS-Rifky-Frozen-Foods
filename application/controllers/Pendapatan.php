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
        // filter data with date NOW
        $start = date('d-m-Y 00:00:00');
        $end = date('d-m-Y 24:00:00');

        // total Pendapatan hari ini
        $data['tPendapatan'] = $this->M_Pendapatan->getTotal($start, $end);
        // total barang yang terjual hari ini
        $data['tTerjual'] = $this->M_Pendapatan->getSoldOut($start, $end);
        // get Transaksi
        $data['transaksi'] = $this->M_Pendapatan->getData($start, $end);       
        $this->header();
        $this->load->view('pendapatan/pendapatan', $data);
    }

    public function getInvoice(){
        $id = $this->input->post('id');
        $result = $this->M_Pendapatan->getInvId($id);
        echo json_encode($result);
    }

}

/* End of file Pendapatan.php */