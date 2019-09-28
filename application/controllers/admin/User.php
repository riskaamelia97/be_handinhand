<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
        
    //load model
    public function __construct()
    {
            parent::__construct();
            $this->load->model('user_model');
    }
    

    //halaman utama
	public function index()
	{
            $user = $this->user_model->listing_user(); 
            $data = array('title' => 'Home',
                            'user' => $user,
                            'isi' => 'admin/user/list');
            $this->load->view('admin/layout/wrapper',$data, FALSE);
    }
    

        //halaman tambah user
        public function tambah_user()
        {
                //validasi
                $valid = $this->form_validation;

                $valid->set_rules('nama','Nama','required',
                array('required' => ' Nama harus diisi'));

                $valid->set_rules('username','Username','required|is_unique[tb_user.username]',
                array('required' => 'Username harus diisi',
                        'is_unique' => 'Username <strong>'.$this->input->post('username').'</strong> Sudah ada. 
                        Buat Username baru'));

                $valid->set_rules('password','Password','required|min_length[6]',
                array('required' => 'Password harus diisi',
                        'min_length' => ' Password minimal 6 karakter'));
                
                if ($valid->run()=== FALSE) {
                        
                
                $data = array('title' => 'Add User',
                                'isi' => 'admin/user/tambah_user');

                $this->load->view('admin/layout/wrapper',$data, FALSE);
                //ga ada error, maka masuk data base
                }else {
                $i = $this->input;
                $data = array(  'nama' => $i->post('nama'),
                                'username' => $i->post('username'),
                                'password' => md5($i->post('password')),
                                'no_hp' => $i->post('no_hp'), 
                                'level' => $i->post('level'));
                $this->user_model->tambah_user($data);
                $this->session->set_flashdata('sukses', ' User Successfully Added');
                redirect(base_url('admin/user'),'refresh');
                
        
        }
        //end masuk database
        } 

        //halaman edit user
        public function edit_user($id_user)
        {

        $user = $this->user_model->detail_user($id_user);

        //validasi
        $valid = $this->form_validation;

        $valid->set_rules('nama','Nama','required',
        array('required' => 'Nama harus diisi'));

        $valid->set_rules('username','Username','required|is_unique[tb_user.username]',
        array('required' => 'Username harus diisi',
                'is_unique' => 'Username <strong>'.$this->input->post('username').'</strong> Sudah ada. 
                Buat Username baru'));

       



        if ($valid->run()=== FALSE) {
                
                
        $data = array('title' => 'Edit User: '.$user->nama,
                        'user' => $user,
                        'isi' => 'admin/user/edit_user');

        $this->load->view('admin/layout/wrapper',$data, FALSE);
        //ga ada error, maka masuk data base
        }else {
        $i = $this->input;
        // jika password lebih dari 6 karakter
        if (strlen($i->post('password')) >6 ) {



        $data = array(  'id_user' => $id_user,
                        'nama' => $i->post('nama'),
                        'username' => $i->post('username'),
                        'password' => md5($i->post('password')),
                        'no_hp' => $i->post('no_hp'), 
                        'level' => $i->post('level')
                );

        }else{
        $data = array( 'id_user' => $id_user, 
                        'nama' => $i->post('nama'),
                        'username' => $i->post('username'),
                        'no_hp' => $i->post('no_hp'), 
                        'level' => $i->post('level')
                );

        }
        //endif
        $this->user_model->edit_user($data);
        $this->session->set_flashdata('sukses', ' User Successfully Updated');
        redirect(base_url('admin/user'),'refresh');


        }
        //end masuk database
        }   


        //delete user
        public function delete_user($id_user)
        {
        //proteksi hapus disini
        $data = array('id_user' => $id_user);
        $this->user_model->delete_user($data);
        $this->session->set_flashdata('sukses', ' User Successfully Deleted');
        redirect(base_url('admin/user'),'refresh');
        }




}