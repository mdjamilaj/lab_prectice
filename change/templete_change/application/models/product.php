<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class product extends CI_Model {


	public function product_info($name_Check)
	{
		$this->db->select('*');
		$this->db->from('products');
		$this->db->where('product_name',$name_Check);
		
		$query_result = $this->db->get();
		$result = $query_result->row();
		return $result;
	}




	function product_id( $product_id )
	{

	    $this->db->select('*');
	    $this->db->from('products');
		$this->db->where('id', $product_id );


	    $query = $this->db->get();

	    if ( $query->num_rows() > 0 )
	    {
	        $row = $query->row_array();
	        return $row;
	    }

	} 


	public function sell_product_info($product_id_Check)
	{
		$this->db->select('*');
		$this->db->from('sell');
		$this->db->where('product_id',$product_id_Check);
		
		$query_result = $this->db->get();
		$result = $query_result->row();
		return $result;
	}



	public function row_delete($id)
	{

	     $this->db->where('product_id', $id);
	     $this->db->delete('sell'); 
	}





}
