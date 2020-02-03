<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user extends CI_Model {

	public function user_info_check($email_Check)
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('email', $email_Check);
		$query = $this->db->get();
		$result = $query->row();
		return $result;
	}

	public function search($id)
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('id', $id);
		$result = $this->db->get()->result();
		return $result;
	}

}
