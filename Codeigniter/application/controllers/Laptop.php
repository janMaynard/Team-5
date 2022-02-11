<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laptop extends CI_Controller {

	public function index()
	{
		$this->load->view('laptop');
	}
}