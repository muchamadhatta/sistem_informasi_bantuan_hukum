<?php defined('BASEPATH') OR exit('No direct script access allowed');

class konsultan_hukum extends CI_Controller {

	function __construct ()
	{
		parent::__construct();
		// check_admin();
		check_not_login();
		$this->load->model('M_user_konsultan_hukum');
		$this->load->library('form_validation');
	}
	public function index()
	{
		$data['row'] = $this->M_user_konsultan_hukum->get();
		$this->template->load('template', 'konsultan_hukum/konsultan_hukum', $data);
	}
	public function update($id)
	{
		$query = $this->M_user_konsultan_hukum->get($id);
		if($query->num_rows() > 0){
			$konsultan_hukum = $query->row();
			$data = array(
				'page' => 'update',
				'row' => $konsultan_hukum
			);
			$this->template->load('template', 'konsultan_hukum/form_konsultan_hukum', $data);
		} else {
					echo"<script>";
					echo"alert('Data Tidak Ditemukan');";
					echo"window.location='".site_url('konsultan_hukum')."'";
					echo"</script>";

		}
	}
	function username_check() {
		$post = $this->input->post(null,TRUE);
		$query = $this->db->query("SELECT * FROM user WHERE username = '$post[username]' AND id_user != '$post[id_user]' ");
		if($query->num_rows() > 0){
			$this->form_validation->set_message('username_check','{field} ini sudah dipakai, silahkan ganti');
			return FALSE;
		} else {
			return TRUE;
		}
	}
	public function add()
	
	{
		$konsultan_hukum = new stdClass();
		$konsultan_hukum->id_user = null;
		$konsultan_hukum->id_konsultan_hukum = null;
		$konsultan_hukum->nama_lengkap = null;
        $konsultan_hukum->username= null;
        $konsultan_hukum->spesialisasi= null;
        $konsultan_hukum->email= null;
        $konsultan_hukum->pengalaman= null;
        $konsultan_hukum->gelar= null;
        $konsultan_hukum->kampus= null;
        $konsultan_hukum->tanggal_lahir= null;
        $konsultan_hukum->keahlian= null;
		$konsultan_hukum->telepon= null;
		$konsultan_hukum->alamat= null;
		$konsultan_hukum->password= null;
		$konsultan_hukum->level= null;
		
		$data = array(
			'page' => 'add',
			'row' => $konsultan_hukum
		);
		$this->template->load('template', 'konsultan_hukum/form_konsultan_hukum', $data);
		
	}
	public function process()
		{
			$config['upload_path'] = './uploads/foto_profil/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size']     = '2048';
			$config['file_name']     = 'profil-'.date('ymd').'-'.substr(md5(rand()),0,10);
			$this->load->library('upload', $config);

		$post = $this->input->post(null, TRUE);
		if(isset($_POST['add'])){

			if(@_FILE['image']['name'] != null) {
				if($this->upload->do_upload('image')){
					$post['image'] = $this->upload->data('file_name');
					$this->M_user_konsultan_hukum->add($post);
					if($this->db->affected_rows() > 0) {
						$this->session->set_flashdata('succes','Data berhasil disimpan');
					}
					redirect('konsultan_hukum');
				
				}else{
					$error = $this->upload->display_errors();
					$this->session->set_flashdata('error', $error);
					redirect('konsultan_hukum/add');
				}
				
			}else {
				$post['image'] = null;
					$this->M_user_konsultan_hukum->add($post);
					if($this->db->affected_rows() > 0) {
						$this->session->set_flashdata('succes','Data berhasil disimpan');
					}
					redirect('konsultan_hukum');
			}
			
		}
		else if(isset($_POST['update'])){
			if(@_FILE['image']['name'] != null) {
				if($this->upload->do_upload('image')){

					$konsultan_hukum = $this->M_user_konsultan_hukum->get($post['id_konsultan_hukum'])->row();
					
					if($konsultan_hukum->image != null) {
						$target_file = './uploads/foto_profil/'.$konsultan_hukum->image;
						unlink($target_file);
					}

					$post['image'] = $this->upload->data('file_name');
					$this->M_user_konsultan_hukum->update($post);
				
					if($this->db->affected_rows() > 0) {
						$this->session->set_flashdata('succes','Data berhasil disimpan');
					}
					redirect('konsultan_hukum');
				
				}else{
					$error = $this->upload->display_errors();
					$this->session->set_flashdata('error', $error);
					redirect('konsultan_hukum/update');
				}
				
			}else {
				$post['image'] = null;
					$this->M_user_konsultan_hukum->update($post);
					if($this->db->affected_rows() > 0) {
						$this->session->set_flashdata('succes','Data berhasil disimpan');
					}
					redirect('konsultan_hukum');
			}
			
			
		}else if(isset($_POST['profil'])){
			if(@_FILE['image']['name'] != null) {
				if($this->upload->do_upload('image')){

					$konsultan_hukum = $this->M_user_konsultan_hukum->get($post['id_konsultan_hukum'])->row();
					
					if($konsultan_hukum->image != null) {
						$target_file = './uploads/foto_profil/'.$konsultan_hukum->image;
						unlink($target_file);
					}

					$post['image'] = $this->upload->data('file_name');
					$this->M_user_konsultan_hukum->update($post);
				
					if($this->db->affected_rows() > 0) {
						$this->session->set_flashdata('succes','Data berhasil disimpan');
					}
					redirect('dashboard');
				
				}else{
					$error = $this->upload->display_errors();
					$this->session->set_flashdata('error', $error);
					redirect('konsultan_hukum/profil');
				}
				
			}else {
				$post['image'] = null;
					$this->M_user_konsultan_hukum->update($post);
					if($this->db->affected_rows() > 0) {
						$this->session->set_flashdata('succes','Data berhasil disimpan');
					}
					redirect('dashboard');
			}
			
			
		}
		if($this->db->affected_rows() > 0) {
			$this->session->set_flashdata('succes','Data berhasil disimpan');
		}
		redirect('konsultan_hukum');
	}
	public function del()
	{

		$id = $this->input->post('id_konsultan_hukum');
		$konsultan_hukum = $this->M_user_konsultan_hukum->get($id)->row();
		if($konsultan_hukum->image != null) {
			$target_file = './uploads/foto_profil/'.$konsultan_hukum->image;
			unlink($target_file);
		}

		$id = $this->input->post('id_konsultan_hukum');
		$this->M_user_konsultan_hukum->del($id);
		if($this->db->affected_rows() > 0) {
			$this->session->set_flashdata('trash','Data berhasil dihapus');
		}
		redirect('konsultan_hukum');
	}
	public function read($id){
		$query = $this->M_user_konsultan_hukum->get($id);
					if($query->num_rows() > 0) {
						$data['row'] = $query->row();
						$this->template->load('template', 'konsultan_hukum/konsultan_hukum_read', $data);
					} else {
							echo"<script>";
							echo"alert('Data Tidak Ditemukan');";
							echo"window.location='".site_url('konsultan_hukum')."'";
							echo"</script>";
					}

	}

	public function profil($id){
		$query = $this->M_user_konsultan_hukum->get($id);
					if($query->num_rows() > 0) {
						$data['row'] = $query->row();
						$this->template->load('template', 'konsultan_hukum/profil', $data);
					} else {
							echo"<script>";
							echo"alert('Data Tidak Ditemukan');";
							echo"window.location='".site_url('dashboard')."'";
							echo"</script>";
					}

	}
}
