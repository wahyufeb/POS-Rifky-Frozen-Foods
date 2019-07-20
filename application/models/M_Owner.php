<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Owner extends CI_Model {

    function dataTransaksi(){
        $this->db->order_by('date', 'desc');
        return $this->db->get('invoices')->result_array();
    }

    // Data Transaksi
    function allTransaksi(){
        $this->db->order_by('date', 'desc');
        $this->db->join('transaksi', 'transaksi.id_invoice = invoices.id_invoice', 'left');
        return $this->db->get('invoices')->result_array();
    }
    // Data Transaksi By Date
    function allTransaksiByDate($start, $end){
        $this->db->order_by('date', 'desc');
        $this->db->where('date >= ', $start);
        $this->db->where('date <= ', $end); 
        $this->db->join('transaksi', 'transaksi.id_invoice = invoices.id_invoice', 'left');
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
    // pendapatan
    // pendapatan berdasarkan waktu
    function pendapatanByDate($start, $end){
        $this->db->select('SUM(total) as total');
        $this->db->where('date >= ', $start);
        $this->db->where('date <= ', $end); 
        return $this->db->get('invoices')->result_array();
    }

    // Total Transaksi
    function totalTrans(){
        return $this->db->get('transaksi')->num_rows();
    } 
    // Total Transaksi berdasarkan waktu
    function totalTransByDate($start, $end){
        $this->db->where('date >= ', $start);
        $this->db->where('date <= ', $end); 
        $this->db->join('transaksi', 'transaksi.id_invoice = invoices.id_invoice', 'left');
        return $this->db->get('invoices')->num_rows();
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

    function totalBarang(){
        return $this->db->get('barang')->num_rows();
    }

    //////////////////////////////////////////////////////////////
    // Data Akun
    function dataAkun(){
        $this->db->where_not_in('jabatan', 'owner');      
        return $this->db->get('users')->result_array();
    }

    function hapusAkun($where){
        $this->db->where($where);
        $this->db->delete('users');
    }

    function addAkun($data){
        $this->db->insert('users', $data);
    }

    //////////////////////////////////////////////////////////////
    // Chart



}

/* End of file M_Owner.php */
