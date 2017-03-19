<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeModel extends CI_Model {

	public function newCompany(){
		$street = str_replace(" ", "+", $this->input->post('street'));
		$city = str_replace(" ", "+", $this->input->post('city'));
		$address = $street."+".$city."+".$this->input->post('province');
		
		$geocode=file_get_contents("http://maps.google.com/maps/api/geocode/json?address=".$address."&sensor=false");
		$output= json_decode($geocode);
		$lat = $output->results[0]->geometry->location->lat;
		$lng = $output->results[0]->geometry->location->lng;

		$company = array(
			'dealers_username' => $this->input->post('username'),
			'dealers_password' => md5($this->input->post('password')),
			'dealers_name' => $this->input->post('company'),
			'dealers_contact' => $this->input->post('contact'),
			'dealers_phone' => $this->input->post('phone'),
			'dealers_email' => $this->input->post('email'),
			'dealers_street' => $this->input->post('street'),
			'dealers_city' => $this->input->post('city'),
			'dealers_province' => $this->input->post('province'),
			'dealers_postalCode' => $this->input->post('postalCode'),
			'dealers_lat' => $lat,
			'dealers_lng' => $lng
		);
		$this->db->insert('tbl_dealers',$company);

		$to = "PUT EMAIL HERE";
		$subject = "New Dealer Registration";
		$message = "
		<html> 
		  <body>
		  <p>".$this->input->post('contact')." from ".$this->input->post('company')." has registered a new account. You will need to approve their account on the <a href='".base_url()."admin/login'>admin panel</a> before they can access their account.</p>
		  </body> 
		</html>
		";
		
		$headers = "Content-type: text/html\r\n";

		mail($to, $subject, $message, $headers);
	}

	public function verifyCompany($username, $password){
		$password = md5($password);

		$verify = $this->db->get_where('tbl_dealers', array('dealers_username' => $username, 'dealers_password' => $password));
		
		if($verify->num_rows() > 0){
			return $verify->row();
		}else{
			return false;
		}
	}

	public function checkApproved($user){
		$approved = $this->db->get_where('tbl_dealers', array('dealers_username' => $user, 'dealers_approved' => 1));
		if($approved->num_rows() > 0){
			foreach ($approved->result() as $row){
				$company = array(
					'id' => $row->dealers_id,
					'username' => $row->dealers_username,
					'name' => $row->dealers_name,
					'loggedIn' => TRUE
				);
			}
			$this->session->set_userdata($company);

			return true;
		}else{
			return false;
		}
	}

	public function verifyAccount(){
		$username = $this->input->post('username');
		$email = $this->input->post('email');

		$verify = $this->db->get_where('tbl_dealers', array('dealers_username' => $username, 'dealers_email' => $email));
		
		if($verify->num_rows() > 0){
			$subject = "Password Reset";
			$message = "Link to reset your password: ".base_url()."home/reset/".md5($username);
			mail($email, $subject, $message);
			return true;
		}else{
			return false;
		}
	}

	public function getUsers(){
		$this->db->select('dealers_username');
		$this->db->from('tbl_dealers');
		$sql = $this->db->get();
		return $sql->result_array();
	}

	public function resetPassword(){
		$reset = array(
			'dealers_password' => md5($this->input->post('password'))
		);

		$this->db->where('dealers_username', $this->input->post('username'));
		$this->db->update('tbl_dealers',$reset);
	}

	public function getTestimonials(){
		$this->db->select('*');
		$this->db->from('tbl_testimonials');
		$this->db->where('testimonials_approved', 1);
		$sql = $this->db->get();
		return $sql->result_array();
	}
	
}