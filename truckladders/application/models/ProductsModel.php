<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProductsModel extends CI_Model {

	public function allProducts(){
		$this->db->select('*');
		$this->db->from('tbl_ladders');
		$this->db->where("ladders_category='1'");
		$this->db->order_by('ladders_name', 'ASC');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function productInfo($id){
		$query = $this->db->get_where('tbl_ladders', array('ladders_id' => $id));
		return $query->row();
	}

	public function set_form() {
	    $this->load->helper('url');
	    $this->load->library('email');

	    $ordersData = array(
	        'orders_truckMake' => $this->input->post('orders_truckMake'),
	        'orders_truckModel' => $this->input->post('orders_truckModel'),
	        'orders_truckYear' => $this->input->post('orders_truckYear'),
	        'orders_modified' => $this->input->post('orders_modified'),
	        'orders_bHeight' => $this->input->post('orders_bHeight'),
	        'orders_tWidth' => $this->input->post('orders_tWidth')
	    );

	    $this->db->insert('tbl_orders', $ordersData);

	    $customersData = array(
	        'customers_name' => $this->input->post('customers_name'),
	        'customers_phone' => $this->input->post('customers_phone'),
	        'customers_email' => $this->input->post('customers_email'),
	        'customers_category' => $this->input->post('customers_category'),
	        'customers_dealershipName' => $this->input->post('customers_dealershipName'),
	        'customers_street' => $this->input->post('customers_street')
	    );

	    $this->db->insert('tbl_customers', $customersData);
	}

	public function sendMessage(){
		
		$to = "truckladders@gmail.com";
		$subject = "Ladder order from TruckLadders.ca";
		$message = "Order Date: ".date('Y-m-d h:i:s')."\n\nName: ".$this->input->post('customers_name')."\r\nEmail: ".$this->input->post('customers_email')."\r\nPhone: ".$this->input->post('customers_phone')."\r\nIndividual or Dealer: ".$this->input->post('customers_category')."\n\nDealership Name: ".$this->input->post('customers_dealershipName')."\r\nDealership Location: ".$this->input->post('customers_street')."\n\nTruck Make: ".$this->input->post('orders_truckMake')."\r\nTruck Model: ".$this->input->post('orders_truckModel')."\r\nTruck Year: ".$this->input->post('orders_truckYear')."\r\nStock or Modified: ".$this->input->post('orders_modified')."\r\nBed Height: ".$this->input->post('orders_bHeight')."\r\nTailgate Width: ".$this->input->post('orders_tWidth');

		mail($to, $subject, $message);
	}
	
}