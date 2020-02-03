<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin_info extends CI_Model {

	public function admin_data_check($email,$password)
	{
		$this->db->select('*');
		$this->db->from('admin');
		$this->db->where('email', $email);
		$this->db->where('password', md5($password));
		$query = $this->db->get();
		$result = $query->row();
		return $result;
	}
}
