<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Supplier extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        //Do your magic here
        if($this->session->userdata('jabatan') != 'supplier'){
            redirect('Login');
        }
    }
    
    public function index()
    {
        echo 'Halaman Supplier';        
    }

}

/* End of file Supplier.php */
