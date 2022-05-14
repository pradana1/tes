<?php 

class Legalitas extends CI_Controller {
	public function index() {
		
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('legalitas');
		$this->load->view('template/footer');
	}
}

?>