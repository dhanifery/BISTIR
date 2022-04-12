<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal extends CI_Controller {
     public function __construct()
	{
		parent::__construct();
		is_logged_in();
		$this->load->helper('url');
		$this->load->model(['ModelUser','ModelJadwal','ModelPeserta','ModelInstruktur']);


	}
	
	function index()
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
     $this->db->like('kode_jadwal',$data['keyword']);
     $this->db->from('jadwal');

     $config['base_url']='http://localhost/PROJECT/BISTIR/Jadwal/index';
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


    // inisialisasi
     $this->pagination->initialize($config);

     $data['judul'] ='Jadwal';
	 $data['subjudul'] = 'Daftar Jadwal';
	 $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
     $data['start'] = $this->uri->segment(3);
	 $data['Jadwal'] = $this->ModelJadwal->get_relasi()->result();
     $data['jadwal'] = $this->ModelJadwal->tampil_data($config['per_page'],$data['start'],$data['keyword'])->result_array();
	 
	 $this->load->view('admin/admin_header',$data);
	 $this->load->view('admin/jadwal/tampil_jadwal' ,$data);
	 $this->load->view('admin/admin_footer', $data);

  	}





    public function tambah()
    {
      $jadwal = new stdClass();
      $jadwal->id_jadwal = null;
      $jadwal->kode_jadwal = null;
      $jadwal->id_peserta = null;
      $jadwal->id_instr = null;
      $jadwal->id = null;
      $jadwal->jenis_mobil = null;
      $jadwal->tgl_latihan = null;
      $jadwal->jam_latihan = null;

        $instruktur = $this->ModelInstruktur->index();
        $peserta = $this->ModelPeserta->index();
        $paket = $this->ModelPaket->get();


        $data = array(
          'page' => 'add',
          'row' => $jadwal,
          'instruktur' => $instruktur,
          'peserta' => $peserta,
          'paket' => $paket,
        );

        $data['judul'] = 'Data jadwal';
        $data['user'] = $this->db->get_where('user',['name'=>
        $this->session->userdata('name')])->row_array();
        $this->load->view('utama/v_header',$data);
        $this->load->view('jadwal/v_tambah',$data);
        $this->load->view('utama/v_footer',$data);

    }
    public function proses()
    {
      $post = $this->input->post(null, TRUE);
      if (isset($_POST['add'])) {
        $this->ModelJadwal->add($post);
      } else if (isset($_POST['edit'])) {
        $this->ModelJadwal->edit($post);
      }
      if ($this->db->affected_rows() > 0 ) {
           echo "<script>alert('Data Berhasil disimpan');</script>";
      }
      echo "<script>window.location='".site_url('Crud')."';</script>";
    }

    public function detail()
    {
         $data['judul'] ='Jadwal';
         $data['user'] = $this->db->get_where('user',['name'=>
         $this->session->userdata('name')])->row_array();
         $data['jadwal'] = $this->ModelJadwal->get_relasi()->result();
         $this->load->view('utama/v_header',$data);
         $this->load->view('jadwal/v_detail', $data);
         $this->load->view('utama/v_footer',$data);
    }

}