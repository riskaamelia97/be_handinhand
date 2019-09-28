<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class User_model extends CI_Model {

        // load db
        public function __construct()
        {
        parent::__construct();
        $this->load->database();
        }

        //listing User
        public function listing_User()
        {
        $this->db->select('*');
        $this->db->from('tb_user');
        $this->db->order_by('id_user','DESC');
        $query = $this->db->get();
        return $query->result();
        }
  
        // tambah user
        public function tambah_user($data)
        {
        $this->db->insert('tb_user',$data);
        }

         //detail
        public function detail_user($id_user)
        {
          $this->db->select('*');
          $this->db->from('tb_user');
          $this->db->where('id_user', $id_user);
          $this->db->order_by('id_user','DESC');
          $query = $this->db->get();
          return $query->row();
        }
 
        //login
      //  public function login($username,$password)
       // {
         // $this->db->select('*');
          //$this->db->from('tb_user');
          //$this->db->where(array('username' => $username,
          //                  'password' => sha1($password)));                       
         // $query = $this->db->get();
          //return $query->row();
        //}

        

       


        // edit
        public function edit_user($data)
        {
          $this->db->where('id_user',$data['id_user']);
          $this->db->update('tb_user',$data);
        }

       // public function cek_user($data) {

        //  $query = $this->db->get_where('tb_user', $data);
       //   return $query;
       // }
    
         //login
       public function cek_user($username,$password)
        {
          $this->db->select('*');
          $this->db->from('tb_user');
          $this->db->where(array('username' => $username,
                            'password' => md5($password)));                       
          $query = $this->db->get();
          return $query;
        }

        // delete
        public function delete_user($data)
        {
          $this->db->where('id_user',$data['id_user']);
          $this->db->delete('tb_user',$data);
        }

        

  

  // ------------------------------------------------------------------------

}

/* End of file User_model.php */
/* Location: ./application/models/User_model.php */