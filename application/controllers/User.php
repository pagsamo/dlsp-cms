<?php

class User extends CI_Controller{



    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->model('user_model');
    }


    public function login()
    {
        $this->load->view('templates/header');
        $this->load->view('user/login');
        $this->load->view('templates/footer');
    }


    public function register()
    {
        $this->load->view('templates/header');
        $this->load->view('user/register');
        $this->load->view('templates/footer');
    }


} //end user class