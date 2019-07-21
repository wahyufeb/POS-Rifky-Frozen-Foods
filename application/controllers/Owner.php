<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Owner extends CI_Controller {
    function __construct(){
        require_once APPPATH.'third_party/dompdf/dompdf_config.inc.php';
        parent::__construct();
        //Do your magic here
        if($this->session->userdata('jabatan') != 'owner'){
            redirect('Login');
        }
        $this->load->model('M_Owner');
    }
    
    function header(){
        $this->load->view('owner/header');
    }
    
    public function index(){
        // date today
        $start = date('d-m-Y 00:00:00');
        $end = date('d-m-Y 24:00:00');

        // Data
        $data['tPendapatan'] = $this->M_Owner->pendapatan();
        $data['tPendapatanToday'] = $this->M_Owner->pendapatanByDate($start, $end);
        $data['tBrang'] = $this->M_Owner->totalBarang();
        $data['terjual'] = $this->M_Owner->terjual();
        
        // Hello
        $where = array('id_user' => $this->session->userdata('id_user'));
        $data['sayHello'] = $this->M_Owner->getUser($where);

        // Chart
        $data['chartRevenue'] = $this->M_Owner->dataTransaksi();

        $this->header();
        $this->load->view('owner/index', $data);
    }

    // Halaman Transaksi
    // Data Data Transaksi
    function dataTransaksi(){
        $data['transaksi'] = $this->M_Owner->dataTransaksi();
        $data['pendapatan'] = $this->M_Owner->pendapatan();
        $data['terjual'] = $this->M_Owner->terjual();
        $this->header();
        $this->load->view('owner/data-Transaksi', $data);
    }

    public function getInvoice(){
        $id = $this->input->post('id');
        $result = $this->M_Owner->getInvId($id);
        echo json_encode($result);
    }

    public function getQty(){
        $id = $this->input->post('id');
        $totalQty = $this->M_Owner->getQty($id);
        echo json_encode($totalQty);        
    }

    public function printTransaksi(){
        $startDate = $this->input->post('start_date');
        $endDate = $this->input->post('end_date');

        if($startDate&&$endDate != ''){
            $data = $this->printData($startDate, $endDate);
        }else{
            $data = $this->printData($startDate, $endDate);
        }
    }
    
    
    function printData($start, $end){
        $s = explode("-", $start);
        $e = explode("-", $end);

        $startDate = $s[2]."-".$s[1]."-".$s[0];
        $endDate = $e[2]."-".$e[1]."-".$e[0];
        // Set Time
        date_default_timezone_set('Asia/Jakarta');
        $dateReport = date('D-M-Y');
        $filename       = $this->input->post('filename');
        $setSize        = $this->input->post('setsize');
        $setOrientation = $this->input->post('setorientation');
        
        def("DOMPDF_ENABLE_REMOTE", false);
        $dompdf = new Dompdf();
        $data['judul']   = "Laporan Data Transaksi";
        
        if($start&&$end != '' ){
            // Total Pendapatan
            $data['pendapatan'] = $this->M_Owner->pendapatanByDate($startDate, $endDate);
            // Total Transaksi
            $data['totalTransaksi'] = $this->M_Owner->totalTransByDate($startDate, $endDate);
            $data['transaksi'] = $this->M_Owner->allTransaksiByDate($startDate, $endDate);

            // DOMPDF
            $html = $this->load->view('owner/transaksi_print', $data, true);
            $dompdf->load_html($html);
            $dompdf->set_paper($setSize, $setOrientation);
            $dompdf->render();
            $pdf = $dompdf->output();
            $dompdf->stream($filename.'_'.$dateReport.'.pdf', array("Attachment" => false));  
        }else{
            // Total Pendapatan
            $data['pendapatan'] = $this->M_Owner->pendapatan();
            // Total Transaksi
            $data['totalTransaksi'] = $this->M_Owner->totalTrans();
            $data['transaksi'] = $this->M_Owner->allTransaksi();
 
            // DOMPDF						
            $html = $this->load->view('owner/transaksi_print', $data, true);
            $dompdf->load_html($html);
            $dompdf->set_paper($setSize, $setOrientation);
            $dompdf->render();
            $pdf = $dompdf->output();
            $dompdf->stream($filename.'_'.$dateReport.'.pdf', array("Attachment" => false));
        }
    }




    // Halaman Barang
    // Data Data Barang
    function dataBarang(){
        $data['barang'] = $this->M_Owner->dataBarang();
        $this->header();
        $this->load->view('owner/data-Barang', $data);
    }

    function tambahBarang(){
        $data = array(
            'kode' => $this->input->post('kode'),
            'nama' => $this->input->post('nama_barang'),
            'harga'=> $this->input->post('harga'),
            'stok' => 100
        );
        $this->M_Owner->tambahBarang($data);
        redirect('Owner/dataBarang');
    }

    function hapusBarang($kode){
        $where = array('kode' => $kode);
        $this->M_Owner->hapusBarang($kode);
        redirect('Owner/dataBarang');
    }
    
    function getBarang(){
        $where = array('kode' => $this->input->post('kode'));
        $getKode = $this->M_Owner->getKode($where);
        echo json_encode($getKode);
    }

    function updateBarang(){
        $data = array(
            'nama' => $this->input->post('nama_barang'),
            'harga'=> $this->input->post('harga')
        );
        $where = array('kode' => $this->input->post('kode'));
        $this->M_Owner->updateBarang($data, $where);
        redirect('Owner/dataBarang');
    }

    function printBarang(){
        date_default_timezone_set('Asia/Jakarta');
        $dateReport = date('D-M-Y');
        $filename       = $this->input->post('filename');
        $setSize        = $this->input->post('setsize');
        $setOrientation = $this->input->post('setorientation');
        
        def("DOMPDF_ENABLE_REMOTE", false);
        $dompdf = new Dompdf();
        $data['judul']   = "Laporan Data Barang";
        $data['totalBarang'] = $this->M_Owner->totalBarang();
        $data['barang'] = $this->M_Owner->dataBarang();

        // DOMPDF
        $html = $this->load->view('owner/barang_print', $data, true);
        $dompdf->load_html($html);
        $dompdf->set_paper($setSize, $setOrientation);
        $dompdf->render();
        $pdf = $dompdf->output();
        $dompdf->stream($filename.'_'.$dateReport.'.pdf', array("Attachment" => false));
    }


    // Halaman Akun
    // Data Akun
    function dataAkun(){
        $data['akun'] = $this->M_Owner->dataAkun();
        $this->header();
        $this->load->view('owner/data-Akun', $data);
    }

    function hapusAkun($id){
        $where = array('id_user' => $id);
        $this->M_Owner->hapusAkun($where);
        redirect('Owner/dataAkun');
    }

    function addAkun(){
        $data = array(
            'username' => $this->input->post('username'),
            'nama' => $this->input->post('nama'),
            'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
            'tempat' => $this->input->post('tempat'),
            'jabatan' => $this->input->post('jabatan')
        );
        $this->M_Owner->addAkun($data);
        redirect('Owner/dataAkun');
    }


    // Logout
    function logout(){
        $this->session->sess_destroy();
        redirect('Login');
    }




}

/* End of file Owner.php */
