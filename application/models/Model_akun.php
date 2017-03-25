<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_akun  extends CI_Model {
  public function __construct()
  {
    parent::__construct();
    $this->load->database();
  }


 function select(){
    $this->db->select('*');
    $this->db->from('tb_akun');
    
  
    $result=$this->db->get();
    return  $result->result();

  
}


 function add($data)
  {
    $this->db->insert('tb_akun', $data);
  }

  function update($id, $data)
  {
    $this->db->where('id_akun', $id);
    $this->db->update('tb_akun', $data);
  }

  function delete($id)
  {
    $this->db->where('id_akun', $id);
    $this->db->delete('tb_akun');
  }



}