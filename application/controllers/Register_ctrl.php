<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register_ctrl extends CI_Controller 
{
	public function index()
	{
		$data['innerdata'] ="register";

		$this->load->view('template',$data);
	}

	public function register()
	{
		$result = $this->Register_mdl->register();

		if ($result) 
		{
			$this->session->set_flashdata('success', "Your data is recorded. But Please Login again for security.");

			$data['innerdata'] ="login";
			$this->load->view('template',$data);
		}

		else
		{
			redirect('register','refresh');
		}

	}
}
