<?php
function doPagination($total_rows, $pageSize= 20, $segment = 2, $base_url) {
	$config = array();
	$config['total_rows'] = $total_rows;
	$config['per_page'] = $pageSize;
	$config['uri_segment'] = $segment;
	$config['base_url'] = $base_url;
	$config['use_page_numbers'] = TRUE;
	$config['num_links'] = 5;

	$config['next_link'] = '>> Next';
	$config['prev_link'] = 'Last <<';
	$config['first_link'] = "First";
	$config['last_link'] = "Last";

	return $config;
}
?>