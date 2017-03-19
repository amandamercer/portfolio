<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('AdminModel');
		$this->load->model('ProductsModel');
	}

	public function index(){
		$data['title'] = "Admin";

		$this->load->view('templates/open',$data);
		$this->load->view('admin/templates/home');
		$this->load->view('admin/templates/close');
	}

	public function login(){
		$data['title'] = "Admin Login";

		$this->load->view('templates/open',$data);
		$this->load->view('admin/account/login');
		$this->load->view('admin/templates/close');
	}

	public function account($error = FALSE){
		$data['title'] = "Edit Password";
		$data['error'] = $error;

		$this->load->view('templates/open',$data);
		$this->load->view('admin/templates/header');
		$this->load->view('admin/account/edit');
		$this->load->view('admin/templates/footer');
		$this->load->view('admin/templates/close');
	}

	public function success($message){
		$data['title'] = "Success";
		$data['message'] = $message;

		$this->load->view('templates/open',$data);
		$this->load->view('admin/templates/header');
		$this->load->view('admin/templates/success');
		$this->load->view('admin/templates/footer');
		$this->load->view('admin/templates/close');
	}

	public function contact(){
		$data['title'] = "Contact Information";

		$this->load->model('ContactModel');
		$data['contact'] = $this->ContactModel->getContact();

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

		$data['provinces'] = form_dropdown('province', $provinces, $data['contact']->contact_province);

		$this->load->view('templates/open',$data);
		$this->load->view('admin/templates/header');
		$this->load->view('admin/website/contact');
		$this->load->view('admin/templates/footer');
		$this->load->view('admin/templates/close');
	}

	public function banners($id = FALSE){

		if($id){
			$data['title'] = "Edit Banner";
			$data['banner'] = $this->AdminModel->bannerInfo($id);
			$data['hidden'] = form_hidden('id', $id);

			$this->load->view('templates/open',$data);
			$this->load->view('admin/templates/header');
			$this->load->view('admin/website/editBanner');
			$this->load->view('admin/templates/footer');
			$this->load->view('admin/templates/close');
		}else{
			$data['title'] = "Update Banner";
			$data['banners'] = $this->AdminModel->getBanners();

			$this->load->view('templates/open',$data);
			$this->load->view('admin/templates/header');
			$this->load->view('admin/website/banners');
			$this->load->view('admin/templates/footer');
			$this->load->view('admin/templates/close');
		}
	}

	public function about(){
		$data['title'] = "Edit About Us";

		$this->load->model('ContactModel');
		$data['about'] = $this->ContactModel->getContact();

		$this->load->view('templates/open',$data);
		$this->load->view('admin/templates/header');
		$this->load->view('admin/website/about');
		$this->load->view('admin/templates/footer');
		$this->load->view('admin/templates/close');
	}

	public function dealers($option){
		
		if($option === "all"){
			$data['title'] = "View Approved Dealers";
			$data['dealers'] = $this->AdminModel->getDealers(1);
			$data['num'] = count($data['dealers']);

			$this->load->view('templates/open',$data);
			$this->load->view('admin/templates/header');
			$this->load->view('admin/account/dealers');
			$this->load->view('admin/templates/footer');
			$this->load->view('admin/templates/close');
		}else if($option === "approve"){
			$data['title'] = "Approve Dealers";
			$data['dealers'] = $this->AdminModel->getDealers(0);
			$data['num'] = count($data['dealers']);

			$this->load->view('templates/open',$data);
			$this->load->view('admin/templates/header');
			$this->load->view('admin/approval/dealers');
			$this->load->view('admin/templates/footer');
			$this->load->view('admin/templates/close');
		}else{
			redirect('admin');
		}

	}

	public function testimonials($option){

		if($option === "all"){
			$data['title'] = "View Approved Testimonials";
			$data['testimonials'] = $this->AdminModel->getTestimonials(1);
			$data['num'] = count($data['testimonials']);

			$this->load->view('templates/open',$data);
			$this->load->view('admin/templates/header');
			$this->load->view('admin/account/testimonials');
			$this->load->view('admin/templates/footer');
			$this->load->view('admin/templates/close');
		}else if($option === "approve"){
			$data['title'] = "Approve Testimonials";
			$data['testimonials'] = $this->AdminModel->getTestimonials(0);
			$data['num'] = count($data['testimonials']);

			$this->load->view('templates/open',$data);
			$this->load->view('admin/templates/header');
			$this->load->view('admin/approval/testimonials');
			$this->load->view('admin/templates/footer');
			$this->load->view('admin/templates/close');
		}else{
			redirect('admin');
		}

	}

	public function product($option = FALSE, $id = FALSE){

		if($option == "add"){
			$data['title'] = "New Product";

			$this->load->view('templates/open',$data);
			$this->load->view('admin/templates/header');
			$this->load->view('admin/product/add');
			$this->load->view('admin/templates/footer');
			$this->load->view('admin/templates/close');
		}else if($option == "edit" && !$id){
			$data['title'] = "Choose Product";
			$data['ladders'] = $this->ProductsModel->allProducts();

			$this->load->view('templates/open',$data);
			$this->load->view('admin/templates/header');
			$this->load->view('admin/product/edit');
			$this->load->view('admin/templates/footer');
			$this->load->view('admin/templates/close');
		}else if($option == "edit" && $id){
			$data['title'] = "Edit Product";
			$data['ladder'] = $this->ProductsModel->productInfo($id);
			$data['hidden'] = form_hidden('id', $id);

			$this->load->view('templates/open',$data);
			$this->load->view('admin/templates/header');
			$this->load->view('admin/product/editProduct');
			$this->load->view('admin/templates/footer');
			$this->load->view('admin/templates/close');
		}else{
			redirect('admin');
		}
	}

	public function submit(){
		$this->load->library('form_validation');

		$this->form_validation->set_rules('username', 'Username', 'required|max_length[100]');
		$this->form_validation->set_rules('password', 'Password', 'required|max_length[100]');

		if ($this->form_validation->run() == FALSE){
            $this->login();
        }else{
        	$verify = $this->AdminModel->verifyAdmin();
        	if($verify){
        		redirect('admin');
        	}else{
        		$this->login();
        	}
        }
	}

	public function edit(){
		$this->load->library('form_validation');

		$this->form_validation->set_rules('password_old', 'Old Password', 'required|max_length[100]');
		$this->form_validation->set_rules('password', 'New Password', 'required|max_length[100]');
		$this->form_validation->set_rules('password2', 'Password Confirmation', 'required|matches[password]');
		$this->form_validation->set_message('matches', 'The Password fields do not match.');

		if ($this->form_validation->run() == FALSE){
            $this->account(FALSE);
        }else{
        	$verify = $this->AdminModel->verifyAccount();
        	if($verify){
        		$this->AdminModel->editPassword();
        		redirect('admin');
        	}else{
        		$this->account(TRUE);
        	}
        }
	}

	public function updateContact(){
		$this->load->library('form_validation');

		$this->form_validation->set_rules('phone', 'Phone Number', 'required|max_length[50]|alpha_dash');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|max_length[100]|is_unique[tbl_dealers.dealers_email]');
		$this->form_validation->set_rules('city', 'City Name', 'required|max_length[100]');
		$this->form_validation->set_rules('province', 'Province', 'required|max_length[50]');
		$this->form_validation->set_rules('street', 'Street Name', 'required|max_length[200]');
		$this->form_validation->set_rules('postalCode', 'Postal Code', 'required|max_length[7]');

		if ($this->form_validation->run() == FALSE){
            $this->contact();
        }else{
        	$this->AdminModel->updateContact();
            $message = "Your Contact Information Was Updated Successfully!";
        	$this->success($message);
        }
	}

	public function updateBanner(){
		$this->load->library('form_validation');

		$this->form_validation->set_rules('alt', 'Image Associated Text', 'required|max_length[200]');

		if ($this->form_validation->run() == FALSE){
            $this->banners($this->input->post('id'));
        }else{
        	$this->AdminModel->updateBanner();
        	$message = "The Banner Was Updated Successfully!";
	        $this->success($message);
        }
	}

	public function updateAbout(){
		$this->load->library('form_validation');

		$this->form_validation->set_rules('about', 'About Us', 'required');

		if ($this->form_validation->run() == FALSE){
            $this->about();
        }else{
        	$this->AdminModel->updateAbout();
            $message = "The About Us Section Was Updated Successfully!";
        	$this->success($message);
        }
	}

	public function approveDealer($id){
		$this->AdminModel->approveDealer($id);
		redirect('admin/dealers/approve');
	}

	public function removeDealer($id){
		$this->db->delete('tbl_dealers', array('dealers_id' => $id));
		redirect('admin/dealers/all');
	}

	public function approveTestimonial($id){
		$this->AdminModel->approveTestimonial($id);
		redirect('admin/testimonials/approve');
	}

	public function removeTestimonial($id){
		$this->db->delete('tbl_testimonials', array('testimonials_id' => $id));
		redirect('admin/testimonials/all');
	}

	public function addProduct(){
		$this->load->library('form_validation');

		$this->form_validation->set_rules('name', 'Product Name', 'required|max_length[100]');
		$this->form_validation->set_rules('material', 'Product Material', 'required|max_length[100]');
		$this->form_validation->set_rules('description', 'Product Description', 'required');
		if(empty($_FILES['image']['name'])){
			$this->form_validation->set_rules('image', 'Product Image', 'required');
		}

		if ($this->form_validation->run() == FALSE){
            $this->product('add');
        }else{
        	$config['file_name']= time().'_ladder';
			$config['upload_path'] = './images/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
		    $config['max_size'] = '15000';
			$config['maintain_ratio'] = TRUE;
			$this->load->library('upload', $config);

			if($this->upload->do_upload('image')){
				$image_data = $this->upload->data();
				$image = $image_data['file_name'];
				$this->AdminModel->newProduct($image);
            	
            	$message = "The Product Was Added Successfully!";
        		$this->success($message);
			}else{
				$this->product('add');
			}
        }
	}

	public function editProduct(){
		$this->load->library('form_validation');

		$this->form_validation->set_rules('name', 'Product Name', 'required|max_length[100]');
		$this->form_validation->set_rules('material', 'Product Material', 'required|max_length[100]');
		$this->form_validation->set_rules('description', 'Product Description', 'required');

		if ($this->form_validation->run() == FALSE){
            $this->product('edit',$this->input->post('id'));
        }else{
        	$product = $this->ProductsModel->productInfo($this->input->post('id'));
        	
        	if($_FILES['image1']['name'] && $product->ladders_image1 !== "default.png"){
				$path1 = './images/'.$product->ladders_image1;		
			}else{
				$path1 = false;
			}

			if($_FILES['image2']['name'] && $product->ladders_image2 !== "default.png"){
				$path2 = './images/'.$product->ladders_image2;
			}else{
				$path2 = false;
			}

			if($_FILES['image3']['name'] && $product->ladders_image3 !== "default.png"){
				$path3 = './images/'.$product->ladders_image3;
			}else{
				$path3 = false;
			}

			if($_FILES['image4']['name'] && $product->ladders_image4 !== "default.png"){
				$path4 = './images/'.$product->ladders_image4;
			}else{
				$path4 = false;
			}

        	$this->AdminModel->updateProduct($path1, $path2, $path3, $path4);
        	$message = "The Product Was Updated Successfully!";
	        $this->success($message);
        }
	}

	public function deleteProduct($id){
		$product = $this->ProductsModel->productInfo($id);
		
		if($product->ladders_image1 !== "default.png"){
			$path1 = './images/'.$product->ladders_image1;		
		}else{
			$path1 = false;
		}

		if($product->ladders_image2 !== "default.png"){
			$path2 = './images/'.$product->ladders_image2;
		}else{
			$path2 = false;
		}

		if($product->ladders_image3 !== "default.png"){
			$path3 = './images/'.$product->ladders_image3;
		}else{
			$path3 = false;
		}

		if($product->ladders_image4 !== "default.png"){
			$path4 = './images/'.$product->ladders_image4;
		}else{
			$path4 = false;
		}

		$this->AdminModel->deleteProduct($id, $path1, $path2, $path3, $path4);
		redirect('admin/product/edit');
	}

	public function verifyUser($user,$pass){
		$verify = $this->HomeModel->verifyCompany($user,$pass);
		$account = json_encode($verify);
		echo $account;
	}

	public function findDealers(){
		$dealers = $this->AdminModel->getDealers(1);
		$list = json_encode($dealers);
		echo $list;
	}

}
