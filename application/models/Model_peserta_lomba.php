<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_peserta_lomba  extends CI_Model {
  public function __construct()
  {
    parent::__construct();
    $this->load->database();
  }


 function select(){
    $this->db->select('a.*,b.*,c.*,d.*');
    $this->db->from('tb_peserta_lomba a');
    $this->db->join('tb_peserta b', 'a.id_peserta = b.id_peserta');
    $this->db->join('tb_lomba c', 'a.id_lomba = c.id_lomba');
    $this->db->join('tb_tpq d', 'b.id_tpq = d.id_tpq');
    $this->db->group_by('a.id_peserta');
    
  
    $result=$this->db->get();
    return  $result->result();

  
}


 function select_all(){
    $this->db->select('a.*,b.*,c.*,d.*');
    $this->db->from('tb_peserta_lomba a');   
    $this->db->join('tb_peserta b', 'a.id_peserta = b.id_peserta');
    $this->db->join('tb_lomba c', 'a.id_lomba = c.id_lomba');
    $this->db->join('tb_tpq d', 'b.id_tpq = d.id_tpq');
    
  
    $result=$this->db->get();
    return  $result->result();

  
}


 function add($data)
  {
    $this->db->insert('tb_peserta_lomba', $data);
  }

  function update($id, $data)
  {
    $this->db->where('id_peserta_lomba', $id);
    $this->db->update('tb_peserta_lomba', $data);
  }

  function delete($id)
  {
    $this->db->where('id_peserta', $id);
    $this->db->delete('tb_peserta_lomba');
  }



}