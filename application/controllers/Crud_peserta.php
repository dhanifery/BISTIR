<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud_peserta extends CI_Controller {
     public function __construct()
	{
		parent::__construct();
		is_logged_in();
		$this->load->model(['ModelUser','ModelPeserta']);


	}

     // CRUD PESERTA
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

    
		 $this->db->like('username',$data['keyword']);
		 $this->db->from('peserta');
		 $config['total_rows'] = $this->db->count_all_results();
		 $data['total_rows'] = $config['total_rows'];
		 $config['base_url']='http://localhost/PROJECT/BISTIR/Crud_peserta/index';

		 $config['num_links']=1;
		 $config['per_page']=4;
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

     $data['judul'] ='Data Peserta';
     $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
     $data['start'] = $this->uri->segment(3);
     $data['peserta'] = $this->ModelPeserta->tampil_data($config['per_page'],$data['start'],$data['keyword'])->result();
     $this->load->view('admin/admin_header',$data);
     $this->load->view('admin/peserta/admin_peserta' ,$data);
     $this->load->view('admin/admin_footer', $data);




	}
     function tambahPeserta()
        { 

          if ($this->input->post('Search')) {

              $data['keyword'] = $this->input->post('keyword');
              $this->session->set_userdata('keyword',$data['keyword']);
          }
          else {
              $data['keyword']= $this->session->set_userdata('keyword');
          }

           $this->form_validation->set_rules('username', 'Nama', 'required|min_length[2]',
            array('min_length'=> '%s Minimal 2 karakter !'));

           $this->form_validation->set_rules('JK_peserta', 'Jenis Kelamin', 'required');
           $this->form_validation->set_rules('TTL_peserta', 'Tanggal Lahir', 'required');
           $this->form_validation->set_rules('email_peserta', 'Email', 'required');
           $this->form_validation->set_rules('no_telp', 'No Telp', 'required');
           $this->form_validation->set_rules('alamat_peserta', 'Alamat', 'required');
           $this->form_validation->set_rules('JK_peserta', 'Jenis Kelamin', 'required');

           $this->form_validation->set_message('required', '%s masih kosong, silahkan isi !');

             // config

            $this->db->like('username',$data['keyword']);
            $this->db->from('peserta');
            $config['total_rows'] = $this->db->count_all_results();
            $data['total_rows'] = $config['total_rows'];
            $config['base_url']='http://localhost/PROJECT/BISTIR/Crud_peserta/index';

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

            $config['upload_path']          = './assets/images/upload/';
            $config['allowed_types']        = 'jpg|png|jpeg|PNG';
            $config['max_size']             = '4048';
            $config['max_width']            = '4024';
            $config['max_height']           = '4068';
            $config['file_name'] = 'img' . time();


            $this->load->library('upload', $config);
            if ($this->form_validation->run()== false)
              {
                  $data['judul'] ='Data Peserta';
                  $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
                  $data['start'] = $this->uri->segment(3);
                  $data['peserta'] = $this->ModelPeserta->tampil_data($config['per_page'],$data['start'],$data['keyword'])->result();
                  $this->load->view('admin/admin_header',$data);
                  $this->load->view('admin/peserta/admin_peserta' ,$data);
                  $this->load->view('admin/admin_footer', $data);
              } else { 
                if ($this->upload->do_upload('image')) {
                  $image = $this->upload->data();
                  $image = $image['file_name'];
                } else {
                    $image = ''; 
                }
                $data = [
                  'username' => $this->input->post('username', true),
                  'email_peserta' => $this->input->post('email_peserta', true),
                  'alamat_peserta' => $this->input->post('alamat_peserta', true),
                  'no_telp' => $this->input->post('no_telp', true),
                  'TTL_peserta' => $this->input->post('TTL_peserta',true),
                  'JK_peserta' => $this->input->post('JK_peserta', true),
                  'image' => $image
                ];

                $this->ModelPeserta->input_data($data);
                if ($this->db->affected_rows() > 0 ) {
                    echo "<script>alert('Data Berhasil disimpan');</script>";
                  }
                  echo "<script>window.location='".site_url('Crud_peserta')."';</script>";
              }

        }

     // edit peserta
     public function edit($id_peserta)
     {
       $query = $this->ModelPeserta->get($id_peserta);
       if($query->num_rows() > 0) {
         $peserta = $query->row();

         $data = array(
           'page' => 'edit',
           'row' => $peserta
         );

         $where = array('id_peserta' => $id_peserta );
         $data['judul'] ='Peserta';
         $data['subjudul'] ='Edit Peserta';
         $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
         $this->load->view('admin/admin_header',$data);
         $this->load->view('admin/peserta/admin_edit_peserta' ,$data);
         $this->load->view('admin/admin_footer', $data);
       }else {
         echo "<script>alert('Data berhasil disimpan');</script>";
         echo "<script>window.location='".site_url('Crud_peserta')."';</script>";
       }
     }

     
     public function proses()
     {
      $config['upload_path']          = './assets/images/upload/';
      $config['allowed_types']        = 'jpg|png|jpeg|PNG|jfif';
      $config['max_size']             = '4048';
      $config['file_name'] = 'img' . time();


      $this->load->library('upload', $config);
      $post = $this->input->post(null, TRUE);
      if (isset($_POST['add'])) {
        $this->ModelPeserta->add($post);
      } else if (isset($_POST['edit'])) {
        if (@$_FILES['image'] != null) {
          if ($this->upload->do_upload('image')) {
            $post['image'] = $this->upload->data('file_name');
            $this->ModelPeserta->edit($post);
            if ($this->db->affected_rows() > 0 ) {
              echo"<script>alert('Data Berhasil diubah');</script>";
            }
            echo "<script>window.location='".site_url('Crud_peserta')."';</script>";
          }else {
            $post['image'] = null;
            $this->ModelPeserta->edit($post); 
          if ($this->db->affected_rows() > 0 ) {
            echo"<script>alert('Data Berhasil diubah');</script>";
          }
          echo "<script>window.location='".site_url('Crud_peserta')."';</script>";;
          }
        }else {
          $post['image'] = null;
          $this->ModelPeserta->edit($post); 
          if ($this->db->affected_rows() > 0 ) {
            echo"<script>alert('Data Berhasil diubah');</script>";
          }
          echo "<script>window.location='".site_url('Crud_peserta')."';</script>";
        }

      }

    }
      


     // hapus data peserta
     function hapusPeserta($id_peserta) {
       $where = array('id_peserta' => $id_peserta );
       $this->ModelPeserta->hapus_data($where,'peserta');
       if ($this->db->affected_rows() > 0 ) {
          echo "<script>alert('Data Berhasil dihapus');</script>";
       }
       echo "<script>window.location='".site_url('Crud_peserta')."';</script>";
     }

}
