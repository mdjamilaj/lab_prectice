<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class customer_model extends CI_Model {


	public function customer_info($name_Check,$email_check)
	{
		$this->db->select('*');
		$this->db->from('costomer');
		$this->db->where('name',$name_Check);
		$this->db->where('email',$email_check);
		$query_result = $this->db->get();
		$result = $query_result->row();
		return $result;
	}





}