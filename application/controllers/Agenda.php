<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Agenda extends CI_Controller {

	function __construct ()
	{
		parent::__construct();
		check_not_login();
		$this->load->model('M_agenda');
	}
	public function index()
	{
		$data['row'] = $this->M_agenda->get();
		$this->template->load('template', 'agenda/agenda', $data);
	}
	public function update($id)
	{
		$query = $this->M_agenda->get($id);
		if($query->num_rows() > 0){
			$agenda = $query->row();
			$data = array(
				'page' => 'update',
				'row' => $agenda
			);
			$this->template->load('template', 'agenda/form_agenda', $data);
		} else {
					echo"<script>";
					echo"alert('Data Tidak Ditemukan');";
					echo"window.location='".site_url('agenda')."'";
					echo"</script>";

		}
	}
	public function add()
	{
		$agenda = new stdClass();
		$agenda->id_agenda = null;
		$agenda->judul_agenda = null;
		$agenda->isi_agenda = null;
        $agenda->tanggal = null;
		$data = array(
			'page' => 'add',
			'row' => $agenda
		);
		$this->template->load('template', 'agenda/form_agenda', $data);
		
	}
	public function process()
	{

		$post = $this->input->post(null, TRUE);
		if(isset($_POST['add'])){
            
            $this->M_agenda->add($post);
			
        }
        
		else if(isset($_POST['update'])){
            $this->M_agenda->update($post);
            
		}
		if($this->db->affected_rows() > 0) {
			$this->session->set_flashdata('succes','Data berhasil disimpan');
		}
		redirect('agenda');
	}
	public function del()
	{

		$id = $this->input->post('id_agenda');
		$this->M_agenda->del($id);
		if($this->db->affected_rows() > 0) {
			$this->session->set_flashdata('trash','Data berhasil dihapus');
		}
		redirect('agenda');
	}
	public function read($id){
		$query = $this->M_agenda->get($id);
					if($query->num_rows() > 0) {
						$data['row'] = $query->row();
						$this->template->load('template', 'agenda/agenda_read', $data);
					} else {
							echo"<script>";
							echo"alert('Data Tidak Ditemukan');";
							echo"window.location='".site_url('agenda')."'";
							echo"</script>";
					}

	}

	public function chat($id){
		$query = $this->M_agenda->get($id);
					if($query->num_rows() > 0) {
						$data['row'] = $query->row();
						$this->template->load('template', 'agenda/agenda_chat', $data);
					} else {
							echo"<script>";
							echo"alert('Data Tidak Ditemukan');";
							echo"window.location='".site_url('agenda')."'";
							echo"</script>";
					}

	}
}
