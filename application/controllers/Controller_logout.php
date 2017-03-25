<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Controller_logout extends CI_Controller {
  public function __construct()
  {
    parent::__construct();
    $this->load->library(array('session'));
    $this->load->helper('url');
  }
  
  public function index()
  {
    if($this->session->userdata('status') == 'admin') {
      $this->session->sess_destroy();

      redirect('home_login');
    } else {
      $this->session->sess_destroy();

      redirect('home_login');
    }
  }
}

?>