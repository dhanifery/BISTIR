<?php
defined('BASEPATH') or exit('No direct script access allowed');
class ModelJadwal extends CI_Model
{
     public function cekData($where = null)
     {
          return $this->db->get_where('jadwal', $where);
     }

    public function simpanData($data = null)
    {
        $this->db->insert('jadwal', $data);
    }

}
