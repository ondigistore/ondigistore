<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi_model extends CI_Model
{
    private $_table = "transaksi";

    public $transaksi_id;
    public $product_id;
    public $pembayaran_id;
    public $user_id;
    public $game_id;
    public $total_harga;

    public function rules()
    {
        return [
            ['field' => 'transaksi_id',
            'label' => 'Transaksi_id',
            'rules' => 'required'],

            ['field' => 'product_id',
            'label' => 'Product_id',
            'rules' => 'required'],

            ['field' => 'pembayaran_id',
            'label' => 'Pembayaran_id',
            'rules' => 'required'],

            ['field' => 'user_id',
            'label' => 'user_id',
            'rules' => 'numeric'],
            
            ['field' => 'game_id',
            'label' => 'Game_id',
            'rules' => 'required'],

            ['field' => 'total_harga',
            'label' => 'Total_harga',
            'rules' => 'numeric'],

            ['field' => 'tanggal',
            'label' => 'Tanggal',
            'rules' => 'date']
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["transaksi_id" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->transaksi_id = uniqid();
        $this->product_id = $post["product_id"];
        $this->pembayaran_id = $post["pembayaran_id"];
        $this->user_id = $post["user_id"];
        $this->game_id = $post["game_id"];
        $this->total_harga = $post["total_harga"];
        $this->tanggal = $post["tanggal"];
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->transaksi_id = $post["id"];
        $this->product_id = $post["product_id"];
        $this->pembayaran_id = $post["pembayaran_id"];
        $this->user_id = $post["user_id"];
        $this->game_id = $post["game_id"];
        $this->total_harga = $post["total_harga"];
        $this->tanggal = $post["tanggal"];
        return $this->db->update($this->_table, $this, array('transaksi_id' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("transaksi_id" => $id));
    }

    

    
    
}