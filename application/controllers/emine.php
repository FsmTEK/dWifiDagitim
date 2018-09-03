<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 3.9.2018
 * Time: 13:24
 */
class emine extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('giris');
    }
}