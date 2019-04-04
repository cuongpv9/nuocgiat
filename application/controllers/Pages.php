<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

	public function view($page = 'login')
	{
		$this->load->view('login/login.php');
	}

}

/* End of file Pages.php */
/* Location: ./application/controllers/Pages.php */