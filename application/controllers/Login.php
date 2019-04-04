<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function verify_account()
	{
		$data = array(
			'phone' 	=> $this->input->post('phone'),
			'password' 	=> sha1($this->input->post('password'))
		);
		if($data['phone'] != NULL AND $data['password'] != NULL)
		{
			if ($this->user_model->check_login($data['phone'], $data['password']))
			{
				$_SESSION['account'] = $this->user_model->get_user($data['phone']);
				redirect('dashboards','refresh');
			}
			else
			{
				$this->session->set_flashdata('msg', 'Thông tin đăng nhập không đúng!');
				redirect('','refresh');
			}
		}
		else
		{
			$this->session->set_flashdata('msg', 'Vui lòng đăng nhập để tiếp tục	');
			redirect('','refresh');
		}
	}

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */