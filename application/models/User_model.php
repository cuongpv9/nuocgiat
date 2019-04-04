<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {
	public function check_login($phone, $password)
	{
		$query = $this->db
						  ->from('users')
						  ->where('user_phone', $phone)
						  ->where('user_password', $password)
						  ->get();
		if ($query->num_rows() == 1)
			return TRUE;
		else
			return FALSE;
	}

	public function get_user($phone)
	{
		$query = $this->db
						  ->from('users')
						  ->where('user_phone', $phone)
						  ->get();
		if ($query->num_rows() == 1)
			return $query->row_array();
		else
			return FALSE;	
	}
}

/* End of file User_model.php */
/* Location: ./application/models/User_model.php */