<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Tentang extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        
    }
    function index()
    {
        $data['judul'] = "Halaman Tentang";
        $this->load->view("layout/header", $data);
        $this->load->view("tentang/vw_tentang", $data);
        $this->load->view("layout/footer", $data);
    }
}