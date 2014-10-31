<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Error extends CI_Controller {

	public function index() {
		$data['page_title'] = "Error";
		load_template('error/unknown', $data);
	}

	public function show($code) {
		$data['page_title'] = 'Error '.$code;
		load_template('error/'.$code, $data);
	}
}

/* End of file error.php */
/* Location: ./application/controllers/error.php */