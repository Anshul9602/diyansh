<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Residential extends CI_Controller {

	public function index()
	{
		$this->load->helper('url');
		$this->load->view('Header');
		$this->load->view('resi');
		$this->load->view('footer');
	}
}