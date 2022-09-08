<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penilaian extends CI_Controller {

	public function index()
	{
		$this->load->view('superadmin/template/v_header');
		$this->load->view('superadmin/template/v_sidebar');
		$this->load->view('superadmin/v_penilaian');
		$this->load->view('superadmin/template/v_footer');
	}
}
