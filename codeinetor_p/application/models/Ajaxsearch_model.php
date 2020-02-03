<?php
class Ajaxsearch_model extends CI_Model
{
	function fetch_data($query)
	{
		$this->db->select("*");
		$this->db->from("user");
		if($query != '')
		{
			$this->db->like('name', $query);
			$this->db->or_like('Address', $query);
			$this->db->or_like('email', $query);
			$this->db->or_like('contact', $query);
			$this->db->or_like('gender', $query);
		}
		$this->db->order_by('id', 'DESC');
		return $this->db->get();
	}
}
?>