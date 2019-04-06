<?php 
session_destroy();
$this->session->set_flashdata('msg', 'Đăng nhập thành công!');
redirect('login','refresh');
?>