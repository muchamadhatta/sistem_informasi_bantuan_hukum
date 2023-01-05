<?php defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	function __construct ()
	{
		parent::__construct();
		check_not_login();
		check_admin();
		$this->load->model('M_user');
		$this->load->library('form_validation');
	}
	
	public function index()
	{
		$data['row'] = $this->M_user->get();		
		$this->template->load('template', 'user/data_user', $data);
	}

	public function add()
	{
		
		$this->form_validation->set_rules('fullname', 'Nama Lengkap', 'required');
		$this->form_validation->set_rules('username', 'Username', 'required|is_unique[user.username]');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('pasconf', 'Password Confirmation', 'required|matches[password]',
		array('matches' => '%s Tidak Sesuai Dengan Password')
	);
		$this->form_validation->set_rules('level', 'Level', 'required');

		$this->form_validation->set_message('required','%s Masih Kosong, Silahkan Isi');
		$this->form_validation->set_message('is_unique','{field} Ini Sudah Dipakai, Silahkan Ganti Yang Lain');
		

		if ($this->form_validation->run() == FALSE)
                {
					$this->template->load('template', 'user/user_form_add');
					
				}
                else
                {
						$post = $this->input->post(null, TRUE);
						$this->M_user->add($post);
						if($this->db->affected_rows() > 0) {
							echo"<script>";
							echo"alert('Data Berhasil di Simpan')";
							echo"</script>";
						}
							echo"<script>";
							echo"window.location='".site_url('user')."'";
							echo"</script>";
                }
	}

public function update($id)
	{
		
		$this->form_validation->set_rules('fullname', 'Nama Lengkap', 'required');
		$this->form_validation->set_rules('username', 'Username', 'required|callback_username_check');
		if($this->input->post('password')){
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('pasconf', 'Password Confirmation', 'required|matches[password]',
		array('matches' => '%s Tidak Sesuai Dengan Password')
		);
		}

		if($this->input->post('pasconf')){
			$this->form_validation->set_rules('pasconf', 'Password Confirmation', 'required|matches[password]',
			array('matches' => '%s Tidak Sesuai Dengan Password')
			);
			}

		$this->form_validation->set_rules('level', 'Level', 'required');

		$this->form_validation->set_message('required','%s Masih Kosong, Silahkan Isi');
		$this->form_validation->set_message('is_unique','{field} Ini Sudah Dipakai, Silahkan Ganti Yang Lain');
		

		if ($this->form_validation->run() == FALSE)
                {
					$query = $this->M_user->get($id);
					if($query->num_rows() > 0) {
						$data['row'] = $query->row();
						$this->template->load('template', 'user/user_form_update', $data);
					} else {
							echo"<script>";
							echo"alert('Data Tidak Ditemukan');";
							echo"window.location='".site_url('user')."'";
							echo"</script>";
					}
					
				}
                else
                {
						$post = $this->input->post(null, TRUE);
						$this->M_user->update($post);
						if($this->db->affected_rows() > 0) {
							echo"<script>";
							echo"alert('Data Berhasil di Simpan')";
							echo"</script>";
						}
							echo"<script>";
							echo"window.location='".site_url('user')."'";
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
	
	public function del()
	{
		$id = $this->input->post('id_user');
		$this->M_user->del($id);
		if($this->db->affected_rows() > 0) {
			echo"<script>";
			echo"alert('Data Berhasil di Hapus')";
			echo"</script>";
		}
			echo"<script>";
			echo"window.location='".site_url('user')."'";
			echo"</script>";
	}


	public function read($id){
		$query = $this->M_user->get($id);
					if($query->num_rows() > 0) {
						$data['row'] = $query->row();
						$this->template->load('template', 'user/user_read', $data);
					} else {
							echo"<script>";
							echo"alert('Data Tidak Ditemukan');";
							echo"window.location='".site_url('user')."'";
							echo"</script>";
					}

	}

}
