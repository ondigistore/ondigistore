<?php

class Overview extends CI_Controller {
    public function __construct()
    
    {
        parent::__construct();  
       
    }

    public function index()
    {
        $data['content'] = $this->topup_model->get_data('content')->result();
        $this->load->view("admin/overview", $data);
        $this->load->view('admin/_partials/modal');
        
    }
}
?>