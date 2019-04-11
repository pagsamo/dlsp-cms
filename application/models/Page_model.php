<?php


class Page_model extends CI_Model{

    public function __construct()
    {
        $this->load->database();
    }

    public function page_list()
    {
        return $this->db->get('page')->result_array();
    }



}
//end of class