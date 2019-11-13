<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post_page extends CI_Controller {

	public function index($id)
	{
		$data['id'] = $id;
		$this->load->view('includes/head');
		$this->load->view('anime/index', $data);
	}
}
