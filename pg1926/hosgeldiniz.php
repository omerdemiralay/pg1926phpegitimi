  
<?php 

$aktif = 4;
$oturumbilgisi='';
require_once '_ayarlar.php';
if(isset($_SESSION["pg1926"]) ==false ){
    echo '<meta http-equiv="refresh" content="0";URL="girisyap.php">';
    die();
}
else {
    $oturumbilgisi =$_SESSION["pg1926"];
}

require_once '_ust_kisim.php';
require_once '_menu.php';
?>

<div class="ortakisim">
Hoşgeldin: <?php echo $oturumbilgisi["isim"]; ?> <br>
Giriş Tarihiniz:<?php echo $oturumbilgisi["girisTarihi"]; ?><br>
</div>

<?php

require_once '_alt_kisim.php';