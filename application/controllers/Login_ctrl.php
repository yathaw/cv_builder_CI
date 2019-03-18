<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_ctrl extends CI_Controller 
{
	public function index()
	{
		$data['innerdata'] ="login";

		$this->load->view('template',$data);
	}

	public function login()
	{
		$result = $this->Login_mdl->login();

		if ($result) 
		{
			foreach ($result as $row) 
			{
				$sess_data = array(
		            'id' 	=> $row['user_id']
		        );
			}

			
			$this->session->set_userdata('logged_in', $sess_data);
		    
		    redirect('home');
		}

		else
		{
			$data = array(
		            'error_message' => 'Invalid Email or Password'
		        );
			
			$data['innerdata'] ="login";
			$this->load->view('template',$data);
		}	

	}

	public function logout()
	{
		$this->session->unset_userdata('logged_in');
		session_destroy();
		
		$data['innerdata'] ="login";

		$this->load->view('template',$data);
	}
}
