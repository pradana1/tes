<?php 

class Tentang_kami extends CI_Controller {
	public function index() {
		
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('tentang_kami');
		$this->load->view('template/footer');
	}
}

?>