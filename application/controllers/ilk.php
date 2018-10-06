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

	public function anasayfa()
    {
        $this->load->view('admin/index');
    }

    public function giris()
    {
        $kadi = $this->input->post('kadi');
        $sifre = $this->input->post('sifre');

        if ($kadi and $sifre) {
            $sorgu = $this->ilk_model->girisyap($kadi, $sifre);
            if ($sorgu->num_rows() == 1) {
                echo "Kullanıcı ADI VE SİFRE DOGRU";
                $this->load->view('admin/index.php');
            } else {
                $veri['hata'] = "Kullanıcı veya sifre yanlıs.";
                $this->load->view('login', $veri);
            }
        } else {
            $veri['hata'] = "Tüm alanları doldurun.";
            $this->load->view('login', $veri);
        }
    }

}
