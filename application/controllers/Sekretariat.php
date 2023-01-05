<?php defined('BASEPATH') OR exit('No direct script access allowed');

class sekretariat extends CI_Controller {

	function __construct ()
	{
		parent::__construct();
		// check_admin();
		check_not_login();
		$this->load->model('M_user_sekretariat');
		$this->load->library('form_validation');
	}
	public function index()
	{
		$data['row'] = $this->M_user_sekretariat->get();
		$this->template->load('template', 'sekretariat/sekretariat', $data);
	}
	public function update($id)
	{
		$query = $this->M_user_sekretariat->get($id);
		if($query->num_rows() > 0){
			$sekretariat = $query->row();
			$data = array(
				'page' => 'update',
				'row' => $sekretariat
			);
			$this->template->load('template', 'sekretariat/form_sekretariat', $data);
		} else {
					echo"<script>";
					echo"alert('Data Tidak Ditemukan');";
					echo"window.location='".site_url('sekretariat')."'";
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
		$sekretariat = new stdClass();
		$sekretariat->id_user = null;
		$sekretariat->id_sekretariat = null;
		$sekretariat->nama_lengkap = null;
		$sekretariat->username= null;
		$sekretariat->telepon= null;
		$sekretariat->alamat= null;
		$sekretariat->password= null;
		$sekretariat->level= null;
		
		$data = array(
			'page' => 'add',
			'row' => $sekretariat
		);
		$this->template->load('template', 'sekretariat/form_sekretariat', $data);
		
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
					$this->M_user_sekretariat->add($post);
					if($this->db->affected_rows() > 0) {
						$this->session->set_flashdata('succes','Data berhasil disimpan');
					}
					redirect('sekretariat');
				
				}else{
					$error = $this->upload->display_errors();
					$this->session->set_flashdata('error', $error);
					redirect('sekretariat/add');
				}
				
			}else {
				$post['image'] = null;
					$this->M_user_sekretariat->add($post);
					if($this->db->affected_rows() > 0) {
						$this->session->set_flashdata('succes','Data berhasil disimpan');
					}
					redirect('sekretariat');
			}
			
		}
		else if(isset($_POST['update'])){
			if(@_FILE['image']['name'] != null) {
				if($this->upload->do_upload('image')){

					$sekretariat = $this->M_user_sekretariat->get($post['id_sekretariat'])->row();
					
					if($sekretariat->image != null) {
						$target_file = './uploads/foto_profil/'.$sekretariat->image;
						unlink($target_file);
					}

					$post['image'] = $this->upload->data('file_name');
					$this->M_user_sekretariat->update($post);
				
					if($this->db->affected_rows() > 0) {
						$this->session->set_flashdata('succes','Data berhasil disimpan');
					}
					redirect('sekretariat');
				
				}else{
					$error = $this->upload->display_errors();
					$this->session->set_flashdata('error', $error);
					redirect('sekretariat/update');
				}
				
			}else {
				$post['image'] = null;
					$this->M_user_sekretariat->update($post);
					if($this->db->affected_rows() > 0) {
						$this->session->set_flashdata('succes','Data berhasil disimpan');
					}
					redirect('sekretariat');
			}
			
			
		}
		else if(isset($_POST['profil'])){
			if(@_FILE['image']['name'] != null) {
				if($this->upload->do_upload('image')){

					$sekretariat = $this->M_user_sekretariat->get($post['id_sekretariat'])->row();
					
					if($sekretariat->image != null) {
						$target_file = './uploads/foto_profil/'.$sekretariat->image;
						unlink($target_file);
					}

					$post['image'] = $this->upload->data('file_name');
					$this->M_user_sekretariat->update($post);
				
					if($this->db->affected_rows() > 0) {
						$this->session->set_flashdata('succes','Data berhasil disimpan');
					}
					redirect('dashboard');
				
				}else{
					$error = $this->upload->display_errors();
					$this->session->set_flashdata('error', $error);
					redirect('sekretariat/profil');
				}
				
			}else {
				$post['image'] = null;
					$this->M_user_sekretariat->update($post);
					if($this->db->affected_rows() > 0) {
						$this->session->set_flashdata('succes','Data berhasil disimpan');
					}
					redirect('dashboard');
			}
			
			
		}
		if($this->db->affected_rows() > 0) {
			$this->session->set_flashdata('succes','Data berhasil disimpan');
		}
		redirect('sekretariat');
	}
	public function del()
	{

		$id = $this->input->post('id_sekretariat');
		$sekretariat = $this->M_user_sekretariat->get($id)->row();
		if($sekretariat->image != null) {
			$target_file = './uploads/foto_profil/'.$sekretariat->image;
			unlink($target_file);
		}

		$id = $this->input->post('id_sekretariat');
		$this->M_user_sekretariat->del($id);
		if($this->db->affected_rows() > 0) {
			$this->session->set_flashdata('trash','Data berhasil dihapus');
		}
		redirect('sekretariat');
	}
	public function read($id){
		$query = $this->M_user_sekretariat->get($id);
					if($query->num_rows() > 0) {
						$data['row'] = $query->row();
						$this->template->load('template', 'sekretariat/sekretariat_read', $data);
					} else {
							echo"<script>";
							echo"alert('Data Tidak Ditemukan');";
							echo"window.location='".site_url('sekretariat')."'";
							echo"</script>";
					}

	}

	public function profil($id){
		$query = $this->M_user_sekretariat->get($id);
					if($query->num_rows() > 0) {
						$data['row'] = $query->row();
						$this->template->load('template', 'sekretariat/profil', $data);
					} else {
							echo"<script>";
							echo"alert('Data Tidak Ditemukan');";
							echo"window.location='".site_url('dashboard')."'";
							echo"</script>";
					}

	}
	

}
