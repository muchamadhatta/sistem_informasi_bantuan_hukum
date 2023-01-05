<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_konsultasi_klien extends CI_Model { 
    public function get($id = null)
    {
        $this->db->select('*');
        $this->db->from('konsultasi');
        if($id != null) {
            $this->db->where('id_user', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    // public function add($post)
    // {
    //     $params = [
    //         'nama_lengkap' => $post['nama_lengkap'],
    //         'agama' => $post['agama'],
    //         'alamat' => $post['alamat'],
    //         'kelurahan' => $post['kelurahan'],
    //         'kota' => $post['kota'],
    //         'kebangsaan' => $post['kebangsaan'],
    //         'umur' => $post['umur'],
    //         'jenis_kelamin' => $post['jenis_kelamin'],
    //         'status_perkawinan' => $post['status_perkawinan'],
    //         'pendidikan' => $post['pendidikan'],
    //         'pekerjaan' => $post['pekerjaan'],
    //         'rata_rata_pengeluaran' => $post['rata_rata_pengeluaran'],
    //         'jumlah_tanggungan' => $post['jumlah_tanggungan'],
    //         'jenis_masalah' => $post['jenis_masalah'],
    //         'masalah_kasus' => $post['masalah_kasus'],
    //         'penanganan' => $post['penanganan'],
    //         'status' => $post['status'],
    //         'id_user' => $this->fungsi->user_login()->id_user,
    //         'tanggal_input' => date("Y-m-d"),
    //     ];

    //     $tanggapan = [
    //         'id_user' => $this->fungsi->user_login()->id_user,
    //         'id_konsultasi' => $this->db->insert_id(),
    //     ];

    //     $this->db->insert('konsultasi',$params);
    //     $this->db->insert('tanggapan',$tanggapan);
    // }

    public function add($post)
    {
        $params ['nama_lengkap'] = $post['nama_lengkap'];
        $params ['agama'] = $post['agama'];
        $params ['alamat'] = $post['alamat'];
        $params ['kelurahan'] = $post['kelurahan'];
        $params ['kota'] = $post['kota'];
        $params ['kebangsaan'] = $post['kebangsaan'];
        $params ['umur'] = $post['umur'];
        $params ['jenis_kelamin'] = $post['jenis_kelamin'];
        $params ['status_perkawinan'] = $post['status_perkawinan'];
        $params ['pendidikan'] = $post['pendidikan'];
        $params ['pekerjaan'] = $post['pekerjaan'];
        $params ['rata_rata_pengeluaran'] = $post['rata_rata_pengeluaran'];
        $params ['jumlah_tanggungan'] = $post['jumlah_tanggungan'];
        $params ['jenis_masalah'] = $post['jenis_masalah'];
        $params ['masalah_kasus'] = $post['masalah_kasus'];
        $params ['penanganan'] = $post['penanganan'];
        $params ['status'] = $post['status'];
        $params ['id_user'] = $this->fungsi->user_login()->id_user;
        $params ['tanggal_input'] = date("Y-m-d");
        $this->db->insert('konsultasi', $params);
        
        $params1 ['id_konsultasi'] = $this->db->insert_id();
        $params2 ['id_konsultasi'] = $this->db->insert_id();

        
        $params1 ['id_user'] = $this->fungsi->user_login()->id_user;
        $params1 ['isi_tanggapan'] = 'Halo, Ada yang bisa saya bantu';
        $params1 ['tanggal_input'] = date("Y-m-d");
        $this->db->insert('tanggapan', $params1);
        

       
        $params2 ['id_user'] = $this->fungsi->user_login()->id_user;
        $params2 ['alamat_pertemuan'] = 'belum ditentukan';
        $params2 ['hasil_pertemuan'] = 'masih kosong';
        $params2 ['keterangan'] = 'masih kosong';
       
        $this->db->insert('jadwal', $params2);

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
