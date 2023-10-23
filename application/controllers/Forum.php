<?php 
class Forum extends CI_Controller
{
    public function index()
    {
        $data['content'] = $this->topup_model->get_data('content')->result();
        $this->load->view('user/_partials/head');
        $this->load->view('user/_partials/navbar');
        $this->load->view("forum", $data);
        $this->load->view('user/_partials/modal.php');
        $this->load->view('user/_partials/footer');
        $this->load->view('user/_partials/js');
    }
}
?>