<?php

session_start();

session_destroy();

//header("refresh:0; url:girisyap.php");
echo '<meta http-equiv="refresh" content ="0;url=girisyap.php">';