<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_jadwal extends CI_Model { 
    public function get($id = null)
    {
        $this->db->select('*');
        $this->db->from('jadwal');
        
        if($id != null) {
            $this->db->where('id_konsultasi', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function add($post)
    {
        $params = [
            'alamat_pertemuan' => $post['alamat_pertemuan'],
            'jam' => $post['jam'],
            'tanggal' => $post['tanggal'],
            'status' => $post['status'],
            'id_user' => $this->fungsi->user_login()->id_user,
        ];
        $this->db->insert('jadwal',$params);
    }
    public function update($post)
    {
        $params = [
            'alamat_pertemuan' => $post['alamat_pertemuan'],
            'jam' => $post['jam'],
            'tanggal' => $post['tanggal'],
            'status' => $post['status'],
            'hasil_pertemuan' => $post['hasil_pertemuan'],
            'keterangan' => $post['keterangan'],
        ];
        $this->db->where('id_konsultasi', $post['id2']);
        $this->db->update('jadwal',$params);
    }
    public function del($id)
    {
        $this->db->where('id_jadwal', $id);
        $this->db->delete('jadwal');
    }


    public function getidkonsultasi($id = null)
    {
        $this->db->select('*');
        $this->db->from('konsultasi');
     
            $this->db->where('id_user', $id);
       
        $query = $this->db->get();
        return $query;
    }



}
