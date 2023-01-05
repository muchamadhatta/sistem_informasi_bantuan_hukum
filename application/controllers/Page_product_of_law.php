<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Page_product_of_law extends CI_Controller {

	function __construct ()
	{
		parent::__construct();
		$this->load->model('M_produk_hukum');
	}
	public function index()
	{
		$data['row'] = $this->M_produk_hukum->get();
		$this->template->load('template_website', 'website/produk_hukum',$data);
	}

	public function download()
	{

    $this->load->helper('download');

	$produk_hukum = $this->M_produk_hukum->get($post['id'])->row();


	$data = file_get_contents(base_url.'uploads/produk_hukum/produkhukum-191218-bfff91d980.pdf');


    $name = $produk_hukum->file_upload;

    force_download($name, $data);




	// $target_file = './uploads/artikel/'.$artikel->image;
	// 					unlink($target_file);
	// './uploads/artikel/'.$artikel->image;
	// $this->M_artikel->get($post['id'])->row();
    }



}