<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Skill_ctrl extends CI_Controller 
{
	public function create()
	{
		$session_data = $this->session->userdata('logged_in');
		$sessionid = $session_data['id'];
		$data['datalist'] = $this->Home_mdl->list($sessionid);

		$data['innerdata'] ="skill_create";
		$this->load->view('cvtemplate',$data);
	}

	public function add()
	{
		$session_data = $this->session->userdata('logged_in');
		$sessionid = $session_data['id'];

		$this->Skill_mdl->add($sessionid);

		redirect('home','refresh');
	}

	public function edit()
	{
		$session_data = $this->session->userdata('logged_in');
		$sessionid = $session_data['id'];
		$data['datalist'] = $this->Home_mdl->list($sessionid);

		$id = $this->uri->segment(3);

		$data['skilllist'] = $this->Skill_mdl->edit($id);

		$data['innerdata'] ="skill_edit";
		$this->load->view('cvtemplate',$data);
	}

	public function update()
	{
		$session_data = $this->session->userdata('logged_in');
		$sessionid = $session_data['id'];

		$this->Skill_mdl->update($sessionid);

		redirect('home','refresh');
	}
}
