<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_Agenda extends CI_Model { 
    public function get($id = null)
    {
        $this->db->select('*');
        $this->db->from('agenda');
        if($id != null) {
            $this->db->where('id_agenda', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function add($post)
    {
        $params = [
            'judul_agenda' => $post['judul_agenda'],
            'isi_agenda' => $post['isi_agenda'],
            'tanggal' => $post['tanggal'],
            'id_user' => $this->fungsi->user_login()->id_user,
            
        ];
        $this->db->insert('agenda',$params);
    }
    public function update($post)
    {
        $params = [
            'judul_agenda' => $post['judul_agenda'],
            'isi_agenda' => $post['isi_agenda'],
            'tanggal' => $post['tanggal'],
            
        ];
        $this->db->where('id_agenda', $post['id']);
        $this->db->update('agenda',$params);
    }
    public function del($id)
    {
        $this->db->where('id_agenda', $id);
        $this->db->delete('agenda');
    }
}
