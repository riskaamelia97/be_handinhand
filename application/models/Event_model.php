<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Event_model extends CI_Model {

        // load db
        public function __construct()
        {
        parent::__construct();
        $this->load->database();
        }

        //listing event
        public function listing_event()
        {
        $this->db->select('*');
        $this->db->from('tb_event');
        $this->db->order_by('id_event','DESC');
        $query = $this->db->get();
        return $query->result();
        }

        

    

        //detail event
        public function detail_event($id_event)
        {
          $this->db->select('*');
          $this->db->from('tb_event');
          $this->db->where('id_event', $id_event);
          $query = $this->db->get();
          return $query->row();
        }

        //  //listing kategori
        //  public function listing_kategori()
        //  {
        //  $this->db->select('*');
        //  $this->db->from('tb_kategori');
        //  $this->db->order_by('id_kategori','DESC');
        //  $query = $this->db->get();
        //  return $query->result();
        //  }

        

    

        //  //detail kategori
        //  public function detail_kategori($id_kategori)
        //  {
        //    $this->db->select('*');
        //    $this->db->from('tb_kategori');
        //    $this->db->where('id_kategori', $id_kategori);
        //    $query = $this->db->get();
        //    return $query->row();
        // }


        // edit event
        public function edit_event($data)
        {
          $this->db->where('id_event',$data['id_event']);
          $this->db->update('tb_event',$data);
        }


         // tambah event
         public function tambah_event($data)
         {
         $this->db->insert('tb_event',$data);
         }

         
        // delete event
        public function delete_event($data)
        {
          $this->db->where('id_event',$data['id_event']);
          $this->db->delete('tb_event',$data);
        }



  

  

  // ------------------------------------------------------------------------

}

/* End of file User_model.php */
/* Location: ./application/models/User_model.php */