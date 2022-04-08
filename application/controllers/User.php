<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		is_logged_in();
		$this->load->model('ModelUser');


	}
	public function index()
	{
		// $data['judul'] = 'Dashboard';
		// $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
		// $this->load->view('user/user_header',$data);
		// $this->load->view('user/index' ,$data);
		// $this->load->view('user/user_footer', $data);
		echo "selamat datang laman User";
	}
}
