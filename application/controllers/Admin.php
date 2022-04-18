<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function __construct()
     {
          parent::__construct();
          is_logged_in();
		$this->load->model(['ModelUser','ModelTransaksi','ModelJadwal','ModelPeserta','ModelJadwal']);


     }
	public function index()
	{	
		
		  // Search

		  if ($this->input->post('Search')) {

			$data['keyword'] = $this->input->post('keyword');
			$this->session->set_userdata('keyword',$data['keyword']);
		  }
		  else {
			$data['keyword']= $this->session->set_userdata('keyword');
		  }
	  
		  // config
		   $this->db->like('id_jadwal',$data['keyword']);
		   $this->db->from('jadwal');
	  
		   $config['base_url']='http://localhost/PROJECT/BISTIR/Admin/index';
		   $config['total_rows'] = $this->db->count_all_results();
		   $config['num_links']=1;
	  
		   $data['total_rows'] = $config['total_rows'];
		   $config['per_page']=7;
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
	  
		
		$data['judul'] = 'Dashboard';
		$data['subjudul'] = 'Courses';
		$data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
		$data['transaksi'] = $this->ModelTransaksi->cekData(['id_trans' => $this->session->userdata('id_trans')])->row_array();
		$data['jadwal'] = $this->ModelJadwal->cekData(['id_jadwal' => $this->session->userdata('id_jadwal')])->row_array();
		$data['start'] = $this->uri->segment(3);
		$data['jadwal'] = $this->ModelJadwal->tampil_data($config['per_page'],$data['start'],$data['keyword'])->result_array();
		$data['row'] = $this->ModelJadwal->get_relasi();
		$this->load->view('admin/admin_header' ,$data);
		$this->load->view('admin/index',$data);
		$this->load->view('admin/admin_footer', $data);
	}

}
