<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_lomba_admin extends CI_Controller {
	  
	public function __construct()
    {
        parent::__construct();
        $this->load->library(array('form_validation', 'pagination','session')); 
        $this->load->helper('url');
        $this->load->model('model_lomba');

    }
	public function index()
	{
		$this->load->view('home_beranda/header_beranda');
        $this->load->view('home_beranda/navigation_beranda');
		$data['table_lomba']  = $this->model_lomba->select();
		$this->load->view('admin_lomba/admin_lomba_home',$data);
		$this->load->view('home_beranda/footer_beranda');
		$this->load->view('admin_lomba/footer_lomba',$data);
		
	}

	 public function tambah_lomba(){
            $nama_lomba        = $this->input->post('nama_lomba');
           
          $add_lomba=array(
                'id_lomba'     	    =>  '',
                'nama_lomba'      	=>  $nama_lomba                
            );
            $this->model_lomba->add($add_lomba);
            $data['table_lomba']  = $this->model_lomba->select();
            $this->load->view('admin_lomba/view_table',$data);



            
    } 


    public function refresh_lomba(){ 
                $id = $this->input->post('id_lomba');
                $data['table_lomba']  = $this->model_lomba->select();
                $this->load->view('admin_lomba/modal_lomba',$data);


    }

        public function delete_lomba(){ 
                $id = $this->input->post('id_lomba');
                $this->model_lomba->delete($id);
                $data['table_lomba']  = $this->model_lomba->select();
                $this->load->view('admin_lomba/view_table',$data);


    }

    public function edit_lomba(){
            $nama_lomba        = $this->input->post('nama_lomba');
            $id_lomba         = $this->input->post('id_lomba');   
               

                $data=array(                
                'nama_lomba'      =>  $nama_lomba);
                $this->model_lomba->update($id_lomba,$data);
                $data['table_lomba']  = $this->model_lomba->select();
                $this->load->view('admin_lomba/view_table',$data);

      
      }
}
