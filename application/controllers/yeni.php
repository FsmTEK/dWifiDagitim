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

    public function cicek()
    {
        $this->load->view('deneme/ilk');
    }

    public function miyase()
    {
        $sayi1 = 30;
        $sayi2 = 50;
        $sonuc = 70;

        echo "$sayi1 + $sayi2 = $sonuc";
    }

    public function deneme()
    {
        $cicek = ' papatya';
        echo "benim en sevdiğim çiçek".$cicek;
    }

    public function tekrar()
    {
        $ad = "miyase";
        $soyad = "cicek";
        $yas = "18";

        echo $ad." ".$soyad." "." ".$yas;
    }
}


//    function topla()
//    {
//        $sayı1 = 20;
//        $sayı2 = 50;
//        return $sayı1 + $sayı2;
//    }
//        $sonuc = topla();
//        echo $sonuc;
//
//    function sayi()
//    {
//        $sayi1 = 40;
//        $sayi2 = 60;
//        return $sayi1 - $sayi2;
//    }
//        $sonuc = sayi();
//        echo $sonuc;
//
//    function rakam()
//    {
//        $sayi1 = 40;
//        $sayi2 = 60;
//        return $sayi1 - $sayi2;
//    }
//    $sonuc = rakam();
//    echo $sonuc;




