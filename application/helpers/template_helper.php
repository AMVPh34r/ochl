<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

if (!function_exists('view_exists')) {
	/**
	* Checks to see if the requested view exists for the given template.
	* 
	* @param  string $view The name of the view to check for.
	* @param  string $template The name of the template to check.
	* @return bool TRUE if the file exists, FALSE otherwise.
	*/
	function view_exists($view, $template='default') {
		return is_file(APPPATH.'views/'.$template.'/pages/'.$view.EXT);
	}
}

if (!function_exists('load_template')) {
	/**
	* Loads the requested view along with template files
	*
	* @param  string $view The name of the view to load.
	* @param  array  $data An array of data to pass to the view.
	* @param  string $template The name of the template to load.
	*/
	function load_template($view, $data=NULL, $template='default') {
		$CI =& get_instance();

		$template = strtolower($template);
		if (!$data) $data = array();
		$CI->load->view($template.'/header', $data);
		$CI->load->view($template.'/navbar', $data);
		$CI->load->view($template.'/pages/'.$view, $data);
		$CI->load->view($template.'/footer', $data);
	}
}

if (!function_exists('load_css')) {
	/**
	* Returns the HTML to load a given CSS file for a given template.
	*
	* @param  string $file The name of the CSS file to load.
	* @param  string $template The name of the template to load.
	*/
	function load_css($file, $template='default') {
		$CI =& get_instance();

		return link_tag('styles/'.$template.'/css/'.$file);
	}
}

if (!function_exists('load_js')) {
	/**
	* Returns the HTML to load a given Javascript file for a given template.
	*
	* @param  string $file The name of the .js file to load.
	* @param  string $template The name of the template to load.
	*/
	function load_js($file, $template='default') {
		$CI =& get_instance();

		return '<script src="'.base_url().'styles/'.$template.'/js/'.$file.'"></script>';
	}
}