<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 22.10.2018
 * Time: 13:20
 */
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

$sorgu = $veri->prepare("UPDATE test SET kadi = :yeni_kadi WHERE kadi = :kadi");
$guncelle = $sorgu->execute(array(
    "yeni_kadi" => "prototürk",
    "kadi" => "birisi", ));


$sorgu = $veri->prepare("INSERT INTO test SET
kadi = :kadi,
sifre = :sifre,
eposta = :eposta");
$ekle = $sorgu->execute(array(
    "sifre" => "123",
    "eposta" => "mine@gmail.com",
    "kadi" => "mine"
));
if ( $ekle ){
    $last_id = $veri->lastInsertId();
    print "insert işlemi başarılı!";
}
?>