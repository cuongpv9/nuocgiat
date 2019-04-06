<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
	}

	public function view($page = 'home')
	{
		$data['page'] = $page;
		$data['categories'] = $this->category_model->get_categories();
		$page_explode = explode('_', $page);
		# Check link is exist
		if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
			show_404();
		# Check session is exist
    	if($page == 'login' && isset($_SESSION['account']))
    		redirect('dashboards','refresh');
		if(($page_explode[0] == 'dashboard' || $page == 'dashboards') && ! isset($_SESSION['account']))
		{
			$this->session->set_flashdata('msg', 'Vui lòng đăng nhập để tiếp tục	');
			redirect('login','refresh');
		}

		if($page == 'login')
			$this->load->view('pages/'.$page, $data, FALSE);
		elseif($page == 'home')
			$this->load->view('pages/'.$page, $data, FALSE);
		else
		{
			$this->load
					   ->view('pages/dashboard_header')
					   ->view('pages/'.$page, $data)
					   ->view('pages/dashboard_bottom');
		}
			
	}

}

/* End of file Pages.php */
/* Location: ./application/controllers/Pages.php */