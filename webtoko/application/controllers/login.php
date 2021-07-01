<?php
defined('BASEPATH') or exit('No direct script access allowed');
class login extends CI_Controller
{

    public function index()
    {
        $this->load->view('v_login');
    }

    public function register()
    {
        $this->load->view('v_register');
    }
}