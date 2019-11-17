<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller {

	public function index()
	{	
		$this->load->view('member/index');
	}

}

/* End of file Order.php */
/* Location: ./application/controllers/Order.php */