<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('HomeModel');
	}

	public function index(){
		$data['title'] = "Home";
		$data['script'] = false;
		$this->load->model('ProductsModel');
		$this->load->model('ContactModel');
		$this->load->model('AdminModel');

		$data['banner'] = $this->AdminModel->bannerInfo(1);
		$data['about'] = $this->ContactModel->getContact();
		$data['feature'] = $this->ProductsModel->productInfo(rand(1,4));
		$data['testimonials'] = $this->HomeModel->getTestimonials();
		$data['testimonialNum'] = count($data['testimonials']);

		$this->load->view('templates/open',$data);
		$this->load->view('templates/header');
		$this->load->view('home/home');
		$this->load->view('templates/footer');
		$this->load->view('templates/close');
	}

	public function register(){
		$data['title'] = "Register";
		$data['script'] = false;

		$provinces = array(
			'' => 'Province',
			'AB' => 'Alberta',
			'BC' => 'British Columbia',
			'MB' => 'Manitoba',
			'NB' => 'New Brunswick',
			'NL' => 'Newfoundland and Labrador',
			'NT' => 'Northwest Territories',
			'NS' => 'Nova Scotia',
			'NU' => 'Nunavut',
			'ON' => 'Ontario',
			'PE' => 'Prince Edward Island',
			'QC' => 'Quebec',
			'SK' => 'Saskatchewan',
			'YT' => 'Yukon'
		);

		$data['provinces'] = form_dropdown('province', $provinces);

		$this->load->view('templates/open',$data);
		$this->load->view('templates/header');
		$this->load->view('home/register');
		$this->load->view('templates/footer');
		$this->load->view('templates/close');
	}

	public function reset($username = false){
		$data['title'] = "Reset Password";
		$data['script'] = false;
		
		if($username){
			$users = $this->HomeModel->getUsers();
			$userfound = false;

			foreach($users as $user){
				if(md5($user['dealers_username']) == $username){
					$userfound = true;
					$data['username'] = $user['dealers_username'];
				}
			}

			if(!$userfound){
				$data['username'] = false;
			}

			$this->load->view('templates/open',$data);
			$this->load->view('templates/header');
			$this->load->view('home/resetPassword');
			$this->load->view('templates/footer');
			$this->load->view('templates/close');
		}else{
			$this->load->view('templates/open',$data);
			$this->load->view('templates/header');
			$this->load->view('home/reset');
			$this->load->view('templates/footer');
			$this->load->view('templates/close');
		}
	}

	public function signup(){
		$this->load->library('form_validation');

		$this->form_validation->set_rules('company', 'Company Name', 'required|max_length[100]');
		$this->form_validation->set_rules('city', 'City Name', 'required|max_length[100]');
		$this->form_validation->set_rules('province', 'Province', 'required|max_length[50]');
		$this->form_validation->set_rules('street', 'Street Name', 'required|max_length[200]');
		$this->form_validation->set_rules('postalCode', 'Postal Code', 'required|max_length[7]');
		$this->form_validation->set_rules('contact', 'Contact Name', 'required|max_length[100]');
		$this->form_validation->set_rules('phone', 'Phone Number', 'required|max_length[50]|alpha_dash');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|max_length[100]|is_unique[tbl_dealers.dealers_email]');
		$this->form_validation->set_rules('username', 'Username', 'required|max_length[50]|is_unique[tbl_dealers.dealers_username]');
		$this->form_validation->set_rules('password', 'Password', 'required|max_length[100]');
		$this->form_validation->set_rules('password2', 'Password Confirmation', 'required|matches[password]');
		$this->form_validation->set_message('matches', 'The Password fields do not match.');

		if ($this->form_validation->run() == FALSE){
            $this->register();
        }else{
        	$this->HomeModel->newCompany();
            redirect('home');
        }
	}

	public function submit(){
		$this->load->library('form_validation');

		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() == FALSE){
            $this->index();
        }else{
        	$verify = $this->HomeModel->verifyCompany($this->input->post('username'),$this->input->post('password'));
        	if($verify){
        		$approved = $this->HomeModel->checkApproved($this->input->post('username'));
        		if($approved){
	        		redirect('company');
	        	}else{
	        		$this->index();
	        	}
        	}else{
        		$this->index();
        	}
        }
	}

	public function account(){
		$this->load->library('form_validation');

		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');

		if ($this->form_validation->run() == FALSE){
            $this->index();
        }else{
        	$verify = $this->HomeModel->verifyAccount();
        	if($verify){
        		redirect('home');
        	}else{
        		$this->index();
        	}
        }
	}

	public function password(){
		$this->load->library('form_validation');

		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required|max_length[100]');
		$this->form_validation->set_rules('password2', 'Password Confirmation', 'required|matches[password]');
		$this->form_validation->set_message('matches', 'The Password fields do not match.');

		if ($this->form_validation->run() == FALSE){
            $this->reset(md5($this->input->post('username')));
        }else{
        	$this->HomeModel->resetPassword();
            redirect('home');
        }
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('home');
	}

	public function verifyUser($user,$pass){
		$verify = $this->HomeModel->verifyCompany($user,$pass);
		$account = json_encode($verify);
		echo $account;
	}

}
