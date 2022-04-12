<?php
defined('BASEPATH') or exit('No direct script access allowed');
class ModelJadwal extends CI_Model
{
    function index()
    {
        return $this->db->get('jadwal');
    } 
    
    
    public function cekData($where = null)
     {
          return $this->db->get_where('jadwal', $where);
     }

    public function simpanData($data = null)
    {
        $this->db->insert('jadwal', $data);

    }

    function tampil_data($limit,$start,$keyword = null)
    {
      if ($keyword) {
        $this->db->like('kode_jadwal',$keyword);
      }
      return $this->db->get('jadwal',$limit,$start);
  
    }
    function get_relasi($id = null)
    {
       $this->db->select('jadwal.*, peserta.username as peserta_name, instruktur.username as instr_name, paket.nama as nama_paket');
       $this->db->from('jadwal');
       $this->db->join('peserta','peserta.id_peserta = jadwal.id_peserta','inner');
       $this->db->join('instruktur','instruktur.id_instr = jadwal.id_instr','inner');
       $this->db->join('paket','paket.id = jadwal.id','inner');
       if ($id != null) {
         $this->db->where('id_jadwal',$id);
       }
       return $this->db->get();
    }
  
    public function add($post)
    {
      $params = [
        'kode_jadwal' =>  $post['kode_jadwal'],
        'id_peserta' =>  $post['id_peserta'],
        'id_instr' => $post['id_instr'],
        'id' => $post['id'],
        'jenis_mobil' => $post['jenis_mobil'],
        'tgl_latihan' => $post['tgl_latihan'],
        'jam_latihan' => $post['jam_latihan']
  
      ];
      $this->db->insert('jadwal',$params);
  
    }
  
  
  
    function countJadwal()
    {
      return $this->db->get('jadwal')->num_rows();
    }

}
