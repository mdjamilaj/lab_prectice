<?php
class Ajaxsearch_model extends CI_Model
{
	function fetch_data($query)
	{
		$this->db->select("*");
		$this->db->from("products");
		if($query != '')
		{
			$this->db->like('product_name', $query);
			$this->db->or_like('product_price', $query);
			$this->db->or_like('status', $query);
			$this->db->or_like('id', $query);
		}
		$this->db->order_by('id', 'DESC');
		return $this->db->get();
	}
}
?>