<?php

class Profile_mdl extends CI_Model 
{
	public function edit($sessionid)
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->join('userdetail','user_id = userdetail_userid','INNER');
		$this->db->where('user_id',$sessionid);

		$sql = $this->db->get('');

		return $sql->row_array();
	}

	public function update($sessionid)
	{
		if ($_FILES['newphoto']['name'] == NULL) 
		{
			$image['data'] = $this->input->post('oldphoto');
			$image['state'] = 1;
		}

		else
		{
			$image = $this->Project_mdl->upload_img('newphoto');
		}

		$userid = $this->input->post('userid');
		$userdetailid = $this->input->post('userdetailid');
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

		$userdetail = array( 
			'userdetail_jobtitle'	 => $job,
			'userdetail_dob' 		 => $dob,
			'userdetail_phone'		 => $phone,
			'userdetail_address'	 => $address,
			'userdetail_description' => $description,
			'userdetail_userid'		 => $userid,
		);


		$this->db->where("user_id",$userid);
		$result=$this->db->update('user',$user);

		$this->db->where("userdetail_id",$userdetailid);
		$result=$this->db->update('userdetail',$userdetail);	

		return $result;
	}

	public function changepassword()
	{
		$id = $this->input->post('id');
		$photo = $this->input->post('photo');
		$name = $this->input->post('name'); //
		$gender = $this->input->post('gender');//
		$email = $this->input->post('email');
		$password = $this->input->post('password'); //

		$user = array( 
			'user_profile'	=> $photo,
			'user_name' 	=> $name,
			'user_gender'	=> $gender,
			'user_email'	=> $email,
			'user_password'	=> $password
		);

		$this->db->where("user_id",$id);
		$result=$this->db->update('user',$user);
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
