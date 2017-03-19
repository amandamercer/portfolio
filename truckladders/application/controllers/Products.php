<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('ProductsModel');
		$this->load->model('AdminModel');
	}

	public function index(){
		$data['title'] = "Product Selection";
		$data['script'] = false;
		$data['banner'] = $this->AdminModel->bannerInfo(2);
		$data['ladders'] = $this->ProductsModel->allProducts();

		$this->load->view('templates/open',$data);
		$this->load->view('templates/header');
		$this->load->view('products/product_selection');
		$this->load->view('templates/footer');
		$this->load->view('templates/close');
	}

	public function commercial(){
		$data['title'] = "Commercial Ladders";
		$data['script'] = false;
		$data['banner'] = $this->AdminModel->bannerInfo(2);
		$data['ladders'] = $this->ProductsModel->allProducts();

		$this->load->view('templates/open',$data);
		$this->load->view('templates/header');
		$this->load->view('products/catalogue');
		$this->load->view('templates/footer');
		$this->load->view('templates/close');
	}

	public function ladder($id){
		$data['ladder'] = $this->ProductsModel->productInfo($id);
		$this->load->view('products/ladder',$data);
	}

	public function form() {
	    $this->load->helper('form');
	    $this->load->library('form_validation');
	    $this->load->library('email');

	    $data['title'] = "Truck Selection Form";
		$data['script'] = false;
		$data['banner'] = $this->AdminModel->bannerInfo(2);
		$data['ladders'] = $this->ProductsModel->allProducts();

	    $this->load->view('templates/open',$data);
		$this->load->view('templates/header');

	    $this->form_validation->set_rules('orders_truckMake', 'Truck Make', 'required', 'callback_makeCheck');
	    $this->form_validation->set_rules('orders_truckModel', 'Truck Model', 'required', 'callback_modelCheck');
	    $this->form_validation->set_rules('orders_truckYear', 'Truck Year', 'required',  array(
                'required' => 'Your %s is required.'
        		));
	    $this->form_validation->set_rules('customers_name', 'Name', 'required',  array(
                'required' => 'Your %s is required.'
        		));
	    $this->form_validation->set_rules('customers_phone', 'Phone Number', 'required|min_length[10]|max_length[17]',  array(
                'required' => 'Your %s is required.'
        		));
	    $this->form_validation->set_rules('customers_email', 'Email', 'required|valid_email',  array(
                'required' => 'Your %s is required.'
        		));


	    if ($this->form_validation->run() === FALSE) {
	        $this->load->view('products/ladders_form');

	    }else{
	        $this->ProductsModel->set_form();
	        $this->ProductsModel->sendMessage();

			$data['title'] = "Thank You";
			$data['script'] = false;
			$data['banner'] = $this->AdminModel->bannerInfo(2);

			$this->load->view('templates/open',$data);
			$this->load->view('templates/header');
			$this->load->view('products/ladders_thankyou');
	    }
	   
		$this->load->view('templates/footer');
		$this->load->view('templates/close');
	}

	public function makeCheck($str)
        {
                if ($str == 'MAKE')
                {
                        $this->form_validation->set_message('makeCheck', 'Please select the make of your truck.');
                        return FALSE;
                }
                else
                {
                        return TRUE;
                }
        }

    public function modelCheck($str)
        {
                if ($str == 'MAKE')
                {
                        $this->form_validation->set_message('modelCheck', 'Please select the model of your truck.');
                        return FALSE;
                }
                else
                {
                        return TRUE;
                }
        }

}
