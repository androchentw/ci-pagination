<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Post extends CI_Controller {
	public function index($pageIndex = 1) {
		$this->load->model("PostModel");

		$pageSize = 5;
		$segment = 3;
		$this->load->helper("util");
		$pageConfig = doPagination($this->PostModel->count_entries(), $pageSize, $segment, site_url("/post/index/"));
		$this->load->library("pagination");
		$this->pagination->initialize($pageConfig, $pageIndex);

		$entries = $this->PostModel->get_paginated_entries($pageIndex, $pageSize);

		$this->load->view('post', Array(
			"pageTitle" => "CI-Pagination - posts page",
			"selector" => "post",
			"posts" => $entries,
			"pageLinks" => $this->pagination->create_links()
		));
	}
}