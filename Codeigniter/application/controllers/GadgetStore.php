<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GadgetStore extends CI_Controller {

	public function index()
	{
		$this->load->view('gadgetstore');
	}
}