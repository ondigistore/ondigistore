<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan_model extends CI_Model
{
    private $_table = "laporan";

    public $detail_id;
    public $pembayaran_id;
    public $product_id;
    public $game_id;
    public $total_harga;

    public function rules()
    {
        return [
            ['field' => 'detail_id',
            'label' => 'Detail_id',
            'rules' => 'required'],

            ['field' => 'pembayaran_id',
            'label' => 'Pembayaran_id',
            'rules' => 'required'],

            ['field' => 'product_id',
            'label' => 'Product_id',
            'rules' => 'required'],
            
            ['field' => 'game_id',
            'label' => 'Game_id',
            'rules' => 'required'],

            ['field' => 'total_harga',
            'label' => 'Total_harga',
            'rules' => 'numeric']
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["detail_id" => $id])->row();
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("detail_id" => $id));
    }
    
    // public function lap_bulanan_detail($bulan, $tahun)
    // {
        // return $this->db->query("SELECT nama_b, tb_detailpembelian.harga_awal, tb_detailpembelian.harga_jual, sum(qty) as jumlah, SUM(subtotal) as total, SUM(subtotal - (tb_detailpembelian.harga_awal * qty)) as keuntungan from tb_pembelian JOIN tb_detailpembelian USING(id_pembelian) JOIN tb_barang USING(id_barang) where MONTH(tanggal_beli) = '$bulan' AND year(tanggal_beli)='$tahun' GROUP BY nama_b");
    // }
    
}
