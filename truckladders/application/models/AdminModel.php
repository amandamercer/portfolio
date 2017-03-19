<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminModel extends CI_Model {

	public function verifyAdmin(){
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));
		$verify = $this->db->get_where('tbl_admin', array('admin_username' => $username, 'admin_password' => $password));
		if($verify->num_rows() > 0){
			foreach ($verify->result() as $row){
				$admin = array(
					'id' => $row->admin_id,
					'username' => $row->admin_username,
					'admin' => TRUE
				);
			}
			$this->session->set_userdata($admin);

			return true;
		}else{
			return false;
		}
	}

	public function verifyAccount(){
		$username = $this->input->post('username');
		$password = md5($this->input->post('password_old'));
		$verify = $this->db->get_where('tbl_admin', array('admin_username' => $username, 'admin_password' => $password));
		if($verify->num_rows() > 0){
			return true;
		}else{
			return false;
		}
	}

	public function editPassword(){
		$admin = array(
			'admin_password' => md5($this->input->post('password'))
		);
		$this->db->where('admin_id', $this->session->userdata('id'));
		$this->db->update('tbl_admin',$admin);
	}

	public function updateContact(){
		$contact = array(
			'contact_phone' => $this->input->post('phone'),
			'contact_email' => $this->input->post('email'),
			'contact_city' => $this->input->post('city'),
			'contact_province' => $this->input->post('province'),
			'contact_street' => $this->input->post('street'),
			'contact_postalCode' => $this->input->post('postalCode'),
		);
		$this->db->update('tbl_contact',$contact);
	}

	public function getBanners(){
		$this->db->select('*');
		$this->db->from('tbl_banners');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function bannerInfo($id){
		$query = $this->db->get_where('tbl_banners', array('banners_id' => $id));
		return $query->row();
	}

	public function updateBanner(){
		$product = array(
			'banners_alt' => $this->input->post('alt')
		);

		$name = strtolower($this->input->post('name')).'_banner';
		
		if($_FILES['image']['name']){
			$config['file_name'] = $name;
			$config['upload_path'] = './images/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
		    $config['max_size'] = '15000';
			$config['maintain_ratio'] = TRUE;
			$config['overwrite'] = TRUE;
			$this->load->library('upload', $config);

			if($this->upload->do_upload('image')){
				$image_data = $this->upload->data();
				$image = $image_data['file_name'];
				$product['banners_image'] = $image;
			}
		}

		$this->db->where('banners_id', $this->input->post('id'));
		$this->db->update('tbl_banners',$product);
	}

	public function updateAbout(){
		$contact = array(
			'contact_about' => $this->input->post('about')
		);
		$this->db->update('tbl_contact',$contact);
	}

	public function getDealers($approved){
		$this->db->select('*');
		$this->db->from('tbl_dealers');
		$this->db->where('tbl_dealers.dealers_approved', $approved);
		$query = $this->db->get();
		return $query->result_array();
	}

	public function approveDealer($id){
		$approve = array(
			'dealers_approved' => 1
		);
		$this->db->where('dealers_id', $id);
		$this->db->update('tbl_dealers',$approve);
	}

	public function getTestimonials($approved){
		$this->db->select('*');
		$this->db->from('tbl_testimonials');
		$this->db->where('tbl_testimonials.testimonials_approved', $approved);
		$query = $this->db->get();
		return $query->result_array();
	}

	public function approveTestimonial($id){
		$approve = array(
			'testimonials_approved' => 1
		);
		$this->db->where('testimonials_id', $id);
		$this->db->update('tbl_testimonials',$approve);
	}

	public function newProduct($image){
		$product = array(
			'ladders_name' => $this->input->post('name'),
			'ladders_material' => $this->input->post('material'),
			'ladders_desc' => $this->input->post('description'),
			'ladders_image1' => $image
		);
		$this->db->insert('tbl_ladders',$product);
	}

	public function updateProduct($path1, $path2, $path3, $path4){
		$product = array(
			'ladders_name' => $this->input->post('name'),
			'ladders_material' => $this->input->post('material'),
			'ladders_desc' => $this->input->post('description')
		);
		
		for($i = 1; $i <= 4; $i++){
			if($_FILES['image'.$i]['name']){
				$config['file_name']= time().'_ladder';
				$config['upload_path'] = './images/';
				$config['allowed_types'] = 'gif|jpg|png|jpeg';
			    $config['max_size'] = '15000';
				$config['maintain_ratio'] = TRUE;
				$this->load->library('upload', $config);

				if($this->upload->do_upload('image'.$i)){
					$image_data = $this->upload->data();
					$image = $image_data['file_name'];
					$product['ladders_image'.$i] = $image;
					if($i === 1 && $path1){
						unlink($path1);
					}else if($i === 2 && $path2){
						unlink($path2);
					}else if($i === 3 && $path3){
						unlink($path3);
					}else if($i === 4 && $path4){
						unlink($path4);
					}
				}
			}
		}

		$this->db->where('ladders_id', $this->input->post('id'));
		$this->db->update('tbl_ladders',$product);
	}

	public function deleteProduct($id, $path1, $path2, $path3, $path4){
		
		if($path1){
			unlink($path1);
		}

		if($path2){
			unlink($path2);
		}

		if($path3){
			unlink($path3);
		}

		if($path4){
			unlink($path4);
		}

		$this->db->delete('tbl_ladders', array('ladders_id' => $id));
	}
	
}