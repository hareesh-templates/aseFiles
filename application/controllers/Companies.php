<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Companies extends CI_Controller {

	
	public function index()
	{
		$this->load->view('header');
		$this->load->view('companies');
		$this->load->view('footer');
	}
}
