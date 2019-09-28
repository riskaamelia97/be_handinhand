<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    //load model
    public function __construct()
    {
            parent::__construct();
            $this->load->model('user_model');
           // $this->load->model('mlogin');
    }
      
    //halaman login
	public function index()
	{

        //validasi
        $valid = $this->form_validation;

      $valid->set_rules('username','Username','required',
       array('required' => 'Username harus diisi'));

        $valid->set_rules('password','Password','required|min_length[6]',
        array('required' => 'Password harus diisi',
                'min_length' => ' Password minimal 6 karakter'));

       if ($valid->run() === FALSE) 
        {
            $data = array('title' => 'Login Administrator');
            $this->load->view('login_view',$data, FALSE);
            //check username dan password compare dengan database
        }else{
            $i = $this->input;
            $username = $i->post('username');
            $password = $i->post('password');
           // $data = array('username' => $this->input->post('username', TRUE),
						//'password' => md5($this->input->post('password', TRUE))
			     // );
            //check di database
           // $check_login = $this->user_model->login($username,$password);
            //kalau ada record, maka create session dan redirect ke halaman dasbor
          
           // $this->load->model('mlogin'); // load model_user
            $hasil = $this->user_model->cek_user($username,$password);
            if ($hasil->num_rows() == 1)  {

              foreach ($hasil->result() as $sess) {
                $sess_data['logged_in'] = 'Sudah Loggin';
                $sess_data['id_user'] = $sess->id_user;
                $sess_data['username'] = $sess->username;
                $sess_data['nama'] = $sess->nama;
                $sess_data['level'] = $sess->level;
                $sess_data['password'] = $sess->password;
                $this->session->set_userdata($sess_data);
              }
              if ($this->session->userdata('level')=='1') {
               
                      //  echo "<script>alert('Login Successfuly! Login as Admin');history.go(-1);</script>";
                        redirect(base_url('admin/dashboard'),'refresh');
              }
              elseif ($this->session->userdata('level')=='2') {
                       // echo "<script>alert('Login Successfuly! Login as Superadmin');history.go(-1);</script>";
                        redirect(base_url('masteradmin/dashboard'),'refresh');
              }		
             //$datauser = $this->user_model->login($username,$password)->row_array();
           //  $sessions = array('id_user' => $datauser['id_user'] ,
            //                    'nama' => $datauser['nama'],
            //                    'username' => $datauser['username'],
            //                   'level' => $datauser['level'] );
            //   $this->session->set_userdata($sessions);
            //  $this->session->set_userdata('username', $username);
             //   $this->session->set_userdata('password', $password);
             //  $this->session->set_userdata('id_user', $check_login->id_user);
             //   $this->session->set_userdata('nama', $check_login->nama);
 
                
                
           // redirect(base_url('admin/dashboard'),'refresh');
                
            }else{
             $this->session->set_flashdata('sukses', 'username atau password tidak cocok');
               redirect(base_url('login'),'refresh');
               echo "gagal"; die();
                }
        }
    }
    



   
   


    
    //logout
    public function logout()
    {
        //$this->session->sess_destroy();
        $this->session->unset_userdata('username');
		    $this->session->unset_userdata('level');
        $this->session->set_flashdata('sukses', 'Logout success');
        redirect(base_url('login'),'refresh');
      
    }






}

