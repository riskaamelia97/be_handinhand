<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Event extends CI_Controller {

        //load model
        public function __construct()
        {
                parent::__construct();
                $this->load->model('event_model');
              //  $this->load->model('dropdown_model');
        }
        
        //halaman utama
	public function index()
	{
             
               // $kategori = $this->dropdown_model->listing_kategori();
	      //  $this->load->view('masteradmin/event/tambah_event', $data);
                $event = $this->event_model->listing_event();
              
                $data = array('title' => 'Event',
                               // 'kategori' => $kategori,
                                'event' => $event,
                                
                                'isi' => 'masteradmin/event/list');
                $this->load->view('masteradmin/layout/wrapper',$data, FALSE);
        }
        

        



        //halaman tambah event
        public function tambah_event()
        {
                
               // $kategori = $this->event_model->listing_kategori();
                //validasi
                $valid = $this->form_validation;

                $valid->set_rules('judul_event','Judul Event','required',
                array('required' => ' Judul Event harus diisi'));

               // $event = $this->event_model->listing_event();

           
               
                
                
                if ($valid->run()=== FALSE) {
                        
                        // $kategori = $this->event_model->listing_kategori();
                        $data = array('title' => 'Add Event',
                                        'isi' => 'masteradmin/event/tambah_event'
                                        // 'kategori' => $kategori
                                );
                                        
                        $this->load->view('masteradmin/layout/wrapper',$data, FALSE);
                        //ga ada error, maka masuk data base
                        }else {
                        //if(isset($_POST['foto_event']))
                        //$_FILES['foto_event'] = $_POST['foto_event'];
                        
                        $foto_event = $_FILES['foto_event'];
                        $judul_event = $this->input->post('judul_event');
                        $deskripsi_event = $this->input->post('deskripsi_event');
                        $tgl_event = $this->input->post('tgl_event');
                        $tgl_post = $this->input->post('tgl_post');
                        // $kategori = $this->input->post('kategori');
                        $status_event = $this->input->post('status_event');
                       
                        
                        
                        
                        if ($foto_event='') {} else{
                                $config['upload_path']  = './assets/upload/event';
                               $config['allowed_types'] = 'jpg|png|jpeg|gif';

                                $this->load->library('upload', $config);
                               $this->upload->initialize($config);
                                if (!$this->upload->do_upload('foto_event')) {
                                       echo "upload gagal"; die();
                           }else{
                                        $foto_event=$this->upload->data('file_name');
                                }
                       
                        }
                        $data = array(  
                                'judul_event'    => $judul_event,
                                'deskripsi_event' => $deskripsi_event,
                                'tgl_event' => $tgl_event,
                                'tgl_post'  => $tgl_post,
                                'status_event' => $status_event,
                                // 'kategori' => $kategori,
                                'foto_event' => $foto_event
                                
                                        );
                        
                
                
               //$kategori = $this->event_model->get_kategori(); 
               //$data['kategori'] = $this->event_model->get_kategori(); 
             //  $kategori = $this->dropdown_model->kategori();
               $this->event_model->tambah_event($data);
               $this->session->set_flashdata('sukses', ' Event Successfully Added');
                redirect(base_url('masteradmin/event'),'refresh');
                
                                }
        }
        //end masuk database

       

        //halaman edit event
        public function edit_event($id_event)
        {

        $event = $this->event_model->detail_event($id_event);

        //validasi
        $valid = $this->form_validation;

        $valid->set_rules('judul_event','Event Title','required',
        array('required' => ' Event harus diisi'));

        
        
        

        if ($this->form_validation->run() == FALSE)
        {
                // $kategori = $this->event_model->listing_kategori();
                $data = array('title' => 'Edit Event',
                'event' => $event,
                // 'kategori' => $kategori,
                'isi' => 'masteradmin/event/edit_event',
                );

                $this->load->view('masteradmin/layout/wrapper',$data, FALSE);
        }
        else
        {
                $i = $this->input;
                $data = array('id_event' => $id_event,
                                'judul_event'    => $i->post('judul_event'),
                                'deskripsi_event' => $i->post('deskripsi_event'),
                                'tgl_event' => $i->post('tgl_event'),
                                'tgl_post'  => $i->post('tgl_post'),
                                // 'kategori'  => $i->post('kategori'),
                                'status_event' => $i->post('status_event')
                
                );

                $this->event_model->edit_event($data);
                $this->session->set_flashdata('sukses', ' Contact Successfully Updated');
                redirect(base_url('masteradmin/event'),'refresh');
                
        
        
        }
        }   





         //delete event
         public function delete_event($id_event)
         {
         //proteksi hapus disini
         $data = array('id_event' => $id_event);
         $this->event_model->delete_event($data);
         $this->session->set_flashdata('sukses', ' Event Successfully Deleted');
         redirect(base_url('masteradmin/event'),'refresh');
         }
        
        

}