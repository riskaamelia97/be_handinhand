<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class About_model extends CI_Model {

        // load db
        public function __construct()
        {
        parent::__construct();
        $this->load->database();
        }

        //listing sejarah
        public function listing_sejarah()
        {
        $this->db->select('*');
        $this->db->from('tb_sejarah');
        $this->db->order_by('id_sejarah','DESC');
        $query = $this->db->get();
        return $query->result();
        }

        //listing kontak
        public function listing_kontak()
        {
        $this->db->select('*');
        $this->db->from('tb_kontak');
        $this->db->order_by('id_kontak','DESC');
        $query = $this->db->get();
        return $query->result();
        }

        //listing sosmed
        public function listing_sosmed()
        {
        $this->db->select('*');
        $this->db->from('tb_sosmed');
        $this->db->order_by('id_sosmed','DESC');
        $query = $this->db->get();
        return $query->result();
        }

        //detail sejarah
        public function detail_sejarah($id_sejarah)
        {
          $this->db->select('*');
          $this->db->from('tb_sejarah');
          $this->db->where('id_sejarah', $id_sejarah);
          $query = $this->db->get();
          return $query->row();
        }

          // edit sejarah
          public function edit_sejarah($data)
          {
            $this->db->where('id_sejarah',$data['id_sejarah']);
            $this->db->update('tb_sejarah',$data);
          }

          // tambah kontak
          public function tambah_kontak($data)
          {
          $this->db->insert('tb_kontak',$data);
          }

          //detail kontak
          public function detail_kontak($id_kontak)
          {
            $this->db->select('*');
            $this->db->from('tb_kontak');
            $this->db->where('id_kontak', $id_kontak);
            $this->db->order_by('id_kontak','DESC');
            $query = $this->db->get();
            return $query->row();
          }

             // edit kontak
          public function edit_kontak($data)
          {
            $this->db->where('id_kontak',$data['id_kontak']);
            $this->db->update('tb_kontak',$data);
          }

            // delete kontak
          public function delete_kontak($data)
          {
            $this->db->where('id_kontak',$data['id_kontak']);
            $this->db->delete('tb_kontak',$data);
          }

          //tambah sosmed
        public function tambah_sosmed($data)
        {
        $this->db->insert('tb_sosmed',$data);
        }

          //detail sosmed
          public function detail_sosmed($id_sosmed)
          {
            $this->db->select('*');
            $this->db->from('tb_sosmed');
            $this->db->where('id_sosmed', $id_sosmed);
            $this->db->order_by('id_sosmed','DESC');
            $query = $this->db->get();
            return $query->row();
          }

           // edit sosmed
        //  public function edit_sosmed($data)
       //   {
        //    $this->db->where('id_sosmed',$data['id_sosmed']);
       //     $this->db->update('tb_sosmed',$data);
       //   }

          
          // delete sosmed
          public function delete_sosmed($data)
          {
            $this->db->where('id_sosmed',$data['id_sosmed']);
            $this->db->delete('tb_sosmed',$data);
          }

  

  

  // ------------------------------------------------------------------------

}

/* End of file User_model.php */
/* Location: ./application/models/User_model.php */