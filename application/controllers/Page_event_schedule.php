<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Page_event_schedule extends CI_Controller {

	function __construct ()
	{
		parent::__construct();
		$this->load->model('M_agenda');
	}
	public function index()
	{
		$data['row'] = $this->M_agenda->get();
		$this->template->load('template_website', 'website/agenda',$data);
	}
}