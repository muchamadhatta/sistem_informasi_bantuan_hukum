<?php defined('BASEPATH') OR exit('No direct script access allowed');
class M_user_klien extends CI_Model { 
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
    public function update($post)
    {
        
        $params ['nama_lengkap'] = $post['fullname'];
        $params ['username'] = $post['username'];
        $params1 ['telepon'] = $post['telepon'];
        $params1 ['tanggal_lahir'] = $post['tanggal_lahir'];
        $params1 ['alamat'] = $post['alamat'];
        if(!empty($post['password'])){
            
            $params ['password'] = md5($post['password']);
        }
        $params ['level'] = $post['level'];
        if($post['image'] != null){
            $params['image'] = $post['image'];
        }
        $this->db->where('id_user', $post['id_user']);
        $this->db->update('user', $params);
        $this->db->where('id_klien', $post['id_klien']);
        $this->db->update('klien', $params1);
    }
    public function del($id)
    {
        $this->db->where('id_user', $id);
        $this->db->delete('user');
        $this->db->where('id_klien', $id);
        $this->db->delete('klien');
    }
}
