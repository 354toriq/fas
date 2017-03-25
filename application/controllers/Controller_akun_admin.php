<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_akun_admin extends CI_Controller {
	  
	public function __construct()
    {
        parent::__construct();
        $this->load->library(array('form_validation', 'pagination','session')); 
        $this->load->helper('url');
        $this->load->model('model_akun');

    }
	public function index()
	{
		$this->load->view('home_beranda/header_beranda');
        $this->load->view('home_beranda/navigation_beranda');
		$data['table_akun']  = $this->model_akun->select();
		$this->load->view('admin_akun/admin_akun_home',$data);
		$this->load->view('home_beranda/footer_beranda');
		$this->load->view('admin_akun/footer_akun',$data);
		
	}

	 public function tambah_akun(){
            $username        = $this->input->post('username');
            $password        = $this->input->post('password');
            $role       	 = $this->input->post('role');
           
          $add_akun=array(
                'id_akun'     	=>  '',                
                'username'     	=>  $username,                
                'password'     	=>  $password,
                'role'      	=>  $role                
            );
            $this->model_akun->add($add_akun);
            $data['table_akun']  = $this->model_akun->select();
            $this->load->view('admin_akun/view_table',$data);



            
    } 

        public function delete_akun(){ 
                $id = $this->input->post('id_akun');
                $this->model_akun->delete($id);
                $data['table_akun']  = $this->model_akun->select();
            	$this->load->view('admin_akun/view_table',$data);


    }

    public function refresh_akun(){ 
                $id = $this->input->post('id_akun');
                $data['table_akun']  = $this->model_akun->select();
                $this->load->view('admin_akun/modal_akun',$data);


    }

    public function edit_akun(){
            $username        = $this->input->post('username');
            $password        = $this->input->post('password');
            $role            = $this->input->post('role'); 
            $id_akun         = $this->input->post('id_akun');   
               

                $data=array(                
                'username'      =>  $username,                
                'password'      =>  $password,
                'role'          =>  $role   );
                $this->model_akun->update($id_akun,$data);
                $data['table_akun']  = $this->model_akun->select();
                $this->load->view('admin_akun/view_table',$data);

      
      }
}
