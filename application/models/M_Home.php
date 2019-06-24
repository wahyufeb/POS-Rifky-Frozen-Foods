<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Home extends CI_Model {
    // Get Barang
    function getBarang(){
        return $this->db->get('barang')->result_array();
    }

    // Cari Barang
    function cariBarang($key){
        $this->db->like('kode', $key);
        $this->db->or_like('nama', $key);
        return $this->db->get('barang')->result_array();
    }

    // Get Barang where Kode
    function getKode($kode){
        return $this->db->get_where('barang', $kode)->result_array();
    }

    // save Transaksi
    function saveTransaksi($data){
        $this->db->insert('invoices', $data);
        $id_inv = $this->db->insert_id('invoices');
        foreach ($this->cart->contents() as $row) {
            $transaksi = array(
                'id_invoice'=> $id_inv,
                'kode' => $row['id'],
                'nama_barang' => $row['name'],
                'qty' => $row['qty'],
                'subtotal' => $row['subtotal']
            );
            $this->db->insert('transaksi', $transaksi);
        }
        
    }

}

/* End of file M_Home.php */
