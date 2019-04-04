<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
	}

	public function view($page = 'login')
	{
		if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
			show_404();

    	if($page == 'login' && isset($_SESSION['account']))
    		redirect('dashboards','refresh');
		if($page != 'login' && ! isset($_SESSION['account']))
		{
			$this->session->set_flashdata('msg', 'Vui lòng đăng nhập để tiếp tục	');
			redirect('','refresh');
		}
		
		$this->load->view('pages/'.$page);
	}

}

/* End of file Pages.php */
/* Location: ./application/controllers/Pages.php */