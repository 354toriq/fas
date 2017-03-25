<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_peserta  extends CI_Model {
  public function __construct()
  {
    parent::__construct();
    $this->load->database();
  }

    
  function select(){
    $this->db->select('a.id_peserta,a.id_tpq,a.nama_peserta,a.jenkel,a.tgl_daftar,b.nama_tpq,b.id_tpq,a.status,c.date');
    $this->db->from('tb_peserta a');
    $this->db->from('tb_pelaksana c');
    $this->db->join('tb_tpq b', 'a.id_tpq = b.id_tpq');
    
  
    $result=$this->db->get();
    return  $result->result();

  
}

  function select_lomba_1(){
    $this->db->select('a.*,b.*,c.*');
    $this->db->from('tb_peserta a');
    $this->db->join('tb_peserta_lomba b', 'a.id_peserta = b.id_peserta');
    $this->db->join('tb_tpq c', 'a.id_tpq = c.id_tpq');
    
  
    $result=$this->db->get();
    return  $result->result();
}



 function select_tpq(){
    $this->db->select('*');
    $this->db->from('tb_tpq');
    
  
    $result=$this->db->get();
    return  $result->result();

  
}

  function select_lomba(){
    $this->db->select('*');
    $this->db->from('tb_lomba');
    
  
    $result=$this->db->get();
    return  $result->result();

  
}


  function add($data)
  {
    $this->db->insert('tb_peserta', $data);
    return $this->db->insert_id();
  }

  function update($id, $data)
  {
    $this->db->where('id_peserta', $id);
    $this->db->update('tb_peserta', $data);
  }

  function delete($id)
  {
    $this->db->where('id_peserta', $id);
    $this->db->delete('tb_peserta');
  }



}