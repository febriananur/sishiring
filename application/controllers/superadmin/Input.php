<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Input extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
        $this->load->helper(array('form', 'url'));
		$this->load->model('MInput','MInput');
        $this->load->library('form_validation');
	}

	public function index()
    {
        $data = [
            'jabatan_kosong' => $this->MInput->tampil_semua(),
        ];

        $this->load->view('superadmin/template/v_header');
		$this->load->view('superadmin/template/v_sidebar');
		$this->load->view('superadmin/v_input', $data);
		$this->load->view('superadmin/template/v_footer');
    }
	
	
	public function tambah()
    {
        $tambah = $this->MInput;
        $validation = $this->form_validation;
        $validation->set_rules($tambah->rules());
 
        if ($validation->run()) {
            $tambah->save();
            // $this->session->set_flashdata('success', 'Berhasil disimpan');
        }
 
        $data['jabatan_kosong'] = $this->MInput->tampil_semua();
        $this->load->view('superadmin/template/v_header');
		$this->load->view('superadmin/template/v_sidebar');
		$this->load->view('superadmin/v_input', $data);
		$this->load->view('superadmin/template/v_footer');      
    }

    public function edit($id = null)
    {
        // var_dump($id);

        $var = $this->MInput;

        $data['jabatan_kosong'] = $var->tampil_by_id($id);
        $this->load->view('superadmin/template/v_header');
        $this->load->view('superadmin/template/v_sidebar');
        $this->load->view('superadmin/v_input_edit', $data);
        $this->load->view('superadmin/template/v_footer');

    }

    public function proses_edit($id = null){
        // var_dump($id);

        $var = $this->MInput;
        $validation = $this->form_validation;
        $validation->set_rules($var->rules());

        if ($validation->run()) {
            $var->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }
        $data['jabatan_kosong'] = $var->tampil_by_id($id);
        $this->load->view('superadmin/template/v_header');
        $this->load->view('superadmin/template/v_sidebar');
        $this->load->view('superadmin/v_input_edit', $data);
        $this->load->view('superadmin/template/v_footer');

        redirect('superadmin/Input');
    }

	public function hapus($id)
    {
        $this->MInput->hapus($id);
        $this->session->set_flashdata('message', 'Dihapus');
        redirect('superadmin/input');
    }



}



	