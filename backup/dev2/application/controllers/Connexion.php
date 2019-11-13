<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Connexion extends CI_Controller {

	public function index()
	{
		$this->load->helper('assets');
		$this->load->view('connexion/index');
	}
}
