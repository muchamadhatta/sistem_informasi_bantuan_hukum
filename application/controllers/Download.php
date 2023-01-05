<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Download extends CI_Controller {
    public function index()
	{

    $this->load->helper('download');

    $data = file_get_contents(base_url.'uploads/produk_hukum/produkhukum-191218-bfff91d980.pdf');
    $name = "file_download.pdf";

    force_download($name, $data);


    }

}