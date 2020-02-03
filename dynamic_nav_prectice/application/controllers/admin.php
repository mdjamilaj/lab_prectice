<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {


	public function home()
	{
		if(empty($_POST['g-recaptcha-response']))
 {
  $captcha_error = 'Captcha is required';
 }
 else
 {
  $secret_key = '6Ldv2bcUAAAAAFXUKdLW_qljFd9FpxNguf06DHhp';

  $response = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret_key.'&response='.$_POST['g-recaptcha-response']);

  $response_data = json_decode($response);

  if(!$response_data->success)
  {
   $captcha_error = 'Captcha verification failed';
  }
 }



 if(isset($_POST["first_name"]))
 {
  $email = '';
  $password = '';

  $email_error = '';
  $password_error = '';
  $captcha_error = '';


  if(empty($this->input->post('email')))
  {
   $email_error = 'Email is required';
  }
  else
  {
   if(!filter_var($this->input->post('email'), FILTER_VALIDATE_EMAIL))
   {
    $email_error = 'Invalid Email';
   }
   else
   {
    $email = $this->input->post('email');
   }
  }
 
  if(empty($this->input->post('password')))
  {
   $password_error = 'Password is required';
  }
  else
  {
   $password = $this->input->post('password');
  }
 
  if(empty($this->input->post('g-recaptcha-response')))
  {
   $captcha_error = 'Captcha is required';
  }
  else
  {
   $secret_key = '6LdDIM8UAAAAAGFma90l_I9JCP2qoJmpEYxIIh2E';
 
   $response = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret_key.'&response='.$this->input->post('g-recaptcha-response'));
 
   $response_data = json_decode($response);
 
   if(!$response_data->success)
   {
    $captcha_error = 'Captcha verification failed';
   }
  }
 
  if($email_error == '' && $password_error == '' && $captcha_error == '')
  {
   $data = array(
    'success'  => true
   );
  }
  else
  {
	$data = array(
		'email_error'  => $email_error,
		'password_error' => $password_error,
		'captcha_error'  => $captcha_error
	);
  }
 
  echo json_encode($data);
 }

        $this->load->view('header');
        $this->load->view('home');
		$this->load->view('footer');
	}

	public function about_us()
	{
        $this->load->view('header');
        $this->load->view('about_us');
		$this->load->view('footer');
	}

	public function academics()
	{
        $this->load->view('header');
        $this->load->view('academics');
		$this->load->view('footer');
	}


	public function addmission()
	{
        $this->load->view('header');
        $this->load->view('addmission');
		$this->load->view('footer');
	}


	public function offices()
	{
        $this->load->view('header');
        $this->load->view('offices');
		$this->load->view('footer');
	}


	public function research()
	{
        $this->load->view('header');
        $this->load->view('research');
		$this->load->view('footer');
	}

	public function campus()
	{
        $this->load->view('header');
        $this->load->view('campus');
		$this->load->view('footer');
	}

	public function contectus()
	{
		$this->load->view('header');
		$this->load->view('contectus');
		$this->load->view('footer');
	}

}
