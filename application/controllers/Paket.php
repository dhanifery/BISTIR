<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Paket extends CI_Controller {
	public function __construct()
     {
          parent::__construct();
          is_logged_in();
		$this->load->model(['ModelUser','ModelPaket']);


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
	
		$this->db->like('nama',$data['keyword']);
		$this->db->from('paket');
		$config['total_rows'] = $this->db->count_all_results();
		$data['total_rows'] = $config['total_rows'];
		$config['base_url']='http://localhost/PROJECT/BISTIR/Paket/index';
	
		$config['num_links']=1;
		$config['per_page']=5;
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


		$this->pagination->initialize($config);

		$data['judul'] = 'Data Paket';
		$data['subjudul'] = 'Daftar Paket';
		$data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
		$data['start'] = $this->uri->segment(3);
		$data['paket'] = $this->ModelPaket->tampil_data($config['per_page'],$data['start'],$data['keyword'])->result_array();
		$this->load->view('admin/admin_header' ,$data);
		$this->load->view('admin/paket/tampil_paket',$data);
		$this->load->view('admin/admin_footer', $data);
	}


	// tambah paket
	function tambahPaket()
        {
           $this->form_validation->set_rules('nama', 'Nama', 'required|min_length[2]',
            array('min_length'=> '%s Minimal 2 karakter !'));

           $this->form_validation->set_rules('byk_pertemuan', 'Banyak Pertemuan', 'required');

		   $this->form_validation->set_rules('harga', 'Harga', 'required');

           $this->form_validation->set_message('required', '%s masih kosong, silahkan isi !');

           if ($this->input->post('Search')) {

              $data['keyword'] = $this->input->post('keyword');
              $this->session->set_userdata('keyword',$data['keyword']);
           }
           else {
              $data['keyword']= $this->session->set_userdata('keyword');
           }

           // config

            $this->db->like('nama',$data['keyword']);
            $this->db->from('paket');
            $config['total_rows'] = $this->db->count_all_results();
            $data['total_rows'] = $config['total_rows'];
            $config['base_url']='http://localhost/PROJECT/BISTIR/Paket/index';

            $config['num_links']=1;
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

           if ($this->form_validation->run()== false)
            {
                 $this->pagination->initialize($config);

				 $data['judul'] = 'Data Paket';
				 $data['subjudul'] = 'Daftar Paket';
			
				 $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
				 $data['start'] = $this->uri->segment(3);
				 $data['paket'] = $this->ModelPaket->tampil_data($config['per_page'],$data['start'],$data['keyword'])->result_array();
				 $this->load->view('admin/admin_header' ,$data);
				 $this->load->view('admin/paket/tampil_paket',$data);
				 $this->load->view('admin/admin_footer', $data);
            }
            else {
              $nama=$this->input->post('nama');
              $harga=$this->input->post('harga');
              $byk_pertemuan=$this->input->post('byk_pertemuan');

              $data = array(
                'nama' => $nama,
                'harga' => $harga,
                'byk_pertemuan' => $byk_pertemuan

              );
              $this->ModelPaket->input_data($data, 'paket');
              if ($this->db->affected_rows() > 0 ) {
                   echo "<script>alert('Data Berhasil disimpan');</script>";
                 }
                 echo "<script>window.location='".site_url('Paket')."';</script>";
            }

        }


		  // edit paket
		  public function edit($id)
		  {
			$query = $this->ModelPaket->get($id);
			if($query->num_rows() > 0) {
			  $paket = $query->row();
	 
			  $data = array(
				'page' => 'edit',
				'row' => $paket
			  );
	 
			  $where = array('id' => $id );
			  $data['judul'] ='paket';
			  $data['subjudul'] ='Edit paket';
			  $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
			  $this->load->view('admin/admin_header',$data);
			  $this->load->view('admin/paket/edit_paket' ,$data);
			  $this->load->view('admin/admin_footer', $data);
			}else {
			  echo "<script>alert('Data berhasil disimpan');</script>";
			  echo "<script>window.location='".site_url('Paket')."';</script>";
			}
		  }

		//   proses paket

		  public function proses()
		  {
			   $post = $this->input->post(null, TRUE);
		 if (isset($_POST['add'])) {
		   $this->ModelPaket->add($post);
		 } else if (isset($_POST['edit'])) {
		   $this->ModelPaket->edit($post);
		 }
		 if ($this->db->affected_rows() > 0 ) {
		   echo "<script>alert('Data berhasil disimpan');</script>";
		 }
		 echo "<script>window.location='".site_url('Paket')."';</script>";
		  }
	 
	 
		  // hapus data paket
		  function hapus($id) {
			$where = array('id' => $id );
			$this->ModelPaket->hapus_data($where,'paket');
			if ($this->db->affected_rows() > 0 ) {
			   echo "<script>alert('Data Berhasil dihapus');</script>";
			}
			echo "<script>window.location='".site_url('Paket')."';</script>";
		  }

}
