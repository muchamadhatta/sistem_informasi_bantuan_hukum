<?php defined('BASEPATH') OR exit('No direct script access allowed');

class  Tanggapan extends CI_Controller {

	function __construct ()
	{
		parent::__construct();
		check_not_login();
		$this->load->model('M_tanggapan');
		$this->load->model('M_konsultasi');
		$this->load->model('M_user');
	}
	
	public function index(){
				echo"<script>";
				echo"alert('Silahkan Pilih Aksi Tanggapan pada Konsultasi ');";
				echo"window.location='".site_url('dashboard')."'";
				echo"</script>";
	}
	
	public function balas($id)
	{
		
		$data['data'] = $this->M_tanggapan->getidkonsultasi($id);
		$data['row'] = $this->M_tanggapan->get($id);
		$this->template->load('template', 'tanggapan/tanggapan', $data);
				
		
	}
	

	public function penilaian($id)
	{
		$data['data'] = $this->M_tanggapan->getidkonsultasi($id);
		$data['row'] = $this->M_tanggapan->get($id);
		$this->template->load('template', 'tanggapan/penilaian', $data);
				// echo"<script>";
				// echo"alert('Silahkan Pilih Aksi Tanggapan pada Konsultasi ');";
				// echo"window.location='".site_url('konsultasi_klien')."'";
				// echo"</script>";
		
	}

	
	public function add()
	{
		$chat = new stdClass();
		$chat->id_tanggapan = null;
		$chat->id_konsultasi= null;
		$chat->isi_tanggapan = null;
		$data = array(
			'page' => 'add',
			'row' => $chat
		);
		$this->template->load('template', 'tanggapan/tanggapan', $data);
		
	}
	public function process()
	{
		$id =  $this->input->post('id2');
		$post = $this->input->post(null, TRUE);
		if(isset($_POST['add'])){
            
            $this->M_tanggapan->add($post);
			
        }
    
		redirect('tanggapan/balas/'.$id);
	}

}
