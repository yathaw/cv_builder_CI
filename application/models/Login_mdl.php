<?php

class Login_mdl extends CI_Model 
{
	public function login()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('user_email',$email);
		$this->db->where('user_password', $password);
		$this->db->limit(1);

		$query = $this->db->get()->result_array();

		// var_dump($query);die();

		return $query;
		
	}
}
