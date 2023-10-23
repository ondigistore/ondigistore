<?php 
class Topup extends CI_Controller
{
    public function game($id)
    {
        
        $data['game'] = $this->topup_model->ambil_id_game($id);
        $data['products']=$this->topup_model->ambil_id_product();
        $this->load->view('user/_partials/head');
        $this->load->view('user/_partials/navbar');
        $this->load->view("user/game", $data); 
        $this->load->view('user/_partials/modal.php');
        $this->load->view('user/_partials/footer');
        $this->load->view('user/_partials/js');
    }

}
?>