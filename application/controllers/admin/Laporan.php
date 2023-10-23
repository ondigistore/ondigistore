<?php

class Laporan extends CI_Controller {
    public function __construct()
    
    {
        parent::__construct();  
        $this->load->model("laporan_model");
    }

    public function index()
    {
        // $data['laporan'] = $this->db->query("SELECT * FROM laporan lp, pembayaran pr, products pd,
        // game gm WHERE lp.pembayaran_id=pr.pembayaran_id AND lp.product_id=pd.product_id AND lp.game_id=gm.game_id")->result();
        $this->load->view('admin/_partials/head');
        $this->load->view('admin/_partials/navbar');
        $this->load->view('admin/_partials/modal');
        $this->load->view('admin/_partials/sidebar');
        $this->load->view("admin/laporan/list_laporan");
        $this->load->view('admin/_partials/footer');
        $this->load->view('admin/_partials/js');
        
    }
}
?>