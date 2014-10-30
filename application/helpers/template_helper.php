<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

if (!function_exists('load_template')) {
	/**
	* Loads the requested view along with template files
	*
	* @param  string $view The name of the view to load.
	* @param  array  $data An array of data to pass to the view.
	* @param  string $template The name of the template to load.
	*/
	function load_template($view, $data=NULL, $template=NULL) {
		$CI =& get_instance();

		if (!$template)
			$template = 'default';
		else
			$template = strtolower($template);
		if (!$data)
			$data = array();
		$CI->load->view($template.'/header', $data);
		$CI->load->view($template.'/navbar', $data);
		$CI->load->view($template.'/pages/'.$view, $data);
		$CI->load->view($template.'/footer', $data);
	}
}