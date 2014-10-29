<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

if (!function_exists('get_template')) {
	/**
	* Returns the current set site template
	*
	* @return string The current site template
	*/
	function get_template() {
		$CI =& get_instance();

		// $result = $CI->db->get_where('vars',array('var'=>'TEMPLATE'))->row();
		return 'styles/default/';
	}
}