<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Page extends CI_Controller {

	public function index() {
		$data['page_title'] = "Home";
		load_template('home', $data);
	}

	public function show($page) {
		$data['page_title'] = ucfirst($page);
		load_template($page, $data);
	}
}

/* End of file page.php */
/* Location: ./application/controllers/page.php */