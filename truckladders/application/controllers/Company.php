<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Company extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('CompanyModel');
		$this->load->model('AdminModel');
	}

	public function index(){
		$data['title'] = "Welcome";
		$data['script'] = "editProfile";
		$data['banner'] = $this->AdminModel->bannerInfo(4);

		$data['company'] = $this->CompanyModel->companyInfo($this->session->userdata('id'));
		$data['order'] = $this->CompanyModel->lastOrder($this->session->userdata('id'));
		if($data['order']){
		$data['ladders'] = $this->CompanyModel->orderDetails($data['order']->orders_id);
		}

		$provinces = array(
			'AB' => 'AB',
			'BC' => 'BC',
			'MB' => 'MB',
			'NB' => 'NB',
			'NL' => 'NL',
			'NT' => 'NT',
			'NS' => 'NS',
			'NU' => 'NU',
			'ON' => 'ON',
			'PE' => 'PE',
			'QC' => 'QC',
			'SK' => 'SK',
			'YT' => 'YT'
		);

		$data['provinces'] = form_dropdown('province', $provinces, $data['company']->dealers_province);

		$this->load->view('templates/open',$data);
		$this->load->view('templates/header');
		$this->load->view('company/loggedIn');
		$this->load->view('company/home');
		$this->load->view('templates/footer');
		$this->load->view('templates/close');
	}

	public function order(){
		$data['title'] = "Order Form";
		$data['script'] = false;
		$data['ladders'] = $this->CompanyModel->allLadders();

		$this->load->view('templates/open',$data);
		$this->load->view('templates/header');
		$this->load->view('company/loggedIn');
		$this->load->view('company/order');
		$this->load->view('templates/footer');
		$this->load->view('templates/close');
	}

	public function history(){
		$data['title'] = "Order History";
		$data['script'] = false;
		$data['orders'] = $this->CompanyModel->orderHistory($this->session->userdata('id'));

		$details = array();

		foreach($data['orders'] as $order){
			array_push($details, $this->CompanyModel->orderDetails($order['orders_id']));
		}

		$data['ladders'] = $details;

		$this->load->view('templates/open',$data);
		$this->load->view('templates/header');
		$this->load->view('company/loggedIn');
		$this->load->view('company/history');
		$this->load->view('templates/footer');
		$this->load->view('templates/close');
	}

	public function testimonial($success = false){
		$data['title'] = "Write a Testimonial";
		$data['script'] = false;
		$data['success'] = $success;
		$data['company'] = $this->CompanyModel->companyInfo($this->session->userdata('id'));

		$this->load->view('templates/open',$data);
		$this->load->view('templates/header');
		$this->load->view('company/loggedIn');
		$this->load->view('company/testimonial');
		$this->load->view('templates/footer');
		$this->load->view('templates/close');
	}

	public function edit(){
		$this->load->library('form_validation');

		$this->form_validation->set_rules('company', 'Company Name', 'required|max_length[100]');
		$this->form_validation->set_rules('city', 'City Name', 'required|max_length[100]');
		$this->form_validation->set_rules('province', 'Province', 'required|max_length[50]');
		$this->form_validation->set_rules('street', 'Street Name', 'required|max_length[200]');
		$this->form_validation->set_rules('postalCode', 'Postal Code', 'required|max_length[7]');
		$this->form_validation->set_rules('contact', 'Contact Name', 'required|max_length[100]');
		$this->form_validation->set_rules('phone', 'Phone Number', 'required|max_length[50]|alpha_dash');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|max_length[100]');

		if ($this->form_validation->run() == FALSE){
            $this->index();
        }else{
        	$this->CompanyModel->editInfo();
            redirect('company');
        }
	}

	public function sendOrder(){
		$this->load->library('form_validation');

		$num = $this->input->post('num');

		for($i = 1; $i <= $num; $i++){
			$this->form_validation->set_rules('id'.$i, 'Number', 'required');
			$this->form_validation->set_rules('price'.$i, 'Price', 'required');
			$this->form_validation->set_rules('quantity'.$i, 'Quantity', 'required|is_natural');
		}

		if ($this->form_validation->run() == FALSE){
            $this->order();
        }else{
        	$this->CompanyModel->makeOrder($this->session->userdata('id'), $num);
			redirect('company/history');
        }
	}

	public function newTestimonial(){
		$this->load->library('form_validation');

		$this->form_validation->set_rules('name', 'Full Name', 'required');
		$this->form_validation->set_rules('testimonial', 'Testimonial', 'required');

		if ($this->form_validation->run() == FALSE){
            $this->testimonial();
        }else{
        	$this->CompanyModel->addTestimonial();
        	$this->testimonial(true);
        }
	}

}
