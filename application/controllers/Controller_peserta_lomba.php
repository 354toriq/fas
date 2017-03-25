<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_peserta_lomba extends CI_Controller {
	  
	public function __construct()
    {
        parent::__construct();
        $this->load->library(array('form_validation', 'pagination','session')); 
        $this->load->helper('url');
        $this->load->model('model_peserta_lomba');

    }
	public function index()
	{
		$this->load->view('home_beranda/header_beranda');
        $this->load->view('home_beranda/navigation_beranda');
		$data['table_peserta_lomba']  = $this->model_peserta_lomba->select();
		$this->load->view('admin_peserta_lomba/admin_peserta_lomba_home',$data);
		$this->load->view('home_beranda/footer_beranda');
		$this->load->view('admin_peserta_lomba/footer_peserta_lomba',$data);
		
	}

	
}
