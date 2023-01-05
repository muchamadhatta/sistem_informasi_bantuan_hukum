<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Konsultasi_klien extends CI_Controller {

	function __construct ()
	{
		parent::__construct();
		check_not_login();
		$this->load->model('M_konsultasi_klien');
	}
	public function index()
	{
		$session_id = $this->fungsi->user_login()->id_user;
		$data['row'] = $this->M_konsultasi_klien->get($session_id);
		$this->template->load('template', 'konsultasi_klien/konsultasi_klien', $data);
	}
	public function update($id)
	{
		$query = $this->M_konsultasi_klien->get($id);
		if($query->num_rows() > 0){
			$konsultasi = $query->row();
			$data = array(
				'page' => 'update',
				'row' => $konsultasi
			);
			$this->template->load('template', 'konsultasi_user/form_konsultasi', $data);
		} else {
					echo"<script>";
					echo"alert('Data Tidak Ditemukan');";
					echo"window.location='".site_url('konsultasi_klien')."'";
					echo"</script>";

		}
	}
	public function add()
	{
		$konsultasi = new stdClass();
		$konsultasi->id_konsultasi = null;
		$konsultasi->nama_lengkap = null;
		$konsultasi->agama= null;
		$konsultasi->alamat = null;
		$konsultasi->kelurahan = null;
		$konsultasi->kota = null;
        $konsultasi->kebangsaan = null;
        $konsultasi->umur = null;
		$konsultasi->jenis_kelamin= null;
		$konsultasi->status_perkawinan = null;
		$konsultasi->pendidikan = null;
		$konsultasi->pekerjaan = null;
        $konsultasi->rata_rata_pengeluaran = null;
        $konsultasi->jumlah_tanggungan = null;
        $konsultasi->jenis_masalah = null;
		$konsultasi->masalah_kasus= null;
		$konsultasi->penanganan = null;
		$konsultasi->status= null;
		$data = array(
			'page' => 'add',
			'row' => $konsultasi
		);
		$this->template->load('template', 'konsultasi_user/form_konsultasi', $data);
		
	}
	public function process()
	{

		$post = $this->input->post(null, TRUE);
		if(isset($_POST['add'])){
            
            $this->M_konsultasi_klien->add($post);
			
        }
        
		else if(isset($_POST['update'])){
            $this->M_konsultasi_klien->update($post);
            
		}
		if($this->db->affected_rows() > 0) {
			$this->session->set_flashdata('succes','Data berhasil disimpan, Kami akan menanggapi permasalahan anda');
		}
		redirect('konsultasi_klien');
	}
	public function del()
	{

		$id = $this->input->post('id_konsultasi');
		$this->M_konsultasi_klien->del($id);
		if($this->db->affected_rows() > 0) {
			$this->session->set_flashdata('trash','Data berhasil dihapus');
		}
		redirect('konsultasi_klien');
	}
	public function read($id){

		$session_id = $this->fungsi->user_login()->id_user;
		$query = $this->M_konsultasi_klien->get($session_id);
					if($query->num_rows() > 0) {
						$data['row'] = $query->row();
						$this->template->load('template', 'konsultasi_klien/konsultasi_klien_read', $data);
					} else {
							echo"<script>";
							echo"alert('Data Tidak Ditemukan');";
							echo"window.location='".site_url('konsultasi_klien')."'";
							echo"</script>";
					}

	}
}
