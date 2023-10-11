<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends CI_Controller {
	function __construct() {
        parent::__construct();
        $this->load->model('Gallery_model');
    }
	
	public function index()
	{
		$this->load->view('header');
		$data['gallery'] = $this->Gallery_model->getRows();
		$this->load->view('gallery',$data);
		$this->load->view('footer');
	}

	public function images($id)
	{
		$this->load->view('header');
		$data['gallery'] = $this->Gallery_model->getRows($id);
		$this->load->view('gallery_images',$data);
		$this->load->view('footer');
	}
}
