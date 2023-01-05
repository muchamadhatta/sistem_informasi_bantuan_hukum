<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Page_article extends CI_Controller {

	function __construct ()
	{
		parent::__construct();
		$this->load->model('M_artikel');
	}
	public function index()
	{
		$data['row'] = $this->M_artikel->get();
		$this->template->load('template_website', 'website/artikel',$data);
	}
}