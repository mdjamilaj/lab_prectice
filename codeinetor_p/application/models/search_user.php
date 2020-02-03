<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class search_user extends CI_Model {

	public function check($name, $address, $contact, $gender)
	{
		if(empty($name) && empty($address) && empty($contact) && empty($gender))
		{
			$result = [];
			return $result;
		} else{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->like('name', $name);
		$this->db->like('address', $address);
		$this->db->like('contact', $contact);
		$this->db->like('gender', $gender, 'after');
		$result = $this->db->get()->result();
		return $result;
		}
	}

}