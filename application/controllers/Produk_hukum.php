<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Produk_hukum extends CI_Controller {

	function __construct ()
	{
		parent::__construct();
		check_not_login();
		$this->load->model('M_produk_hukum');
	}
	public function index()
	{
		$data['row'] = $this->M_produk_hukum->get();
		$this->template->load('template', 'produk_hukum/produk_hukum', $data);
	}
	public function update($id)
	{
		$query = $this->M_produk_hukum->get($id);
		if($query->num_rows() > 0){
			$produk_hukum = $query->row();
			$data = array(
				'page' => 'update',
				'row' => $produk_hukum
			);
			$this->template->load('template', 'produk_hukum/form_produk_hukum', $data);
		} else {
					echo"<script>";
					echo"alert('Data Tidak Ditemukan');";
					echo"window.location='".site_url('produk_hukum')."'";
					echo"</script>";

		}
	}
	public function add()
	{
		$produk_hukum = new stdClass();
		$produk_hukum->id_produk_hukum = null;
		$produk_hukum->judul_produk_hukum = null;
		$produk_hukum->jenis_keputusan= null;
		$produk_hukum->nomor = null;
		$produk_hukum->tahun = null;
		$produk_hukum->tentang = null;
		$produk_hukum->tanggal_perundangan = null;
		$produk_hukum->status= null;
		$data = array(
			'page' => 'add',
			'row' => $produk_hukum
		);
		$this->template->load('template', 'produk_hukum/form_produk_hukum', $data);
		
	}
	public function process()
	{
			$config['upload_path'] = './uploads/produk_hukum/';
			$config['allowed_types'] = 'pdf|docx|png';
			$config['max_size']     = '2048';
			$config['file_name']     = 'produkhukum-'.date('ymd').'-'.substr(md5(rand()),0,10);
			$this->load->library('upload', $config);

		$post = $this->input->post(null, TRUE);
		if(isset($_POST['add'])){

			if(@_FILE['file_upload']['name'] != null) {
				if($this->upload->do_upload('file_upload')){
					$post['file_upload'] = $this->upload->data('file_name');
					$this->M_produk_hukum->add($post);
					if($this->db->affected_rows() > 0) {
						$this->session->set_flashdata('succes','Data berhasil disimpan');
					}
					redirect('produk_hukum');
				
				}else{
					$error = $this->upload->display_errors();
					$this->session->set_flashdata('error', $error);
					redirect('produk_hukum/add');
				}
				
			}else {
				$post['file_upload'] = null;
					$this->M_produk_hukum->add($post);
					if($this->db->affected_rows() > 0) {
						$this->session->set_flashdata('succes','Data berhasil disimpan');
					}
					redirect('produk_hukum');
			}
		}
		else if(isset($_POST['update'])){
			if(@_FILE['file_upload']['name'] != null) {
				if($this->upload->do_upload('file_upload')){

					$produk_hukum = $this->M_produk_hukum->get($post['id'])->row();
					
					if($produk_hukum->file_upload != null) {
						$target_file = './uploads/produk_hukum/'.$produk_hukum->file_upload;
						unlink($target_file);
					}

					$post['file_upload'] = $this->upload->data('file_name');
					$this->M_produk_hukum->update($post);
				
					if($this->db->affected_rows() > 0) {
						$this->session->set_flashdata('update','Data berhasil dirubah');
					}
					redirect('produk_hukum');
				
				}else{
					$error = $this->upload->display_errors();
					$this->session->set_flashdata('error', $error);
					redirect('produk_hukum/update');
				}
				
			}else {
				$post['file_upload'] = null;
					$this->M_produk_hukum->update($post);
					if($this->db->affected_rows() > 0) {
						$this->session->set_flashdata('update','Data berhasil dirubah');
					}
					redirect('produk_hukum');
			}
		}
		if($this->db->affected_rows() > 0) {
			$this->session->set_flashdata('succes','Data berhasil disimpan');
		}
		redirect('produk_hukum');
	}
	public function del()
	{
		$id = $this->input->post('id_produk_hukum');
		$produk_hukum = $this->M_produk_hukum->get($id)->row();
		if($produk_hukum->file_upload != null) {
			$target_file = './uploads/produk_hukum/'.$produk_hukum->file_upload;
			unlink($target_file);
		}

		$id = $this->input->post('id_produk_hukum');
		$this->M_produk_hukum->del($id);
		if($this->db->affected_rows() > 0) {
			$this->session->set_flashdata('trash','Data berhasil dihapus');
		}
		redirect('produk_hukum');
	}
	public function read($id){
		$query = $this->M_produk_hukum->get($id);
					if($query->num_rows() > 0) {
						$data['row'] = $query->row();
						$this->template->load('template', 'produk_hukum/produk_hukum_read', $data);
					} else {
							echo"<script>";
							echo"alert('Data Tidak Ditemukan');";
							echo"window.location='".site_url('produk_hukum')."'";
							echo"</script>";
					}

	}
}
