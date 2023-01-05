<?php defined('BASEPATH') OR exit('No direct script access allowed');

class klien extends CI_Controller {

	function __construct ()
	{
		parent::__construct();
		// check_admin();
		check_not_login();
		$this->load->model('M_user_klien');
		$this->load->library('form_validation');
	}
	public function index()
	{
		$data['row'] = $this->M_user_klien->get();
		$this->template->load('template', 'klien/klien', $data);
	}
	public function update($id)
	{
		$query = $this->M_user_klien->get($id);
		if($query->num_rows() > 0){
			$klien = $query->row();
			$data = array(
				'page' => 'update',
				'row' => $klien
			);
			$this->template->load('template', 'klien/form_klien', $data);
		} else {
					echo"<script>";
					echo"alert('Data Tidak Ditemukan');";
					echo"window.location='".site_url('klien')."'";
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
		$klien = new stdClass();
		$klien->id_user = null;
		$klien->id_klien = null;
		$klien->nama_lengkap = null;
		$klien->username= null;
		$klien->telepon= null;
		$klien->alamat= null;
		$klien->tanggal_lahir= null;
		$klien->password= null;
		$klien->level= null;
		
		$data = array(
			'page' => 'add',
			'row' => $klien
		);
		$this->template->load('template', 'klien/form_klien', $data);
		
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
					$this->M_user_klien->add($post);
					if($this->db->affected_rows() > 0) {
						$this->session->set_flashdata('succes','Data berhasil disimpan');
					}
					redirect('klien');
				
				}else{
					$error = $this->upload->display_errors();
					$this->session->set_flashdata('error', $error);
					redirect('klien/add');
				}
				
			}else {
				$post['image'] = null;
					$this->M_user_klien->add($post);
					if($this->db->affected_rows() > 0) {
						$this->session->set_flashdata('succes','Data berhasil disimpan');
					}
					redirect('klien');
			}
			
		}
		else if(isset($_POST['update'])){
			if(@_FILE['image']['name'] != null) {
				if($this->upload->do_upload('image')){

					$klien = $this->M_user_klien->get($post['id_klien'])->row();
					
					if($klien->image != null) {
						$target_file = './uploads/foto_profil/'.$klien->image;
						unlink($target_file);
					}

					$post['image'] = $this->upload->data('file_name');
					$this->M_user_klien->update($post);
				
					if($this->db->affected_rows() > 0) {
						$this->session->set_flashdata('succes','Data berhasil disimpan');
					}
					redirect('klien');
				
				}else{
					$error = $this->upload->display_errors();
					$this->session->set_flashdata('error', $error);
					redirect('klien/update');
				}
				
			}else {
				$post['image'] = null;
					$this->M_user_klien->update($post);
					if($this->db->affected_rows() > 0) {
						$this->session->set_flashdata('succes','Data berhasil disimpan');
					}
					redirect('klien');
			}
			
			
		}else if(isset($_POST['profil'])){
			if(@_FILE['image']['name'] != null) {
				if($this->upload->do_upload('image')){

					$klien = $this->M_user_klien->get($post['id_klien'])->row();
					
					if($klien->image != null) {
						$target_file = './uploads/foto_profil/'.$klien->image;
						unlink($target_file);
					}

					$post['image'] = $this->upload->data('file_name');
					$this->M_user_klien->update($post);
				
					if($this->db->affected_rows() > 0) {
						$this->session->set_flashdata('succes','Data berhasil disimpan');
					}
					redirect('dashboard');
				
				}else{
					$error = $this->upload->display_errors();
					$this->session->set_flashdata('error', $error);
					redirect('klien/profil');
				}
				
			}else {
				$post['image'] = null;
					$this->M_user_klien->update($post);
					if($this->db->affected_rows() > 0) {
						$this->session->set_flashdata('succes','Data berhasil disimpan');
					}
					redirect('dashboard');
			}
			
			
		}
		if($this->db->affected_rows() > 0) {
			$this->session->set_flashdata('succes','Data berhasil disimpan');
		}
		redirect('klien');
	}
	public function del()
	{

		$id = $this->input->post('id_klien');
		$klien = $this->M_user_klien->get($id)->row();
		if($klien->image != null) {
			$target_file = './uploads/foto_profil/'.$klien->image;
			unlink($target_file);
		}

		$id = $this->input->post('id_klien');
		$this->M_user_klien->del($id);
		if($this->db->affected_rows() > 0) {
			$this->session->set_flashdata('trash','Data berhasil dihapus');
		}
		redirect('klien');
	}
	public function read($id){
		$query = $this->M_user_klien->get($id);
					if($query->num_rows() > 0) {
						$data['row'] = $query->row();
						$this->template->load('template', 'klien/klien_read', $data);
					} else {
							echo"<script>";
							echo"alert('Data Tidak Ditemukan');";
							echo"window.location='".site_url('klien')."'";
							echo"</script>";
					}

	}
	public function profil($id){
		$query = $this->M_user_klien->get($id);
					if($query->num_rows() > 0) {
						$data['row'] = $query->row();
						$this->template->load('template', 'klien/profil', $data);
					} else {
							echo"<script>";
							echo"alert('Data Tidak Ditemukan');";
							echo"window.location='".site_url('dashboard')."'";
							echo"</script>";
					}

	}
}
