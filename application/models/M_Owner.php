<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Owner extends CI_Model {

    // Data Transaksi
    function dataTransaksi(){
        $this->db->order_by('date', 'desc');
        return $this->db->get('invoices')->result_array();
    }
    
    function getInvId($id){
        $this->db->where('id_invoice', $id);
        return $this->db->get('transaksi')->result();  
    }

    function getQty($id){
        $this->db->select('SUM(qty) as totalQty');
        $this->db->where('id_invoice', $id);
        return $this->db->get('transaksi')->result();  
    }

    // Data Barang
    function dataBarang(){
        return $this->db->get('barang')->result_array();
    }
}

/* End of file M_Owner.php */
