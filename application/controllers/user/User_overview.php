<?php

class User_overview extends CI_Controller {
    public function __construct()
    
    {
        parent::__construct();  
    }

    public function index()
    {
        $data['game'] = $this->topup_model->get_data('game')->result();
        $data['content'] = $this->topup_model->get_data('content')->result();
        $this->load->view('user/_partials/head');
        $this->load->view('user/_partials/navbar');
        $this->load->view("user/user_overview", $data); 
        $this->load->view("user/about");
        $this->load->view('user/_partials/modal.php');
        $this->load->view('user/_partials/footer');
        $this->load->view('user/_partials/js');
    }

}
?>