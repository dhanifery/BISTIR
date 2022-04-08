<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud_admin extends CI_Controller {
     public function __construct()
	{
		parent::__construct();
		is_logged_in();
          $this->load->helper('url');
		$this->load->model(['ModelUser']);


	}

     public function index()
     {

     $data['judul'] ='Data admin';
     $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
     $this->db->where('role_id',1);
     $data['anggota'] = $this->db->get('user')->result_array();

     $this->load->view('admin/admin_header',$data);
     $this->load->view('admin/admin/tampil_admin',$data);
     $this->load->view('admin/admin_footer', $data);




	}
     function tambahadmin()
        {
           $this->form_validation->set_rules('name', 'Nama', 'required|min_length[2]',
            array('min_length'=> '%s Minimal 2 karakter !'));

           $this->form_validation->set_rules('password', 'required');

           $this->form_validation->set_message('required', '%s masih kosong, silahkan isi !');

           if ($this->form_validation->run()== false)
            {
                 $data['judul'] ='Data admin';
                 $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
                 $this->db->where('role_id',1);
                 $data['anggota'] = $this->db->get('user')->result_array();

                 $this->load->view('admin/admin_header',$data);
                 $this->load->view('admin/admin/tampil_admin' ,$data);
                 $this->load->view('admin/admin_footer', $data);
            }
            else {
                 $data = [
                  'name' => htmlspecialchars($this->input->post('name')),
                  'email' => htmlspecialchars($this->input->post('email')),
                  'image' => 'default.jpg',
                  'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                  'role_id' => '1',
                  'is_active' => '1',
                  'date_created' =>time()
                ];
              $this->ModelUser->input_data($data, 'user');
              if ($this->db->affected_rows() > 0 ) {
                   echo "<script>alert('Data Berhasil disimpan');</script>";
                 }
                 echo "<script>window.location='".site_url('Crud_admin')."';</script>";
            }

        }

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
         $data['judul'] ='Admin';
         $data['subjudul'] ='Edit admin';
         $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
         $this->load->view('admin/admin_header',$data);
         $this->load->view('admin/admin/edit_admin' ,$data);
         $this->load->view('admin/admin_footer', $data);
       }else {
         echo "<script>alert('Data berhasil disimpan');</script>";
         echo "<script>window.location='".site_url('Crud_admin')."';</script>";
       }
     }
     public function proses()
     {
          $post = $this->input->post(null, TRUE);
    if (isset($_POST['add'])) {
      $this->ModelUser->add($post);
    } else if (isset($_POST['edit'])) {
      $this->ModelUser->edit($post);
    }
    if ($this->db->affected_rows() > 0 ) {
      echo "<script>alert('Data berhasil disimpan');</script>";
    }
    echo "<script>window.location='".site_url('Crud_admin')."';</script>";
     }

     function hapus($id) {
       $where = array('id' => $id );
       $this->ModelUser->hapus_data($where,'user');
       if ($this->db->affected_rows() > 0 ) {
          echo "<script>alert('Data Berhasil dihapus');</script>";
       }
       echo "<script>window.location='".site_url('Crud_admin')."';</script>";
     }

}
