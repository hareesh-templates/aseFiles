<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Project extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->library('form_validation'); 
        $this->load->model('Gallery_model'); 
	}
 
	public function index()
	{
        $data = array();
        $postData = array();
          if($this->input->post('postSubmit')){
            $this->form_validation->set_rules('name', 'Name', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
            $this->form_validation->set_rules('mobile', 'Mobile', 'required');
            $this->form_validation->set_rules('flat', 'Flat', 'required');
            $this->form_validation->set_rules('location', 'Location', 'required');
            $this->form_validation->set_rules('budget', 'Budget', 'required');
             $postData = array(
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'mobile' => $this->input->post('mobile'),
                'flat' => $this->input->post('flat'),
                'location' => $this->input->post('location'),
                'budget' => $this->input->post('budget'),
                'project' => 'Madhurwada',
                'added_on' => date('d-m-Y')
            );
            
            if($this->form_validation->run() == true){
                $insert = $this->Gallery_model->enquiry_form($postData);

                if($insert){
                    $data['success_msg'] = 'Thank you..We will get in touch with you shortly...';
                }else{
                    $data['error_msg'] = 'Some problems occurred, please try again.';
                }
            }
        }
        
        $data['post'] = $postData;

        $this->load->view('header');
		$this->load->view('Enquiry_Form', $data);
		$this->load->view('footer');
	}
	 public function aganampudi()
    {
        $data = array();
        $postData = array();
          if($this->input->post('postSubmit')){
            $this->form_validation->set_rules('name', 'Name', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
            $this->form_validation->set_rules('mobile', 'Mobile', 'required');
            $this->form_validation->set_rules('flat', 'Flat', 'required');
            $this->form_validation->set_rules('location', 'Location', 'required');
            $this->form_validation->set_rules('budget', 'Budget', 'required');
             $postData = array(
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'mobile' => $this->input->post('mobile'),
                'flat' => $this->input->post('flat'),
                'location' => $this->input->post('location'),
                'budget' => $this->input->post('budget'),
                'project' => 'aganampudi',
                'added_on' => date('d-m-Y')
            );
            
            if($this->form_validation->run() == true){
                $insert = $this->Gallery_model->enquiry_form($postData);

                if($insert){
                    $data['success_msg'] = 'Thank you..We will get in touch with you shortly...';
                }else{
                    $data['error_msg'] = 'Some problems occurred, please try again.';
                }
            }
        }
        
        $data['post'] = $postData;

        $this->load->view('header');
        $this->load->view('aganampudi_enquiry_form', $data);
        $this->load->view('footer');
    }

     public function pedagantyada()
    {
        $data = array();
        $postData = array();
          if($this->input->post('postSubmit')){
            $this->form_validation->set_rules('name', 'Name', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
            $this->form_validation->set_rules('mobile', 'Mobile', 'required');
            $this->form_validation->set_rules('flat', 'Flat', 'required');
            $this->form_validation->set_rules('location', 'Location', 'required');
            $this->form_validation->set_rules('budget', 'Budget', 'required');
             $postData = array(
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'mobile' => $this->input->post('mobile'),
                'flat' => $this->input->post('flat'),
                'location' => $this->input->post('location'),
                'budget' => $this->input->post('budget'),
                'project' => 'pedagantyada',
                'added_on' => date('d-m-Y')
            );
            
            if($this->form_validation->run() == true){
                $insert = $this->Gallery_model->enquiry_form($postData);

                if($insert){
                    $data['success_msg'] = 'Thank you..We will get in touch with you shortly...';
                }else{
                    $data['error_msg'] = 'Some problems occurred, please try again.';
                }
            }
        }
        
        $data['post'] = $postData;

        $this->load->view('header');
        $this->load->view('pedagantyada_enquiry_form', $data);
        $this->load->view('footer');
    }

     public function enquiry_form_list()
    {
            $this->load->view('header');
            $data['users'] = $this->Gallery_model->enquiry_form_list();
            $this->load->view('enquiry_form_list', $data);
           // $this->load->view('footer', $data);
    }
}