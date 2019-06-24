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

    // add to Cart
    function addToCart($kode){
        $where = array('kode' => $kode);
        $getKode = $this->M_Home->getKode($where);
        print_r($getKode);
        $hasil = $getKode[0];
        $data = array(
            'id' => $hasil['kode'],
            'qty' => 1,
            'price' => $hasil['harga'],
            'name' => $hasil['nama']
        );
        $this->cart->insert($data);
        redirect(base_url());
    }

    // Clear Cart
    function clearCart(){
        $this->cart->destroy();
        redirect(base_url());
    }

    // Delete Item from Cart
    function deleteItem($rowid){
        $data = array(
            'rowid' => $rowid,
            'qty' => 0
        );
        $this->cart->update($data);
        redirect(base_url());
    }

    // Min Qty
    function minQty($rowid, $qty){
        $data = array (
            'rowid' => $rowid,
            'qty' => $qty - 1
        );
        $this->cart->update($data);
        redirect(base_url());
    }

    // Add Qty
    function addQty($rowid, $qty){
        $data = array (
            'rowid' => $rowid,
            'qty' => $qty + 1
        );
        $this->cart->update($data);
        redirect(base_url());
    }

    // Get Item
    function getItem(){
        $rowid = $this->input->post('rowid');
        $item  = $this->cart->get_item($rowid);
        echo json_encode($item);
    }

    // Qty Update
    function qtyUpdate(){
        $rowid = $this->input->post('rowid');
        $qty = $this->input->post('qty');

        $data = array(
            'rowid' => $rowid,
            'qty' => $qty
        );
        $this->cart->update($data);
        redirect(base_url());
    }

    // save Transaksi
    function saveTransaksi(){
        date_default_timezone_set("Asia/Bangkok");
        $waktu = date('d-m-Y');
        $total = $this->input->post('total');
        $uang = $this->input->post('uang');
        $kembalian = $this->input->post('kembalian');
        $data = array('date' => $waktu,
                        'uang' => $uang,
                        'total' => $total,
                        'kembalian' => $kembalian);
        $this->M_Home->saveTransaksi($data);
        $this->cart->destroy();
    }

}

/* End of file Home.php */
?>