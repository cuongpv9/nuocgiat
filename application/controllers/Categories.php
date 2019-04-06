<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categories extends CI_Controller {

	public function process()
	{
		print_r($_POST);
		print_r($_FILES);
		$data = array(
			'category_title' => $this->input->post('category_title'),
			'category_describe' => $this->input->post('category_describe'),
			'category_sort' => $this->input->post('category_sort'),
			'category_avatar' => microtime(TRUE).$_FILES['category_avatar']['name'],
		);

		$config['upload_path']          = 'public/uploads/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 1000;
        $config['max_width']            = 1024;
        $config['max_height']           = 1024;
        $config['file_name']			= $data['category_avatar'];

       	$this->load->library('upload', $config);
        if($this->upload->do_upload('category_avatar'))
        {
        	$data['category_avatar'] = $this->upload->data('file_name');
        	$this->category_model->insert($data);
        	redirect('dashboard_categories','refresh');
        }
        else
        {
        	$error = array('error' => $this->upload->display_errors());
        	print_r($error);
        }

	}

}

/* End of file Categories.php */
/* Location: ./application/controllers/Categories.php */