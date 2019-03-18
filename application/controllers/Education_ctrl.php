<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Education_ctrl extends CI_Controller 
{
	public function create()
	{
		$session_data = $this->session->userdata('logged_in');
		$sessionid = $session_data['id'];
		$data['datalist'] = $this->Home_mdl->list($sessionid);

		$data['innerdata'] ="education_create";
		$this->load->view('cvtemplate',$data);
	}

	public function add()
	{
		$session_data = $this->session->userdata('logged_in');
		$sessionid = $session_data['id'];

		$this->Education_mdl->add($sessionid);

		redirect('home','refresh');
	}

	public function edit()
	{
		$session_data = $this->session->userdata('logged_in');
		$sessionid = $session_data['id'];
		$data['datalist'] = $this->Home_mdl->list($sessionid);

		$id = $this->uri->segment(3);

		$data['educationlist'] = $this->Education_mdl->edit($id);

		$data['innerdata'] ="education_edit";
		$this->load->view('cvtemplate',$data);
	}

	public function update()
	{
		$session_data = $this->session->userdata('logged_in');
		$sessionid = $session_data['id'];
		
		$this->Education_mdl->update($sessionid);

		redirect('home','refresh');
	}
}
