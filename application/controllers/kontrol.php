<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 3.10.2018
 * Time: 17:31
 */
class kontrol extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $miem=array(
            'adi'=>'Emine',
            'kedi'=>'kablolu',
        );
        $this->load->view('gorunum',$miem);
    }

    public function kontrolegit()
    {
        echo "Geldin Miyase";

    }



}