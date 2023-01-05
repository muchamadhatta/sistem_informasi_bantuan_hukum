<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Website extends CI_Controller {

	
	public function index()
	{
		$this->template->load('template_website', 'website/welcome');
	}
}