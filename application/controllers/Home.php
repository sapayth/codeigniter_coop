<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index() {
		$this->load->view('header');
		$this->load->view('index');
		$this->load->view('footer');
	}

	public function widgets() {
		$this->load->view('header');
		$this->load->view('pages/widgets');
		$this->load->view('footer');
	}
}