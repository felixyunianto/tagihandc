<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {

	public function index()
	{
		$this->load->view('header');
		$this->load->view('profil/index');
		$this->load->view('footer');
	}

}

/* End of file profil.php */
/* Location: ./application/controllers/profil.php */