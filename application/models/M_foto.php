<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_foto extends CI_Model { 
    public function get($id = null)
    {
        $this->db->select('*');
        $this->db->from('foto');
        if($id != null) {
            $this->db->where('id_foto', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function add($post)
    {
        $params = [
            'id_album' => $post['album'],
            'image' => $post['image'],
        ];
        $this->db->insert('foto',$params);
    }
    public function update($post)
    {
        $params = [
            'id_album' => $post['album'],
            'image' => $post['image'],
            
        ];
        $this->db->where('id_foto', $post['id']);
        $this->db->update('foto',$params);
    }
    public function del($id)
    {
        $this->db->where('id_foto', $id);
        $this->db->delete('foto');
    }
}
