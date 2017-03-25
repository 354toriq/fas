<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_beranda extends CI_Controller {
	  
	public function __construct()
    {
        parent::__construct();
        $this->load->library(array('form_validation', 'pagination','session')); 
        $this->load->helper('url');
        $this->load->view('home_beranda/header_beranda');
        $this->load->view('home_beranda/navigation_beranda');
    }
	public function index()
	{
		$this->load->view('home_beranda/home_beranda');
		$this->load->view('home_beranda/footer_beranda');
	}
}
