<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Page extends CI_Controller {

	public function index() {
		$data['page_title'] = "Home";
		load_template('home', $data);
	}

	public function show($page) {
		$data['page_title'] = ucfirst($page);
		if (view_exists($page))
			load_template($page, $data);
		else {
			$data['page_title'] = '404 Error';
			load_template('error/404', $data);
		}
	}
}

/* End of file page.php */
/* Location: ./application/controllers/page.php */