<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penilaian_kandidat extends CI_Controller {

	public function index()
	{
		$this->load->view('superadmin/template/v_header');
		$this->load->view('superadmin/template/v_sidebar');
		$this->load->view('superadmin/v_penilaian_kandidat');
		$this->load->view('superadmin/template/v_footer');
	}
}
