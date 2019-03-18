<?php

class Work_mdl extends CI_Model 
{
	public function add($sessionid)
	{
		$position = $this->input->post('position'); //
		$company = $this->input->post('company');//
		$startdate = $this->input->post('startdate');
		$enddate = $this->input->post('enddate'); //
		$description = $this->input->post('description'); //

		$data = array( 
			'experience_position'		=> $position,
			'experience_companyname' 	=> $company,
			'experience_startdate'		=> $startdate,
			'experience_enddate'		=> $enddate,
			'experience_description'	=> $description,
			'experience_userid' 		=> $sessionid
		);

		$result=$this->db->insert('experience',$data);	

		return $result;
	}

	public function edit($id)
	{
		$this->db->select('*');
		$this->db->from('experience');
		$this->db->where('experience_id',$id);

		$sql = $this->db->get('');

		return $sql->row_array();
	}

	public function update($sessionid)
	{
		$id = $this->input->post('id');
		$position = $this->input->post('position'); //
		$company = $this->input->post('company');//
		$startdate = $this->input->post('startdate');
		$enddate = $this->input->post('enddate'); //
		$description = $this->input->post('description'); //

		$data = array( 
			'experience_position'		=> $position,
			'experience_companyname' 	=> $company,
			'experience_startdate'		=> $startdate,
			'experience_enddate'		=> $enddate,
			'experience_description'	=> $description,
			'experience_userid' 		=> $sessionid
		);

		$this->db->where("experience_id",$id);
		$result=$this->db->update('experience',$data);	

		return $result;
	}

}
