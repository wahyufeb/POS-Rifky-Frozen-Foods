<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    
    public function __construct(){
        parent::__construct();
        $this->load->model('M_Home');
    }
    // templating
    public function index(){
        $this->load->view('home/home');
    }

    // get Barang
    function getBarang(){
        $getBarang = $this->M_Home->getbarang();
        echo json_encode($getBarang);
    }

    // cari Barang
    function cariBarang(){
        $key = $this->input->post('key');
        $cari = $this->M_Home->cariBarang($key);
        echo json_encode($cari);
    }

}

/* End of file Home.php */
?>