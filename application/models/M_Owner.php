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

    // pendapatan
    function pendapatan(){
        $this->db->select('SUM(total) as total');
        return $this->db->get('invoices')->result_array();
    }
    // terjual
    function terjual(){
        $this->db->select('SUM(qty) as tQty');
        return $this->db->get('transaksi')->result_array();
    }






    //////////////////////////////////////////////////////////////
    // Data Barang
    function dataBarang(){
        return $this->db->get('barang')->result_array();
    }

    function tambahBarang($data){
        $this->db->insert('barang', $data);
    }

    function hapusBarang($kode){
        $this->db->where('kode', $kode);
        $this->db->delete('barang');
    }

    function getKode($where){
        $this->db->where($where);
        return $this->db->get('barang')->result();
    }

    function updateBarang($data, $where){
        $this->db->where($where);
        $this->db->update('barang', $data);
    }

}

/* End of file M_Owner.php */
