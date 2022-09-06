<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Database extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['title'] = 'Database Kader';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('database/index', $data);
        $this->load->view('templates/footer');
    }

    public function detail_kader()
    {
        $data['title'] = 'Detail Kader';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('database/detail_kader', $data);
        $this->load->view('templates/footer');
    }
}