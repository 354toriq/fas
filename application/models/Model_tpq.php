<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_tpq extends CI_Model {
  public function __construct()
  {
    parent::__construct();
    $this->load->database();
  }


 function select(){
    $this->db->select('*');
    $this->db->from('tb_tpq');
    
  
    $result=$this->db->get();
    return  $result->result();

  
}


 function add($data)
  {
    $this->db->insert('tb_tpq', $data);
  }

  function update($id, $data)
  {
    $this->db->where('id_tpq', $id);
    $this->db->update('tb_tpq', $data);
  }

  function delete($id)
  {
    $this->db->where('id_tpq', $id);
    $this->db->delete('tb_tpq');
  }



}