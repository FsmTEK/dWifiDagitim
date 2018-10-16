<?php
class yeni extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('test_model');
    }

    public function index()
    {
        $this->load->view('deneme/test');
    }

    public function miyase()
    {

    }
}