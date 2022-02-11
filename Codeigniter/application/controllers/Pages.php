<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

	public function site()
	{
		$this->load->view('site');
	}

	public function services()
	{
		$this->load->view('Services');
	}

	public function signup()
	{
		$this->load->view('SignUp');
	}

	public function gadgetstore()
	{
		$this->load->view('Gadgetstore');
	}
	
	public function mobile()
	{
		$this->load->view('Mobile');
	}

	public function desktop()
	{
		$this->load->view('Desktop');
	}

	public function laptop()
	{
		$this->load->view('Laptop');
	}

	public function camera()
	{
		$this->load->view('Camera');
	}

	public function router()
	{
		$this->load->view('Router');
	}

	public function printer()
	{
		$this->load->view('Printer');
	}

	public function accessories()
	{
		$this->load->view('Accessories');
	}

	public function acer_nitro_5()
	{
		$this->load->view('Acer_Nitro_5');
	}

	public function apple_iphone_13()
	{
		$this->load->view('Apple_iPhone_13');
	}

	public function asus_rtax55()
	{
		$this->load->view('Asus_RTAX55');
	}

	public function black_shark_4()
	{
		$this->load->view('Black_Shark_4');
	}

	public function canon_eos_3000d()
	{
		$this->load->view('Canon_Eos_3000D');
	}

	public function canon_pixma_g1010()
	{
		$this->load->view('Canon_Pixma_G1010');
	}

	public function edifier_x100()
	{
		$this->load->view('Edifier_X100');
	}

	public function logitech_z120()
	{
		$this->load->view('Logitech_Z120');
	}

	public function payment()
	{
		$this->load->view('Payment');
	}

	public function payment_details()
	{
		$this->load->view('Payment_Details');
	}
}
