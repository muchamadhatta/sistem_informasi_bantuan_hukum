<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Konsultasi_konsultan_hukum extends CI_Controller {

	function __construct ()
	{
		parent::__construct();
		check_not_login();
		$this->load->model('M_konsultasi');
		$this->load->model('M_user_konsultan_hukum');
	}
	public function index()
	{
		$id=$this->fungsi->user_login()->id_user;
		$data['row'] = $this->M_konsultasi->konsultan_hukum($id);
		$this->template->load('template', 'konsultasi/konsultasi', $data);
	}

	
	public function update($id)
	{
		$query = $this->M_konsultasi->get($id);
		if($query->num_rows() > 0){
			$konsultasi = $query->row();
			$data = array(
				'page' => 'update',
				'row' => $konsultasi
			);
			$this->template->load('template', 'konsultasi/form_konsultasi', $data);
		} else {
					echo"<script>";
					echo"alert('Data Tidak Ditemukan');";
					echo"window.location='".site_url('konsultasi')."'";
					echo"</script>";

		}
	}

	public function pilihkonsultan($id)
	{
		$data['row'] = $this->M_user_konsultan_hukum->get();
		$data['data'] = $this->M_konsultasi->getidkonsultasi($id);
		
			$this->template->load('template', 'konsultasi/pilihkonsultan', $data);
		
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
		$this->template->load('template', 'konsultasi/form_konsultasi', $data);
		
	}
	public function process()
	{

		$post = $this->input->post(null, TRUE);
		if(isset($_POST['add'])){
            
            $this->M_konsultasi->add($post);
			
        }
        
		else if(isset($_POST['update'])){
            $this->M_konsultasi->update($post);
            
		}

		else if(isset($_POST['pilihkonsultan'])){
            $this->M_konsultasi->ditanganioleh($post);
            
		}

		if($this->db->affected_rows() > 0) {
			$this->session->set_flashdata('succes','Data berhasil disimpan');
		}
		redirect('konsultasi');
	}
	public function del()
	{

		$id = $this->input->post('id_konsultasi');
		$this->M_konsultasi->del($id);
		if($this->db->affected_rows() > 0) {
			$this->session->set_flashdata('trash','Data berhasil dihapus');
		}
		redirect('konsultasi');
	}
	public function read($id){
		$query = $this->M_konsultasi->get($id);
					if($query->num_rows() > 0) {
						$data['row'] = $query->row();
						$this->template->load('template', 'konsultasi/konsultasi_read', $data);
					} else {
							echo"<script>";
							echo"alert('Data Tidak Ditemukan');";
							echo"window.location='".site_url('konsultasi')."'";
							echo"</script>";
					}

	}

	
}
