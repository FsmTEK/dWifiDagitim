<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ilk extends CI_Controller {

	public function index()
	{
		$this->load->view('login');
	}

    public function emine()
    {
        $this->load->view('giris');
	}

    public function miyase()
    {
        $this->load->view('login');
	}
}
