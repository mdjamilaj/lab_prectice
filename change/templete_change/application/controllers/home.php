<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {


	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function home_body()
	{
		$this->load->view('navber');
		$this->load->view('home_body');



		$this->load->view('footer');
	}

	public function about()
	{
		$this->load->view('navber');
		$this->load->view('about');


		
		$this->load->view('footer');
	}
	
}
