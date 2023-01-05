<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_artikel extends CI_Model { 
    public function get($id = null)
    {
        $this->db->select('*');
        $this->db->from('artikel');
        if($id != null) {
            $this->db->where('id_artikel', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function add($post)
    {
        $params = [
            'judul_artikel' => $post['judul'],
            'isi_artikel' => $post['isi_artikel'],
            'id_kategori' => $post['kategori'],
            'image' => $post['image'],
            'id_user' => $this->fungsi->user_login()->id_user,
            'tanggal_posting' => date("Y-m-d"),
        ];
        $this->db->insert('artikel',$params);
    }
    public function update($post)
    {
        $params = [
            'judul_artikel' => $post['judul'],
            'isi_artikel' => $post['isi_artikel'],
            'id_kategori' => $post['kategori'],
            'image' => $post['image'],
            
        ];
        $this->db->where('id_artikel', $post['id']);
        $this->db->update('artikel',$params);
    }
    public function del($id)
    {
        $this->db->where('id_artikel', $id);
        $this->db->delete('artikel');
    }
}
