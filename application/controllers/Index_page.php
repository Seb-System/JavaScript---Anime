<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index_page extends CI_Controller {

	public function index()
	{
		$this->load->view('includes/head');
		$this->load->view('index');
	}
}
