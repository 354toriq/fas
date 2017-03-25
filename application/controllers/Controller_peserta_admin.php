<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_peserta_admin extends CI_Controller {
	  
	public function __construct()
    {
        parent::__construct();
        $this->load->library(array('form_validation', 'pagination','session')); 
        $this->load->helper('url');
        $this->load->model('model_peserta');
        $this->load->model('model_tpq');
        $this->load->model('model_lomba');
        $this->load->model('model_peserta_lomba');

    }
	public function index()
	{
		$this->load->view('home_beranda/header_beranda');
        $this->load->view('home_beranda/navigation_beranda');
		$data['table_peserta']  = $this->model_peserta->select();
        $data['table_tpq']  = $this->model_tpq->select();
        $data['table_lomba']  = $this->model_lomba->select();
        $data['table_peserta_lomba']  = $this->model_peserta->select_lomba_1();
		$this->load->view('admin_peserta/admin_peserta_home',$data);
		$this->load->view('home_beranda/footer_beranda');
		$this->load->view('admin_peserta/footer_peserta',$data);
		
	}

	 public function tambah_peserta(){
            $input = json_decode(file_get_contents('php://input'));
            // $nama = $input->nama_peserta;
           
           
            $add_peserta=array(
                'id_peserta'     	    =>  '',
                'nama_peserta'      	=>  $input->nama_peserta,
                'id_tpq'                =>  $input->tpq_peserta,
                'jenkel'                =>  $input->jenkel,
                'status'                =>  "1",
                'tgl_daftar'            =>  date('Y-m-d')       
            );
             
            $add_pst = $this->model_peserta->add($add_peserta);
            foreach($input->lomba as $each){
                $array = array("id_peserta"=> $add_pst, "id_lomba" => $each);
                $add_pst_lomba = $this->model_peserta_lomba->add($array);
            }         
            $data['table_peserta']  = $this->model_peserta->select();
            $this->load->view('admin_peserta/view_table',$data);
            header('Content-Type: application/json');
            echo json_encode("aa");


            
    } 

    public function refresh_modal_peserta(){ 
                $id = $this->input->post('id_peserta');
                $data['table_peserta']  = $this->model_peserta->select();
                $data['table_tpq']  = $this->model_tpq->select();
                $data['table_lomba']  = $this->model_lomba->select();
                $this->load->view('admin_peserta/modal_peserta',$data);


    }

    public function peserta_refresh(){ 
                $nama_peserta = $this->input->post('nama_peserta');
                $data['table_peserta']  = $this->model_peserta->select();
                $this->load->view('admin_peserta/view_table',$data);


    }

        public function delete_peserta(){ 
                $id = $this->input->post('id_peserta');
                $this->model_peserta->delete($id);
                $this->model_peserta_lomba->delete($id);
                $data['table_peserta']  = $this->model_peserta->select();
                $this->load->view('admin_peserta/view_table',$data);


    }

    public function edit_pendaftaran(){
            $nama_peserta           = $this->input->post('nama_peserta');
            $id_peserta             = $this->input->post('id_peserta');
            $jenkel                 = $this->input->post('jenkel'); 
            $tpq_peserta            = $this->input->post('tpq_peserta'); 
               

                $data=array(                
                'nama_peserta'          =>  $nama_peserta,
                'id_tpq'                =>  $tpq_peserta,
                'jenkel'                =>  $jenkel   
                );
                $this->model_peserta->update($id_peserta,$data);
                $data['table_peserta']  = $this->model_peserta->select();
                $this->load->view('pendaftaran/view_table',$data);

      
      }

       public function delete_pendaftaran(){ 
                $id = $this->input->post('id_peserta');
                $this->model_peserta->delete($id);
                $this->model_peserta_lomba->delete($id);
                $data['table_peserta']  = $this->model_peserta->select();
                $this->load->view('pendaftaran/view_table',$data);


    }

    public function edit_peserta(){
            $nama_peserta           = $this->input->post('nama_peserta');
            $id_peserta             = $this->input->post('id_peserta');
            $jenkel                 = $this->input->post('jenkel'); 
            $tpq_peserta            = $this->input->post('tpq_peserta'); 
               

                $data=array(                
                'nama_peserta'          =>  $nama_peserta,
                'id_tpq'                =>  $tpq_peserta,
                'jenkel'                =>  $jenkel   
                );
                $this->model_peserta->update($id_peserta,$data);
                $data['table_peserta']  = $this->model_peserta->select();
                $this->load->view('admin_peserta/view_table',$data);

      
      }

      public function edit_status(){
            $status                 = $this->input->post('status');
            $id_peserta             = $this->input->post('id_peserta'); 
               

                $data=array(                
                'status'                    =>  $status,
                'id_peserta'                =>  $id_peserta   
                );
                $this->model_peserta->update($id_peserta,$data);
                $data['table_peserta_lomba']  = $this->model_peserta->select();
                $this->load->view('admin_peserta_lomba/view_table',$data);
                //$this->load->view('admin_peserta_lomba/footer_peserta_lomba');

      
      }

          public function edit_status_user(){
            $status                 = $this->input->post('status');
            $id_peserta             = $this->input->post('id_peserta'); 
               

                $data=array(                
                'status'                    =>  $status,
                'id_peserta'                =>  $id_peserta   
                );
                $this->model_peserta->update($id_peserta,$data);
                $data['table_peserta']  = $this->model_peserta->select();
                $this->load->view('pendaftaran/view_table',$data);
                //$this->load->view('admin_peserta_lomba/footer_peserta_lomba');

      
      }


       public function pendaftaran_user(){
            $this->load->view('home_beranda/header_beranda');
        $this->load->view('home_beranda/navigation_beranda');
        $data['table_peserta']  = $this->model_peserta->select();
        $data['table_tpq']  = $this->model_tpq->select();
        $data['table_lomba']  = $this->model_lomba->select();
        $data['table_peserta_lomba']  = $this->model_peserta->select_lomba_1();
        $data['all_lomba'] = $this->model_peserta->select_lomba();
        $arr = [];
        foreach($data['table_peserta_lomba'] as $each){
            array_push($arr,$each->id_lomba);
        }
        $data['lomba_dia']  = $arr;
        $this->load->view('pendaftaran/pendaftaran',$data);
        $this->load->view('home_beranda/footer_beranda');
        $this->load->view('pendaftaran/footer_pendaftaran',$data);

      
      }
}
