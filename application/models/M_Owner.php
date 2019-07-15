<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Owner extends CI_Model {

    function dataTransaksi(){
        $this->db->order_by('date', 'desc');
        return $this->db->get('invoices')->result_array();
    }
    
    function getInvId($id){
        $this->db->where('id_invoice', $id);
        return $this->db->get('transaksi')->result();  
    }
}

/* End of file M_Owner.php */
