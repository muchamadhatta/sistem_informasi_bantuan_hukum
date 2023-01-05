<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel extends CI_Controller {

	function __construct ()
	{
		parent::__construct();
		check_not_login();
		$this->load->model('M_artikel');
	}
	public function index()
	{
		$data['row'] = $this->M_artikel->get();
		$this->template->load('template', 'artikel/artikel', $data);
	}
	public function update($id)
	{
		$query = $this->M_artikel->get($id);
		if($query->num_rows() > 0){
			$artikel = $query->row();
			$data = array(
				'page' => 'update',
				'row' => $artikel
			);
			$this->template->load('template', 'artikel/form_artikel', $data);
		} else {
					echo"<script>";
					echo"alert('Data Tidak Ditemukan');";
					echo"window.location='".site_url('artikel')."'";
					echo"</script>";

		}
	}
	public function add()
	{
		$artikel = new stdClass();
		$artikel->id_artikel = null;
		$artikel->judul_artikel = null;
		$artikel->isi_artikel= null;
		$data = array(
			'page' => 'add',
			'row' => $artikel
		);
		$this->template->load('template', 'artikel/form_artikel', $data);
		
	}
	public function process()
	{
			$config['upload_path'] = './uploads/artikel/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['max_size']     = '2048';
			$config['file_name']     = 'artikel-'.date('ymd').'-'.substr(md5(rand()),0,10);
			$this->load->library('upload', $config);

		$post = $this->input->post(null, TRUE);
		if(isset($_POST['add'])){

			if(@_FILE['image']['name'] != null) {
				if($this->upload->do_upload('image')){
					$post['image'] = $this->upload->data('file_name');
					$this->M_artikel->add($post);
					if($this->db->affected_rows() > 0) {
						$this->session->set_flashdata('succes','Data berhasil disimpan');
					}
					redirect('artikel');
				
				}else{
					$error = $this->upload->display_errors();
					$this->session->set_flashdata('error', $error);
					redirect('artikel/add');
				}
				
			}else {
				$post['image'] = null;
					$this->M_artikel->add($post);
					if($this->db->affected_rows() > 0) {
						$this->session->set_flashdata('succes','Data berhasil disimpan');
					}
					redirect('artikel');
			}
		}
		else if(isset($_POST['update'])){
			if(@_FILE['image']['name'] != null) {
				if($this->upload->do_upload('image')){

					$artikel = $this->M_artikel->get($post['id'])->row();
					
					if($artikel->image != null) {
						$target_file = './uploads/artikel/'.$artikel->image;
						unlink($target_file);
					}

					$post['image'] = $this->upload->data('file_name');
					$this->M_artikel->update($post);
				
					if($this->db->affected_rows() > 0) {
						$this->session->set_flashdata('update','Data berhasil dirubah');
					}
					redirect('artikel');
				
				}else{
					$error = $this->upload->display_errors();
					$this->session->set_flashdata('error', $error);
					redirect('artikel/update');
				}
				
			}else {
				$post['image'] = null;
					$this->M_artikel->update($post);
					if($this->db->affected_rows() > 0) {
						$this->session->set_flashdata('update','Data berhasil dirubah');
					}
					redirect('artikel');
			}
		}
		if($this->db->affected_rows() > 0) {
			$this->session->set_flashdata('succes','Data berhasil disimpan');
		}
		redirect('artikel');
	}
	public function del()
	{
		$id = $this->input->post('id_artikel');
		$artikel = $this->M_artikel->get($id)->row();
		if($artikel->image != null) {
			$target_file = './uploads/artikel/'.$artikel->image;
			unlink($target_file);
		}

		$id = $this->input->post('id_artikel');
		$this->M_artikel->del($id);
		if($this->db->affected_rows() > 0) {
			$this->session->set_flashdata('trash','Data berhasil dihapus');
		}
		redirect('artikel');
	}
	public function read($id){
		$query = $this->M_artikel->get($id);
					if($query->num_rows() > 0) {
						$data['row'] = $query->row();
						$this->template->load('template', 'artikel/artikel_read', $data);
					} else {
							echo"<script>";
							echo"alert('Data Tidak Ditemukan');";
							echo"window.location='".site_url('artikel')."'";
							echo"</script>";
					}

	}
}
