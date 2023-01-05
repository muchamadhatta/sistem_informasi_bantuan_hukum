<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal extends CI_Controller {

	function __construct ()
	{
		parent::__construct();
		check_not_login();
		$this->load->model('M_jadwal');
		$this->load->model('M_konsultasi');
	}
	
	

	public function index()
	{
				echo"<script>";
				echo"alert('Silahkan Pilih Aksi Jadwal pada Konsultasi ');";
				echo"window.location='".site_url('dashboard')."'";
				echo"</script>";
	}
	

	public function pertemuan($id)
	{

		$data['data'] = $this->M_jadwal->getidkonsultasi($id);
		$data['row'] = $this->M_jadwal->get($id);
		$this->template->load('template', 'jadwal/jadwal', $data);
	}


	public function hasil_pertemuan($id)
	{

		$data['data'] = $this->M_jadwal->getidkonsultasi($id);
		$data['row'] = $this->M_jadwal->get($id);
		$this->template->load('template', 'jadwal/hasil_pertemuan', $data);
	}



	public function update($id)
	{
		$query = $this->M_jadwal->get($id);
		if($query->num_rows() > 0){
			$jadwal = $query->row();
			$data = array(
				'page' => 'update',
				'row' => $jadwal
			);
			$this->template->load('template', 'jadwal/form_jadwal', $data);
		} else {
					echo"<script>";
					echo"alert('Data Tidak Ditemukan');";
					echo"window.location='".site_url('jadwal')."'";
					echo"</script>";

		}
	}
	public function add()
	{
		$jadwal = new stdClass();
		$jadwal->id_jadwal= null;
		$jadwal->alamat_pertemuan = null;
		$jadwal->jam= null;
		$jadwal->tanggal = null;
		$jadwal->status = null;
		$data = array(
			'page' => 'add',
			'row' => $jadwal
		);
		$this->template->load('template', 'jadwal/form_jadwal', $data);
		
	}
	public function process()
	{
		$id =  $this->input->post('id2');
		$post = $this->input->post(null, TRUE);
		if(isset($_POST['add'])){
            
            $this->M_jadwal->add($post);
			
        }
        
		else if(isset($_POST['update'])){
            $this->M_jadwal->update($post);
            
		}
		if($this->db->affected_rows() > 0) {
			$this->session->set_flashdata('succes','Berhasil disimpan');
		}
		redirect('jadwal/pertemuan/'.$id);
	}
	public function del()
	{

		$id = $this->input->post('id_jadwal');
		$this->M_jadwal->del($id);
		if($this->db->affected_rows() > 0) {
			$this->session->set_flashdata('trash','Data berhasil dihapus');
		}
		redirect('jadwal');
	}
	public function read($id){

		$session_id = $this->fungsi->user_login()->id_user;
		$query = $this->M_jadwal->get($session_id);
					if($query->num_rows() > 0) {
						$data['row'] = $query->row();
						$this->template->load('template', 'jadwal/jadwal_read', $data);
					} else {
							echo"<script>";
							echo"alert('Data Tidak Ditemukan');";
							echo"window.location='".site_url('jadwal')."'";
							echo"</script>";
					}

	}
}
