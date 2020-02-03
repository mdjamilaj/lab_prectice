<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Mymodel Extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function search($keyword)
    {

        $this->db->like('name',$keyword);
        $this->db->or_like('email',$keyword);
        $this->db->or_like('address',$keyword);
        $this->db->or_like('contact',$keyword);
        $this->db->or_like('gender',$keyword);
        $query = $this->db->get('user');
        return $query->result();
    }
}   

?>