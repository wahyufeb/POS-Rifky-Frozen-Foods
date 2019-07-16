<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Owner extends CI_Controller {
    function __construct(){
        parent::__construct();
        //Do your magic here
        if($this->session->userdata('jabatan') != 'owner'){
            redirect('Login');
        }
        $this->load->model('M_Owner');
    }
    
    function header(){
        $this->load->view('owner/header');
    }
    public function index(){
        $this->header();
        $this->load->view('owner/index');
    }

    // Halaman Transaksi
    // Data Data Transaksi
    function dataTransaksi(){
        $data['transaksi'] = $this->M_Owner->dataTransaksi();
        $this->header();
        $this->load->view('owner/data-Transaksi', $data);
    }

    public function getInvoice(){
        $id = $this->input->post('id');
        $result = $this->M_Owner->getInvId($id);
        echo json_encode($result);
    }
    public function getQty(){
        $id = $this->input->post('id');
        $totalQty = $this->M_Owner->getQty($id);
        echo json_encode($totalQty);        
    }

    // Halaman Barang
    // Data Data Barang
    function dataBarang(){
        $data['barang'] = $this->M_Owner->dataBarang();
        $this->header();
        $this->load->view('owner/data-Barang', $data);
    }
}

/* End of file Owner.php */
