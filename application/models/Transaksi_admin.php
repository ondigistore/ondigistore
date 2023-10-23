<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi_admin extends CI_Model
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

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("transaksi_id" => $id));
    }
    
}