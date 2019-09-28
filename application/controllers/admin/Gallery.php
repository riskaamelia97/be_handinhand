<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends CI_Controller {

        //load model
        public function __construct()
        {
                parent::__construct();
                $this->load->model('gallery_model');
        }
        
        //halaman utama
	public function index()
	{
                $judul_event = $this->gallery_model->judul_event();
                $gallery = $this->gallery_model->listing_gallery();
                $video = $this->gallery_model->listing_video();
                $data = array('title' => 'Image Scroller',
                                'gallery' => $gallery,
                                'video' => $video,
                                'isi' => 'admin/gallery/list');
                $this->load->view('admin/layout/wrapper',$data, FALSE);
        }
        
        //halaman tambah foto
        public function tambah_foto()
        {
                
                //validasi
                $valid = $this->form_validation;

                $valid->set_rules('judul_foto','Judul Foto','required',
                array('required' => ' Judul Foto harus diisi'));

                // $valid->set_rules('deskripsi_foto','Deskripsi Foto','required',
                // array('required' => ' Deskripsi Foto harus diisi'));

              
                
                
                if ($valid->run()=== FALSE) {
                        $judul_event = $this->gallery_model->judul_event();
                
                        $data = array('title' => 'Add Photo',
                                       'judul_event' => $judul_event,
                                        'isi' => 'admin/gallery/tambah_foto');
        
                        $this->load->view('admin/layout/wrapper',$data, FALSE);
                        //ga ada error, maka masuk data base
                        }else {
                        $judul_foto = $this->input->post('judul_foto');
                        // $deskripsi_foto = $this->input->post('deskripsi_foto');
                        $tgl_upload = $this->input->post('tgl_upload');
                        $id_event = $this->input->post('id_event');
                        $foto = $_FILES['foto'];
                        if ($foto='') {} else{
                                $config['upload_path']  = './assets/upload/image';
                                $config['allowed_types'] = 'jpg|png|jpeg|gif';

                                $this->load->library('upload', $config);
                                $this->upload->initialize($config);
                                if (!$this->upload->do_upload('foto')) {
                                        echo "upload gagal"; die();
                                }else{
                                        $foto=$this->upload->data('file_name');
                                }
                       
                        }
                        $data = array(  
                                'judul_foto'    => $judul_foto,
                                // 'deskripsi_foto' => $deskripsi_foto,
                                'tgl_upload' => $tgl_upload,
                                'id_event' => $id_event,
                                'foto'  => $foto 
                                        );
                                        
                        $this->gallery_model->tambah_foto($data);
                        $this->session->set_flashdata('sukses', ' Photo Successfully Added');
                        redirect(base_url('admin/gallery'),'refresh');
                }
        //end masuk database
        }
        

        //halaman tambah video
        public function tambah_video()
        {
                 //validasi
                 $valid = $this->form_validation;

                 $valid->set_rules('judul_video','Judul Video','required',
                 array('required' => ' Judul Video harus diisi'));
 
                 $valid->set_rules('deskripsi_video','Deskripsi Video','required',
                 array('required' => ' Deskripsi Video harus diisi'));
 
               
                 
                 
                 if ($valid->run()=== FALSE) {
                         
                 
                         $data = array('title' => 'Add Video',
                                         'isi' => 'admin/gallery/tambah_video');
         
                         $this->load->view('admin/layout/wrapper',$data, FALSE);
                         //ga ada error, maka masuk data base
                         }else {
                                $judul_video = $this->input->post('judul_video');
                                $deskripsi_video = $this->input->post('deskripsi_video');
                                $tgl_upload = $this->input->post('tgl_upload');
                              

                                if (isset($_FILES['video']['name']) && $_FILES['video']['name'] != '') {
                                        unset($config);
                                        $date = date("ymd");
                                        $configVideo['upload_path'] = FCPATH .'assets/upload/video/';
                                        $configVideo['max_size'] = '60000';
                                        $configVideo['allowed_types'] = 'avi|flv|wmv|mp3|mp4|movie|vlc|3gp|webm|f4v|3g2|mov|qt|mpe|mpeg|mpg';
                                        $configVideo['overwrite'] = FALSE;
                                        $configVideo['remove_spaces'] = TRUE;
                                        $video = $date.$_FILES['video']['name'];
                                        $configVideo['file_name'] = $video;
                                        
                                        
                                        $this->load->library('upload', $configVideo);
                                        $this->upload->initialize($configVideo);
                                        if(!$this->upload->do_upload('video')) {
                                                echo "gagal"; die();
                                               //  $this->upload->display_errors();
                                        }else{
                                               $this->upload->do_upload('video');
                                           // $videoDetails = $this->upload->data();
                                           // $data['video_name']= $configVideo['file_name'];
                                          //  $data['video_detail'] = $videoDetails;
                                            //$this->load->view('movie/show', $data);
                                        }
                                
                                    }else{
                                        echo "Please select a file";
                                    }
                                  
                               
          
                         $data = array(  
                                 'judul_video'    => $judul_video,
                                 'deskripsi_video' => $deskripsi_video,
                                 'tgl_upload' => $tgl_upload,
                                 'video' => $video
                                
                                         );
                                         
                         $this->gallery_model->tambah_video($data);
                         $this->session->set_flashdata('sukses', ' Video successfully Added');
                         redirect(base_url('admin/gallery'),'refresh');
                        }
                 }
          
         //end masuk database


        //delete foto
        public function delete_foto($id_galeri)
        {
        //proteksi hapus disini
        $data = array('id_galeri' => $id_galeri);
        $this->gallery_model->delete_foto($data);
        $this->session->set_flashdata('sukses', ' Photo Successfully Deleted');
        redirect(base_url('admin/gallery'),'refresh');
        }


        //delete video
       // public function delete_vid($id_video)
    //    {
        //proteksi hapus disini
     //   $delete = $this->gallery_model->detail_vid($id_video);

      //  if ($delete) 
     //   {
      //          $this->gallery_model->delete_vid($data);
       //         $this->session->set_flashdata('sukses', ' Data telah dihapus');
         //       redirect(base_url('admin/gallery'),'refresh');
      //  }
       
      //  }
      public function delete_vid($id_video)
                {
                $this->load->model('gallery_model');

                $row = $this->gallery_model->get_by_id($id_video);

                if ($row) 
                {
                $this->gallery_model->delete_vid($id_video);  
                $this->session->set_flashdata('sukses', ' Video Successfully Deleted');
                redirect(base_url('admin/gallery'),'refresh');
                }
                
                }
        




}         


