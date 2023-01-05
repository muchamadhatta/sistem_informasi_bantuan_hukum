<?php defined('BASEPATH') OR exit('No direct script access allowed');
class M_register extends CI_Model { 
    public function get($id = null)
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->join('klien', 'id_klien = id_user');
        if($id != null) {
            $this->db->where('id_user', $id);
        }
        $query = $this->db->get();
        return $query;
    }
    public function add($post)
    {
        $params ['nama_lengkap'] = $post['fullname'];
        $params ['username'] = $post['username'];
        $params ['password'] = md5($post['password']);
        $params ['level'] = $post['level'];
        $params ['image'] = $post['image'];
        $this->db->insert('user', $params);
        $params1 ['id_klien'] = $this->db->insert_id();
        $params1 ['alamat'] = $post['alamat'];
        $params1 ['tanggal_lahir'] = $post['tanggal_lahir'];
        $params1 ['telepon'] = $post['telepon'];
        $this->db->insert('klien', $params1);
        
    }
    
}
