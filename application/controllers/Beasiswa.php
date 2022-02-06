<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Beasiswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        
    }
    function index()
    {
        $data['judul'] = "Halaman Admin";
        $this->load->view("layout/header", $data);
        $this->load->view("beasiswa/vw_beasiswa", $data);
        $this->load->view("layout/footer", $data);
    }
}
