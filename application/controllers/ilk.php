<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ilk extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('ilk_model');
    }
    ///

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
        $this->load->view('madmin/index');
	}
    public function anasayfa1()
    {
        $this->load->view('madmin/404');
    }
    public function giriskontrol()
    {
        $kadi = $this->input->post('kadi');
        $sifre = $this->input->post('sifre');

        if ($kadi and $sifre) {
            $sorgu = $this->ilk_model->giris($kadi, $sifre);
            if ($sorgu->num_rows() == 1) {
//                echo "Kullanıcı adı ve şifre doğru";
                $this->load->view('madmin/index');
            }else {
                $veri['hata'] = "Kullanıcı veya sifre yanlıs...";
                $this->load->view('login',$veri);
            }
        }else {
            $veri['hata'] = "Tüm alanları doldurun...";
            $this->load->view('login',$veri);
        }





    }
}
