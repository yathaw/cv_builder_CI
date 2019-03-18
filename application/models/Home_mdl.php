<?php

class Home_mdl extends CI_Model 
{
	public function list($sessionid)
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->join('userdetail','user_id = userdetail_userid','INNER');
		$this->db->where('user_id',$sessionid);

		$sql = $this->db->get('');
		return $sql->row_array();
	}

	public function education($sessionid)
	{
		$this->db->select('*');
		$this->db->from('education');
		$this->db->where('education_userid',$sessionid);

		$sql = $this->db->get('');
		return $sql->result();
	}

	public function experience($sessionid)
	{
		$this->db->select('*');
		$this->db->from('experience');
		$this->db->order_by('experience_startdate','DESC');
		$this->db->where('experience_userid',$sessionid);

		$sql = $this->db->get('');
		return $sql->result();

	}

	public function language($sessionid)
	{
		$this->db->select('*');
		$this->db->from('language');
		$this->db->where('language_userid',$sessionid);

		$sql = $this->db->get('');
		return $sql->row_array();

	}

	public function project($sessionid)
	{
		$this->db->select('*');
		$this->db->from('project');
		$this->db->where('project_userid',$sessionid);

		$sql = $this->db->get('');
		return $sql->result();

	}

	public function skill($sessionid)
	{
		$this->db->select('*');
		$this->db->from('skill');
		$this->db->where('skill_userid',$sessionid);

		$sql = $this->db->get('');
		return $sql->row_array();

	}
}
