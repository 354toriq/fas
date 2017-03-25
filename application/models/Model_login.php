<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_login extends CI_Model {
  public function __construct()
  {
    parent::__construct();
    $this->load->database();
  }
  
  
  public function login($username, $password)
  {
    $username_special = htmlspecialchars($this->db->escape($username));
    $password_password = htmlspecialchars($this->db->escape($password));
    $this->db->select('*');
    $this->db->from('tb_akun');
    $this->db->where("username = $username_special "); 
    $this->db->where("password =$password_password");
    $query = $this->db->get();
    return $query->num_rows();
  }
  
  
  public function data($username)
  {
   $username_special = htmlspecialchars($this->db->escape($username));    
   $this->db->select('role');
   $this->db->where("username = $username_special"); 
   
   $query = $this->db->get('tb_akun');
   
   return $query->row();
  }



  
}  

?>
