<?php

class Education_mdl extends CI_Model 
{
	public function add($sessionid)
	{
		$name = $this->input->post('name'); //
		$achievement = $this->input->post('achievement');//
		$major = $this->input->post('major');
		$acceptyear = $this->input->post('acceptyear'); //
		$country = $this->input->post('country'); //

		$data = array( 
			'education_name'		=> $name,
			'education_achievement' 	=> $achievement,
			'education_major'		=> $major,
			'education_acceptyear'		=> $acceptyear,
			'education_country'	=> $country,
			'education_userid' 		=> $sessionid
		);

		$result=$this->db->insert('education',$data);	

		return $result;
	}

	public function edit($id)
	{
		$this->db->select('*');
		$this->db->from('education');
		$this->db->where('education_id',$id);

		$sql = $this->db->get('');

		return $sql->row_array();
	}

	public function update($sessionid)
	{
		$id = $this->input->post('id');
		$name = $this->input->post('name'); //
		$achievement = $this->input->post('achievement');//
		$major = $this->input->post('major');
		$acceptyear = $this->input->post('acceptyear'); //
		$country = $this->input->post('country'); //

		$data = array( 
			'education_name'		=> $name,
			'education_achievement' 	=> $achievement,
			'education_major'		=> $major,
			'education_acceptyear'		=> $acceptyear,
			'education_country'	=> $country,
			'education_userid' 		=> $sessionid
		);

		$this->db->where("education_id",$id);
		$result=$this->db->update('education',$data);	

		return $result;
	}

}
