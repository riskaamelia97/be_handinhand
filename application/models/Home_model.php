<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Home_model extends CI_Model {

        // load db
        public function __construct()
        {
        parent::__construct();
        $this->load->database();
        }

        //listing preview
        public function listing_preview()
        {
        $this->db->select('*');
        $this->db->from('tb_preview');
        $this->db->order_by('id_preview');
        $query = $this->db->get();
        return $query->result();
        }

        //listing visimisi
        public function listing_visi()
        {
        $this->db->select('*');
        $this->db->from('tb_visi');
        $this->db->order_by('id_visi');
        $query = $this->db->get();
        return $query->result();
        }

        //listing misi
        public function listing_misi()
        {
        $this->db->select('*');
        $this->db->from('tb_misi');
        $this->db->order_by('id_misi');
        $query = $this->db->get();
        return $query->result();
        }



        //detail preview
        public function detail_preview($id_preview)
        {
          $this->db->select('*');
          $this->db->from('tb_preview');
          $this->db->where('id_preview', $id_preview);
          $query = $this->db->get();
          return $query->row();
        }

        // edit preview
        public function edit_preview($data)
        {
          $this->db->where('id_preview',$data['id_preview']);
          $this->db->update('tb_preview',$data);
        }

        //detail visi
        public function detail_visi($id_visi)
        {
          $this->db->select('*');
          $this->db->from('tb_visi');
          $this->db->where('id_visi', $id_visi);
          $query = $this->db->get();
          return $query->row();
        }

         // edit visi
         public function edit_visi($data)
         {
           $this->db->where('id_visi',$data['id_visi']);
           $this->db->update('tb_visi',$data);
         }

        //detail misi
        public function detail_misi($id_misi)
        {
          $this->db->select('*');
          $this->db->from('tb_misi');
          $this->db->where('id_misi', $id_misi);
          $query = $this->db->get();
          return $query->row();
        }

        // edit misi
        public function edit_misi($data)
        {
          $this->db->where('id_misi',$data['id_misi']);
          $this->db->update('tb_misi',$data);
        }


  

  

  // ------------------------------------------------------------------------

}

/* End of file User_model.php */
/* Location: ./application/models/User_model.php */