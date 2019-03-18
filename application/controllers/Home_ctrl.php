<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_ctrl extends CI_Controller {

	public function index()
	{
		$session_data = $this->session->userdata('logged_in');

		$sessionid = $session_data['id'];

		$data['datalist'] = $this->Home_mdl->list($sessionid);

		$data['educationlist'] = $this->Home_mdl->education($sessionid);
		$data['experiencelist'] = $this->Home_mdl->experience($sessionid);
		$data['languagelist'] = $this->Home_mdl->language($sessionid);
		$data['projectlist'] = $this->Home_mdl->project($sessionid);
		$data['skilllist'] = $this->Home_mdl->skill($sessionid);


		$data['innerdata'] ="home";

		$this->load->view('cvtemplate',$data);
	}
}
