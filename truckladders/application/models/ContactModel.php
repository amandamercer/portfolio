<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ContactModel extends CI_Model {

	public function getContact(){
		$this->db->select('*');
		$this->db->from('tbl_contact');
		$query = $this->db->get();
		return $query->row();
	}

	public function sendMessage(){

		$to = "truckladders@gmail.com";
		$subject = $this->input->post('subject');
		$message = "Name: ".$this->input->post('name')."\r\nEmail: ".$this->input->post('email')."\n\nMessage: ".$this->input->post('message');

		mail($to, $subject, $message);
	}
	
}