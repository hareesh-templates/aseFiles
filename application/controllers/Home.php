<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	
	public function index()
	{
		$this->load->view('header');
		$this->load->view('home');
		$this->load->view('footer');
	}
	public function index2()
	{
		$this->load->view('header2');
		//$this->load->view('home');
		$this->load->view('footer');
	}
	public function index3()
	{
		$this->load->view('header3');
		//$this->load->view('home');
		$this->load->view('footer');
	}
	public function index4()
	{
		$this->load->view('header4');
		//$this->load->view('home');
		$this->load->view('footer');
	}
	public function index5()
	{
		$this->load->view('header5');
		//$this->load->view('home');
		$this->load->view('footer');
	}
	public function index6()
	{
		$this->load->view('header6');
		//$this->load->view('home');
		$this->load->view('footer');
	}
	public function index7()
	{
		$this->load->view('header7');
		//$this->load->view('home');
		$this->load->view('footer');
	}
}
