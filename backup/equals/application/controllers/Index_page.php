<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index_page extends CI_Controller {

	public function index()
	{
		$this->load->view('includes/head');
		$data['popup'] = $this->load->view('includes/popup');
		$data['header'] = $this->load->view('includes/header');
		$this->load->view('index', $data);
	}
}
