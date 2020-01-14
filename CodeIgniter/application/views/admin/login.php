<?php
if(isset($_SESSION['user']) || in_array($_SESSION['user']["role"], [1,2])) {
	redirect(base_url().'dashboard');
}
$this->load->view('/common/templates/header');
$this->load->view('/common/views/login');
$this->load->view('/common/templates/footer');
?>


