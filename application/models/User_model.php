<?php


class User_model extends CI_Model{

    public function __construct()
    {
        $this->load->database();
    }

    public function page_list()
    {
        return $this->db->get('user')->result_array();
    }



}
//end of class