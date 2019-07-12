<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Pendapatan extends CI_Model {

    function getTotal(){
        $this->db->select('SUM(total) as total');
        return $this->db->get('invoices')->result_array();
    }

    function getSoldOut(){
        $this->db->select('SUM(qty) as sold');
        return $this->db->get('transaksi')->result_array();
    }

}

/* End of file M_Pendapatan.php */
