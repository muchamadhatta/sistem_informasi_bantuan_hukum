<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_telepon extends CI_Model { 
    public function get($id = null)
    {
        $this->db->select('*');
        $this->db->from('konsultasi');
        $this->db->join('konsultan_hukum', 'id_konsultan_hukum = ditanganioleh');
        if($id != null) {
            $this->db->where('ditanganioleh', $id);
        }
        $query = $this->db->get();
        return $query;
    }
}