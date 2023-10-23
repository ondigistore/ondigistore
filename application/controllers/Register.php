<?php 
class Register extends CI_Controller
{
    public function index()
    {
        $this->_rules();

        if($this->form_validation->run() == FALSE)
        {
            $this->load->view('register_akun');
        }
        else
        {
            $username           = $this->input->post('username');
            $password           = md5($this->input->post('password'));
            $email              = $this->input->post('email');
            $full_name          = $this->input->post('full_name');
            $phone              = $this->input->post('phone');
            $role               = '2';

            $data = array 
            (
                'username'          => $username,
                'password'          => $password,
                'email'             => $email,
                'full_name'         => $full_name,
                'phone'             => $phone,
                'role'              => $role

            );

            $this->topup_model->insert_data($data, 'users');
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Akun Berhasil dibuat! Silahkan Login.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true"&times;</span>
            </button>
            </div>');
            redirect('auth/login');
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('full_name', 'Full_name', 'required');
        $this->form_validation->set_rules('phone', 'phone', 'required');
    }
}
?>