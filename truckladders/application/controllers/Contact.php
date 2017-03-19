<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('ContactModel');
		$this->load->model('AdminModel');
	}

	public function index($success = false){
		$data['title'] = "Contact";
		$data['script'] = "contact";
		$data['banner'] = $this->AdminModel->bannerInfo(3);
		$data['contact'] = $this->ContactModel->getContact();
		$data['success'] = $success;

		$subject = array(
			'' => 'Choose Subject',
			'General Inquiry' => 'General Inquiry',
			'Product Inquiry' => 'Product Inquiry',
			'Shipping Quote' => 'Shipping Quote',
			'Reseller Request' => 'Become a Reseller'
		);

		$data['subject'] = form_dropdown('subject', $subject);

		$this->load->view('templates/open',$data);
		$this->load->view('templates/header');
		$this->load->view('contact/contact');
		$this->load->view('templates/footer');
		$this->load->view('templates/close');
	}

	public function send(){
		$this->load->library('form_validation');

		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('subject', 'Subject', 'required');
		$this->form_validation->set_rules('message', 'Message', 'required');

		if($this->form_validation->run() == FALSE){
            $this->index();
        }else{
        	$this->ContactModel->sendMessage();
        	redirect('contact/index/success');
        }
	}

}
