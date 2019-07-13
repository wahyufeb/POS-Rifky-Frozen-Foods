<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Owner extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        //Do your magic here
        if($this->session->userdata('jabatan') != 'owner'){
            redirect('Login');
        }
    }
    
    public function index()
    {
        echo 'Halaman Owner';
    }

}

/* End of file Owner.php */
