<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ilk extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ilkmodel');
    }

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

	public function anasayfa()
    {
        $this->load->view('eadmin/index');
    }

    public function giriskontrol()
    {
        $kadi = $this->input->post('kadi');
        $sifre = $this->input->post('sifre');

        if ($kadi and $sifre) {
            $sorgu = $this->ilkmodel->girisyap($kadi, $sifre);
            if ($sorgu->num_rows() == 1) {
                echo "Kullanıcı ADI VE SİFRE DOGRU";
                $this->load->view('eadmin/index.php');
            } else {
                $veri['hata'] = "Kullanıcı veya sifre yanlıs.";
                $this->load->view('giris', $veri);
            }
        } else {
            $veri['hata'] = "Tüm alanları doldurun.";
            $this->load->view('giris', $veri);
        }
    }

}
