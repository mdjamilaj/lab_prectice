<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class users extends CI_Controller {

	public function test()
	{
		$query=$this->input->get('term');

			$this->db->select('*');
			$this->db->from("user");
			$this->db->like('name', $query);
			$this->db->or_like('address', $query);
			$this->db->or_like('email', $query);
			$this->db->or_like('contact', $query);
			$this->db->or_like('gender', $query);
			$this->db->or_like('id', $query);
			// $this->db->order_by($query, 'ASC');
			// $this->db->order_by($query, 'ASC');
			$this->db->order_by('LENGTH(name)', 'ASC');
			$data =$this->db->get()->result();

			
		$arrayName = array('query' => $query ,'suggestions'=> $data);
		echo json_encode($arrayName);

	}

	
	public function index()
	{
		$this->load->view('header');

		$id = $this->input->get('tagsid');
		$this->load->model('user');
		$data['search_result'] = $this->user->search($id);


		$this->load->view('user_details', $data);

		$this->load->view('footer');
	}



	public function add_user()
	{
		$this->load->view('header');
		
		$this->load->view('add_user');

		$this->load->view('footer');
	}

	public function add_user_response()
	{	
		$data = $this->input->post('image');
			$image_array_1 = explode(";", $data);

			$image_array_2 = explode(",", $image_array_1[1]);


			$data = base64_decode($image_array_2[1]);

			$imageName = time() . '.png';


			file_put_contents($imageName, $data);

			echo $imageName;

			// echo '<img src="'.$imageName.'" class="img-thumbnail" />';

			// move_uploaded_file(source_path, destination);
	}



	public function data_insert()
	{
		$config['upload_path'] = './uploads/';
	    $config['allowed_types'] = 'gif|jpg|png';
	    $config['max_size'] = '1000';
	    $config['max_width']  = '1024';
	    $config['max_height']  = '768';
	    $config['overwrite'] = TRUE;
	    $config['encrypt_name'] = FALSE;
	    $config['remove_spaces'] = TRUE;
	    if ( ! is_dir($config['upload_path']) ) die("THE UPLOAD DIRECTORY DOES NOT EXIST");
	    $this->load->library('upload', $config);
	    if ( ! $this->upload->do_upload('photo')) {
	        echo $this->upload->display_errors();
	    } else {

	        $photo = $this->upload->data();
	        $file_name = $photo['file_name'];
	    }


	    
	    $name = $this->input->post('name');
	    $address = $this->input->post('address');
	    $email = $this->input->post('email');
	    $contact = $this->input->post('contact');
	    $gender = $this->input->post('gender');
		$photo = $this->input->post('image');


		$email_Check = $this->input->post('email', true);
		$this->load->model('user');
		$result = $this->user->user_info_check($email_Check);

	    if($result){
	    	echo "THIS Email ALREADY EXIS!!!";
	    }else{

		$data = array();
		$data = ['name' => $name, 'address' => $address, 'email' => $email, 'contact' => $contact, 'gender' => $gender, 'photo' => $photo];
		$this->db->insert('user', $data);


		redirect('add_user','refresh');
	}
}




	public function delete_user()
	{
		$id = $this->input->get('id');
		$this->db->where('id', $id);
		$this->db->delete('user');
		redirect('users','refresh');
	}







   public function data_table_search()
   {

		$this->load->view('header');

		$this->load->view('data_table_search');

		$this->load->view('footer');

   }







	public function data_table_search_search()
	{
		$query=$this->input->get('term');


			$this->db->select('*');
			$this->db->from('sell', 'user');
			// $this->db->like('name', $query);
			// $this->db->or_like('address', $query);
			// $this->db->or_like('email', $query);
			// $this->db->or_like('contact', $query);
			// $this->db->or_like('gender', $query);
			// $this->db->or_like('id', $query);
			$this->db->like('product_name', $query);
			// $this->db->or_like('product_description', $query);
			// $this->db->or_like('product_price', $query);
			$this->db->order_by('id', 'DESC');
			$data =$this->db->get()->result();

			
		$arrayName = array('query' => $query ,'suggestions'=> $data);
		echo json_encode($arrayName);

	}






























	public function advance_search()
	{
		$this->load->view('header');


		$name=$this->input->post('name');
		$address=$this->input->post('address');
		$contact=$this->input->post('contact');
		$gender=$this->input->post('gender');

		$this->load->model('search_user');
		$data['search_show_student'] = $this->search_user->check($name, $address, $contact, $gender);
		$this->db->select('*');
		$this->db->from('user');
		$data['search_show_name'] = $this->db->get()->result();


		$this->load->view('advance_search', $data);

		$this->load->view('footer');
	}















	public function search_name()
	{
		$query=$this->input->get('name');


			$this->db->select('*');
			$this->db->from("user");
			$this->db->like('name', $query);
			$this->db->order_by('id', 'DESC');
			$data =$this->db->get()->result();

			
		$arrayName = array('query' => $query ,'suggestions'=> $data);
		echo json_encode($arrayName);

	}
	public function search_address()
	{
		$query=$this->input->get('address');


			$this->db->select('*');
			$this->db->from("user");
			$this->db->like('address', $query);
			$this->db->order_by('id', 'DESC');
			$data =$this->db->get()->result();

			
		$arrayName = array('query' => $query ,'suggestions'=> $data);
		echo json_encode($arrayName);

	}
	public function search_city()
	{
		$query=$this->input->get('roll');


			$this->db->select('*');
			$this->db->from("user");
			$this->db->like('roll', $query);
			$this->db->order_by('id', 'DESC');
			$data =$this->db->get()->result();

			
		$arrayName = array('query' => $query ,'suggestions'=> $data);
		echo json_encode($arrayName);

	}

	public function search_contact()
	{
		$query=$this->input->get('contact');


			$this->db->select('*');
			$this->db->from("user");
			$this->db->like('contact', $query);
			$this->db->order_by('id', 'DESC');
			$data =$this->db->get()->result();

			
		$arrayName = array('query' => $query ,'suggestions'=> $data);
		echo json_encode($arrayName);

	}


	public function invoice()
	{

		$data['invoice'] = $this->db->get('sell')->result();
		$this->load->view('invoice', $data);
		
	}



	













	public function ninvoice()
	{

		$data['invoice'] = $this->db->get('sell')->result();
		$this->load->view('ninvoice', $data);
		
	}




	public function __construct()
	{
		parent::__construct();
		$this->load->library('m_pdf');
	}


	public function pdf()
	{
		$html = $this->load->view('invoice', [],true);
		$mpdf->text_input_as_HTML = true;
		$pdfFilePath = "download.pdf";
		$this->m_pdf->pdf->WriteHTML($html);
		print $this->m_pdf->pdf->Output($pdfFilePath, "I");
	}













	// public function search_gender()
	// {
	// 	$query=$this->input->get('gender');


	// 		$this->db->select('*');
	// 		$this->db->from("user");
	// 		$this->db->like('gender', $query);
	// 		$this->db->order_by('id', 'DESC');
	// 		$data =$this->db->get()->result();

			
	// 	$arrayName = array('query' => $query ,'suggestions'=> $data);
	// 	echo json_encode($arrayName);

	// }



	// public function data_search()
	// {
	// 	$name=$this->input->post('name');
	// 	$address=$this->input->post('address');
	// 	$contact=$this->input->post('contact');
	// 	$gender=$this->input->post('gender');

	// 		$this->load->model('search_user');
	// 		$data['search_show_student'] = $this->search_user->check($name, $address, $contact, $gender);
	// 		$this->load->view('advance_search',$data);

	// }



	
}
