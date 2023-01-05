<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_konsultasi extends CI_Model { 
    public function get($id = null)
    {
        $this->db->select('*');
        $this->db->from('konsultasi');
        if($id != null) {
            $this->db->where('id_konsultasi', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function getidkonsultasi($id)
    {
        $this->db->select('*');
        $this->db->from('konsultasi');
        $this->db->where('id_user', $id);
        $query = $this->db->get()->row();
        return $query;
    }

    public function konsultan_hukum($id = null)
    {
        
        $this->db->select('*');
        $this->db->from('konsultasi');
        if($id != null) {
            $this->db->where('ditanganioleh', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function get_konsultanhukum($id){
        $this->db->select('*');
        $this->db->from('user');
        $this->db->join('konsultan_hukum', 'id_konsultan_hukum = id_user');
        if($id != null) {
            $this->db->where('id_user', $id);
        }
        $data = $this->db->get();
        return $data;

    }

    public function ditanganioleh($post)
    {
        $params = [
            'ditanganioleh' => $post['ditanganioleh'],
            'status' => $post['status'],
            
        ];
        $this->db->where('id_konsultasi', $post['id']);
        $this->db->update('konsultasi',$params);
    }




    public function add($post)
    {
        $params = [
            'nama_lengkap' => $post['nama_lengkap'],
            'agama' => $post['agama'],
            'alamat' => $post['alamat'],
            'kelurahan' => $post['kelurahan'],
            'kota' => $post['kota'],
            'kebangsaan' => $post['kebangsaan'],
            'umur' => $post['umur'],
            'jenis_kelamin' => $post['jenis_kelamin'],
            'status_perkawinan' => $post['status_perkawinan'],
            'pendidikan' => $post['pendidikan'],
            'pekerjaan' => $post['pekerjaan'],
            'rata_rata_pengeluaran' => $post['rata_rata_pengeluaran'],
            'jumlah_tanggungan' => $post['jumlah_tanggungan'],
            'jenis_masalah' => $post['jenis_masalah'],
            'masalah_kasus' => $post['masalah_kasus'],
            'penanganan' => $post['penanganan'],
            'status' => $post['status'],
            'id_user' => $this->fungsi->user_login()->id_user,
            'tanggal_input' => date("Y-m-d"),
        ];
        $this->db->insert('konsultasi',$params);
    }
    public function update($post)
    {
        $params = [
            'nama_lengkap' => $post['nama_lengkap'],
            'agama' => $post['agama'],
            'alamat' => $post['alamat'],
            'kelurahan' => $post['kelurahan'],
            'kota' => $post['kota'],
            'kebangsaan' => $post['kebangsaan'],
            'umur' => $post['umur'],
            'jenis_kelamin' => $post['jenis_kelamin'],
            'status_perkawinan' => $post['status_perkawinan'],
            'pendidikan' => $post['pendidikan'],
            'pekerjaan' => $post['pekerjaan'],
            'rata_rata_pengeluaran' => $post['rata_rata_pengeluaran'],
            'jumlah_tanggungan' => $post['jumlah_tanggungan'],
            'jenis_masalah' => $post['jenis_masalah'],
            'masalah_kasus' => $post['masalah_kasus'],
            'penanganan' => $post['penanganan'],
            'status' => $post['status'],
            
        ];
        $this->db->where('id_konsultasi', $post['id']);
        $this->db->update('konsultasi',$params);
    }
    public function del($id)
    {
        $this->db->where('id_konsultasi', $id);
        $this->db->delete('konsultasi');
    }
}
