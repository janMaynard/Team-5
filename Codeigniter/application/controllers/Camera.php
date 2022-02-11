<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Camera extends CI_Controller {

	public function index()
	{
		$this->load->view('camera');
	}
}