<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
		
	public function index()
	{
		$this->load->view('superadmin/template/v_header');
		$this->load->view('superadmin/template/v_sidebar');
		$this->load->view('superadmin/v_dashboard');
		$this->load->view('superadmin/template/v_footer');
	}

	

}
