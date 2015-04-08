<?php

class Site extends CI_Controller {

	function index() {
		echo 'hello';
		// $data['myValue'] = "some string";
		// $data['anotherValue'] = "another string";
		$this->load->model('site_model');
		$data['records'] = $this->site_model->getAll();
		$this->load->view('home');
	}

	function about() {
		$this->load->view('about');
	}
}

?>
