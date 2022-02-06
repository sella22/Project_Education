<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Berita extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        
    }
    function index()
    {
        $data['judul'] = "Halaman Berita";
        $this->load->view("layout/header", $data);
        $this->load->view("berita/vw_berita", $data);
        $this->load->view("layout/footer", $data);
    }
}