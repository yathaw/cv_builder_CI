<?php

class Project_mdl extends CI_Model 
{
	public function add($sessionid)
	{
		$image = $this->Project_mdl->upload_img('photo'); //
		$name = $this->input->post('name'); //
		$description = $this->input->post('description');//


		$data = array( 
			'project_name'	=> $name,
			'project_cover' 	=> $image['data'],
			'project_description'	=> $description,
			'project_userid'	=> $sessionid
		);

		$result=$this->db->insert('project',$data);		

		return $result;
	}

	public function edit($id)
	{
		$this->db->select('*');
		$this->db->from('project');
		$this->db->where('project_id',$id);

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

		$id = $this->input->post('id');
		$name = $this->input->post('name'); //
		$description = $this->input->post('description');//


		$data = array( 
			'project_name'	=> $name,
			'project_cover' 	=> $image['data'],
			'project_description'	=> $description,
			'project_userid'	=> $sessionid
		);

		$this->db->where("project_id",$id);
		$result=$this->db->update('project',$data);	

		return $result;
	}

	public function upload_img($image)
	{
		$file = $_FILES[$image]['name']; // 1.jpg
		$filepath = 'image/project/'.$file; // image/user/1.jpg

		$config['upload_path']='image/project/';
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
