
<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Page_register extends CI_Controller {

	function __construct ()
	{
		parent::__construct();
		// check_admin();
		$this->load->model('M_register');
		$this->load->library('form_validation');
	}
	public function index()
	{
		$this->template->load('template_website', 'website/register');
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
		$this->template->load('template_website', 'website/register', $data);
		
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
					$this->M_register->add($post);
					if($this->db->affected_rows() > 0) {
						echo"<script>";
							echo"alert('Pendaftaran Berhasil, Silahkan Login')";
							echo"</script>";
					}
					echo"<script>";
							echo"window.location='".site_url('auth/login')."'";
							echo"</script>";
				
				}else{
					$error = $this->upload->display_errors();
					$this->session->set_flashdata('error', $error);
					redirect('website/register');
				}
				
			}else {
				$post['image'] = null;
					$this->M_register->add($post);
					if($this->db->affected_rows() > 0) {
						echo"<script>";
							echo"alert('Pendaftaran Berhasil, Silahkan Login')";
							echo"</script>";
					}
					echo"<script>";
							echo"window.location='".site_url('auth/login')."'";
							echo"</script>";
			}
			
		}
		
		if($this->db->affected_rows() > 0) {
			echo"<script>";
							echo"alert('Pendaftaran Berhasil, Silahkan Login')";
							echo"</script>";
					}
					echo"<script>";
							echo"window.location='".site_url('auth/login')."'";
							echo"</script>";
	}
}

