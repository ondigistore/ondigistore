<?php 
class Content extends CI_Controller
{
    public function berita($id)
    {
        $data['content'] = $this->topup_model->ambil_id_content($id);
        $data['komentar'] = $this->topup_model->get_data('komentar')->result();
        $this->load->view('user/_partials/head');
        $this->load->view('user/_partials/navbar');
        $this->load->view("content", $data); 
        $this->load->view('user/_partials/modal.php');
        $this->load->view('user/_partials/footer');
        $this->load->view('user/_partials/js');
    }

    public function komentar()
    {
        $full_name       = $this->session->userdata('full_name');
        $user_id         = $this->session->userdata('user_id');
        $email           = $this->input->post('email');
        $komentar        = $this->input->post('komentar');


        $data = array
        (
            'user_id'       => $user_id,
            'full_name'     => $full_name,
            'email'         => $email,
            'komentar'      => $komentar
        );

        $this->topup_model->insert_data($data, 'komentar');
        redirect('content/berita/1');
    }
}
?>