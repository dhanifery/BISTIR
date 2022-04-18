<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		is_logged_in();
		$this->load->helper('url');
		$this->load->model('ModelUser');


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

		// config 

		 $this->db->like('name',$data['keyword']);
		 $this->db->from('user');
		 $config['total_rows'] = $this->db->count_all_results();
		 $data['total_rows'] = $config['total_rows'];
		 $config['base_url']='http://localhost/PROJECT/BISTIR/User/index';

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


		// inisialisasi
		 $this->pagination->initialize($config);

		$data['judul'] ='Data User';
		$data['subjudul'] ='List User';
		$data['form'] ='Form User';
	     	$data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
		$data['start'] = $this->uri->segment(3);
		$data['anggota'] = $this->ModelUser->tampil_data($config['per_page'],$data['start'],$data['keyword'])->result_array();

		$this->load->view('admin/admin_header',$data);
		$this->load->view('admin/admin/tampil_user',$data);
		$this->load->view('admin/admin_footer', $data);
		}
	function tambahuser()
	   {
		 $this->form_validation->set_rules('name', 'Nama', 'required|min_length[2]',
		  array('min_length'=> '%s Minimal 2 karakter !'));

		 $this->form_validation->set_rules('password', 'Password', 'required|min_length[3]',
		 array('min_length'=> '%s Minimal 3 karakter !'));

		 $this->form_validation->set_message('required', '%s masih kosong, silahkan isi !');
		 if ($this->input->post('Search')) {

 		   $data['keyword'] = $this->input->post('keyword');
 		   $this->session->set_userdata('keyword',$data['keyword']);
 		}
 		else {
 		   $data['keyword']= $this->session->set_userdata('keyword');
 		}

 		// config

 		 $this->db->like('name',$data['keyword']);
 		 $this->db->from('user');
 		 $config['total_rows'] = $this->db->count_all_results();
 		 $data['total_rows'] = $config['total_rows'];
 		 $config['base_url']='http://localhost/PROJECT/BISTIR/User/index';

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




		 if ($this->form_validation->run()== false)
		  {
			   	// inisialisasi
			  $this->pagination->initialize($config);

			  $data['judul'] ='Data admin';
			  $data['form'] ='Form User';
			  $data['subjudul'] ='List User';
			  $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
			  $data['start'] = $this->uri->segment(3);
			  $data['anggota'] = $this->ModelUser->tampil_data($config['per_page'],$data['start'],$data['keyword'])->result();


			  $this->load->view('admin/admin_header',$data);
			  $this->load->view('admin/admin/tampil_user' ,$data);
			  $this->load->view('admin/admin_footer', $data);
		  }
		  else {
			  $data = [
			   'name' => htmlspecialchars($this->input->post('name')),
			   'email' => htmlspecialchars($this->input->post('email')),
			   'image' => 'default.jpg',
			   'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
			   'role_id' => $this->input->post('role_id'),
			   'is_active' => '1',
			   'date_created' =>time()
			 ];
		    $this->ModelUser->input_data($data, 'user');
		    if ($this->db->affected_rows() > 0 ) {
			    echo "<script>alert('Data Berhasil disimpan');</script>";
			  }
			  echo "<script>window.location='".site_url('User')."';</script>";
		  }

	   }

	   // edit user
	   public function edit($id)
        {
          $query = $this->ModelUser->get($id);
          if($query->num_rows() > 0) {
            $admin = $query->row();

            $data = array(
              'page' => 'edit',
              'row' => $admin
            );

            $where = array('id' => $id );
            $data['judul'] ='User';
            $data['subjudul'] ='Edit User';
            $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
            $this->load->view('admin/admin_header',$data);
            $this->load->view('admin/admin/edit_user' ,$data);
            $this->load->view('admin/admin_footer', $data);
          }else {
            echo "<script>alert('Data berhasil disimpan');</script>";
            echo "<script>window.location='".site_url('User')."';</script>";
          }
        }


	   // proses edit

	   public function proses()
	   {
		   $post = $this->input->post(null, TRUE);
	  if (isset($_POST['add'])) {
	    $this->ModelUser->add($post);
    } else if (isset($_POST['edit'])) {
	    $this->ModelUser->edit_user($post);
	  }
	  if ($this->db->affected_rows() > 0 ) {
	    echo "<script>alert('Data berhasil disimpan');</script>";
	  }
	  echo "<script>window.location='".site_url('User')."';</script>";
	   }

	   // hapus data
	   function hapus($id) {
		$where = array('id' => $id );
		$this->ModelUser->hapus_data($where,'user');
		if ($this->db->affected_rows() > 0 ) {
		   echo "<script>alert('Data Berhasil dihapus');</script>";
		}
		echo "<script>window.location='".site_url('User')."';</script>";
	   }

}
