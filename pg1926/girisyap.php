  
<?php 

$aktif = 4;

require_once '_ayarlar.php';

require_once '_ust_kisim.php';
require_once '_menu.php';
?>

<div class="ortakisim">
  <?php
     if(isset($_POST["pg"])){
        $kullanici = addslashes(strip_tags($_POST["kullanici_adi"]));
        $parola = addslashes(strip_tags($_POST["parola"]));
       /*
                addslashes = tırnak işlemleri için
                strip_tags = htm, js kodlarını temizlemek için
       */

       // echo "kullanıcı Adınız: " $kullanici."<br>". " parolanız:"$parola;
        

       if ($kullanici == "admin" AND md5($parola) == md5("123456")){
        $_SESSION["pg1926"]= [
            "isim"=> $kullanici,
            "girisTarihi"=> date("d.m.Y H:i:s")
        ];
        
         echo '<h4 style="color:green;">Oturum açma başarılı</h4><h5>Lütfen bekleyiniz.</h5>';
        //header("refresh:2; url:hosgeldiniz.php");
        echo '<meta http-equiv="refresh" content="2;URL=hosgeldiniz.php">';
       }
       else{
           echo '<h4 style="color:red;">Kullanıcı adınız veya parolanız hatalı</h4>';
           //header("refresh:2; url:girisyap.php");
           echo '<meta http-equiv="refresh" content="2";URL="girisyap.php">';
       }
     }
  else {

  
  ?>
   <form action="?" method="post">
        <label form="kullanici_adi">Kullanıcı Adı</label>
        <input type="text" name="kullanici_adi" id="kullanici_adi" placeholder="Kullanıcı Adınızı Yazınız" autocomplete="off">
        <label form="parola">Parola</label>
        <input type="password"  placeholder="Parolanızı yazınız" id="parola"    name="parola">
        <button type="submit" name="pg">Oturum Aç</button>
   </form>
   <?php } ?>

</div>

<?php

require_once '_alt_kisim.php';