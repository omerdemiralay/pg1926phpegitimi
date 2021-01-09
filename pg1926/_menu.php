<?php




?>
<ul class="menu">
    <?php
    $i=1;
    foreach ($veriler["menu"] as $anahtar => $yaz) {
        if ($aktif == $i) {
            $aktifsayfa = 'class="aktif"';
        } 
        else {
            $aktifsayfa = '';
        }
    ?>

        <li>
            <a href=" <?php echo $yaz["link"]; ?>" <?php echo $aktifsayfa; ?>>
                <?php echo $yaz["buttonAdi"]; ?>
            </a>
        </li>
    <?php $i++; } ?>

 
</ul>