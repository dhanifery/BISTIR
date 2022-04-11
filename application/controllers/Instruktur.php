<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Instruktur extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		is_logged_in();
		$this->load->model('ModelUser');


	}
	public function index()
	{
		$data['judul'] = 'Dashboard';
		$data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('instruktur/instruktur_header',$data);
		$this->load->view('instruktur/index' ,$data);
		$this->load->view('instruktur/instruktur_footer', $data);
	}
}
