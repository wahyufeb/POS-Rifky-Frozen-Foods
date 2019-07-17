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
        $data['pendapatan'] = $this->M_Owner->pendapatan();
        $data['terjual'] = $this->M_Owner->terjual();
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

    function tambahBarang(){
        $data = array(
            'kode' => $this->input->post('kode'),
            'nama' => $this->input->post('nama_barang'),
            'harga'=> $this->input->post('harga'),
            'stock' => 100
        );
        $this->M_Owner->tambahBarang($data);
        redirect('Owner/dataBarang');
    }

    function hapusBarang($kode){
        $where = array('kode' => $kode);
        $this->M_Owner->hapusBarang($kode);
        redirect('Owner/dataBarang');
    }
    
    function getBarang(){
        $where = array('kode' => $this->input->post('kode'));
        $getKode = $this->M_Owner->getKode($where);
        echo json_encode($getKode);
    }

    function updateBarang(){
        $data = array(
            'nama' => $this->input->post('nama_barang'),
            'harga'=> $this->input->post('harga')
        );
        $where = array('kode' => $this->input->post('kode'));
        $this->M_Owner->updateBarang($data, $where);
        redirect('Owner/dataBarang');
    }












}

/* End of file Owner.php */
