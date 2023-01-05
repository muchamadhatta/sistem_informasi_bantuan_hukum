<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_produk_hukum extends CI_Model { 
    public function get($id = null)
    {
        $this->db->select('*');
        $this->db->from('produk_hukum');
        if($id != null) {
            $this->db->where('id_produk_hukum', $id);
        }
        $query = $this->db->get();
        return $query;
    }
    public function add($post)
    {
        $params = [
            'judul_produk_hukum' => $post['judul'],
            'jenis_keputusan' => $post['jenis'],
            'nomor' => $post['nomor'],
            'status' => $post['status'],
            'tahun' => $post['tahun'],
            'tanggal_perundangan' => $post['tanggal'],
            'tentang' => $post['tentang'],
            'file_upload' => $post['file_upload'],
            'id_user' => $this->fungsi->user_login()->id_user,
        ];
        $this->db->insert('produk_hukum',$params);
    }
    public function update($post)
    {
        $params = [
            'judul_produk_hukum' => $post['judul'],
            'jenis_keputusan' => $post['jenis'],
            'nomor' => $post['nomor'],
            'status' => $post['status'],
            'tahun' => $post['tahun'],
            'tanggal_perundangan' => $post['tanggal'],
            'tentang' => $post['tentang'],
            
        ];
        if($post['file_upload'] != null){
            $params['file_upload'] = $post['file_upload'];
        }
        $this->db->where('id_produk_hukum', $post['id']);
        $this->db->update('produk_hukum',$params);
    }
    public function del($id)
    {
        $this->db->where('id_produk_hukum', $id);
        $this->db->delete('produk_hukum');
    }
}
