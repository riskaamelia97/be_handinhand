<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Salesforce extends CI_Controller {
        
        //load model
        public function __construct()
        {
                parent::__construct();
                $this->load->model('salesforce_model');
        }
        

        //halaman utama
	public function index()
	{
                $salesforce = $this->salesforce_model->listing_salesforce(); 
               
                $data = array('title' => 'Salesforce',
                                'salesforce' => $salesforce,
                                'isi' => 'masteradmin/salesforce/list');
                $this->load->view('masteradmin/layout/wrapper',$data, FALSE);
        }


//halaman tambah salesforce
public function tambah_salesforce()
{
        $salesforce = $this->salesforce_model->listing_salesforce();
        //validasi
        $valid = $this->form_validation;

        $valid->set_rules('deskripsi','Deskripsi','required',
        array('required' => ' Deskripsi harus diisi'));

    
        
        if ($valid->run()=== FALSE) {
                
        
        $data = array('title' => 'Add Salesforce',
                        'salesforce' => $salesforce,
                        'isi' => 'masteradmin/salesforce/tambah_salesforce');

        $this->load->view('masteradmin/layout/wrapper',$data, FALSE);
        //ga ada error, maka masuk data base
        }else {
        $i = $this->input;
        $data = array(  'deskripsi' => $i->post('deskripsi'));
        $this->salesforce_model->tambah_salesforce($data);
        $this->session->set_flashdata('sukses', ' Salesforce Successfully Added');
        redirect(base_url('masteradmin/salesforce'),'refresh');
        

}
//end masuk database
} 




        //halaman edit salesforce
       public function edit_salesforce($id_salesforce)
       {
               $salesforce = $this->salesforce_model->detail_salesforce($id_salesforce);
               
       


               //validasi
               $valid = $this->form_validation;


               $valid->set_rules('deskripsi','Deskripsi','required',
               array('required' => 'Deskripsi harus diisi'));

               
               

               if ($this->form_validation->run() == FALSE)
               {
                       $data = array('title' => 'Edit Salesforce  ',
                       'salesforce' => $salesforce,
                       'isi' => 'masteradmin/salesforce/edit_salesforce');

                       $this->load->view('masteradmin/layout/wrapper',$data, FALSE);
               }
               else
               {
                       $i = $this->input;
                       $data = array(  'id_salesforce' => $id_salesforce,
                       'deskripsi' => $i->post('deskripsi')
                       
                       );

                       $this->salesforce_model->edit_salesforce($data);
                       $this->session->set_flashdata('sukses', ' Salesforce Successfully Updated');
                       redirect(base_url('masteradmin/salesforce'),'refresh');
                       
               
               
               }
       }


           //delete salesforce
           public function delete_salesforce($id_salesforce)
           {
           //proteksi hapus disini
           $data = array('id_salesforce' => $id_salesforce);
           $this->salesforce_model->delete_salesforce($data);
           $this->session->set_flashdata('sukses', ' Salesforce Successfully Deleted');
           redirect(base_url('masteradmin/salesforce'),'refresh');
           }
  

        

      
           

}