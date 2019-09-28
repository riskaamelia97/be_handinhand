<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
        
        //load model
        public function __construct()
        {
                parent::__construct();
                $this->load->model('home_model');
        }
        

        //halaman utama
	public function index()
	{
                $preview = $this->home_model->listing_preview(); 
                $visi = $this->home_model->listing_visi();
                $misi = $this->home_model->listing_misi();  
                $data = array('title' => 'Home',
                                'preview' => $preview,
                                'visi' => $visi,
                                'misi' => $misi,
                                'isi' => 'admin/home/list');
                $this->load->view('admin/layout/wrapper',$data, FALSE);
        }


        //halaman edit preview	
        public function edit_preview($id_preview)
        {
                $preview = $this->home_model->detail_preview($id_preview);
                
        


                //validasi
                $valid = $this->form_validation;


                $valid->set_rules('konten_prev','Konten Preview','required',
                array('required' => 'Preview harus diisi'));
        
                

                if ($this->form_validation->run() == FALSE)
                {
                        $data = array('title' => 'Edit Preview ',
                        'preview' => $preview,
                        'isi' => 'admin/home/edit_preview');

                        $this->load->view('admin/layout/wrapper',$data, FALSE);
                }
                else
                {
                        $i = $this->input;
                        $data = array(  'id_preview' => $id_preview,
                        'konten_prev' => $i->post('konten_prev'),
                        
                        );

                        $this->home_model->edit_preview($data);
                        $this->session->set_flashdata('sukses', ' Preview Successfully Updated');
                        redirect(base_url('admin/home'),'refresh');
                        
                
                
                }
        }   

        //halaman edit visi
        public function edit_visi($id_visi)
        {
                $visi = $this->home_model->detail_visi($id_visi);
                
        


                //validasi
                $valid = $this->form_validation;


                $valid->set_rules('visi','Visi','required',
                array('required' => 'Visi harus diisi'));

                
                

                if ($this->form_validation->run() == FALSE)
                {
                        $data = array('title' => 'Edit Vision  ',
                        'visi' => $visi,
                        'isi' => 'admin/home/edit_visi');

                        $this->load->view('admin/layout/wrapper',$data, FALSE);
                }
                else
                {
                        $i = $this->input;
                        $data = array(  'id_visi' => $id_visi,
                        'visi' => $i->post('visi')
                        
                        );

                        $this->home_model->edit_visi($data);
                        $this->session->set_flashdata('sukses', ' Vision Successfully Updated');
                        redirect(base_url('admin/home'),'refresh');
                        
                
                
                }
        }   

        //halaman edit misi
        public function edit_misi($id_misi)
        {
                $misi = $this->home_model->detail_misi($id_misi);
                
        


                //validasi
                $valid = $this->form_validation;


                $valid->set_rules('misi','Misi','required',
                array('required' => 'misi harus diisi'));

                
                

                if ($this->form_validation->run() == FALSE)
                {
                        $data = array('title' => 'Edit Mission  ',
                        'misi' => $misi,
                        'isi' => 'admin/home/edit_misi');

                        $this->load->view('admin/layout/wrapper',$data, FALSE);
                }
                else
                {
                        $i = $this->input;
                        $data = array(  'id_misi' => $id_misi,
                        'misi' => $i->post('misi')
                        
                        );

                        $this->home_model->edit_misi($data);
                        $this->session->set_flashdata('sukses', ' Mission Successfully Updated');
                        redirect(base_url('admin/home'),'refresh');
                        
                
                
                }
        } 
                
        



      
           

}