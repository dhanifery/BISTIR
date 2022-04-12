<?php
class ModelPeserta extends CI_Model
{

    function index()
    {
     return $this->db->get('peserta');

    }

    function get($id_peserta = null)
     {
       $this->db->from('peserta');
       if($id_peserta != null){
         $this->db->where('id_peserta',$id_peserta);
       }
       $query = $this->db->get();
       return $query;
     }

     public function add($post)
     {
       $params = [
         'username' =>  $post['username'],
         'email_peserta' => $post['email_peserta'],
         'alamat_peserta' => $post['alamat_peserta'],
         'no_telp' => $post['no_telp'],
         'TTL_peserta' => $post['TTL_peserta'],
         'JK_peserta' => $post['JK_peserta']
       ];
       $this->db->insert('peserta',$params);

     }

     public function edit($post)
     {
       $params = [
            'username' =>  $post['username'],
           'email_peserta' => $post['email_peserta'],
           'alamat_peserta' => $post['alamat_peserta'],
           'no_telp' => $post['no_telp'],
           'TTL_peserta' => $post['TTL_peserta'],
           'JK_peserta' => $post['JK_peserta'],
       ];
       $this->db->where('id_peserta', $post['id_peserta']);
       $this->db->update('peserta',$params);
     }

   function tampil_data($limit,$start,$keyword = null)
   {
    if ($keyword) {
      $this->db->like('username',$keyword);
    }
    
    return $this->db->get('peserta',$limit,$start);

   }
   function countPeserta()
   {
     return $this->db->get('peserta')->num_rows();
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
