<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Game_model extends CI_Model
{
    private $_table = "game";

    public $game_id;
    public $jenis_game;
    public $nama_game;
    public $gambar;

    public function rules()
    {
        return [
            ['field' => 'game_id',
            'label' => 'Game_id',
            'rules' => 'required'],

            ['field' => 'jenis_game',
            'label' => 'Jenis_game',
            'rules' => 'required'],
            
            ['field' => 'nama_game',
            'label' => 'Nama_game',
            'rules' => 'required'],

            ['field' => 'gambar',
            'label' => 'Gambar']
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getbyid($id)
    {
        return $this->db->get_where($this->_table, ["game_id" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->game_id = $post["game_id"];
        $this->jenis_game = $post["jenis_game"];
        $this->nama_game = $post["nama_game"];
        $this->gambar = $post["gambar"];
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->game_id = $post["game_id"];
        $this->jenis_game = $post["jenis_game"];
        $this->nama_game = $post["nama_game"];
        $this->gambar = $post["gambar"];
        return $this->db->update($this->_table, $this, array('game_id' => $post['game_id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("game_id" => $id));
    }
    
}
?>