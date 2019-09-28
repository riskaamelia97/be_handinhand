<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Gallery_model extends CI_Model {

        // load db
        public function __construct()
        {
        parent::__construct();
        $this->load->database();
        }

        //listing gallery
        public function listing_gallery()
        {
        $this->db->select('*');
        $this->db->from('tb_galeri');
        $this->db->join('tb_event', 'tb_event.id_event = tb_galeri.id_event');
        $this->db->order_by('id_galeri','DESC');
        $query = $this->db->get();
        return $query->result();
        }

        //listing video
        public function listing_video()
        {
          return $this->db->get('tb_video')->result();
        }


      //detail video
      public function get_by_id($id_video)
        {
                $this->db->where('id_video', $id_video);
                return $this->db->get('tb_video')->row();
        } 

        // tambah foto
        public function tambah_foto($data)
        {
        $this->db->insert('tb_galeri',$data);
        }

        // tambah video
        public function tambah_video($data)
        {
        $this->db->insert('tb_video',$data);
        }


        // delete foto
        public function delete_foto($data)
        {
          $this->db->where('id_galeri',$data['id_galeri']);
          $this->db->delete('tb_galeri',$data);
        }

        // delete video
        public function delete_vid($id_video)
        {
                $this->db->where('id_video', $id_video);
                $this->db->delete('tb_video');

                #contoh pake var
                #$this->db->delete($this->table);
        }

        
        //listing judul event
        public function judul_event()
        {
        $this->db->select('*');
        $this->db->from('tb_event');
        $this->db->order_by('id_event');
        $query = $this->db->get();
        return $query->result();
        }



  

  

  // ------------------------------------------------------------------------

}

/* End of file User_model.php */
/* Location: ./application/models/User_model.php */