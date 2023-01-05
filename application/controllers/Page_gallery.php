<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Page_gallery extends CI_Controller {

	function __construct ()
	{
		parent::__construct();
		$this->load->model('M_foto');
	}
	public function index()
	{
		$data['row'] = $this->M_foto->get();
		$this->template->load('template_website', 'website/galeri',$data);
	}
}
