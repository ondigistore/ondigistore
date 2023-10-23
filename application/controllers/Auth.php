<?php

class Auth extends CI_Controller
{
    public function login()
    {
        $this->_rules();
        if($this->form_validation->run() == FALSE)
        {
            $this->load->view("login");
        }
        else
        {
            $username = $this->input->post('username');
            $password = md5($this->input->post('password'));

            $check =  $this->topup_model->check_login($username, $password);
            // var_dump($check);
            // die();

            if($check == FALSE)
            {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Username atau Password Salah!.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true"&times;</span>
            </button>
            </div>');
            redirect('auth/login');
            }
            else
            {
                $this->session->set_userdata('username', $check->username);
                $this->session->set_userdata('role', $check->role);
                $this->session->set_userdata('full_name', $check->full_name);
                $this->session->set_userdata('user_id', $check->user_id);

                switch($check->role)
                {
                    case 1 : redirect('admin');
                            break;
                    case 2 : redirect('user');
                            break;
                }
            }
        }

    }

    public function logout()
    {
        // hancurkan semua sesi
        $this->session->sess_destroy();
        redirect('auth/login');
    }

    public function _rules()
    {
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
    }

    public function reset_password()
    {
        $this->load->view('reset_password');
    }

    public function reset_password_action()
    {
        $password_baru = $this->input->post('password_baru');
        $konfir_password = $this->input->post('konfir_password');

        $this->form_validation->set_rules('password_baru', 'Password Baru', 'required|matches[konfir_password]');
        $this->form_validation->set_rules('konfir_password', 'Konfirmasi Password', 'required');

        if($this->form_validation->run() == FALSE)
        {
            $this->load->view('reset_password');
        }
        else
        {
            $data = array('password' =>md5($password_baru));
            $id = array('user_id' => $this->session->userdata('user_id'));

            $this->topup_model->update_password($id,$data,'users');

            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Password telah DiUpdate!.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true"&times;</span>
            </button>
            </div>');
            redirect('auth/login');
        }
    }
}
?>