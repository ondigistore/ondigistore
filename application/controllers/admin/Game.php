<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Game extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("game_model");
        $this->load->library('form_validation'); 
    }

    public function index()
    {
        $data["game"] = $this->game_model->getAll();
        $this->load->view("admin/game/list", $data);
        $this->load->view('admin/_partials/modal');
    }

    

    public function add()
    {
        $game = $this->game_model;
        $validation = $this->form_validation;
        $validation->set_rules($game->rules());

        if ($validation->run()) {
            $game->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("admin/game/new_form");

    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('admin/game');
       
        $game = $this->game_model;
        $validation = $this->form_validation;
        $validation->set_rules($game->rules());

        if ($validation->run()) {
            $game->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["game"] = $game->getById($id);
        if (!$data["game"]) show_404();
        
        $this->load->view("admin/game/edit_form", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->game_model->delete($id)) {
            redirect(site_url('admin/game'));
        }
    }
}