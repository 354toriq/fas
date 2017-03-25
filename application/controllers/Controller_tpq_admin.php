<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_tpq_admin extends CI_Controller {
	  
	public function __construct()
    {
        parent::__construct();
        $this->load->library(array('form_validation', 'pagination','session')); 
        $this->load->helper('url');
        $this->load->model('model_tpq');

    }
	public function index()
	{
		$this->load->view('home_beranda/header_beranda');
        $this->load->view('home_beranda/navigation_beranda');
		$data['table_tpq']  = $this->model_tpq->select();
		$this->load->view('admin_tpq/admin_tpq_home',$data);
		$this->load->view('home_beranda/footer_beranda');
		$this->load->view('admin_tpq/footer_tpq',$data);
		
	}

	 public function tambah_tpq(){
            $nama_tpq           = $this->input->post('nama_tpq');
            $wilayah_tpq        = $this->input->post('wilayah_tpq');

           
          $add_tpq=array(
                'id_tpq'     	    =>  '',
                'nama_tpq'      	=>  $nama_tpq,
                'wilayah_tpq'       =>  $wilayah_tpq              
            );
            $this->model_tpq->add($add_tpq);
            $data['table_tpq']  = $this->model_tpq->select();
            $this->load->view('admin_tpq/view_table',$data);



            
    } 


    public function refresh_tpq(){ 
                $id = $this->input->post('id_tpq');
                $data['table_tpq']  = $this->model_tpq->select();
                $this->load->view('admin_tpq/modal_tpq',$data);


    }

        public function delete_tpq(){ 
                $id = $this->input->post('id_tpq');
                $this->model_tpq->delete($id);
                $data['table_tpq']  = $this->model_tpq->select();
                $this->load->view('admin_tpq/view_table',$data);


    }

    public function edit_tpq(){
            $nama_tpq           = $this->input->post('nama_tpq');
            $id_tpq             = $this->input->post('id_tpq');
            $wilayah_tpq        = $this->input->post('wilayah_tpq');   
               

                $data=array(                
                'nama_tpq'          =>  $nama_tpq,
                'wilayah_tpq'       =>  $wilayah_tpq,);
                $this->model_tpq->update($id_tpq,$data);
                $data['table_tpq']  = $this->model_tpq->select();
                $this->load->view('admin_tpq/view_table',$data);

      
      }
}
