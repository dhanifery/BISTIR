<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Peserta extends CI_Controller {
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
		$this->load->view('peserta/peserta_header',$data);
		$this->load->view('peserta/index' ,$data);
		$this->load->view('peserta/peserta_footer', $data);
	}
}
