<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

        //load model
        public function __construct()
        {
                parent::__construct();
                $this->load->model('about_model');
        }
        

        //halaman utama
	public function index()
	{
                $sejarah = $this->about_model->listing_sejarah();
                $kontak = $this->about_model->listing_kontak(); 
                $sosmed = $this->about_model->listing_sosmed(); 
                $data = array('title' => 'About',
                                'sejarah' => $sejarah,
                                'kontak' => $kontak,
                                'sosmed' => $sosmed,
                                'isi' => 'masteradmin/about/list');
                $this->load->view('masteradmin/layout/wrapper',$data, FALSE);
        }
        
        //halaman edit sejarah
        public function edit_sejarah($id_sejarah)
        {
                $sejarah = $this->about_model->detail_sejarah($id_sejarah);
                
        


                //validasi
                $valid = $this->form_validation;


                $valid->set_rules('sejarah','Sejarah','required',
                array('required' => 'Sejarah harus diisi'));

                
                

                if ($this->form_validation->run() == FALSE)
                {
                        $data = array('title' => 'Edit History  ',
                        'sejarah' => $sejarah,
                        'isi' => 'masteradmin/about/edit_sejarah');

                        $this->load->view('masteradmin/layout/wrapper',$data, FALSE);
                }
                else
                {
                        $i = $this->input;
                        $data = array(  'id_sejarah' => $id_sejarah,
                        'sejarah' => $i->post('sejarah')
                        
                        );

                        $this->about_model->edit_sejarah($data);
                        $this->session->set_flashdata('sukses', ' History Successfully Updated');
                        redirect(base_url('masteradmin/about'),'refresh');
                        
                
                
                }
        }
        
        
        //halaman tambah kontak
        public function tambah_kontak()
        {
             
                //validasi
                $valid = $this->form_validation;

                $valid->set_rules('no_telp','Nomor Telepon','required',
                array('required' => ' Nomor Telepon harus diisi'));

                $valid->set_rules('alamat','Alamat','required',
                array('required' => ' Alamat harus diisi'));
                
                if ($valid->run()=== FALSE) {
                        
                
                $data = array('title' => 'Add Contact',
                                'isi' => 'masteradmin/about/tambah_kontak');

                $this->load->view('masteradmin/layout/wrapper',$data, FALSE);
                //ga ada error, maka masuk data base
                }else {
                $i = $this->input;
                $data = array(  'no_telp' => $i->post('no_telp'),
                                'alamat' => $i->post('alamat')
                                );
                $this->about_model->tambah_kontak($data);
                $this->session->set_flashdata('sukses', ' Contact successfully Added');
                redirect(base_url('masteradmin/about'),'refresh');
                
        
        }
        //end masuk database
        } 




        //halaman edit kontak
        public function edit_kontak($id_kontak)
        {

        $kontak = $this->about_model->detail_kontak($id_kontak);

        //validasi
        $valid = $this->form_validation;

        $valid->set_rules('no_telp','Nomor Telepon','required',
        array('required' => ' Nomor Telepon harus diisi'));

        $valid->set_rules('alamat','Alamat','required',
        array('required' => ' Alamat harus diisi'));

        
        

        if ($this->form_validation->run() == FALSE)
        {
                $data = array('title' => 'Edit Contact',
                'kontak' => $kontak,
                'isi' => 'masteradmin/about/edit_kontak');

                $this->load->view('masteradmin/layout/wrapper',$data, FALSE);
        }
        else
        {
                $i = $this->input;
                $data = array(     'id_kontak' => $id_kontak,
                                        'no_telp' => $i->post('no_telp'),
                                        'alamat' => $i->post('alamat')
                
                );

                $this->about_model->edit_kontak($data);
                $this->session->set_flashdata('sukses', ' Contact Successfully Updated');
                redirect(base_url('masteradmin/about'),'refresh');
                
        
        
        }
        }   



        //delete kontak
        public function delete_kontak($id_kontak)
        {
        //proteksi hapus disini
        $data = array('id_kontak' => $id_kontak);
        $this->about_model->delete_kontak($data);
        $this->session->set_flashdata('sukses', ' Contact Successfully Deleted');
        redirect(base_url('masteradmin/about'),'refresh');
        }



        //halaman tambah sosmed
        public function tambah_sosmed()
        {

                //validasi
                $valid = $this->form_validation;

                $valid->set_rules('nama_sosmed','Nama Sosmed','required',
                array('required' => ' Nama Sosmed harus diisi'));

                
                
                if ($valid->run()=== FALSE) {
                        
                
                        $data = array('title' => 'Add Social Media',
                                        'isi' => 'masteradmin/about/tambah_sosmed');
        
                        $this->load->view('masteradmin/layout/wrapper',$data, FALSE);
                        //ga ada error, maka masuk data base
                        }else {
                        
                        $logo_sosmed = $_FILES['logo_sosmed'];
                        $nama_sosmed = $this->input->post('nama_sosmed');
                        $jenis_sosmed = $this->input->post('jenis_sosmed');
                        $link_sosmed = $this->input->post('link_sosmed');
                        
                        if ($logo_sosmed='') {} else{
                                $config['upload_path']  = './assets/upload/logo';
                                $config['allowed_types'] = 'jpg|png|jpeg|gif';

                                $this->load->library('upload', $config);
                                $this->upload->initialize($config);
                                if (!$this->upload->do_upload('logo_sosmed')) {
                                        echo "upload gagal"; die();
                                }else{
                                        $logo_sosmed=$this->upload->data('file_name');
                                }
                       
                        }
                        $data = array(  
                                'logo_sosmed'    => $logo_sosmed,
                                'nama_sosmed' => $nama_sosmed,
                                'jenis_sosmed' => $jenis_sosmed,
                                'link_sosmed'  => $link_sosmed 
                                        );
                        
                



               $this->about_model->tambah_sosmed($data);
               $this->session->set_flashdata('sukses', ' Social Media Successfully Added');
                redirect(base_url('masteradmin/about'),'refresh');
                
                                }
        }
        //end masuk database



        //halaman edit sosmed
        //public function edit_sosmed($id_sosmed)
        //{

        // $sosmed = $this->about_model->detail_sosmed($id_sosmed);

        //validasi
        // $valid = $this->form_validation;

        //  $valid->set_rules('nama_sosmed','Nama Sosmed','required',
        // array('required' => ' Nama Sosmed harus diisi'));






        //if ($valid->run()=== FALSE) {
                
                
        //$data = array('title' => 'Edit Sosmed: '.$sosmed->nama_sosmed,
        //             'sosmed' => $sosmed,
        //              'isi' => 'admin/about/edit_sosmed');

        //$this->load->view('admin/layout/wrapper',$data, FALSE);
        //ga ada error, maka masuk data base
        //}else {
        //   $logo_sosmed = $_FILES['logo_sosmed'];
        //   $id_sosmed = $this->input->post('id_sosmed');
        //   $nama_sosmed = $this->input->post('nama_sosmed');
        //   $jenis_sosmed = $this->input->post('jenis_sosmed');
        //   $link_sosmed = $this->input->post('link_sosmed');
                
        //   if ($logo_sosmed='') {} else{
                //      $config['upload_path']  = './assets/upload/logo';
                //        $config['allowed_types'] = 'jpg|png|jpeg|gif';

                //        $this->load->library('upload', $config);
                //       $this->upload->initialize($config);
                //       if (!$this->upload->do_upload('logo_sosmed')) {
                //                echo "upload gagal"; die();
                //        }else{
                //               $logo_sosmed=$this->upload->data('file_name');
                //      }
        
        //  }
        //    $data = array(  
                //       'id_sosmed'     => $id_sosmed,
                //       'logo_sosmed'    => $logo_sosmed,
                //        'nama_sosmed' => $nama_sosmed,
                //       'jenis_sosmed' => $jenis_sosmed,
                //      'link_sosmed'  => $link_sosmed );


        // $this->about_model->edit_sosmed($data);
        // $this->session->set_flashdata('sukses', ' Data telah diupdate');
        // redirect(base_url('admin/about'),'refresh');
        //}


        //}
        //end masuk database

        

        //delete sosmed
        public function delete_sosmed($id_sosmed)
        {
        //proteksi hapus disini
        $data = array('id_sosmed' => $id_sosmed);
        $this->about_model->delete_sosmed($data);
        $this->session->set_flashdata('sukses', ' Social Media Successfully Deleted');
        redirect(base_url('masteradmin/about'),'refresh');
        }






      
}