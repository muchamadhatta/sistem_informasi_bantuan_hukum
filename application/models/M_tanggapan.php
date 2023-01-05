<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_tanggapan extends CI_Model { 
    public function get($id = null)
    {
        $this->db->select('*');
        $this->db->from('tanggapan');
     
            $this->db->where('id_konsultasi', $id);
       
        $query = $this->db->get();
        return $query;
    }
    public function add($post)
    {
        $params = [
            'isi_tanggapan' => $post['isi_tanggapan'],
            'id_konsultasi' => $post['id2'],
            'nama_lengkap' => $this->fungsi->user_login()->nama_lengkap,
            'id_user' => $this->fungsi->user_login()->id_user,
            'tanggal_input' => date("Y-m-d"),
        ];
        $this->db->insert('tanggapan',$params);
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
