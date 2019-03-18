<?php

class Language_mdl extends CI_Model 
{
	public function add($sessionid)
	{
		$name = $this->input->post('name');

		$data = array( 
			'language_name'		=> $name,
			'language_userid' 	=> $sessionid

		);

		$result=$this->db->insert('language',$data);	

		return $result;
	}

	public function edit($id)
	{
		$this->db->select('*');
		$this->db->from('language');
		$this->db->where('language_id',$id);

		$sql = $this->db->get('');

		return $sql->row_array();
	}

	public function update($sessionid)
	{
		$id = $this->input->post('id');
		$name = $this->input->post('name'); //


		$data = array( 
			'language_name'		=> $name,
			'language_userid' 		=> $sessionid
		);

		$this->db->where("language_id",$id);
		$result=$this->db->update('language',$data);	

		return $result;
	}

}
