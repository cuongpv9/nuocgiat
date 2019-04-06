<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category_model extends CI_Model {
	public function insert($data)
	{
		$this->db->insert('categories', $data);
		return TRUE;
	}

	public function get_categories()
	{
		$query = $this->db->get('categories');
		if ($query->num_rows() >= 1)
			return $query->result_array();
		else
			return FALSE;
	}
	

}

/* End of file Category_model.php */
/* Location: ./application/models/Category_model.php */