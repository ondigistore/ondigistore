<?php

class Topup_model extends CI_Model
{   
    public function get_data($table)
    {
        return $this->db->get($table);
    }

    public function insert_data($data,$table)
    {
        $this->db->insert($table,$data);
    }
    public function getbyidproduct($id)
    {
        $data = $this->db->where('product_id',$id)->get('products');
        if($data->num_rows() > 0)
        {
            return $data->result();
        }
        else
        {
            return false;
        }
    }  
    
    public function ambil_id_product()
    {
        $data = $this->db->get('products');
        if($data->num_rows() > 0)
        {
            return $data->result();
        }
        else
        {
            return false;
        }
    }  

    public function ambil_id_game($id)
    {
        $result = $this->db->where('game_id',$id)->get('game');
        if($result->num_rows() > 0)
        {
            return $result->result();
        }
        else
        {
            return false;
        }
    }  
    public function getbyidgame($id)
    {
        $result = $this->db->where('game_id',$id)->get('game');
        if($result->num_rows() > 0)
        {
            return $result->result();
        }
        else
        {
            return false;
        }
    }  

    public function ambil_id_pembayaran($id)
    {
        $result = $this->db->where('pembayaran_id', $id)->get('pembayaran');
        if($result->num_rows() > 0)
        {
            return $result->result();
        }
        else
        {
            return false;
        }
    } 
    
    public function ambil_id_content($id)
    {
        $result = $this->db->where('content_id',$id)->get('content');
        if($result->num_rows() > 0)
        {
            return $result->result();
        }
        else
        {
            return false;
        }
    }  

    public function check_login()
    {
        $username = set_value('username');
        $password = set_value('password');

        $result = $this->db
                        ->where('username',$username)
                        ->where('password',md5($password))
                        ->limit(1)
                        ->get('users');
        if($result->num_rows() > 0)
        {
            return $result->row();
        }
        else
        {
            return false;
        }
    }

    public function update_password($where,$data,$table)
    {
        $this->db->where($where);
        $this->db->update($table,$data);
    }

    // public function jointable($id)
    // {
    //     $this->db->from('komentar'); 
    //     $this->db->join('products', 'products.product_id = transaksi.product_id');
    //     $this->db->join('pembayaran', 'pembayaran.pembayaran_id = transaksi.pembayaran_id');
    //     $this->db->join('game', 'game.game_id = transaksi.game_id');
    //     $this->db->where('transaksi_id',$id);         
    //     return $this->db->get();
    // }

}
?>