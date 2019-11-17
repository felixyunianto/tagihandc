<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Utama extends CI_Controller {

	function __construct(){
		parent::__construct();

	}
		
	public function index()
	{
		$this->load->view('header');
		$this->load->view('tam_utama');
		$this->load->view('footer');
	}

}

/* End of file Utama.php */
/* Location: ./application/controllers/Utama.php */