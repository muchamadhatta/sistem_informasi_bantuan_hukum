<?php defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {

	function __construct ()
	{
		parent::__construct();
		check_admin();
		check_not_login();
		$this->load->model('M_user_admin');
		$this->load->library('form_validation');
	}
	public function index()
	{
		$data['row'] = $this->M_user_admin->get();
		$this->template->load('template', 'admin/admin', $data);
	}
	public function update($id)
	{
		$query = $this->M_user_admin->get($id);
		if($query->num_rows() > 0){
			$admin = $query->row();
			$data = array(
				'page' => 'update',
				'row' => $admin
			);
			$this->template->load('template', 'admin/form_admin', $data);
		} else {
					echo"<script>";
					echo"alert('Data Tidak Ditemukan');";
					echo"window.location='".site_url('admin')."'";
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
		$admin = new stdClass();
		$admin->id_user = null;
		$admin->id_admin = null;
		$admin->nama_lengkap = null;
		$admin->username= null;
		$admin->telepon= null;
		$admin->alamat= null;
		$admin->password= null;
		$admin->level= null;
		
		$data = array(
			'page' => 'add',
			'row' => $admin
		);
		$this->template->load('template', 'admin/form_admin', $data);
		
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
					$this->M_user_admin->add($post);
					if($this->db->affected_rows() > 0) {
						$this->session->set_flashdata('succes','Data berhasil disimpan');
					}
					redirect('admin');
				
				}else{
					$error = $this->upload->display_errors();
					$this->session->set_flashdata('error', $error);
					redirect('admin/add');
				}
				
			}else {
				$post['image'] = null;
					$this->M_user_admin->add($post);
					if($this->db->affected_rows() > 0) {
						$this->session->set_flashdata('succes','Data berhasil disimpan');
					}
					redirect('admin');
			}
			
		}
		else if(isset($_POST['update'])){
			if(@_FILE['image']['name'] != null) {
				if($this->upload->do_upload('image')){

					$admin = $this->M_user_admin->get($post['id_admin'])->row();
					
					if($admin->image != null) {
						$target_file = './uploads/foto_profil/'.$admin->image;
						unlink($target_file);
					}

					$post['image'] = $this->upload->data('file_name');
					$this->M_user_admin->update($post);
				
					if($this->db->affected_rows() > 0) {
						$this->session->set_flashdata('succes','Data berhasil disimpan');
					}
					redirect('admin');
				
				}else{
					$error = $this->upload->display_errors();
					$this->session->set_flashdata('error', $error);
					redirect('admin/update');
				}
				
			}else {
				$post['image'] = null;
					$this->M_user_admin->update($post);
					if($this->db->affected_rows() > 0) {
						$this->session->set_flashdata('succes','Data berhasil disimpan');
					}
					redirect('admin');
			}
			
			
		}else if(isset($_POST['profil'])){
			if(@_FILE['image']['name'] != null) {
				if($this->upload->do_upload('image')){

					$admin = $this->M_user_admin->get($post['id_admin'])->row();
					
					if($admin->image != null) {
						$target_file = './uploads/foto_profil/'.$admin->image;
						unlink($target_file);
					}

					$post['image'] = $this->upload->data('file_name');
					$this->M_user_admin->update($post);
				
					if($this->db->affected_rows() > 0) {
						$this->session->set_flashdata('succes','Data berhasil disimpan');
					}
					redirect('dashboard');
				
				}else{
					$error = $this->upload->display_errors();
					$this->session->set_flashdata('error', $error);
					redirect('admin/profil');
				}
				
			}else {
				$post['image'] = null;
					$this->M_user_admin->update($post);
					if($this->db->affected_rows() > 0) {
						$this->session->set_flashdata('succes','Data berhasil disimpan');
					}
					redirect('dashboard');
			}
			
			
		}
		if($this->db->affected_rows() > 0) {
			$this->session->set_flashdata('succes','Data berhasil disimpan');
		}
		redirect('admin');
	}
	public function del()
	{

		$id = $this->input->post('id_admin');
		$admin = $this->M_user_admin->get($id)->row();
		if($admin->image != null) {
			$target_file = './uploads/foto_profil/'.$admin->image;
			unlink($target_file);
		}

		$id = $this->input->post('id_admin');
		$this->M_user_admin->del($id);
		if($this->db->affected_rows() > 0) {
			$this->session->set_flashdata('trash','Data berhasil dihapus');
		}
		redirect('admin');
	}

	public function read($id){
		$query = $this->M_user_admin->get($id);
					if($query->num_rows() > 0) {
						$data['row'] = $query->row();
						$this->template->load('template', 'admin/admin_read', $data);
					} else {
							echo"<script>";
							echo"alert('Data Tidak Ditemukan');";
							echo"window.location='".site_url('admin')."'";
							echo"</script>";
					}

	}

	public function profil($id){
		$query = $this->M_user_admin->get($id);
					if($query->num_rows() > 0) {
						$data['row'] = $query->row();
						$this->template->load('template', 'admin/profil', $data);
					} else {
							echo"<script>";
							echo"alert('Data Tidak Ditemukan');";
							echo"window.location='".site_url('dashboard')."'";
							echo"</script>";
					}

	}
}
