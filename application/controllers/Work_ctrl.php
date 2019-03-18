<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Work_ctrl extends CI_Controller 
{
	public function create()
	{
		$session_data = $this->session->userdata('logged_in');
		$sessionid = $session_data['id'];
		$data['datalist'] = $this->Home_mdl->list($sessionid);

		$data['innerdata'] ="work_create";
		$this->load->view('cvtemplate',$data);
	}

	public function add()
	{
		$session_data = $this->session->userdata('logged_in');
		$sessionid = $session_data['id'];

		$this->Work_mdl->add($sessionid);

		redirect('home','refresh');
	}

	public function edit()
	{
		$session_data = $this->session->userdata('logged_in');
		$sessionid = $session_data['id'];
		$data['datalist'] = $this->Home_mdl->list($sessionid);

		$id = $this->uri->segment(3);

		$data['experiencelist'] = $this->Work_mdl->edit($id);

		$data['innerdata'] ="work_edit";
		$this->load->view('cvtemplate',$data);
	}

	public function update()
	{
		$session_data = $this->session->userdata('logged_in');
		$sessionid = $session_data['id'];
		
		$this->Work_mdl->update($sessionid);

		redirect('home','refresh');
	}
}
