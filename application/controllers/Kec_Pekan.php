<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Kec_Pekan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        
    }
    function index()
    {
        $data['judul'] = "Halaman Admin";
        $this->load->view("layout/header", $data);
        $this->load->view("peta/vw_kec_pekan", $data);
        $this->load->view("layout/footer", $data);
    }
}
