<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Pendapatan extends CI_Model {

    function getTotal($start, $end){
        $this->db->select('SUM(total) as total');
        $this->db->where('date >= ', $start);
        $this->db->where('date <= ', $end); 
        return $this->db->get('invoices')->result_array();
    }

    function getSoldOut($start, $end){
        $this->db->select('SUM(qty) as sold');    
        $this->db->where('date >= ', $start);
        $this->db->where('date <= ', $end); 
        $this->db->join('invoices', 'invoices.id_invoice = transaksi.id_invoice', 'left');
        return $this->db->get('transaksi')->result_array();
    }

    function getData($start, $end){
        $this->db->where('date >= ', $start);
        $this->db->where('date <= ', $end);      
        $this->db->order_by('date', 'desc');
        return $this->db->get('invoices')->result_array();
    }

    function getInvId($id){
        $this->db->where('id_invoice', $id);
        return $this->db->get('transaksi')->result();  
    }

}

/* End of file M_Pendapatan.php */
