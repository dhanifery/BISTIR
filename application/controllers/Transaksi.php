<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		is_logged_in();
		$this->load->helper('url');
		$this->load->model(['ModelUser','ModelTransaksi','ModelJadwal','ModelPeserta','ModelInstruktur']);


	}
	public function index()
	{	
		if ($this->input->post('Search')) {

		$data['keyword'] = $this->input->post('keyword');
		$this->session->set_userdata('keyword',$data['keyword']);
		}
		else {
		$data['keyword']= $this->session->set_userdata('keyword');
		}
		
		
		$this->db->like('id_trans',$data['keyword']);
		$this->db->from('transaksi');
		$config['total_rows'] = $this->db->count_all_results();
		$data['total_rows'] = $config['total_rows'];
		$config['base_url']='http://localhost/PROJECT/BISTIR/Transaksi/index';

		$config['num_links']=1;
		$config['per_page']=3;
		$config['full_tag_open']='<nav aria-label="Page navigation example"><ul class="pagination">';
		$config['full_tag_close']='</ul></nav>';

		$config['first_link']='First';
		$config['first_tag_open']='<li class="page-item">';
		$config['first_tag_close']='</li">';

		$config['last_link']='Last';
		$config['last_tag_open']='<li class="page-item">';
		$config['last_tag_close']='</li">';

		$config['next_link']='&raquo';
		$config['next_tag_open']='<li class="page-item">';
		$config['next_tag_close']='</li">';

		$config['prev_link']='&laquo';
		$config['prev_tag_open']='<li class="page-item">';
		$config['prev_tag_close']='</li">';


		$config['cur_tag_open']='<li class="page-item active"><a class="page-link" href="#">';
		$config['cur_tag_close']='</a></li">';

		$config['num_tag_open']='<li class="page-item active">';
		$config['num_tag_close']='</li">';

		$config['attributes'] = array('class' => 'page-link');



		$data['judul'] = 'Transaksi';
		$data['subjudul'] = 'List Transaksi';
		$data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
		$data['start'] = $this->uri->segment(3);

		
		$data['row'] = $this->ModelTransaksi->get_relasi();
		$this->db->where('id_status',1);
		$data['trans'] = $this->ModelTransaksi->tampil_data($config['per_page'],$data['start'],$data['keyword'])->result_Array();
		
		$this->load->view('admin/admin_header',$data);
		$this->load->view('admin/transaksi/index' ,$data);
		$this->load->view('admin/admin_footer', $data);
	}


	// hapus data peserta
	function hapusTrans($id_trans) {
	$where = array('id_trans' => $id_trans);
	$this->ModelTransaksi->hapus_data($where,'transaksi');
	if ($this->db->affected_rows() > 0 ) {
		echo "<script>alert('Data Berhasil dihapus');</script>";
	}
	echo "<script>window.location='".site_url('Transaksi')."';</script>";
	}
}
