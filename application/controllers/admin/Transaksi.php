<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("transaksi_admin");
        $this->load->library('form_validation');

    }

    public function index()
    {
        $data["transaksi"] = $this->transaksi_admin->getAll();

        // $this->load->view('admin/_partials/head');
        // $this->load->view('admin/_partials/navbar');
        // $this->load->view('admin/_partials/sidebar');
        $this->load->view('admin/_partials/modal');
        $this->load->view('admin/transaksi/list_transaksi', $data);
        // $this->load->view('admin/_partials/footer');
        // $this->load->view('admin/_partials/js');
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->transaksi_admin->delete($id)) {
            redirect(site_url('admin/transaksi'));
        }
    }
}