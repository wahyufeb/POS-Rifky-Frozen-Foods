<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function index(){
        $this->load->view('account/login');
    }

    function proses_login(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $where = array('username'=>$username);
        
        $user = $this->db->get_where('users', $where)->row_array();
        if($user){
            if(password_verify($password, $user['password'])){
                $data = array(
                    'id_user' => $user['id_user'],
                    'username' => $user['username'],
                    'jabatan' => $user['jabatan']
                );
                $this->session->set_userdata($data);
                if($this->session->userdata('jabatan') == 'owner'){
                    redirect('Owner');
                }elseif($this->session->userdata('jabatan') == 'supplier'){
                    redirect('Supplier');
                }elseif($this->session->userdata('jabatan') == 'cashier'){
                    redirect('Home');
                }else{
                    redirect('Login');
                }
            }else{
                echo 'Maaf Password Anda Salah';
            }
        }else{
            echo 'Maaf akun anda tidak ditemukan';
        }
    }

}

/* End of file Login.php */
