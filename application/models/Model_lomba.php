<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_lomba  extends CI_Model {
  public function __construct()
  {
    parent::__construct();
    $this->load->database();
  }


 function select(){
    $this->db->select('*');
    $this->db->from('tb_lomba');
    
  
    $result=$this->db->get();
    return  $result->result();

  
}


 function add($data)
  {
    $this->db->insert('tb_lomba', $data);
  }

  function update($id, $data)
  {
    $this->db->where('id_lomba', $id);
    $this->db->update('tb_lomba', $data);
  }

  function delete($id)
  {
    $this->db->where('id_lomba', $id);
    $this->db->delete('tb_lomba');
  }



}