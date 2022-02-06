<?php
defined('BASEPATH') or exit('No direct script access allowed');
class MI extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        
    }
    function index()
    {
        $data['judul'] = "Halaman Berita";
        $this->load->view("layout/header", $data);
        $this->load->view("peta/vw_mi", $data);
        $this->load->view("layout/footer", $data);
    }
}
