<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Guide extends CI_Controller {

	public function index() {
		$data['page_title'] = "Home";
		load_template('guides/home', $data);
	}

	public function show($guide, $page=1) {
		$data['page_title'] = ucfirst($guide);
		if (view_exists('guides/'.$guide.'/'.$page))
			load_template('guides/'.$guide.'/'.$page, $data);
		else {
			$data['page_title'] = '404 Error';
			load_template('error/404', $data);
		}
	}
}

/* End of file guide.php */
/* Location: ./application/controllers/guide.php */