<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Page_legal_consultation extends CI_Controller {

	
	public function index()
	{
		$this->template->load('template_website', 'website/konsultasi_hukum');
	}
}
