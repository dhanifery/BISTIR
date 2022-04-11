<?php
defined('BASEPATH') or exit('No direct script access allowed');
class ModelUser extends CI_Model
{
     public function index()
     {
          return $this->db->get('user');
     }

     public function cekData($where = null)
     {
          return $this->db->get_where('user', $where);
     }

    public function simpanData($data = null)
    {
        $this->db->insert('user', $data);
    }

    function get($id = null)
     {
       $this->db->from('user');
       if($id != null){
         $this->db->where('id',$id);
       }
       $query = $this->db->get();
       return $query;
     }

     public function add($post)
     {
       $params = [
         'name' =>  $post['name'],
         'email' => $post['email'],
         'image' => $post['image'],
         'role_id' => $post['role_id'],
         'password' => $post['password'],
       ];
       $this->db->insert('user',$params);

     }

     public function edit($post)
     {
       $params = [
           'name' =>  $post['name'],
           'email' => $post['email'],
           'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
           'image' => $post['image'],
       ];
       $this->db->where('id', $post['id']);
       $this->db->update('user',$params);
     }

     public function edit_user($post)
     {
       $params = [
           'name' =>  $post['name'],
           'email' => $post['email'],
           'role_id' => $post['role_id'],
       ];
       $this->db->where('id', $post['id']);
       $this->db->update('user',$params);
     }

     function tampil_data($limit,$start,$keyword = null)
     {
      if ($keyword) {
        $this->db->like('name',$keyword);
      }

      return $this->db->get('user',$limit,$start);
     }

  function countuser()
  {
     return $this->db->get('user')->num_rows();
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
