<?php

class Skill_mdl extends CI_Model 
{
	public function add($sessionid)
	{
		$name = $this->input->post('name');

		$data = array( 
			'skill_name'		=> $name,
			'skill_userid' 		=> $sessionid

		);

		$result=$this->db->insert('skill',$data);	

		return $result;
	}

	public function edit($id)
	{
		$this->db->select('*');
		$this->db->from('skill');
		$this->db->where('skill_id',$id);

		$sql = $this->db->get('');

		return $sql->row_array();
	}

	public function update($sessionid)
	{
		$id = $this->input->post('id');
		$name = $this->input->post('name'); //


		$data = array( 
			'skill_name'		=> $name,
			'skill_userid' 		=> $sessionid
		);

		$this->db->where("skill_id",$id);
		$result=$this->db->update('skill',$data);	

		return $result;
	}

}
