<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Foto extends CI_Controller {

	function __construct ()
	{
		parent::__construct();
		check_not_login();
		$this->load->model('M_foto');
	}
	public function index()
	{
		$data['row'] = $this->M_foto->get();
		$this->template->load('template', 'foto/foto', $data);
	}
	public function update($id)
	{
		$query = $this->M_foto->get($id);
		if($query->num_rows() > 0){
			$foto = $query->row();
			$data = array(
				'page' => 'update',
				'row' => $foto
			);
			$this->template->load('template', 'foto/form_foto', $data);
		} else {
					echo"<script>";
					echo"alert('Data Tidak Ditemukan');";
					echo"window.location='".site_url('foto')."'";
					echo"</script>";

		}
	}
	public function add()
	{
		$foto = new stdClass();
		$foto->id_foto = null;
		$foto->id_album = null;
		$data = array(
			'page' => 'add',
			'row' => $foto
		);
		$this->template->load('template', 'foto/form_foto', $data);
		
	}
	public function process()
	{
			$config['upload_path'] = './uploads/foto/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size']     = '2048';
			$config['file_name']     = 'foto-'.date('ymd').'-'.substr(md5(rand()),0,10);
			$this->load->library('upload', $config);

		$post = $this->input->post(null, TRUE);
		if(isset($_POST['add'])){

			if(@_FILE['image']['name'] != null) {
				if($this->upload->do_upload('image')){
					$post['image'] = $this->upload->data('file_name');
					$this->M_foto->add($post);
					if($this->db->affected_rows() > 0) {
						$this->session->set_flashdata('succes','Data berhasil disimpan');
					}
					redirect('foto');
				
				}else{
					$error = $this->upload->display_errors();
					$this->session->set_flashdata('error', $error);
					redirect('foto/add');
				}
				
			}else {
				$post['image'] = null;
					$this->M_foto->add($post);
					if($this->db->affected_rows() > 0) {
						$this->session->set_flashdata('succes','Data berhasil disimpan');
					}
					redirect('foto');
			}
		}
		else if(isset($_POST['update'])){
			if(@_FILE['image']['name'] != null) {
				if($this->upload->do_upload('image')){

					$foto = $this->M_foto->get($post['id'])->row();
					
					if($foto->image != null) {
						$target_file = './uploads/foto/'.$foto->image;
						unlink($target_file);
					}

					$post['image'] = $this->upload->data('file_name');
					$this->M_foto->update($post);
				
					if($this->db->affected_rows() > 0) {
						$this->session->set_flashdata('update','Data berhasil dirubah');
					}
					redirect('foto');
				
				}else{
					$error = $this->upload->display_errors();
					$this->session->set_flashdata('error', $error);
					redirect('foto/update');
				}
				
			}else {
				$post['image'] = null;
					$this->M_foto->update($post);
					if($this->db->affected_rows() > 0) {
						$this->session->set_flashdata('update','Data berhasil dirubah');
					}
					redirect('foto');
			}
		}
		if($this->db->affected_rows() > 0) {
			$this->session->set_flashdata('succes','Data berhasil disimpan');
		}
		redirect('foto');
	}
	public function del()
	{
		$id = $this->input->post('id_foto');
		$foto = $this->M_foto->get($id)->row();
		if($foto->image != null) {
			$target_file = './uploads/foto/'.$foto->image;
			unlink($target_file);
		}

		$id = $this->input->post('id_foto');
		$this->M_foto->del($id);
		if($this->db->affected_rows() > 0) {
			$this->session->set_flashdata('trash','Data berhasil dihapus');
		}
		redirect('foto');
	}
	public function read($id){
		$query = $this->M_foto->get($id);
					if($query->num_rows() > 0) {
						$data['row'] = $query->row();
						$this->template->load('template', 'foto/foto_read', $data);
					} else {
							echo"<script>";
							echo"alert('Data Tidak Ditemukan');";
							echo"window.location='".site_url('foto')."'";
							echo"</script>";
					}

	}
}
