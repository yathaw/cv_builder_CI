<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile_ctrl extends CI_Controller 
{
	public function edit()
	{
		$session_data = $this->session->userdata('logged_in');
		$sessionid = $session_data['id'];
		$data['datalist'] = $this->Home_mdl->list($sessionid);


		$data['profilelist'] = $this->Profile_mdl->edit($sessionid);

		$data['innerdata'] ="profile_edit";
		$this->load->view('cvtemplate',$data);
	}

	public function update()
	{
		$session_data = $this->session->userdata('logged_in');
		$sessionid = $session_data['id'];
		
		$this->Profile_mdl->update($sessionid);

		redirect('home','refresh');
	}

	public function changepassword_form()
	{
		$session_data = $this->session->userdata('logged_in');
		$sessionid = $session_data['id'];
		$data['datalist'] = $this->Home_mdl->list($sessionid);


		$data['profilelist'] = $this->Profile_mdl->edit($sessionid);

		$data['innerdata'] ="profile_changepassword";
		$this->load->view('cvtemplate',$data);

	}

	public function changepassword()
	{	
		$this->Profile_mdl->changepassword();

		redirect('home','refresh');
	}
}
