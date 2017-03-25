    <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_login extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->library(array('form_validation', 'pagination','session')); 
        $this->load->helper('url');
        $this->load->model('Model_login');
        $this->load->view('login/header');

    }
    
    public function index()
    {
        $this->load->view('login/login');
        $this->load->view('login/footer');
        //$this->load->view('login/js_login_admin');
    }

    public function act_login()
    {
            $username = $this->input->post('username');
            $password = $this->input->post('password');


            $cek = $this->Model_login->login($username, $password);
            $userdata = $this->Model_login->data($username);


            if ($cek > 0) {

                $this->session->set_userdata('username', $username);
                $this->session->set_userdata('role', $userdata->role);
                $this->session->set_userdata('usercode', $userdata);

                if ($userdata->role >= '1') {
                     //echo "success";
                     redirect("beranda");
                } elseif($userdata->role >= '2') {
                    redirect("beranda");
               } 
            } else {
                echo " <script>
                alert('Gagal Login: Akun Anda Salah!');
                history.go(-1);
              </script>";
            }
        }
    }

