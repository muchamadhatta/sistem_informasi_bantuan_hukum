<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal_pertemuan extends CI_Controller {

	function __construct ()
	{
		parent::__construct();
		check_not_login();
		$this->load->model('M_jadwal');
	}
	public function index()
	{
		$session_id = $this->fungsi->user_login()->id_user;
		$data['row'] = $this->M_jadwal->get($session_id);
		$this->template->load('template', 'jadwal/jadwal', $data);
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

		$post = $this->input->post(null, TRUE);
		if(isset($_POST['add'])){
            
            $this->M_jadwal->add($post);
			
        }
        
		else if(isset($_POST['update'])){
            $this->M_jadwal->update($post);
            
		}
		if($this->db->affected_rows() > 0) {
			$this->session->set_flashdata('succes','Jadwal berhasil disimpan');
		}
		redirect('jadwal');
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
