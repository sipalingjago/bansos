<?php

function admin_url() {
	
	$CI =& get_instance();
	
	$admin_url = $CI->config->item('admin_url');
	
	return $admin_url;
	
}

?>