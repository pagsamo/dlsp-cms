<?php


class Welcome_model extends CI_Model{

    public function __construct()
    {
        $this->load->database();
    }

    public function lister()
    {
        return $this->db->get('user')->result_array();
    }



}
//end of class