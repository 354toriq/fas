<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_daftar_peserta_lomba extends CI_Controller {
	  
	public function __construct()
    {
        parent::__construct();
        $this->load->library(array('form_validation', 'pagination','session')); 
        $this->load->helper('url');
        $this->load->model('model_peserta_lomba');
        $this->load->model('model_lomba');
        $this->load->model('model_tpq');

    }
	public function index()
	{
		$this->load->view('home_beranda/header_beranda');
        $this->load->view('home_beranda/navigation_beranda');
		$data['table_peserta_lomba']  = $this->model_peserta_lomba->select_all();
		$data['table_lomba']  = $this->model_lomba->select();
		$data['table_tpq']  = $this->model_tpq->select();
		$this->load->view('daftar_peserta_lomba/daftar_peserta_lomba',$data);
		$this->load->view('home_beranda/footer_beranda');
		$this->load->view('daftar_peserta_lomba/footer_daftar_lomba',$data);
		
	}

	
}
