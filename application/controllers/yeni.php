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

    public function cekme()
    {
        try {
            $veri= new PDO("mysql:host=localhost;dbname=deneme;charset=utf8", "root", "");
        } catch ( PDOException $e ){
            print $e->getMessage();
        }

        $sorgu = $veri->query("SELECT * FROM test", PDO::FETCH_ASSOC);
        if ( $sorgu->rowCount() ){
            foreach( $sorgu as $row ){
                print $row['kadi']."<br />".$row['sifre']."<br />".$row['eposta']."<br />";
            }
        }
    }

    public function guncelle()
    {
        try {
            $veri= new PDO("mysql:host=localhost;dbname=deneme;charset=utf8", "root", "");
        } catch ( PDOException $e ){
            print $e->getMessage();
        }

        $sorgu = $veri->prepare("UPDATE test SET kadi = :yeni_kadi WHERE kadi = :kadi");
        $guncelle = $sorgu->execute(array(
            "yeni_kadi" => "emooo",
            "kadi" => "emineinal", ));
        if ( $guncelle ){
            print "güncelleme başarılı!";
        }
    }

    public function ekle()
    {
        try {
            $veri= new PDO("mysql:host=localhost;dbname=deneme;charset=utf8", "root", "");
        } catch ( PDOException $e ){
            print $e->getMessage();
        }

        $sorgu = $veri->prepare("INSERT INTO test SET
        kadi = :kadi,
        sifre = :sifre,
        eposta = :eposta");
        $ekle = $sorgu->execute(array(
            "sifre" => "1234",
            "eposta" => "meyo@gmail.com",
            "kadi" => "meyoo"
        ));
        if ( $ekle ){
            $last_id = $veri->lastInsertId();
            print "insert işlemi başarılı!";
        }
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




