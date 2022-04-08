<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function __construct()
     {
          parent::__construct();
          is_logged_in();
		$this->load->model(['ModelUser','ModelTransaksi','ModelJadwal']);


     }
	public function index()
	{	$data['judul'] = 'Dashboard';
		$data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
		$data['transaksi'] = $this->ModelTransaksi->cekData(['id_trans' => $this->session->userdata('id_trans')])->row_array();
		$data['jadwal'] = $this->ModelJadwal->cekData(['id_jadwal' => $this->session->userdata('id_jadwal')])->row_array();
		$this->load->view('admin/admin_header' ,$data);
		$this->load->view('admin/index',$data);
		$this->load->view('admin/admin_footer', $data);
	}

}
