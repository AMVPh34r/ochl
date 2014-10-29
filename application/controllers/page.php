<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Page extends CI_Controller {

	public function index() {
		$this->load->view('home');
	}

	public function show($page) {
		$this->load->view($page);
	}
}

/* End of file page.php */
/* Location: ./application/controllers/page.php */