<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CaraTransaksi extends CI_Controller {

	public function index()
	{
		$this->load->view('header');
		$this->load->view('cara-transaksi/index');
		$this->load->view('footer');
	}

}

/* End of file CaraTransaksi.php */
/* Location: ./application/controllers/CaraTransaksi.php */