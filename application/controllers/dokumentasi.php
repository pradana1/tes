<?php 

class Dokumentasi extends CI_Controller {
	public function index() {
		
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('dokumentasi');
		$this->load->view('template/footer');
	}
}

?>