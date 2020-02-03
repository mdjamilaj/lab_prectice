<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class prectice extends CI_Controller {


	public function index()
	{
		$this->load->view('header');

		$this->load->view('prectice_view');

		$this->load->view('footer');
	}
}