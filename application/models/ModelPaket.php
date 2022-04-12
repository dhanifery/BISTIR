<?php
class ModelPaket extends CI_Model
{

    function index()
    {
     return $this->db->get('paket');

    }

    function get($id = null)
     {
       $this->db->from('paket');
       if($id != null){
         $this->db->where('id',$id);
       }
       $query = $this->db->get();
       return $query;
     }

     public function add($post)
     {
       $params = [
         'nama' =>  $post['nama'],
         'harga' => $post['harga'],
         'byk_pertemuan' => $post['byk_pertemuan']
       ];
       $this->db->insert('paket',$params);

     }

     public function edit($post)
     {
       $params = [
            'nama' =>  $post['nama'],
           'harga' => $post['harga'],
           'byk_pertemuan' => $post['byk_pertemuan'],
       ];
       $this->db->where('id', $post['id']);
       $this->db->update('paket',$params);
     }

   function tampil_data($limit,$start,$keyword = null)
   {
    if ($keyword) {
      $this->db->like('nama',$keyword);
    }
    
    return $this->db->get('paket',$limit,$start);

   }
   function countPaket()
   {
     return $this->db->get('paket')->num_rows();
   }
   function input_data($data,$table)
   {
      $this->db->insert($table, $data);
   }

   function hapus_data($where,$table) {
      $this->db->where($where);
      $this->db->delete($table);

   }
}
