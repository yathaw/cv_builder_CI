<?php

class Register_mdl extends CI_Model 
{
	public function register()
	{
		$image = $this->Register_mdl->upload_img('photo'); //
		$name = $this->input->post('name'); //
		$dob = $this->input->post('dob');//
		$email = $this->input->post('email');
		$password = $this->input->post('password'); //
		$gender = $this->input->post('gender'); //
		$job = $this->input->post('jobtitle');//
		$description = $this->input->post('description');//
		$phone = $this->input->post('phone');//
		$address = $this->input->post('address');//

		$user = array( 
			'user_profile'	=> $image['data'],
			'user_name' 	=> $name,
			'user_gender'	=> $gender,
			'user_email'	=> $email,
			'user_password'	=> $password
		);

		$result=$this->db->insert('user',$user);	

		// Last Record from user table
		$last = $this->db->order_by('user_id',"desc")
				->limit(1)
				->get('user')
				->row_array();	

		$userdetail = array( 
			'userdetail_jobtitle'	 => $job,
			'userdetail_dob' 		 => $dob,
			'userdetail_phone'		 => $phone,
			'userdetail_address'	 => $address,
			'userdetail_description' => $description,
			'userdetail_userid'		 => $last['user_id'],
		);
		$result=$this->db->insert('userdetail',$userdetail);	

		return $result;
	}

	public function upload_img($image)
	{
		$file = $_FILES[$image]['name']; // 1.jpg
		$filepath = 'image/user/'.$file; // image/user/1.jpg

		$config['upload_path']='image/user/';
		$config['allowed_types']= 'gif|jpg|jpeg|png';

		$this->load->library('upload',$config);

		if ($this->upload->do_upload($image)) 
		{
			$userfile = array(
				'state' => 1,
				'data' => $filepath
				);
		}
		else
		{
			$userfile = array(
				'state' => 0,
				'data' => $this->upload->display_errors()
				);
		}

		// var_dump($userfile);die();
		return $userfile;
	}
}
