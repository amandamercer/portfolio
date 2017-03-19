<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CompanyModel extends CI_Model {

	public function companyInfo($id){
		$query = $this->db->get_where('tbl_dealers', array('dealers_id' => $id));
		return $query->row();
	}

	public function editInfo(){
		$street = str_replace(" ", "+", $this->input->post('street'));
		$city = str_replace(" ", "+", $this->input->post('city'));
		$address = $street."+".$city."+".$this->input->post('province');
		
		$geocode=file_get_contents("http://maps.google.com/maps/api/geocode/json?address=".$address."&sensor=false");
		$output= json_decode($geocode);
		$lat = $output->results[0]->geometry->location->lat;
		$lng = $output->results[0]->geometry->location->lng;

		$company = array(
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
		$this->db->where('dealers_id', $this->session->userdata('id'));
		$this->db->update('tbl_dealers',$company);
	}

	public function allLadders(){
		$this->db->select('*');
		$this->db->from('tbl_ladders');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function makeOrder($user, $num){
		$price = 0;

		for($i = 1; $i <= $num; $i++){
			if($this->input->post('quantity'.$i) > 0){
				$price += ($this->input->post('price'.$i) * $this->input->post('quantity'.$i));
			}
		}

		if($price > 0){
			$this->db->insert('tbl_orders', array('orders_price' => $price));
			$order = $this->db->insert_id();

			for($i = 1; $i <= $num; $i++){
				if($this->input->post('quantity'.$i) > 0){
					$ladder = array(
						'orders_id' => $order,
						'ladders_id' => $this->input->post('id'.$i),
						'ladders_quantity' => $this->input->post('quantity'.$i)
					);
					$this->db->insert('lt_ordersLadders', $ladder);
				}
			}

			$receipt = array(
				'orders_id' => $order,
				'dealers_id' => $user,
				'order_num' => time()
			);
			$this->db->insert('lt_ordersDealers', $receipt);

			$this->db->select('*');
			$this->db->from('lt_ordersLadders');
			$this->db->join('tbl_orders', 'tbl_orders.orders_id = lt_ordersLadders.orders_id');
			$this->db->join('tbl_ladders', 'tbl_ladders.ladders_id = lt_ordersLadders.ladders_id');
			$this->db->where('lt_ordersLadders.orders_id', $order);
			$query = $this->db->get();
			$lastOrder = $query->result_array();

			$to = "PUT EMAIL HERE";
			$subject = "New Order From ".$this->session->userdata('name');
			$message = "
			<html> 
			<body>
			<h1>Order Request</h1>
			<h2>Order #".time()."</h2>
			<p>Date of Order: ".date('F j, Y')." at ".date('g:i a')."</p>
			<h3>Order Details</h3>
			<ul>";
			foreach($lastOrder as $ladder){
				$message .= "<li>Name: ".$ladder['ladders_name']." | Qty: ".$ladder['ladders_quantity']." | Price: $".$ladder['ladders_price'] * $ladder['ladders_quantity'].".00</li>";
			}
			$message .= "</ul>
			<p>Subtotal: $".$price.".00</p>
			<p>Shipping: $50.00</p>
			<p>Tax: $".($price * 0.30).".00</p>
			<p>Total: $".($price + 50 + ($price * 0.30)).".00</p>
			</body> 
			</html>";
			
			$headers = "Content-type: text/html\r\n";

			mail($to, $subject, $message, $headers);

		}
	}

	public function orderHistory($id){
		$this->db->select('*');
		$this->db->from('lt_ordersDealers');
		$this->db->join('tbl_orders', 'tbl_orders.orders_id = lt_ordersDealers.orders_id');
		$this->db->join('tbl_dealers', 'tbl_dealers.dealers_id = lt_ordersDealers.dealers_id');
		$this->db->where('lt_ordersDealers.dealers_id', $id);
		$this->db->order_by('lt_ordersDealers.orders_id', 'DESC');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function orderDetails($id){
		$this->db->select('*');
		$this->db->from('lt_ordersLadders');
		$this->db->join('tbl_orders', 'tbl_orders.orders_id = lt_ordersLadders.orders_id');
		$this->db->join('tbl_ladders', 'tbl_ladders.ladders_id = lt_ordersLadders.ladders_id');
		$this->db->where('lt_ordersLadders.orders_id', $id);
		$query = $this->db->get();
		return $query->result_array();
	}

	public function lastOrder($id){
		$this->db->select('*');
		$this->db->from('lt_ordersDealers');
		$this->db->join('tbl_orders', 'tbl_orders.orders_id = lt_ordersDealers.orders_id');
		$this->db->join('tbl_dealers', 'tbl_dealers.dealers_id = lt_ordersDealers.dealers_id');
		$this->db->where('lt_ordersDealers.dealers_id', $id);
		$this->db->order_by('lt_ordersDealers.orders_id', 'DESC');
		$query = $this->db->get();
		return $query->row();
	}

	public function addTestimonial(){
		$testimonial = array(
			'testimonials_name' => $this->input->post('name'),
			'testimonials_text' => $this->input->post('testimonial')
		);
		$this->db->insert('tbl_testimonials', $testimonial);

		$to = "PUT EMAIL HERE";
		$subject = "New Testimonial From ".$this->input->post('name');
		$message = "
		<html> 
		  <body>
		  <p>".$this->input->post('name')." has sent a new testimonial. You will need to approve the testimonial on the <a href='".base_url()."admin/login'>admin panel</a> before it becomes published on the website.</p>
		  </body> 
		</html>
		";
		
		$headers = "Content-type: text/html\r\n";

		mail($to, $subject, $message, $headers);
	}
	
}