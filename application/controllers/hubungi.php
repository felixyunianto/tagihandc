<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hubungi extends CI_Controller {

	public function index()
	{
		$this->load->view('header');
		$this->load->view('hubungi/index');
		$this->load->view('footer');
	}

}

/* End of file hubungi.php */
/* Location: ./application/controllers/hubungi.php */