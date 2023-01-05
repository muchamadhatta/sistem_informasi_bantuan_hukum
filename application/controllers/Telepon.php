<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Telepon extends CI_Controller {

	function __construct ()
	{
		parent::__construct();
		check_not_login();
		$this->load->model('M_telepon');
	}
	public function index()
	{
		$data['row'] = $this->M_telepon->get();
		$this->template->load('template', 'telepon/index', $data);
	}
}