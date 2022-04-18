<?php
defined('BASEPATH') or exit('No direct script access allowed');
class ModelTransaksi extends CI_Model
{
     public function cekData($where = null)
     {
          return $this->db->get_where('transaksi', $where);
     }
 
     function tampil_data($limit,$start,$keyword = null)
     {
      if ($keyword) {
        $this->db->like('id_trans',$keyword);
      }

      $query = $this->db->get('transaksi',$limit,$start);
      return $query;
     }

    //  relasi tabel

     function get_relasi($id = null)
     {
        $this->db->select('transaksi.*, jadwal.id_peserta as peserta_name, 
        jadwal.kode_jadwal as jadwal_kode, pembayaran.nama as nama_pembayaran, status_trans.status as status_nama');
        $this->db->from('transaksi');
        $this->db->join('pembayaran','pembayaran.id_pembayaran = transaksi.id_pembayaran','inner');
        $this->db->join('jadwal','jadwal.id_jadwal = transaksi.id_jadwal','inner');
        $this->db->join('status_trans','status_trans.id_status = transaksi.id_status','inner');
        if ($id != null) {
          $this->db->where('id_trans',$id);
        }
        $query = $this->db->get();
        return $query;
     }



    public function simpanData($data = null)
    {
        $this->db->insert('transaksi', $data);
    }


    function hapus_data($where,$table) {
      $this->db->where($where);
      $this->db->delete($table);

   }
}
