<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Home extends CI_Model {

    function getBarang(){
        return $this->db->get('barang')->result_array();
    }

    function cariBarang($key){
        $this->db->like('kode', $key);
        $this->db->or_like('nama', $key);
        return $this->db->get('barang')->result_array();
    }

}

/* End of file M_Home.php */
