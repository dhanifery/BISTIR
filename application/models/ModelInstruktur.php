<?php
/**
 *
 */
class ModelInstruktur extends CI_Model
{

    function index()
    { 
     return $this->db->get('instruktur');

    }

    function get($id_instr = null)
     {
       $this->db->from('instruktur');
       if($id_instr != null){
         $this->db->where('id_instr',$id_instr);
       }
       $query = $this->db->get();
       return $query;
     }

     public function add($post)
     {
       $params = [
         'username' =>  $post['username'],
         'email_instr' => $post['email_instr'],
         'alamat_instr' => $post['alamat_instr'],
         'telp_instr' => $post['telp_instr'],
         'TTL_instr' => $post['TTL_instr'],
         'JK_instr' => $post['JK_instr']
       ];
       $this->db->insert('instr',$params);

     }

     public function edit($post)
     {
       $params = [
            'username' =>  $post['username'],
           'alamat_instr' => $post['alamat_instr'],
           'telp_instr' => $post['telp_instr'],
           'TTL_instr' => $post['TTL_instr'],
           'JK_instr' => $post['JK_instr'],
           'honor_per_jam' => $post['honor_per_jam'],
       ];
       if($post['image'] != null) {
        $params['image'] = $post['image'];
      }   
       $this->db->where('id_instr', $post['id_instr']);
       $this->db->update('instruktur',$params);
     }

   function tampil_data($limit,$start,$keyword = null)
   {
    if ($keyword) {
      $this->db->like('username',$keyword);
    }

    return $this->db->get('instruktur',$limit,$start);

   }
   function countinstruktur()
   {
     return $this->db->get('instruktur')->num_rows();
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
