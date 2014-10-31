<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog extends CI_Controller {

	// TODO rework all of this for database
	public function index() {
		$data['page_title'] = "Blog";
		load_template(array('blog', 'blog-sidebar'), $data);
	}

	public function show($id) {
		$data['page_title'] = "Blog Post";
		if (view_exists('blog/'.$id)) {
			load_template(array('blog/'.$id, 'blog-sidebar'), $data);
		} else {
			$data['page_title'] = '404 Error';
			load_template('error/404', $data);
		}
	}
}

/* End of file page.php */
/* Location: ./application/controllers/page.php */