<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Salesforce_model extends CI_Model {

        // load db
        public function __construct()
        {
        parent::__construct();
        $this->load->database();
        }

        //listing User
        public function listing_salesforce()
        {
        $this->db->select('*');
        $this->db->from('tb_salesforce');
        $this->db->order_by('id_salesforce','DESC');
        $query = $this->db->get();
        return $query->result();
        }
  
        // tambah user
        public function tambah_salesforce($data)
        {
        $this->db->insert('tb_salesforce',$data);
        }

         //detail
        public function detail_salesforce($id_salesforce)
        {
          $this->db->select('*');
          $this->db->from('tb_salesforce');
          $this->db->where('id_salesforce', $id_salesforce);
       //   $this->db->order_by('id_salesforce','DESC');
          $query = $this->db->get();
          return $query->row();
        }
 

        // edit
        public function edit_salesforce($data)
        {
          $this->db->where('id_salesforce',$data['id_salesforce']);
          $this->db->update('tb_salesforce',$data);
        }


        // delete
        public function delete_salesforce($data)
        {
          $this->db->where('id_salesforce',$data['id_salesforce']);
          $this->db->delete('tb_salesforce',$data);
        }

        

  

  // ------------------------------------------------------------------------

}

/* End of file User_model.php */
/* Location: ./application/models/User_model.php */