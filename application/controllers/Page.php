<?php

class Page extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->model('page_model');
    }


    public function update()
    {
        $this->load->view('templates/header');
        $this->load->view('page/update');
        $this->load->view('templates/footer');
    }


}