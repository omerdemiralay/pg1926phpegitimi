<?php
session_start();

if(isset($_SESSION["pg1926"])== FALSE){
    $menuekle = [
        ["link" => "girisyap.php","buttonAdi"=>"Giriş Yap"]
    ];
}
    else{
    $menuekle = [
        ["link"=>"hosgeldiniz.php","buttonAdi"=>"Size Özel"],
        ["link"=>"cikisyap.php","buttonAdi"=>"Çıkış Yap"]
    ] ;
} 

$menu = [
    ["link" => "index.php", "buttonAdi" => "Anasayfa"],
    ["link" => "hakkimizda.php", "buttonAdi" => "Hakkımızda"],
    ["link" => "iletisim.php", "buttonAdi" => "İletişim"],
];


$veriler = [
    "menu" => array_merge($menu, $menuekle),
    "altkisim" => "Tüm hakları saklıdır. 2020 - " . date("Y")
];
